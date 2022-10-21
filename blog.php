<?php
/*
Template Name: Blog
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <div class="row add-both">
      <div class="large-6 columns add-bottom">
        <h1>Blog</h1>
        <?php
        $myqueryname = $wp_query; $wp_query = null; $wp_query = new WP_Query();
        $wp_query->query('post_type=post&order=DESC&showposts=4'.'&paged='.$paged); ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <p class="date"><?php the_time('F j, Y'); ?></p>
          <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          <p class="post-category"><a href="<?php the_permalink(); ?>">Read more</a></p>

          <?php wp_link_pages(); ?>

          <!-- <?php trackback_rdf(); ?> -->
          <?php the_tags('<ul class="tags"><li><strong>Tags:&nbsp;</strong> </li> <li>','&#130;&nbsp;</li><li>','</li></ul>', 'e'); ?>
        </article>

        <?php endwhile; endif; ?>
        <?php wp_reset_query() ?>

        <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="4" offset="4" pause="true" scroll="false" transition="fade" images_loaded="true" button_label="Load more"]'); ?>
      </div>
      <div class="large-4 large-offset-1 columns">
        <?php dynamic_sidebar( 'e_footer' ); ?>
      </div>
    </div>

<?php get_footer(); ?>