<?php
get_header();
$portfolio_cat_title1 = get_theme_mod('porfolio_category_page_title', __('Portfolio Category Title', 'busicare-plus'));
$portfolio_cat_desc = get_theme_mod('porfolio_category_page_desc', __('Morbi facilisis, ipsum ut ullamcorper venenatis, nisi diam placerat turpis, at auctor nisi magna cursus arcu.', 'busicare-plus'));
$portfolio_cat_column_layout = get_theme_mod('portfolio_cat_column_layout', 3);
?>
<section class="section-space-page portfolio portfoliocat">
    <div class="container<?php echo busicare_container();?>">
        <?php if (!empty($portfolio_cat_title1) || !empty($portfolio_cat_desc)): ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="section-header text-center">
                        <?php if (!empty($portfolio_cat_title1)) :?><h2 class="section-title"><?php echo $portfolio_cat_title1; ?></h2>
                        <div class="title_seprater"></div><?php endif;?>
                        <?php if (!empty($portfolio_cat_desc)) :?><h5 class="section-subtitle"><?php echo $portfolio_cat_desc; ?></h5><?php endif;?>
                    </div>
                </div>
            <?php endif; ?>

            <div id="content" class="tab-content" role="tablist">
                <?php
                $norecord = 0;
                $args = array(
                    'post_status' => 'publish');
                $portfolio_query = null;
                $portfolio_query = new WP_Query($args);
                if (have_posts()):
                    ?>

                    <div class="row">
                        <?php
                        while (have_posts()) : the_post();
                            $portfolio_target = sanitize_text_field(get_post_meta(get_the_ID(), 'portfolio_target', true));
                            $portfolio_sub_title = sanitize_text_field(get_post_meta(get_the_ID(), 'portfolio_sub_title', true));
                            $portfolio_title_description = sanitize_text_field(get_post_meta(get_the_ID(), 'portfolio_title_description', true));
                            if (get_post_meta(get_the_ID(), 'portfolio_link', true)) {
                                $portfolio_link = get_post_meta(get_the_ID(), 'portfolio_link', true);
                            } else {
                                $portfolio_link = '';
                            }

                            $class = '';

                            if ($portfolio_cat_column_layout == 2) {
                                $class = 'col-lg-6 col-md-6 col-sm-12';
                            }

                            if ($portfolio_cat_column_layout == 3) {
                                $class = 'col-lg-4 col-md-4 col-sm-12';
                            }

                            if ($portfolio_cat_column_layout == 4) {
                                $class = 'col-lg-3 col-md-3 col-sm-12';
                            }

                            echo '<div class="' . $class . '">';
                            ?>
                            <article class="post">
                                <figure class="portfolio-thumbnail">
                                    <?php
                                    if ($portfolio_cat_column_layout == 2) {
                                        the_post_thumbnail('full', array('class' => 'img-fluid'));
                                    }
                                    ?>

                                    <?php
                                    if ($portfolio_cat_column_layout == 3) {
                                        the_post_thumbnail('full', array('class' => 'img-fluid'));
                                    }
                                    ?>

                                    <?php
                                    if ($portfolio_cat_column_layout == 4) {
                                        the_post_thumbnail('full', array('class' => 'img-fluid'));
                                    }

                                    if (has_post_thumbnail()) {
                                        $post_thumbnail_id = get_post_thumbnail_id();
                                        $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                                    }
                                    ?>

                                    <div class="click-view">
                                        <div class="view-content">
                                            <a href="<?php echo $post_thumbnail_url; ?>" data-lightbox="image" title="<?php echo the_title(); ?>" class="mr-2"><i class="plus fa fa-picture-o"></i></a>
                                            <?php if (!empty($portfolio_link)) { ?>
                                                <a href="<?php echo $portfolio_link; ?>" <?php
                                                if (!empty($portfolio_target)) {
                                                    echo 'target="_blank"';
                                                }
                                                ?> ><i class="plus fa fa-link"></i></a>
                                               <?php } ?>
                                        </div>
                                    </div>
                                </figure>   
                                <figcaption>
                                    <h4 class="portfolio_title"><?php echo the_title(); ?></h4>
                                </figcaption>
                            </article>
                            <?php echo '</div>'; ?>
                            <?php
                        endwhile;
                        $norecord = 1;

                        wp_reset_query();
                        ?>                                  
                    </div>
                <?php endif; ?>
            </div>
        </div>      
</section>
<?php get_footer(); ?>