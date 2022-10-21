<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

    <footer>
      <div class="row">
        <div class="offices columns">
          <h4>Our offices</h4>
          <p><span>GLASGOW:</span> Moncrieff House, 69 West Nile Street, Glasgow, G1 2QB</p>
		  <p><span>LONDON (CENTRAL):</span> Gridiron Building, 1 Pancras Square King’s Cross, London, N1C 4AG</p>
          <p><span>LONDON (SURBITON):</span> 73 Maple Road, Surbiton, Kingston upon Thames, London KT6 4AG</p>
          <p><span>EDINBURGH:</span> 21 Young Street, Edinburgh, EH2 4HU</p>
		  <p><span>STEVENAGE:</span> Kings Court, London Road, Stevenage, SG1 2NG</p>          
          <p><span>ABERDEEN:</span> 7 Queens Gardens, Aberdeen AB15 4YD</p>
			<a class="living cfa" href="https://cameronintellectualproperty.com/home/iso-9001/" target="_blank"><img src="/wp-content/uploads/cfa.png" alt="ISO" /></a>
			<a class="living" href="https://www.cipa.org.uk" target="_blank"><img src="https://cameronintellectualproperty.com/wp-content/uploads/cipa.png" alt="CIPA" /></a>
<a class="living" href="https://patentepi.org/en" target="_blank"><img src="https://cameronintellectualproperty.com/wp-content/uploads/epi.png" alt="Patent API" /></a>
<a class="living" href="https://www.legal500.com" target="_blank"><img src="https://cameronintellectualproperty.com/wp-content/uploads/legal-500.png" alt="Legal 500" /></a>
<a class="living" href="https://ipreg.org.uk" target="_blank"><img src="https://cameronintellectualproperty.com/wp-content/uploads/ipreg.png" alt="IPReg" /></a>
          <a class="living" href="http://scottishlivingwage.org/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/nav/living-wage-employer.png" width="50" height="40" alt="Living Wage Employer" /></a>
			<a class="living" href="https://www.citma.org.uk" target="_blank"><img src="https://cameronintellectualproperty.com/wp-content/uploads/citma.png" alt="CITMA" /></a>
			<a class="living" href="https://ipinclusive.org.uk" target="_blank"><img src="https://cameronintellectualproperty.com/wp-content/uploads/cipa-diversity-group-landing.png" alt="CIPA Diversity Group Landing" /></a>
          <div class="icons">
            <a href="https://www.facebook.com/cameronintellectualproperty/" target="_blank"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            <a href="https://twitter.com/CameronIP" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            <a href="http://www.linkedin.com/company/cameron-intellectual-property" target="_blank"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
          </div>
        </div>

        <div class="break"></div>

        <div class="footer-menu">
          <div class="footer-nav columns">
            <?php the_field('footer-nav-1', 6); ?>
          </div>
          <div class="footer-nav columns">
            <?php the_field('footer-nav-2', 6); ?>
          </div>
          <div class="footer-nav columns last">
            <?php the_field('footer-nav-3', 6); ?>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="credit">
      <div class="row">
        <div class="full columns">
          <h5>&copy; <?php echo date("Y") ?> Cameron Intellectual Property Ltd</h5>
          <p>All Rights Reserved. Regulated by IPREG. Registration No. 393025 (Scotland) <br>VAT Reg No. GB 105 9847 95. &nbsp;<a href="#top" class="top">Back to top</a></p>
        </div>
      </div>
    </div>
  </div>
</div> 

<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-21590159-1', 'auto');
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->

<?php wp_footer(); ?>
<script type="text/javascript">
_linkedin_partner_id = "3110444";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);

  jQuery(document).ready(function ($) {
    $('.sticky-header #menu-button').click(function() {
      $('.mobile-panel').toggleClass('active');
      $("html, body").animate({ scrollTop: 0 });
    });
    $(window).scroll(function(){ 
        var scrollPos = $(window).scrollTop();

        if(  scrollPos > 0  ) {
            $('.sticky-header').addClass('active');
        } else {
            $('.sticky-header').removeClass('active');
        }   

    }); 
  });

</script>

<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3110444&fmt=gif" />
</noscript>
</body>
</html>