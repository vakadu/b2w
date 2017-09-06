<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bootstrap2wordpress
 */

get_header(); ?>

    <!-- FEATURE IMAGE
    ================================================== -->
    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1 class="page-title">That page can't be found</h1>
    </section>

	<div class="container">
        <div id="primary" class="row">
            <main id="content" class="col-sm-8">
                <div class="error-404 not-found">
                    <div class="page-content">
                        <h2>Don't fret! Lets get you back on track</h2>

                        <!-- Resources
                        ================================================== -->
                        <h2>Resources</h2>
                        <p>Perhaps you were looking for a specific resource ?</p>
                        <div class="resource-row clearfix">

                            <?php $loop = new WP_Query(array('post_type' => 'post_resources', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

                            <?php while ($loop ->have_posts()) : $loop ->the_post(); ?>
                                <?php
                                $resource_image = get_field('resource_image');
                                $resource_url = get_field('resource_url');
                                $button_text = get_field('button_text');
                                ?>

                                <div class="resource">
                                    <img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>">
                                    <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
                                    <?php the_excerpt(); ?>
                                    <?php if (!empty($button_text)) : ?>
                                        <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
                                    <?php endif; ?>
                                </div> <!-- resource-->

                            <?php endwhile; ?>

                        </div> <!-- resource-row -->

                        <!-- Categories
                        ================================================== -->
                        <h3>Categories</h3>
                        <p>... or maybe a popular category ?</p>
                        <div class="widget widget-categories">
                            <h4 class="widget-title">Most used Categories</h4>
                            <ul>
                                <?php
                                wp_list_categories(array(
                                        'orderby'    => 'count',
                                        'order'      => 'DESC',
                                        'show_count' => 1,
                                        'title_li'   => '',
                                        'number'     => 10
                                ));
                                ?>
                            </ul>
                        </div>

                        <!-- Archives
                        ================================================== -->
                        <h3>Archives</h3>
                        <p>You can always sort through our archives ...</p>
                        <?php the_widget('WP_Widget_Archives', 'title= Our Archives', 'before_title=<h4 class="widget-title">&after_title=</h4>'); ?>
                        <p>..or, just head back to the <a href="<?php echo esc_url(home_url('/')); ?>">Home Page</a> </p>
                    </div>
                </div>
            </main>

            <aside class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>

        </div>
    </div>

<?php
get_footer();
