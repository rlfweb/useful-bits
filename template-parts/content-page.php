<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Useful_Bits
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</h1><!-- .entry-header -->

	<?php useful_bits_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>

	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
