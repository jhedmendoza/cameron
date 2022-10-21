<?php
/*
Template Name: Contact Page
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('contact'); ?>

    <div class="row add-both">
      <div class="medium-6 large-6 columns add-bottom leads">
        <?php the_field('form'); ?>
      </div>
      <div class="medium-5 medium-offset-1 large-3 large-offset-1 columns">
        <?php the_field('phone-numbers'); ?>
        <div class="icons">
          <a href="https://twitter.com/CameronIP" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="http://www.linkedin.com/company/cameron-intellectual-property" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
        <div class="disclaimer">
        <?php the_field('important'); ?>
        </div>
      </div>
    </div>

    <div class="row add-both">
      <div class="medium-5 large-6 columns add-bottom">
        <?php the_field('map'); ?>
      </div>
      <div class="medium-6 medium-offset-1 large-3 large-offset-1 columns">
        <?php the_field('address'); ?>
      </div>
    </div>

<?php get_footer(); ?>