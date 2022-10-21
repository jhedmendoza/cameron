<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('404'); ?>

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

    <div class="row add-both">
      <div class="large-12 columns">
        <div class="call">
          <?php the_field('cta', 6); ?>
          <a class="hero-apply" href="<?php the_field('cta-button-url', 6); ?>"><?php the_field('cta-button-text', 6); ?> <span><?php the_field('cta-additional-button-text', 6); ?></span></a>
        </div>
      </div>
    </div>

<?php get_footer(); ?>