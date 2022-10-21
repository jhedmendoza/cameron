<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header('post'); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>
	
<?php get_footer(); ?>