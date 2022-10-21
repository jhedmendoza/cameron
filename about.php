<?php
/*
Template Name: About
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <?php if( get_field('first-copy') ): ?>
    <div class="row add-both">
      <div class="medium-6 large-6 columns right">
        <div class="image-right">
          <?php $image = get_field('first-image'); if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="medium-6 large-6 columns">
        <div class="paragraph">
          <?php the_field('first-copy'); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if( get_field('second-copy') ): ?>
    <div class="row add-both">
      <div class="medium-6 large-6 columns">
        <div class="image-left">
          <?php $image = get_field('second-image'); if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="medium-6 large-6 columns">
        <div class="paragraph">
          <?php the_field('second-copy'); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if( get_field('fifth-copy') ): ?>
    <div class="row add-both">
      <div class="medium-6 large-6 columns right">
        <div class="image-right">
          <?php $image = get_field('fifth-image'); if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="medium-6 large-6 columns">
        <div class="paragraph">
          <?php the_field('fifth-copy'); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if( get_field('sixth-copy') ): ?>
    <div class="row add-both">
      <div class="medium-6 large-6 columns">
        <div class="image-left">
          <?php $image = get_field('sixth-image'); if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="medium-6 large-6 columns">
        <div class="paragraph">
          <?php the_field('sixth-copy'); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if( get_field('third-copy') ): ?>
    <div class="row add-both">
      <div class="medium-6 large-6 columns right">
        <div class="image-right">
          <?php $image = get_field('third-image'); if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="medium-6 large-6 columns">
        <div class="paragraph">
          <?php the_field('third-copy'); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if( get_field('fourth-copy') ): ?>
    <div class="row add-both">
      <div class="medium-6 large-6 columns">
        <div class="image-left">
          <?php $image = get_field('fourth-image'); if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="medium-6 large-6 columns">
        <div class="paragraph">
          <?php the_field('fourth-copy'); ?>
        </div>
      </div>
    </div>
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