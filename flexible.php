<?php
/*
Template Name: Drag and Drop Page
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="row add-both">
      <div class="large-12 columns">
        <?php the_content(''); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>

    <div class="grey">
      <div class="row">
        <div class="large-12 columns">
          <div class="call">
            <?php the_field('cta', 6); ?>
            <a class="hero-apply" href="<?php the_field('cta-button-url', 6); ?>"><?php the_field('cta-button-text', 6); ?> <span><?php the_field('cta-additional-button-text', 6); ?></span></a>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>