<?php
/*
Template Name: Knowledge Hub
*/
?>

<?php if (!defined('ABSPATH'))
    exit;
get_header('fullalt'); ?>
	<section class="block-listing">
        <div class="block-listing-bg" style="background-image:url(<?php bloginfo('template_url'); ?>/images/us/iso-bg.jpg);"></div>
        <?php if (have_rows('block_content')): ?>
            <?php // Loop through rows.
                while (have_rows('block_content')) : the_row(); 
                $block_title   = get_sub_field('title');
            ?>
                <div class="row">
                    <h2 class="section-title"><?php echo $block_title; ?></h2>
                    <div class="block-listing-row">
                        <?php if (have_rows('list')): ?>
                            <?php 
                                $ctr = 1;
                                while (have_rows('list')) : 
                                the_row();  
                                $block_item_title = get_sub_field('title');
                                $block_item_image = get_sub_field('image');
                                $block_item_description = get_sub_field('description');
                                $block_item_link = get_sub_field('link'); 
                            ?>
                            <?php if($ctr == 1) { ?>
                                <div class="medium-6 columns">
                                    <div class="bl-item">
                                        <a href="<?php echo $block_item_link['url'] ?>" target="<?php echo 		$block_item_link['target'] ?>">
                                        <?php if ($block_item_image['url']) : ?>
                                            <img class="bl-item-img" src="<?php echo $block_item_image['url']; ?>" alt="<?php echo $block_item_image['alt'] ?>">
                                        <?php endif; ?>
                                        <div class="bl-item-text">
                                            <h3 class="section-title"><?php echo $block_item_title; ?></h3>
                                            <div class="bl-item-cta">
                                                <p><?php echo $block_item_description; ?></p>
                                                
                                                <span><?php echo $block_item_link['title'] ?></span>
                                                
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>	
                            <?php } else { ?>
                                <?php if($ctr == 2) { ?>
                                    <div class="medium-6 columns">
                                <?php } ?>
                                    <div class="medium-6 columns">
                                        <div class="bl-item">
                                            <a href="<?php echo $block_item_link['url'] ?>" target="<?php echo 		$block_item_link['target'] ?>">
                                            <?php if ($block_item_image['url']) : ?>
                                                <img class="bl-item-img" src="<?php echo $block_item_image['url']; ?>" alt="<?php echo $block_item_image['alt'] ?>">
                                            <?php endif; ?>
                                            <div class="bl-item-text">
                                                <h3 class="section-title"><?php echo $block_item_title; ?></h3>
                                                <div class="bl-item-cta">
                                                    <p><?php echo $block_item_description; ?></p>
                                                    
                                                    <span><?php echo $block_item_link['title'] ?></span>
                                                    
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php 
                                

                                if($ctr == 5 ) { ?>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <?php $ctr++;  endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    
  </section>
  <section class="insight-news-section">
        <div class="row filters-section">
            <h2 class="section-title">Insights and News</h2>
            <ul class="filter-category-list">
                <li data-filter="all">All</li>
                <?php $categories = get_categories(); ?>
                <?php foreach($categories as $category) : ?>
                  <li data-filter="<?php echo $category->name; ?>"><?php echo $category->name; ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="filter-select-cont">
                <select class="filter-select">
                    <option>Dropdown 1</option>
                </select>
                <select class="filter-select">
                    <option>Dropdown 2</option>
                </select>
            </div>
        </div>

        <?php 
          $args = array(
          'post_type'=> 'post',
          'post_status' => 'publish',
          'order'    => 'DESC',
          'posts_per_page' => -1 // this will retrive all the post that is published 
          );
          $result = new WP_Query( $args );
          if ( $result-> have_posts() ) : ?>

        <div class="row in-result">
            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
              <div class="medium-4 columns in-item">
                <a href="<?php echo get_post_permalink(); ?>">
                    <?php if(get_the_post_thumbnail_url()) { ?>
                        <div class="in-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    <?php } else { ?>
                        <div class="in-image" style="background-image:url(<?php bloginfo('template_url'); ?>/images/placeholder.jpg);">
                    <?php } ?>
                        </div>                  
                </a>
                <h3><a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <p><?php 
                    $excerpt = wp_strip_all_tags(get_the_excerpt());
                    //echo substr($excerpt, 0, 260);
                    echo $excerpt;
                ?></p>
              </div>
            <?php endwhile; ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>

    </section>

    <script>
      jQuery(document).ready(function ($) {

        $(window).scroll(function() {
            var y = $(window).scrollTop();
            if( y > 0 )  {
                $('.floating-header').addClass('active');
            }
        });

        $('.scroll-to-section').click(function(e) {
            e.preventDefault();
            var section = $(this).attr('href');
            console.log('section : ' + section);
            $('html, body').animate({
              scrollTop: $(section).offset().top - 150
            }, 1000);
        });
         
      });


    </script>
<?php get_footer(); ?>