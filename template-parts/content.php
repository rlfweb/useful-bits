<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Useful_Bits
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php useful_bits_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
