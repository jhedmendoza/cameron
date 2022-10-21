<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

    <div class="row add-both">
      <div class="large-8 columns">
  			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="breadcrumbs">
            <p><?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?></p>
          </div>
          
  				<p class="date"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time('F j, Y'); ?></a></p>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <?php the_content(); ?>
          <?php wp_link_pages(); ?>

          <!-- <?php trackback_rdf(); ?> -->

          <p class="post-category"><strong>Categories:</strong> <?php the_category(', ') ?></p>
          <?php the_tags('<ul class="tags"><li><strong>Tags:&nbsp;</strong> </li> <li>','&#130;&nbsp;</li><li>','</li></ul>', 'e'); ?>
  			</article><!-- #post-<?php the_ID(); ?> -->
  		</div>
      <div class="large-3 large-offset-1 columns">
        <h4>Recent Posts</h4>
        <ul class="news-feed">
          <?php
          $myqueryname = $wp_query;
          $wp_query = null;
          $wp_query = new WP_Query();
          $wp_query->query('showposts=8'.'&paged='.$paged);
          ?>
          
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="nofollow"><?php the_title(); ?></a></li>
          <?php endwhile; endif; ?>

          <?php $wp_query = null; $wp_query = $myqueryname;?>
          <?php wp_reset_query(); ?>
        </ul>
      </div>
  	</div>