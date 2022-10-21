<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <div class="blog">
      <div class="row">
        <?php if ( is_day() ) : ?>
          <h1 class="archive-title"><?php printf( __( 'Daily Archives: %s', 'e' ), '<span>' . get_the_date() . '</span>' ); ?></h1>
        <?php elseif ( is_month() ) : ?>
          <h1 class="archive-title"><?php printf( __( ' %s', 'e' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'e' ) ) . '</span>' ); ?></h1>
        <?php elseif ( is_year() ) : ?>
          <h1 class="archive-title"><?php printf( __( ' %s', 'e' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'e' ) ) . '</span>' ); ?></h1>
        <?php elseif ( is_tag() ) : ?>
          <h1 class="archive-title"><?php printf( __( 'Posts Tagged: %s', 'e' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
        <?php elseif ( is_search() ) : ?>
          <h1 class="archive-title"><?php printf( __( 'Search Results for: %s', 'e' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        <?php else : ?>
          <h1 class="archive-title">Blog</h1>
        <?php endif; ?> 
      </div>
      <div class="row">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <a href="<?php the_permalink(); ?>">
        <div class="small-12 medium-6 large-6 columns">
          <div class="box">
            <div class="four-by-three aspect-ratio"></div>
            <div class="inside">
              <div class="bg" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'blog' ); ?><?php } else { ?><?php bloginfo('template_url'); ?>/images/placeholder.png?><?php } ?>');"></div>
            </div>
          </div>
          <div class="article-description">
            <p class="date"><?php the_time('j M'); ?> </p>
            <?php the_title( '<h3 class="clamp">', '</h3>' ); ?>
            <?php the_excerpt(); ?>
          </div>
        </div>
        </a>

        <?php endwhile; endif; ?>
        <div class="row-break"></div>
        <div class="row center">
  				<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="4" offset="4" pause="true" scroll="false" transition="fade" images_loaded="true" button_label="Load more"]'); ?>
         </div>
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