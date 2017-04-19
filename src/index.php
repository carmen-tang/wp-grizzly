<?php get_header(); ?>

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