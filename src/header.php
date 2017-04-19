<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- <title><?php wp_title( '-', true, 'right' ); ?></title> -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- JS -->
<script src="https://use.fontawesome.com/dae6b10835.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<!-- CSS -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Ubuntu:300,400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <svg version="1.1" id="Artwork" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 234.1 39" style="enable-background:new 0 0 234.1 39;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M90.8,38.3h-7.5V0.7h7.5V38.3z"/>
                            <path class="st0" d="M111.6,31.4h17.5v6.9H99.6L117,7.6H99.6V0.7h29.4L111.6,31.4z"/>
                            <path class="st0" d="M199,38.3h-25V0.7h7.5v30.6H199V38.3z"/>
                            <path class="st0" d="M219.9,23.5v14.8h-7.5V23.4L197.9,0.7h8.8l9.5,15.9l9.5-15.9h8.5L219.9,23.5z"/>
                            <path class="st0" d="M64.4,24.8l0.8-0.2c6.8-1.4,9.2-7,9.2-11.8c0-6-3.8-12.1-12.3-12.1H46.8v37.6H54V25.5v-0.5h0.5h1.9h0.3
                            l0.2,0.2l8.5,13.1h8.6l-9-12.9L64.4,24.8z M54.5,18.8H54v-0.5V7.4V6.9h0.5h7.2c3.2,0,5.2,3,5.2,6s-2,6-5.4,6H54.5z"/>
                            <path class="st0" d="M147.7,31.4h17.5v6.9h-29.5l17.5-30.7h-17.4V0.7h29.4L147.7,31.4z"/>
                            <path class="st0" d="M38,18.8H20.6v0h0V25h9.2c-1.3,4.5-4.7,7-10.4,7C13,32,7.8,27.2,7.8,19.5c0-7.3,5-12.4,11.9-12.4
                            c3.8,0,7,1.5,9.1,3.9l5.4-5.3C30.8,2.1,25.8,0,19.8,0C8.3,0,0,8.1,0,19.5C0,31.6,9.2,39,19.7,39c10.7,0,18.4-8,18.4-19.4
                            C38,19.3,38,19.1,38,18.8z"/>
                        </g>
                        </svg>
                    </a>
                </div>
                <div class="mailing">
                    <a href="mailto:someone@someone.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </header>
