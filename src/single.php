<?php
/**
Single Post Template: Tester Single Blog Post
Description: A simple template for blog posts
 */

get_header(); ?>
	<div class="blog-wrap">
	 	<div class="container">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			    <h1 class="entry-title"><?php the_title(); ?></h1>

			    <div class="entry-content">
			        <?php the_content(); ?>
			    </div>
			</article>
			<?php endwhile; ?>
		</div>
	</div>
 
<?php get_footer(); ?>