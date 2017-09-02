<?php
//custom fields is in screen options at top of page in wp dashboard

//Custom Fields Variables
//https://developer.wordpress.org/reference/functions/get_post_meta/
//post_id is first argument of get_post_meta, and it is seen at url of the page for each page
$prelaunch_price = get_post_meta(9, 'prelaunch_price', true);
$launch_price = get_post_meta(9, 'launch_price', true);
$final_price = get_post_meta(9, 'final_price', true);
?>
<!--BANNER
============================================= -->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-5">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">
                </div> <!--col -->

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name') ?></h1>
                    <!--name of website change it in general options site title-->
                    <p class="lead"><?php bloginfo('description') ?></p>
                    <!--desc of website change it in general options tagline-->
                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                            <span><?php echo $prelaunch_price; ?></span>
                        </div> <!--price -->
                        <div class="price">
                            <h4>Launch Price <small>Ends soon!</small></h4>
                            <span><?php echo $launch_price; ?></span>
                        </div> <!--price -->
                        <div class="price">
                            <h4>Final Price <small>Ends soon!</small></h4>
                            <span><?php echo $final_price; ?></span>
                        </div> <!--price -->
                    </div> <!--price timeline -->

                    <p><a class="btn btn-lg btn-danger" href="/" role="button">Enroll now &raquo;</a></p>
                </div> <!--col -->
            </div> <!--row -->
        </div> <!--container-->
    </article>
</section> <!--hero-->