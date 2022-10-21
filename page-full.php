<?php
/*
Template Name: Full width
*/
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('page'); ?>

    <div class="row add-both">
      <div class="large-3 columns">
        <?php
        $has_subpages = false;
        // Check to see if the current page has any subpages
        $children = wp_list_pages('&orderby=menu_order&child_of='.$post->ID.'&echo=0');
        if($children) {
            $has_subpages = true;
        }
        // Reseting $children
        $children = "";

        // Fetching the right thing depending on if we're on a subpage or on a parent page (that has subpages)
        if(is_page() && $post->post_parent) {
          // This is a subpage
          $children = wp_list_pages("title_li=&orderby=menu_order&include=".$post->post_parent ."&echo=0&depth=1");
          $children .= wp_list_pages("title_li=&orderby=menu_order&child_of=".$post->post_parent ."&echo=0&depth=1");
        } else if($has_subpages) {
          // This is a parent page that have subpages
          $children = wp_list_pages("title_li=&orderby=menu_order&include=".$post->ID ."&echo=0&depth=1");
          $children .= wp_list_pages("title_li=&orderby=menu_order&child_of=".$post->ID ."&echo=0&depth=1");
        }
        ?>
        <?php if ($children) { ?>
        <ul class="children">
          <?php echo $children; ?>
        </ul>
        <?php } ?>
      </div>
      <div class="large-9 columns">
        <div class="breadcrumbs">
          <p><?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?></p>
        </div>
  
			  <div id="content">
			   <?php the_post(); ?>                  
			    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                          
					<?php the_content(); ?>                       
			    </div><!-- #post-<?php the_ID(); ?> -->                 
			                        
					<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>
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