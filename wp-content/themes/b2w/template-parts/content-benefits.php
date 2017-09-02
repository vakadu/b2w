<?php

$course_image = get_field('course_image');
$course_title = get_field('course_title');
$course_desc = get_field('course_desc');
?>

<!--WHO BENEFITS
============================================= -->
<section id="who-benefits">
    <div class="container">
        <div class="section-header">
            <!--If user uploaded image-->
            <?php if (!empty($course_image)) : ?>

                <img src="<?php echo $course_image['url']; ?>" alt="<?php echo $course_image['alt']; ?>">

            <?php endif; ?>
            <h2><?php echo $course_title; ?></h2>
        </div> <!--section-header-->
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <?php echo $course_desc; ?>
            </div> <!--col-->
        </div> <!--row-->
    </div> <!--container-->
</section> <!--who-benefits-->
