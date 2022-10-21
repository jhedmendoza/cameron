<?php
/*
Template Name: People
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <?php if( have_rows('rows') ): ?>
    <?php while( have_rows('rows') ): the_row();  ?>
    <div class="row add-both">
      <div class="medium-6 large-6 columns right-column">
        <div class="image">
          <?php $image = get_sub_field('row-image'); if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="medium-6 large-6 columns">
        <div class="paragraph">
          <?php the_sub_field('row-paragraph'); ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

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