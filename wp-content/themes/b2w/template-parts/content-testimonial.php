<?php

$testimonial = get_field('testimonial');
?>

<!--TESTIMONIALS
============================================= -->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $testimonial; ?></h2>

                <!--testimonial-->
                <div class="row testimonial">

                    <?php
                    $loop = new WP_Query(array('post_type' => 'testimonials', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                    <?php while ($loop ->have_posts()) : $loop ->the_post(); ?>
                        <div class="col-sm-4">
                            <?php
                            if (has_post_thumbnail()){
                                the_post_thumbnail(array(200, 200));
                            }
                            ?>
                        </div>  <!--col-->
                        <div class="col-sm-8">
                            <blockquote>
                                <?php the_content(); ?>
                                <cite>&mdash; <?php the_title(); ?></cite>
                            </blockquote>
                        </div>  <!--col-->
                    <?php endwhile; ?>

                </div>  <!--row-->
            </div>  <!--col-->
        </div>  <!--row-->
    </div>  <!--container-->
</section>  <!--kudos-->
