<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header();
?>

	<div class="row">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		   
		
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>