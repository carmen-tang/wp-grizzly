<?php get_header(); ?>
<!-- <div id="wrap-content" class="wrap-content">
<div id="content" class="site-content">
<section id="primary" class="content-area">
<main id="main" class="site-main">
<?php if ( have_posts() ) {
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
<header class="entry-header">
<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
</header>
<footer class="entry-meta">
<?php printf( __( 'Posted <time datetime="%1$s">%2$s</time> by %3$s. ', 'voidx' ), get_post_time('c'), get_the_date(), get_the_author() ); ?>
<?php _e( 'Categories: ', 'voidx' ); the_category( ', ' ); echo '. '; ?>
</footer>
<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>
</article>
<?php endwhile;
} else { ?>
<article id="post-0" class="post no-results not-found">
<header class="entry-header">
<h1><?php _e( 'Not found', 'voidx' ); ?></h1>
</header>
<div class="entry-content">
<p><?php _e( 'Sorry, but your request could not be completed.', 'voidx' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
<?php } ?>
</main>
<?php voidx_post_navigation(); ?>
</section>
</div>
</div> -->

<!-- theme -->
<div id="page-wrapper">
    <div class="hero">
        <div class="container">
            <div class="pitch">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('hero_text') ) : 
                endif; ?>
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="form-block">
        <div class="container">
            <div class="form-wrapper">
                <div class="left-form">
                    <div class="divider"></div>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('content_text') ) : 
                    endif; ?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('form_field') ) : 
                    endif; ?>
                </div>
                <div class="right-form" id="contact">
                    <div class="divider"></div>
                    <h4>Questions? Just ask!</h4>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i></p>
                    <p>(555) 555-5555</p>
                    <p class="marginated"><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
                    <p>hello@madebygrizzly.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="instagram">
        <div id="instafeed" class="carousel"></div>
    </div>
</div>

<?php get_footer(); ?>

<!-- <?php get_sidebar(); ?>-->