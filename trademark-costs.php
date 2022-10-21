<?php
/*
Template Name: Trademark Costs Page
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="row add-top">
      <?php the_content(''); ?>
    </div>
    <?php endwhile; endif; ?>

    <div class="grey">
      <div class="row center trademarks ">
        <div class="table">
          <div class="table-column key">
            <div class="th col-service" style="background: transparent;"></div>
            <div class="th col-cost"></div>
            <div class="th col-best">
              <div class="title-container">
                <div class="title">
                  <h3>Best for when you need...</h3>
                </div>
              </div>
            </div>
            <div class="th col-check"><div class="title-container"><div class="title">Our initial review and written advice on the mark and goods / services of interest</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Detailed search of UK and CTM trade mark register for existing registrations</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Preparation of all official filing papers and filing these at the trade mark registry</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Reporting confirmed filing details to you with our professional advice on subsequent procedure</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Monitoring relevant official deadlines</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Reporting acceptance, publication and registration</h3></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Additional classifications</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Reporting trade mark registry objections (if required)</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Responding to trade mark registry objections (if required)</div></div></div>
          </div>

          <?php 
          $repeater = get_field('trademark-costs');
          if( $repeater ): $l = 0; ?>
          <?php foreach( $repeater as $i => $row ): ?>
          <div class="table-column">
            <a href="<?php echo get_home_url(); ?>/tm-enquiry/"><div class="th col-service"><div class="title-container"><div class="title"><?php echo $row['service']; ?></div></div></div></a>
            <div class="th col-cost">
              <?php echo $row['cost']; ?>
            </div>
            <div class="th col-best">
              <h3 class="table-mobile-only">Best for when you need...</h3>
              <p><?php echo $row['best-for']; ?></p>
              <a href="<?php echo get_home_url(); ?>/tm-enquiry/" class="more-button">Select</a>
            </div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Our initial review and written advice on the mark and goods / services of interest</h3><?php echo $row['c1']; ?></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Detailed search of UK and CTM trade mark register for existing registrations</h3><?php echo $row['c2']; ?></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Preparation of all official filing papers and filing these at the trade mark registry</h3><?php echo $row['c3']; ?></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Reporting confirmed filing details to you with our professional advice on subsequent procedure</h3><?php echo $row['c4']; ?></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Monitoring relevant official deadlines</h3><?php echo $row['c5']; ?></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Reporting acceptance, publication and registration</h3><?php echo $row['c6']; ?></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Additional classifications</h3><?php echo $row['c7']; ?></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Reporting trade mark registry objections (if required)</h3><?php echo $row['c8']; ?></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Responding to trade mark registry objections (if required)</h3><?php echo $row['c9']; ?></div></div></div>
          </div>
          <?php $counter++; ?>
          <?php if (++$l == 5) break; ?>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row add-both">
      <div class="large-12 columns">
        <?php the_field('tm-additional-information'); ?>
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