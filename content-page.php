<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage New Theme
 * @since New Theme v1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php the_post_thumbnail( 'full' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->