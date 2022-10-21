<?php
/*
Template Name: Landing Page
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <div class="row add-top">
      <div class="main medium-6 large-6 columns add-bottom">
        <?php the_field('first-panel'); ?>
      </div>
      <div class="medium-5 medium-offset-1 large-5 large-offset-1 columns add-bottom leads">
        <h2>How can we help?</h2>
        <?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true]"); ?>
      </div>
    </div>

    <div class="row">
      <?php if( get_field('testimonial_panel') ): ?>
      <div class="large-6 columns add-bottom">
        <div class="testimonial-dark">
        <?php 
        $rows = get_field('testimonial_panel'); // get all the rows
        $rand_row = $rows[ array_rand( $rows ) ]; // get a random row
        $quotation = $rand_row['quote']; // get the sub field value 
        echo $quotation; ?>
        </div>
      </div>
      <?php endif; ?>
      <?php if( have_rows('bullets') ): ?>
      <div class="large-5 large-offset-1 columns add-bottom">
        <div class="why">
          <ul class="bullets">
          <?php while( have_rows('bullets') ): the_row(); ?>
            <li><?php the_sub_field('bullet'); ?></li>
          <?php endwhile; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <?php if( get_field('second-panel') ): ?>
    <div class="row">
      <div class="main medium-6 large-6 columns add-bottom">
        <?php the_field('second-panel'); ?>
      </div>
      <div class="medium-5 medium-offset-1 large-5 large-offset-1 columns add-bottom">
        <p>Drop us a line</p>
        <h2>+44(0)1224 937 739</h2>
        <div class="icons">
          <a href="https://twitter.com/CameronIP" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="http://www.linkedin.com/company/cameron-intellectual-property" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
        <h3>Glasgow</h3>
        <p><strong>Tel:</strong> 0141 375 7575<br>
        <strong>Fax:</strong> 0141 375 7676</p>
        <h3>Address</h3>
        <p>69 St. Vincent Street <br>Glasgow G2 5TF</p>
        <p><a href="https://www.google.co.uk/maps/place/Cameron+Intellectual+Property/@55.8611834,-4.2555466,15z/data=!4m5!3m4!1s0x0:0x1bd0dbc67ac1e221!8m2!3d55.8611834!4d-4.2555466" target="_blank">Find on Google Maps</a></p>
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