<?php
/*
Template Name: Form Page
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="row add-both">
      <div class="medium-12 large-6 columns">
        <?php the_content(''); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>