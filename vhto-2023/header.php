<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>

        <!-- Google tag (gtag.js) --> 
        <script async src=https://www.googletagmanager.com/gtag/js?id=G-P0XY1MTN6E></script> 
        <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-P0XY1MTN6E'); </script>
    
        <!-- reCAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>
    <body <?php body_class();?>>
        <header class="site-header">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="<?php echo get_theme_file_uri('assets/images/logo.png')?>" height="28">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="mainNavbarTop" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="/aanbod">
                            <strong>Aanbod</strong>
                        </a>

                        <a class="navbar-item" href="/kennis">
                            <strong>Kennis</strong>
                        </a>

                        <a class="navbar-item" href="/over-vhto">
                            <strong>Over ons</strong>
                        </a>
                    </div>

                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="https://www.linkedin.com/company/vhto" target="_blank"><i class="fa-brands fa-linkedin p-2 social-icons is-size-4"></i> </a>
                            <a href="https://www.facebook.com/VHTOnl/" target="_blank"><i class="fa-brands fa-facebook p-2 social-icons is-size-4"></i></a>    
                            <a href="https://twitter.com/VHTOnl" target="_blank"><i class="fa-brands fa-x-twitter p-2 social-icons is-size-4"></i> </a>
                            <a href="/doe-mee" class="button is-info is-rounded"><strong>Doe mee</strong>
                            </a>
                        </div>
                    </div>
                </div>
                </nav>
                
        </header>
   
