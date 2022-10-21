<?php
/*
Template Name: Simple with Form Page
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <div class="row add-top">
      <div class="main medium-7 large-7 columns add-bottom">
        <div class="breadcrumbs">
          <p><?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?></p>
        </div>

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(''); ?>
        <?php endwhile; endif; ?>
      </div>
      <div class="medium-4 medium-offset-1 large-4 large-offset-1 columns add-bottom leads">
        <h2>How can we help?</h2>
        <?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true]"); ?>
      </div>
    </div>

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