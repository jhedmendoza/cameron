<?php
/*
Template Name: Clients Page
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <div class="row center large-top">
      <div class="row">
      <?php if( have_rows('clients') ): $counter = 0; ?>
      <?php while( have_rows('clients') ): the_row(); $counter++; ?>
      <div class="medium-3 large-3 columns">
        <div class="client">
          <div class="client-image">
            <?php $image = get_sub_field('client-image');
            if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>
        </div>
        <!--<div class="client-paragraph">
          <?php the_sub_field('client-quote'); ?>
        </div>-->
      </div>
      <?php if ($counter % 4 == 0) { ?>
      </div>
      <div class="row">
      <?php } ?>
      <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>

    <?php if( get_field('testimonial_panel', 6) ): ?>
    <div class="testimonial">
      <h3>What our clients say</h3>
      <div class="owl-two owl-carousel owl-theme">
        <div class="row center">
          <div class="large-10 large-centered columns">
          <?php if( have_rows('testimonial_panel', 6) ): ?>
            <div class="slide-container">
            <?php while( have_rows('testimonial_panel', 6) ): the_row();  ?>
              <?php $image = get_sub_field('image', 6); ?>
              <?php $content = get_sub_field('quote', 6); ?>
              <div class="item">
                <div class="inner">
                  <?php if( !empty($image) ): ?>
                  <div class="inner-image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                  </div>
                  <?php endif; ?>
                  <div class="inner-paragraph">
                    <?php echo $content; ?>
                    <a class="client-say-button" href="<?php echo get_home_url(); ?>/our-clients/">Our clients</a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            </div>
          <?php endif; ?>
          </div>
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