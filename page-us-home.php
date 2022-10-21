<?php
/*
Template Name: US Home
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header(); ?>
<section class="features-sections" style="background-image: url(<?php bloginfo('template_url'); ?>/images/feature-section/features-bg.png)">
  <div class="row">
    <?php if ( get_field('features_title') ) : ?>
      <div class="medium-4 columns">
        <h2 class="section-title"><?php echo get_field('features_title'); ?></h2>
      </div>
    <?php endif; ?>
    <?php if( have_rows('features_item') ): ?>

    <?php // Loop through rows.
      $ctr = 1;
      while( have_rows('features_item') ) : the_row();
        // Load sub field value.
        $deafult_icon = get_sub_field('default_icon');
        $hover_icon = get_sub_field('hover_icon');
        $text = get_sub_field('text');
        
    ?>
    <?php if($ctr == 3)  { ?> </div><div class="row"> <?php } ?>
      <div class="medium-4 columns feature-box">
        <div class="feature-box-container">
          <div class="feature-box-icon">
            <?php if($deafult_icon['url']) :  ?>
              <img class="feature-box-icon-default" src="<?php echo $deafult_icon['url']; ?>" alt="<?php echo $deafult_icon['alt'] ?>">
            <?php endif; ?>
            <?php if($deaful_icon['url']) :  ?>
              <img class="feature-box-icon-hover" src="<?php echo $hover_icon['url']; ?>" alt="<?php echo $hover_icon['alt'] ?>">
            <?php endif; ?>
          </div>
          <?php if($text) : ?>
            <p><?php echo $text; ?></p>
          <?php endif; ?>
        </div>
      </div>
      <?php if($ctr == 5) { ?> </div> <?php } ?>
      <?php 
        // End loop. 
        
        $ctr++;
        endwhile; ?>
    <?php endif; ?>
</section>
<section class="procedures-sections">
  <div class="row">
    <div class="medium-6 columns">
      <?php $iso_image = get_field('iso_image'); ?>
      <?php if($iso_image['url']) :  ?>
        <img src="<?php echo $iso_image['url']; ?>" alt="<?php echo $iso_image['alt'] ?>">
      <?php endif; ?>
    </div>
    <div class="medium-6 columns">
        <?php $iso_title = get_field('iso_title'); ?>
        <?php if($iso_title) :  ?>
          <h2 class="section-title"><?php echo $iso_title; ?></h2>
        <?php endif; ?>
        <?php if( have_rows('features_item') ): ?>

          <?php // Loop through rows.
            $ctr = 1;
            while( have_rows('iso_content') ) : the_row();
              // Load sub field value.
              $title = get_sub_field('title');
              $image = get_sub_field('image');
              $text = get_sub_field('text');
              
          ?>
            <div class="pr-item">
              <div class="pr-item-title">
                <h3><?php echo $title; ?></h3>
              </div>
              <div class="pr-item-desc">
                <?php echo $text; ?>
                <?php if($image) : ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                <?php endif; ?>
              </div>
              <div class="pr-item-lock">
                <img src="<?php bloginfo('template_url'); ?>/images/us/lock.jpg" alt="icon hover">
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</section>
<section class="posts-slider-section">
  <div class="row">
    <div class="medium-12 columns">
      <?php $knowleldge_title = get_field('knowleldge_title'); ?>
      <?php if($knowleldge_title) :  ?>
        <h2 class="section-title"><?php echo $knowleldge_title; ?></h2>
      <?php endif; ?>
      <?php //var_dump(get_field('knowledge_content')); ?>
      <div class="common-slider-cont">
        <div class="ps-slider owl-carousel owl-theme">
            <?php if( get_field('knowledge_content') ): ?>
              <?php
                while( have_rows('knowledge_content') ) : the_row();
      
                  
                  $image = get_sub_field('image');
                  $title = get_sub_field('title');
                  $content = get_sub_field('content');
                  $link = get_sub_field('link');
              ?>
                  
              
              <div class="ps-slider-item">
                  <a href="<?php echo $link; ?>">
                    <?php if($image) : ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                    <?php endif ?>
                  </a>
                  <h3><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h3>
                  <?php echo $content; ?>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="custom-nav ps-slider-nav">
          <div class="custom-nav-left">
            <img src="<?php bloginfo('template_url'); ?>/images/us/arrow-left.svg" alt="icon hover">
          </div>
          <div class="custom-nav-right">
            <img src="<?php bloginfo('template_url'); ?>/images/us/arrow-right.svg" alt="icon hover">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pct-quoter-section" style="background-image:url(<?php bloginfo('template_url'); ?>/images/us/pct-bg.jpg);">
  <div class="row">
    <div class="medium-6 columns">
      <h2>Global PCT Quoter</h2>
    </div>
    <div class="medium-6 columns">
      <div class="pct-box">
		  <?= do_shortcode('[wipo_search]') ?>
<!--           <div class="pct-input-fields">
            <span class="pct-text">PCT/</span>
            <input type="text" class="pct-field">
            <span class="pct-text">20</span>
            <input type="text" class="pct-field">
            <span class="pct-text">/</span>
            <input type="text" class="pct-field">
          </div>
          <button class="pct-submit">Get Instant Quotes</button> -->
      </div>
    </div>
  </div>
</section>
<section class="testimonial-section" style="background-image: url(<?php bloginfo('template_url'); ?>/images/us/testimonial-bg.png);">
    <div class="row">
      <div class="medium-12 columns">
        <h2 class="section-title"><?php echo get_field('testimonial_title') ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="medium-6 columns">
        <div class="testimonial-authors">
          <?php if( have_rows('testimonials') ): ?>

            <?php // Loop through rows.
              $ctr = 0;
              while( have_rows('testimonials') ) : the_row();
                // Load sub field value.
                $author_image = get_sub_field('author_image');
                $author_name = get_sub_field('author_name');
                $author_company = get_sub_field('author_company');
                
            ?>
            <div class="testimonial-author-item <?php if($ctr == 0 ) : ?> active <?php endif; ?>" data-index="<?php echo $ctr; ?>">
                <?php if($author_image['url']) :  ?>
                  <img class="testimonial-author-img" src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt'] ?>">
                <?php endif; ?>
                <div class="testimonial-author-box">
                  <span class="testimonial-author-name"><?php echo $author_name; ?></span>
                  <span class="testimonial-author-company"><?php echo $author_company ?></span>
                </div>
            </div>
          <?php $ctr++; endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="medium-6 columns">
        <div class="testimonial-contents">
          <?php if( have_rows('testimonials') ): ?>
            <?php // Loop through rows.
                $ctr = 0;
                while( have_rows('testimonials') ) : the_row();
                  // Load sub field value.
                  $highlight = get_sub_field('highlight');
                  $rate = get_sub_field('rate');
                  $testimonial = get_sub_field('testimonial');
                  
              ?>
              <div class="testimonial-content-item <?php if($ctr == 0 ) : ?> active <?php endif; ?>">
                <h3><?php echo $highlight; ?></h3>
                <div class="ratings">
                  <?php for($i = 0; $i < $rate; $i++) : ?>
                    <img class="star-img" src="<?php bloginfo('template_url'); ?>/images/us/star.png" alt="star">
                  <?php endfor; ?>
                </div>
                <?php echo $testimonial; ?>
              </div>
            <?php $ctr++; endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
</section>

<section class="awards-section">
    <div class="row">
      <div class="medium-4 columns">
        <?php if( get_field('awards_title') ): ?>
          <h2 class="section-title"><?php echo get_field('awards_title');  ?></h2>
        <?php endif ?>
      </div>
      <div class="medium-8 columns">
        <div class="common-slider-cont">
          <div class="award-slider owl-carousel owl-theme">
            <?php if( have_rows('awards_logo') ): ?>
              <?php // Loop through rows.
                  $ctr = 0;
                  while( have_rows('awards_logo') ) : the_row();
                    // Load sub field value.
                    $logo = get_sub_field('logo');
                    $link = get_sub_field('link');
                ?>
                  <div class="award-slider-item">
                      <a href="<?php echo $link ?>" target="_blank">
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>">
                      </a>
                  </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="custom-nav award-slider-nav">
            <div class="custom-nav-left">
              <img src="<?php bloginfo('template_url'); ?>/images/us/arrow-left.svg" alt="icon hover">
            </div>
            <div class="custom-nav-right">
              <img src="<?php bloginfo('template_url'); ?>/images/us/arrow-right.svg" alt="icon hover">
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<script>
jQuery(document).ready(function($){
  var psSlider = $(".ps-slider").owlCarousel({
    loop:true,
    margin:20,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
  });

  
  // Go to the next item
  $('.ps-slider-nav .custom-nav-left').click(function() {
      psSlider.trigger('prev.owl.carousel');
  })
  // Go to the previous item
  $('.ps-slider-nav .custom-nav-right').click(function() {
      psSlider.trigger('next.owl.carousel');
  })
  

  var awardSlider = $(".award-slider").owlCarousel({
    loop:true,
    margin:50,
    autoplay: true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:5
        }
    }
  });

    // Go to the next item
  $('.award-slider-nav .custom-nav-left').click(function() {
      awardSlider.trigger('prev.owl.carousel');
  })
  // Go to the previous item
  $('.award-slider-nav .custom-nav-right').click(function() {
      awardSlider.trigger('next.owl.carousel');
  })

  $('.testimonial-author-item').mouseenter(function() {
    var num = $(this).data('index')
    $(this).addClass('active').siblings().removeClass('active');
    $('.testimonial-content-item').eq(num).addClass('active').siblings().removeClass('active');
  });
});
</script>
<?php get_footer(); ?>