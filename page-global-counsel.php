<?php
/*
Template Name: Global Counsel New
*/
?>

<?php if (!defined('ABSPATH'))
    exit;
get_header('fullalt'); ?>
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
            $title         = get_sub_field('title');
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
                        <h3><?php echo $title; ?></h3>
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
    <section class="procedures-sections partnership-content">
      <div class="procedures-sections-bg" style="background-image:url(<?php bloginfo('template_url'); ?>/images/us/iso-bg.jpg);"></div>
        <div class="row">
            <div class="medium-6 columns">
                <?php $partnership_image = get_field('partnership_image'); ?>
                <?php if ($partnership_image['url']) : ?>
                    <img src="<?php echo $partnership_image['url']; ?>" alt="<?php echo $partnership_image['alt'] ?>">
                <?php endif; ?>
            </div>
            <div class="medium-6 columns">
                <?php $partnership_title = get_field('partnership_title'); ?>
                <?php if ($partnership_title) : ?>
                    <h2 class="section-title"><?php echo $partnership_title; ?></h2>
                <?php endif; ?>
                 <?php $partnership_content = get_field('partnership_content'); ?>
                <?php if ($partnership_content) : ?>
                    <?php echo $partnership_content; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
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

    <section class="liaison-section">
      <div class="row">
          <div class="medium-6 columns">
              <?php $liaison_title = get_field('liaison_title'); ?>
              <?php if ($liaison_title) : ?>
                  <h2 class="section-title"><?php echo $liaison_title; ?></h2>
              <?php endif; ?>
                <?php $liaison_content = get_field('liaison_content'); ?>
              <?php if ($liaison_content) : ?>
                  <?php echo $liaison_content; ?>
              <?php endif; ?>
          </div>
          <div class="medium-6 columns">
              <?php $liaison_image = get_field('liaison_image'); ?>
              <?php if ($liaison_image['url']) : ?>
                  <img src="<?php echo $liaison_image['url']; ?>" alt="<?php echo $liaison_image['alt'] ?>">
              <?php endif; ?>
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
         
      });


    </script>
<?php get_footer(); ?>