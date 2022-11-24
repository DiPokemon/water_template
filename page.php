<?php get_header(); ?>

<?php while (have_posts()) : the_post();
    $image_id = get_post_thumbnail_id();
    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
    $image_title = get_the_title($image_id);
    
?>        
            <section class="page_header">
                <div class="container">
                    <h1 itemprop="headline" class="page-header__title"><?php the_title(); ?></h1>       
                    <?php if ( function_exists( 'water_breadcrumbs' ) ) water_breadcrumbs(); ?>                      
                </div>                
            </section>

            <section>
                <div class="container text_page">
                    <div class="post_top-wrapper">
                        <div class="post_img">
                            <img loading="lazy" src="<?php the_post_thumbnail_url('full') ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>"> 
                        </div>                                               
                        <div class="post_text-top">
                            <?php the_field('top_right_text') ?>
                        </div>
                    </div>   
                </div>
            </section>

            <section>
                <div class="container text_page">
                    <div itemprop="articleBody" class="post_top-text">
                        <?php the_content(); ?>
                    </div>   
                </div>
            </section>

            <section class="yellow">
                <div class="yellow_bg">
                    <div class="container">
                        <div class="yellow_bg-wrapper">
                            <div class="section_title">
                                <h2>Оставить заявку</h2>
                            </div>
                            <div class="order_wrapper">
                                <div class="order_column half_column">
                                    <p>Прием заявок по телефону — ежедневно с 8:00 до 20:00</p>
                                    <p>Онлайн-заявки — круглосуточно</p>
                                    <p>Работа метролога осуществляется с 8:00 до 18:00</p>
                                    <p><a href="mailto:info@поверка-воды.рф">info@поверка-воды.рф</a></p>
                                    <p><a href="tel:+79001280404">+7 (900) 128-04-04</a></p>
                                    <p><a href="tel:+79001281414">+7 (900) 128-14-14</a></p>
                                    <div class="social_contacts">
                                        <a class="social_contacts-item" href="https://wa.clck.bar/79001281414">
                                            <i aria-hidden="true" class="fab fa-whatsapp"></i>
                                        </a>
                                        <a class="social_contacts-item" href="https://t.me/gsi_poverka">
                                            <i aria-hidden="true" class="fab fa-telegram"></i>
                                        </a>
                                        <a class="social_contacts-item" href="https://wa.clck.bar/79001280404">
                                            <i aria-hidden="true" class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>  
                                <div class="order_column half_column">
                                    Форма связи
                                </div>      
                            </div>                
                        </div>
                    </div>
                </div> 
            </section>

            <section>
                <div class="container text_page">
                    <div  class="post_top-text">                       
                        <?php
                        $images = get_field('post_gallery'); 
                        if( $images ): ?>
                            <div class="post_gallery-slider">
                                <?php foreach( $images as $image ): ?>
                                    <div class="post_gallery-item">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />  
                                    </div>
                                <?php endforeach; ?>
                            </div>                            
                        <?php endif; ?>

                        <div itemprop="articleBody" class="post_bottom-text"><?php the_field('bottom_text') ?></div>
                    </div>   
                </div>
            </section>           

            <!-- SchemaOrg  -->
            <meta itemprop="author" content="Городская служба измерений">
            <meta itemprop="datePublished" content="<?php echo get_the_date('j.m.Y'); ?>">
            <meta itemprop="dateModified" content="<?php the_modified_time('j.m.Y');?>">
            <meta itemprop="image" content="<?php the_post_thumbnail_url('full') ?>">
            <meta itemprop="articleSection" content="<? $category = get_the_category(); echo $category[0]->name;?> ">

            <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <link itemprop="url" href="https://поверка-воды.рф/">
                <meta itemprop="name" content="Городская служба измерений">
                <meta itemprop="description" content="Поверка счетчиков воды в Ростове-на-Дону">
                <meta itemprop="address" content="Ростов-на-Дону, проспект 40-летия Победы, 328/1">
                <meta itemprop="telephone" content="+79001280404">
                <!-- <div itemprop="logo" itemscope itemtype="https://www.schema.org/ImageObject">
                    <link itemprop="url" href="https://topland-rnd.ru/wp-content/uploads/2022/10/logo_min.png">
                    <link itemprop="contentUrl" href="https://topland-rnd.ru/wp-content/uploads/2022/10/logo_min.png">
		        </div> -->
	        </div>

        </div>

<?php endwhile; ?>

<?php get_footer(); ?>