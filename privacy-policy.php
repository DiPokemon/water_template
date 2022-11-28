<?php get_header(); ?>

            <section class="page_header">
                <div class="container">
                    <h1 itemprop="headline" class="page-header__title"><?php the_title(); ?></h1>       
                    <?php if ( function_exists( 'water_breadcrumbs' ) ) water_breadcrumbs(); ?>                      
                </div>                
            </section>


            <section>
                <div class="container text_page">
                    <div class="post_top-text">
                        <?php the_content(); ?>
                    </div>   
                </div>
            </section>
<?php get_footer(); ?>