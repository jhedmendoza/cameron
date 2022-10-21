<?php
/*
Template Name: Quote
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <div class="row add-both">
      <div class="large-12 columns center quote">
        <h2>I would like to..</h2>
      </div>
    <?php if( have_rows('footer-links') ): ?>
      <?php while( have_rows('footer-links') ): the_row();  ?>
      <div class="medium-4 large-4 columns">
        <?php $image = get_sub_field('footer-image'); ?>
        <a href="<?php the_sub_field('footer-link', 8); ?>">
        <div class="is-image" style="background: url('<?php echo $image['url']; ?>') no-repeat;">
          <div class="image-overlay"></div>
          <div class="title-container">
            <div class="title">
              <h3><?php the_sub_field('footer-title', 8); ?></h3>
            </div>
          </div>
        </div>
        </a>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>

<?php get_footer(); ?>