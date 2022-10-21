<?php
/*
Template Name: Front
*/
?>

<?php if (!defined('ABSPATH'))
    exit;
get_header(); ?>
<?php if (isset($_SESSION['user_country_code']) && $_SESSION['user_country_code'] == 'US') { ?>
    <section class="features-sections" style="background-image: url(<?php bloginfo('template_url'); ?>/images/feature-section/features-bg.png)">
        <div class="row">
            <?php if (get_field('features_title')) : ?>
                <style>
                    .features-sections h2.section-title::after {
                        margin-left: auto !important;
                        margin-right: auto !important;
                    }
                </style>
                <div class="medium-12 columns">
                    <h2 style="text-align: center;" class="section-title"><?php echo get_field('features_title'); ?></h2>
                </div>
            <?php endif; ?>
        </div>
        <div class="row"> 
            <?php if (have_rows('features_item')): ?>

            <?php // Loop through rows.
            $ctr = 1;
            while (have_rows('features_item')) :
            the_row();
            // Load sub field value.
            $deafult_icon = get_sub_field('default_icon');
            $hover_icon   = get_sub_field('hover_icon');
            $text         = get_sub_field('text');

            ?>
            
        
            <div class="medium-4 columns feature-box">
                <div class="feature-box-container">
                    <div class="feature-box-icon">
                        <?php if ($deafult_icon['url']) : ?>
                            <img class="feature-box-icon-default" src="<?php echo $deafult_icon['url']; ?>" alt="<?php echo $deafult_icon['alt'] ?>">
                        <?php endif; ?>
                        <?php if ($hover_icon['url']) : ?>
                            <img class="feature-box-icon-hover" src="<?php echo $hover_icon['url']; ?>" alt="<?php echo $hover_icon['alt'] ?>">
                        <?php endif; ?>
                    </div>
                    <?php if ($text) : ?>
                        <p><?php echo $text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php
        // End loop.

        $ctr++;
        endwhile; ?>
        <?php endif; ?>
        </div> 
    </section>
    <section class="procedures-sections">
      <div class="procedures-sections-bg" style="background-image:url(<?php bloginfo('template_url'); ?>/images/us/iso-bg.jpg);"></div>
        <div class="row">
            <div class="medium-6 columns">
                <?php $iso_image = get_field('iso_image'); ?>
                <?php if ($iso_image['url']) : ?>
                    <img src="<?php echo $iso_image['url']; ?>" alt="<?php echo $iso_image['alt'] ?>">
                <?php endif; ?>
            </div>
            <div class="medium-6 columns">
                <?php $iso_title = get_field('iso_title'); ?>
                <?php if ($iso_title) : ?>
                    <h2 class="section-title"><?php echo $iso_title; ?></h2>
                <?php endif; ?>
                <?php if (have_rows('features_item')): ?>

                    <?php // Loop through rows.
                    $ctr = 1;
                    while (have_rows('iso_content')) : the_row();
                        // Load sub field value.
                        $title = get_sub_field('title');
                        $image = get_sub_field('image');
                        $text  = get_sub_field('text');

                        ?>
                        <div class="pr-item <?php if($ctr == 1 ) : ?> active <?php endif; ?>">
                            <div class="pr-item-title">
                                <h3><?php echo $title; ?></h3>
                            </div>
                            <div class="pr-item-desc">
                                <?php echo $text; ?>
                                <?php if ($image) : ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                                <?php endif; ?>
                            </div>
                            <div class="pr-item-lock">
                                <img src="<?php bloginfo('template_url'); ?>/images/us/lock.jpg" alt="icon hover">
                            </div>
                        </div>
                    <?php $ctr++; endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="posts-slider-section">
        <div class="row">
            <div class="medium-12 columns">
                <?php $knowleldge_title = get_field('knowleldge_title'); ?>
                <?php if ($knowleldge_title) : ?>
                    <h2 class="section-title"><?php echo $knowleldge_title; ?></h2>
                <?php endif; ?>
                <?php //var_dump(get_field('knowledge_content')); ?>
                <div class="common-slider-cont">
                    <div class="ps-slider owl-carousel owl-theme">
                        <?php if (get_field('knowledge_content')): ?>
                            <?php
                            while (have_rows('knowledge_content')) : the_row();


                                $image   = get_sub_field('image');
                                $title   = get_sub_field('title');
                                $content = get_sub_field('content');
                                $link    = get_sub_field('link');
                                ?>


                                <div class="ps-slider-item">
                                    <a href="<?php echo $link; ?>">
                                        <?php if ($image) : ?>
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
    <section id="pct-quoter-section" class="pct-quoter-section" style="background-image:url(<?php bloginfo('template_url'); ?>/images/us/pct-bg.jpg);">
        <div class="row">
            <div class="medium-6 columns">
                <h2>PCT National Phase Quoter</h2>
            </div>
            <div class="medium-6 columns">
                <div class="pct-box">
                    <?= do_shortcode('[wipo_search]') ?>
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
                    <?php if (have_rows('testimonials')): ?>

                        <?php // Loop through rows.
                        $ctr = 0;
                        while (have_rows('testimonials')) : the_row();
                            // Load sub field value.
                            $author_image   = get_sub_field('author_image');
                            $author_name    = get_sub_field('author_name');
                            $author_company = get_sub_field('author_company');

                            ?>
                            <div class="testimonial-author-item <?php if ($ctr == 0) : ?> active <?php endif; ?>" data-index="<?php echo $ctr; ?>">
                                <?php if ($author_image['url']) : ?>
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
                    <?php if (have_rows('testimonials')): ?>
                        <?php // Loop through rows.
                        $ctr = 0;
                        while (have_rows('testimonials')) : the_row();
                            // Load sub field value.
                            $highlight   = get_sub_field('highlight');
                            $rate        = get_sub_field('rate');
                            $testimonial = get_sub_field('testimonial');

                            ?>
                            <div class="testimonial-content-item <?php if ($ctr == 0) : ?> active <?php endif; ?>">
                                <!--<h3><?php echo $highlight; ?></h3>-->
                                <!--<div class="ratings">
                                    <?php for ($i = 0; $i < $rate; $i++) : ?>
                                        <img class="star-img" src="<?php bloginfo('template_url'); ?>/images/us/star.png" alt="star">
                                    <?php endfor; ?>
                                </div> -->
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
                <?php if (get_field('awards_title')): ?>
                    <h2 class="section-title"><?php echo get_field('awards_title'); ?></h2>
                <?php endif ?>
            </div>
            <div class="medium-8 columns">
                <div class="common-slider-cont">
                    <div class="award-slider owl-carousel owl-theme">
                        <?php if (have_rows('awards_logo')): ?>
                            <?php // Loop through rows.
                            $ctr = 0;
                            while (have_rows('awards_logo')) : the_row();
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

        $('.pr-item').mouseenter(function() {
          $(this).addClass('active').siblings().removeClass('active');
        });


        $('.testimonial-author-item').mouseenter(function () {
          var num = $(this).data('index')
          $(this).addClass('active').siblings().removeClass('active');
          $('.testimonial-content-item').eq(num).addClass('active').siblings().removeClass('active');
        });

        $(window).load(function() {

          var psPrevInterval, psNextInterval, awardsPrevInterval, awardsNextInterval;

          if($('.posts-slider-section .ps-slider-item').length < 4 && $(window).width() > 767 ) {
            $('.posts-slider-section .custom-nav').css('display','none');
            var psSlider = $(".ps-slider").owlCarousel({
                loop: false,
                margin: 20,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    }
                }
            });
          }
          if($('.posts-slider-section .ps-slider-item').length > 3 && $(window).width() > 767 ) {
            var psSlider = $(".ps-slider").owlCarousel({
                loop: true,
                margin: 20,
                responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                }
                }
            });
          }

          if($(window).width() < 768 ) {
            var psSlider = $(".ps-slider").owlCarousel({
                loop: true,
                margin: 20,
                responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                }
                }
            });
          }



          // Go to the next item
          $('.ps-slider-nav .custom-nav-left').mouseenter(function () {
            psSlider.trigger('prev.owl.carousel');
            psPrevInterval = setInterval(function() {
                psSlider.trigger('prev.owl.carousel');
            }, 500);
          }).mouseout(function() {
              clearInterval(psPrevInterval);
          });
          // Go to the previous item
          $('.ps-slider-nav .custom-nav-right').mouseenter(function () {
            psSlider.trigger('next.owl.carousel');
            psNextInterval = setInterval(function() {
                psSlider.trigger('next.owl.carousel');
            }, 500);
          }).mouseout(function() {
              clearInterval(psNextInterval);
          });



          var awardSlider = $(".award-slider").owlCarousel({
            loop: true,
            margin: 50,
            autoplay: true,
            responsive: {
              0: {
                items: 3
              },
              600: {
                items: 5
              }
            }
          });

          // Go to the next item
          $('.award-slider-nav .custom-nav-left').mouseenter(function () {
            awardSlider.trigger('prev.owl.carousel');
            awardsPrevInterval = setInterval(function() {
                awardSlider.trigger('prev.owl.carousel');
            }, 500);
          }).mouseout(function() {
              clearInterval(awardsPrevInterval);
          });
          // Go to the previous item
          $('.award-slider-nav .custom-nav-right').mouseenter(function () {
            awardSlider.trigger('next.owl.carousel');
            awardsNextInterval = setInterval(function() {
                awardSlider.trigger('next.owl.carousel');
            }, 500);
          }).mouseout(function() {
              clearInterval(awardsNextInterval);
          });
        });

         
      });


    </script>
<?php } else { ?>
    <?php $front_id = get_the_ID(); ?>
    <div class="row add-both">
        <div class="medium-6 large-6 columns right">
            <div class="image-right">
                <?php $image = get_field('first-image'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="medium-6 large-6 columns">
            <div class="paragraph">
                <?php the_field('first-copy'); ?>
            </div>
        </div>
    </div>

    <div class="grey">
        <div class="row">
            <div class="medium-6 large-6 columns">
                <div class="image-left">
                    <?php $image = get_field('second-image'); if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="medium-6 large-6 columns">
                <div class="paragraph">
                    <?php the_field('second-copy'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row add-both">
        <div class="large-12 columns">
            <div class="call">
                <?php the_field('blog-header'); ?>
                <a class="hero-apply" href="<?php the_field('blog-button-url'); ?>"><?php the_field('blog-button-text'); ?> <span><?php the_field('blog-additional-button-text'); ?></span></a>
            </div>
        </div>
    </div>

    <?php if( get_field('testimonial_panel', $front_id) ): ?>
        <div class="testimonial">
            <h3>What our clients say</h3>
            <div class="owl-two owl-carousel owl-theme">
                <div class="row center">
                    <div class="large-10 large-centered columns">
                        <?php if( have_rows('testimonial_panel', $front_id) ): ?>
                            <div class="slide-container">
                                <?php while( have_rows('testimonial_panel', $front_id) ): the_row();  ?>
                                    <?php $image = get_sub_field('image', $front_id); ?>
                                    <?php $content = get_sub_field('quote', $front_id); ?>
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

    <div class="row add-both">
        <div class="large-12 columns">
            <div class="call">
                <?php the_field('cta'); ?>
                <a class="hero-apply" href="<?php the_field('cta-button-url'); ?>"><?php the_field('cta-button-text'); ?> <span><?php the_field('cta-additional-button-text'); ?></span></a>
            </div>
        </div>
    </div>

    <?php if(is_front_page()) { ?>
        <div class="grey">
            <div class="row center">
                <h3>IP Explained</h3>
                <div class="medium-6 large-4 columns video">
                    <a href="https://www.youtube.com/watch?v=P_zn6WyEDDQ" class="swipebox" title="An Economy of Ideas">
                        <img src="<?php bloginfo('template_url'); ?>/images/1.jpg" alt="An Economy of Ideas">
                        <span>An Economy of Ideas</span>
                    </a>
                </div>
                <div class="medium-6 large-4 columns video">
                    <a href="https://www.youtube.com/watch?v=Oi3yztIb8FI" class="swipebox" title="What’s the difference between a patent and a registered design?">
                        <img src="<?php bloginfo('template_url'); ?>/images/2.jpg" alt="What’s the difference between a patent and a registered design?">
                        <span>What’s the difference between a patent and a registered design?</span>
                    </a>
                </div>
                <div class="medium-6 large-4 columns video">
                    <a href="https://www.youtube.com/watch?v=dopteYSigew" class="swipebox" title="Why use a Chartered Patent Attorney to protect your idea?">
                        <img src="<?php bloginfo('template_url'); ?>/images/3.jpg" alt="Why use a Chartered Patent Attorney to protect your idea?">
                        <span>Why use a Chartered Patent Attorney to protect your idea?</span>
                    </a>
                </div>

                <div class="medium-6 large-4 columns video">
                    <a href="https://www.youtube.com/watch?v=pOfsWMXfKTY" class="swipebox" title="Why do I need to protect my IP?">
                        <img src="<?php bloginfo('template_url'); ?>/images/4.jpg" alt="Why do I need to protect my IP?">
                        <span>Why do I need to protect my IP?</span>
                    </a>
                </div>
                <div class="medium-6 large-4 columns video">
                    <a href="https://www.youtube.com/watch?v=lH0eFRkiwHM" class="swipebox" title="Why protect an idea with a patent?">
                        <img src="<?php bloginfo('template_url'); ?>/images/5.jpg" alt="Why protect an idea with a patent?">
                        <span>Why protect an idea with a patent?</span>
                    </a>
                </div>
                <div class="medium-6 large-4 columns video">
                    <a href="https://www.youtube.com/watch?v=As0n9UUukGY" class="swipebox" title="How do I build a business based on IP?">
                        <img src="<?php bloginfo('template_url'); ?>/images/6.jpg" alt="How do I build a business based on IP?">
                        <span>How do I build a business based on IP?</span>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
<?php get_footer(); ?>