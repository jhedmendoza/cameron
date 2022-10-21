<?php
/*
Template Name: Costs Page
*/
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="row add-top">
      <?php the_content(''); ?>
    </div>
    <?php endwhile; endif; ?>

    <div class="grey">
      <div class="row center">
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
            <div class="th col-check"><div class="title-container"><div class="title">Initial Consultation with Experienced Patent Attorney</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Pre-filing search, patentability report and mini IP Audit</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Professional Patent Drafting and Filing Service</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Preparation and filing of formal patent claims</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Request of Formal UK Patent Office Search plus payment of fees</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Results of Official Search reviewed and reported with professional advice</h3></div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Professionally Prepared Patent Drawings</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Request of Formal UK Patent Office Examination plus Payment of fees</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Results of Official Examination reviewed and reported with professional advice</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Review and report publication of patent application</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Preparation and filing of responses to examination reports and report grant certificate</div></div></div>
            <div class="th col-check"><div class="title-container"><div class="title">Secure Online Access to your Records</div></div></div>
          </div>

          <?php 
          $repeater = get_field('costs');
          if( $repeater ): $l = 0; ?>
          <?php foreach( $repeater as $i => $row ): ?>
          <div class="table-column">
            <a href="<?php echo $row['pdf']; ?>" target="_blank"><div class="th col-service"><div class="title-container"><div class="title"><?php echo $row['service']; ?></div></div></div></a>
            <div class="th col-cost">
              <?php echo $row['cost']; ?>
              <?php if( $row['credit'] ) { ?><a class="tooltips">Credit options available <span><?php echo $row['credit']; ?></span></a><?php } ?>
            </div>
            <div class="th col-best">
              <h3 class="table-mobile-only">Best for when you need...</h3>
              <p><?php echo $row['best-for']; ?></p>
              <a href="<?php echo $row['pdf']; ?>" class="more-button" target="_blank">More info</a>
            </div>
            <?php if( $row['initial-consultation'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Initial Consultation with Experienced Patent Attorney</h3><?php echo $row['initial-consultation']; ?></div></div></div><?php } ?>
            <?php if( $row['pre-filing'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Pre-filing search, patentability report and mini IP Audit</h3><?php echo $row['pre-filing']; ?></div></div></div><?php } ?>
            <?php if( $row['professional-patent'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Professional Patent Drafting and Filing Service</h3><?php echo $row['professional-patent']; ?></div></div></div><?php } ?>
            <?php if( $row['preparation'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Preparation and filing of formal patent claims</h3><?php echo $row['preparation']; ?></div></div></div><?php } ?>
            <?php if( $row['request-of-formal'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Request of Formal UK Patent Office Search plus payment of fees</h3><?php echo $row['request-of-formal']; ?></div></div></div><?php } ?>
            <?php if( $row['results-of-official-search'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Results of Official Search reviewed and reported with professional advice</h3><?php echo $row['results-of-official-search']; ?></div></div></div><?php } ?>
            <?php if( $row['professionally-prepared-patent-drawings'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Professionally Prepared Patent Drawings</h3><?php echo $row['professionally-prepared-patent-drawings']; ?></div></div></div><?php } ?>
            <?php if( $row['request-of-formal-uk-patent-office-examination'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Request of Formal UK Patent Office Examination plus Payment of fees</h3><?php echo $row['request-of-formal-uk-patent-office-examination']; ?></div></div></div><?php } ?>
            <?php if( $row['results-of-official-examination-reviewed'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Results of Official Examination reviewed and reported with professional advice</h3><?php echo $row['results-of-official-examination-reviewed']; ?></div></div></div><?php } ?>
            <?php if( $row['review-and-report-publication'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Review and report publication of patent application</h3><?php echo $row['review-and-report-publication']; ?></div></div></div><?php } ?>
            <?php if( $row['preparation-and-filing-of-responses'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Preparation and filing of responses to examination reports and report grant certificate</h3><?php echo $row['preparation-and-filing-of-responses']; ?></div></div></div><?php } ?>
            <?php if( $row['secure-online-access'] ) { ?><div class="th col-check"><div class="title-container"><div class="title"><h3 class="table-mobile-only">Secure Online Access to your Records</h3><?php echo $row['secure-online-access']; ?></div></div></div><?php } ?>
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
        <div class="call">
          <?php the_field('cta', 6); ?>
          <a class="hero-apply" href="<?php the_field('cta-button-url', 6); ?>"><?php the_field('cta-button-text', 6); ?> <span><?php the_field('cta-additional-button-text', 6); ?></span></a>
        </div>
      </div>
    </div>

<?php get_footer(); ?>