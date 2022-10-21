<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('search'); ?>

    <div class="row add-both">
      <div class="large-8 columns">
        <div class="breadcrumbs">
          <p><?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?></p>
        </div>

          <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
              <hr>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <?php wp_link_pages(); ?>
                <a class="purple-button remove-bottom" href="<?php the_permalink(); ?>">Visit Page</a>

              </article><!-- #post-<?php the_ID(); ?> -->
              <?php endwhile; ?>
          <?php else : ?>
            <p><?php printf( __( 'No results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></p>
          <?php endif; ?>
      </div>
    </div>

<?php get_footer(); ?>