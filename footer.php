        </main>
        
        <footer>
          <div class="footer-top">
             <div class="container">
                <div class="tag_slider">
                  <?php do_shortcode('[topland_cloudtag]'); ?>
                </div>
                <div class="footer_body">
                <div class="logo_img"><?php the_custom_logo() ?></div>
                  <?php
                    $args = array(
                    'container'       => 'nav',          
                    'container_class' => 'footer__menu menu',           
                    'menu_class'      => 'menu__list',          
                    'fallback_cb'     => 'wp_page_menu',            
                    'link_class'     => 'menu__link',           
                    'theme_location'  => 'footer_menu',
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
                  <div class="footer-top__telefon">
                    <div class="footer_tel">
                      <a href="tel:+79001280404">+7 (900) 128-04-04</a>
                    </div>
                    <div class="footer_tel">
                      <a href="tel:+79001281414">+7 (900) 128-14-14</a>
                    </div>
                  </div>
                </div>
                <div class="footer_body display_mobile">
                  <?php echo $temp_menu;?>
                </div>
              </div>
          </div>
          <div class="footer-bottom">
             <div class="container">
                <div class="footer_body">
                  <span>© 2020. ИП Григорьянц Александр Георгиевич</span>
                  <a href="/privacy-policy/">Политика конфиденциальности</a>
                </div>
            </div>  
          </div>
        </footer>
        <div class="ads_block-desktop">
          <!-- Yandex.RTB R-A-2076247-1 -->
          <div id="yandex_rtb_R-A-2076247-1"></div>
          <script>window.yaContextCb.push(()=>{
            Ya.Context.AdvManager.render({
              renderTo: 'yandex_rtb_R-A-2076247-1',
              blockId: 'R-A-2076247-1'
            })
          })</script>          
        </div>
        <div class="ads_block-mobile">
          <!-- Yandex.RTB R-A-2076247-2 -->
          <div id="yandex_rtb_R-A-2076247-2"></div>
          <script>window.yaContextCb.push(()=>{
            Ya.Context.AdvManager.render({
              renderTo: 'yandex_rtb_R-A-2076247-2',
              blockId: 'R-A-2076247-2'
            })
          })</script>
        </div>

    </body>
</html>

<?php wp_footer(); ?>