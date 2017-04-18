<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="post-wp">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>

		    <?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>

		<p><?php the_field('favorite_animal'); ?></p>
	</div>
</div>

<?php get_footer(); ?>