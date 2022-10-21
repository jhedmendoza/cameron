<!DOCTYPE html>

<html <?php language_attributes(); ?> id="top">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php
if ( ! function_exists( '_wp_render_title_tag' ) ) {
  function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
  }
  add_action( 'wp_head', 'theme_slug_render_title' );
}
?>
<?php wp_head(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script><![endif]--> 

<style>
    @font-face{
        font-family:"Avenir Next W01 Light";
        src:url("<?php echo get_template_directory_uri(); ?>/fonts/0ecef829-586e-426d-a633-4c8a8c926769.eot?#iefix");
        src:url("<?php echo get_template_directory_uri(); ?>/fonts/0ecef829-586e-426d-a633-4c8a8c926769.eot?#iefix") format("eot"),url("<?php echo get_template_directory_uri(); ?>/fonts/49c5f3e1-5867-4b1d-a843-2d07fa60d85d.woff2") format("woff2"),url("<?php echo get_template_directory_uri(); ?>/fonts/f401df6f-54eb-406c-b46a-90b9451c598d.woff") format("woff"),url("<?php echo get_template_directory_uri(); ?>/fonts/276fe25e-e430-4376-b33c-705dd77b3dba.ttf") format("truetype"),url("<?php echo get_template_directory_uri(); ?>/fonts/869dc33b-3685-4d74-a51c-82b435579093.svg#869dc33b-3685-4d74-a51c-82b435579093") format("svg");
    }
    @font-face{
        font-family:"AvenirNextLTW01-Regular";
        src:url("<?php echo get_template_directory_uri(); ?>/fonts/e9167238-3b3f-4813-a04a-a384394eed42.eot?#iefix");
        src:url("<?php echo get_template_directory_uri(); ?>/fonts/e9167238-3b3f-4813-a04a-a384394eed42.eot?#iefix") format("eot"),url("<?php echo get_template_directory_uri(); ?>/fonts/2cd55546-ec00-4af9-aeca-4a3cd186da53.woff2") format("woff2"),url("<?php echo get_template_directory_uri(); ?>/fonts/1e9892c0-6927-4412-9874-1b82801ba47a.woff") format("woff"),url("<?php echo get_template_directory_uri(); ?>/fonts/46cf1067-688d-4aab-b0f7-bd942af6efd8.ttf") format("truetype"),url("<?php echo get_template_directory_uri(); ?>/fonts/52a192b1-bea5-4b48-879f-107f009b666f.svg#52a192b1-bea5-4b48-879f-107f009b666f") format("svg");
    }
    @font-face{
        font-family:"Avenir Next LT W01 Demi";
        src:url("<?php echo get_template_directory_uri(); ?>/fonts/12d643f2-3899-49d5-a85b-ff430f5fad15.eot?#iefix");
        src:url("<?php echo get_template_directory_uri(); ?>/fonts/12d643f2-3899-49d5-a85b-ff430f5fad15.eot?#iefix") format("eot"),url("<?php echo get_template_directory_uri(); ?>/fonts/aad99a1f-7917-4dd6-bbb5-b07cedbff64f.woff2") format("woff2"),url("<?php echo get_template_directory_uri(); ?>/fonts/91b50bbb-9aa1-4d54-9159-ec6f19d14a7c.woff") format("woff"),url("<?php echo get_template_directory_uri(); ?>/fonts/a0f4c2f9-8a42-4786-ad00-fce42b57b148.ttf") format("truetype"),url("<?php echo get_template_directory_uri(); ?>/fonts/99affa9a-a5e9-4559-bd07-20cf0071852d.svg#99affa9a-a5e9-4559-bd07-20cf0071852d") format("svg");
    }
</style>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

<div class="wrap push">
  <nav id="menu" class="mobile-panel">
    <?php wp_nav_menu(array('theme_location' => 'mobile-menu', 'menu_class' => 'mobile-menu', 'depth' => '3')); ?>
  </nav>
  <div id="search-area">
    <?php get_search_form(); ?>
  </div>

  <div class="container">
    <header class="short" style="background-image: url('<?php the_post_thumbnail_url('blog'); ?>');">
      <div class="overlay"></div>
      <div class="row">
        <div class="brand columns">
          <div class="logo">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/header/logo.svg" width="180" height="60" alt="<?php echo get_bloginfo('name'); ?>" onerror="this.onerror=null; this.src='<?php bloginfo('template_url'); ?>/images/header/logo.png'" /></a> 
          </div>
        </div>
        <div class="nav columns">
          <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'menu', 'depth' => '3')); ?>
        </div>
        <div class="mobile-menu-div">
          <a id="menu-button"></a>
        </div>
        <div class="right-head columns">
          <a class="contact" href="<?php echo get_home_url(); ?>/contact">Contact</a>
          <?php if(!is_page('pct-zoom')): ?>
              <a class="client-link" href="<?php echo get_home_url(); ?>/secure-client-access/">Client Login</a>
          <?php endif; ?>
          <a class="client-link" href="<?php echo get_home_url(); ?>/recruitment/">Recruitment</a>
          <span class="fa fa-search" aria-hidden="true"></span>
        </div>
      </div>
      <div class="title-container">
        <div class="title">
          <div class="row">
            <div class="medium-7 large-5 columns">
              <div class="hero animated">
                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="sticky-header">
      <div class="container">
        <div class="row">
          <div class="small-6 medium-6 large-9 columns">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/header/logo-dark.svg" width="160" alt="<?php echo get_bloginfo('name'); ?>" onerror="this.onerror=null; this.src='<?php bloginfo('template_url'); ?>/images/header/logo-dark.png'" /></a> 
          </div>
          <div class="small-6 medium-6 large-3 columns">
            <a class="contact" href="<?php echo get_home_url(); ?>/contact">Contact</a>
          </div>
        </div>
      </div>
    </div>