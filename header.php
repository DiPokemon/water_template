<!DOCTYPE html>
<html lang="ru">
    <head itemscope itemtype="http://schema.org/WPHeader">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Roboto+Slab&family=Roboto:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
        <?php wp_head();?>
    </head>

    <body>
        <header>            
                <div class="header_top">       
                    <div class="container">
                        <div class="header_wrapper">
                            <div class="header_left">
                                <div class="header_info-item">
                                    <a href="mailto:info@поверка-воды.рф">info@поверка-воды.рф</a>
                                </div>
                                <div class="header_info-item">
                                    <p>Без выходных с 8:00 до 20:00 | Прием онлайн заявок: 24/7</p> 
                                </div>                                
                            </div>
                            <div class="header_right">
                                <div class="header_tel">
                                    <a href="tel:+79001280404">+7 (900) 128-04-04</a>
                                </div>
                                <div class="header_tel">
                                    <a href="tel:+79001281414">+7 (900) 128-14-14</a>
                                </div>
                            </div>  
                        </div>
                        <div class="header_top-mobile">
                            <div class="header_left logo_text">Городская служба измерений</div>
                            <div class="header_right">
                                <a class="social_contacts-item" href="https://wa.clck.bar/79001281414">
                                    <i aria-hidden="true" class="fab fa-whatsapp"></i>
                                </a>
                                <a class="social_contacts-item" href="https://t.me/gsi_poverka">
                                    <i aria-hidden="true" class="fab fa-telegram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header_bottom">   
                    <div class="container">
                        <div class="header_wrapper">
                            <div class="header_left">
                                <div class="logo_img"><?php the_custom_logo() ?></div>
                                <div class="logo_text">Городская служба измерений</div>  
                            </div>

                            <div class="header_right">
                                <div class="header__burger">
                                    <span></span>
                                </div>
                                <?php
                                    $args = array(
                                    'container'       => 'nav',          
                                    'container_class' => 'header__menu menu',           
                                    'menu_class'      => 'menu__list',          
                                    'fallback_cb'     => 'wp_page_menu',            
                                    'link_class'     => 'menu__link',           
                                    'theme_location'  => 'main_menu',
                                    'add_li_class'    => 'menu__item',
                                    'container_atts'  => array(
                                        'role'      => 'navigation',
                                        'itemscope' => '',
                                        'itemtype'  => 'http://schema.org/SiteNavigationElement',
                                    ),     
                                    'items_wrap'  => '<ul itemprop="about" itemscope="" itemtype="http://schema.org/ItemList" id="%1$s" class="%2$s">%3$s</ul>',
                                    'echo'          => false,               
                                    );
                                    $temp_menu = wp_nav_menu($args);
                                    $temp_menu = str_replace('<a', '<a itemprop="url" ', $temp_menu);
                                    $temp_menu = str_replace('<li', '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList" ', $temp_menu);
                                    $temp_menu = str_replace('<ul class="sub-menu"', '<ul class="sub-menu" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList"', $temp_menu);
                                    preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matchesz);
                                    foreach($matchesz[0] as $value){
                                    if(strpos($value, "<span") === false){
                                        $temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);

                                        $temp_menu = str_replace($value, $temp_value, $temp_menu);
                                    }else{
                                        $temp_value = str_replace("<span", "<span itemprop='name'", $value);

                                        $temp_menu = str_replace($value, $temp_value, $temp_menu);
                                    }
                                    }
                                    echo $temp_menu;
                                ?>
                            </div>
                        </div>               
                    </div>    
                </div>                          
        </header>
    
        <main>