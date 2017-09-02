<?php
/*
    Template Name: Home Page
 */



get_header(); ?>

<?php get_template_part('template-parts/content', 'hero'); ?>

<?php get_template_part('template-parts/content', 'optin'); ?>

<?php get_template_part('template-parts/content', 'income'); ?>

<?php get_template_part('template-parts/content', 'benefits'); ?>

<?php get_template_part('template-parts/content', 'course'); ?>

<?php get_template_part('template-parts/content', 'project'); ?>

<?php get_template_part('template-parts/content', 'video'); ?>

<?php get_template_part('template-parts/content', 'instructor'); ?>

<?php get_template_part('template-parts/content', 'testimonial'); ?>

<?php get_footer();
