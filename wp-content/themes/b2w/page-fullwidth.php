<?php

/*Template Name: Full Width Template*/

get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post ->ID));

?>

<!-- FEATURE IMAGE
================================================== -->
<?php if (has_post_thumbnail()) { ?>

    <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover" data-type="background" data-speed="2">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section>

<?php } else { ?>

    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section>

<?php } ?>


<!-- MAIN CONTENT
================================================== -->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">

                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>

            </section> <!-- main-content -->
        </div> <!-- end col -->
    </div> <!-- row-->
</div> <!-- container -->

<?php get_footer(); ?>

<!--Contact form for contact form7 in WP
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="sr-only" for="contact-name">Name</label>
            [text* your-name class:form-control class:input-lg id:contact-name placeholder "Your Name"]
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="sr-only" for="contact-email">Email</label>
            [email* your-email class:form-control class:input-lg id:contact-email placeholder "Your Email"]
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label class="sr-only" for="contact-subject">Subject</label>
            [text* your-subject class:form-control class:input-lg id:contact-subject placeholder "Your Subject"]
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label class="sr-only" for="contact-words">Message</label>
            [text* your-message class:form-control class:input-lg id:contact-message x3 placeholder "Your Message"]
        </div>
    </div>
</div>
[submit class:btn class:btn-info class:btn-lg class:pull-right "Get in touch &raquo;"]

-->
