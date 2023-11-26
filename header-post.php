<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/images/mouse_pink.png">

	<?php wp_head(); ?>
    <style>
        @font-face {
            font-family: Surt;
            src: url('<?php bloginfo('template_url'); ?>/assets/fonts/AT Surt Light.otf') format("opentype");
            font-weight: 400;
        }
        @font-face {
            font-family: Surt;
            src: url('<?php bloginfo('template_url'); ?>/assets/fonts/AT Surt Medium.otf') format("opentype");
            font-weight: 500;
        }

        body {
            cursor: url('<?php bloginfo('template_url'); ?>/assets/images/mouse.png'), auto;
        }

        .site-footer, #site-header, #contact {
            cursor: url('<?php bloginfo('template_url'); ?>/assets/images/mouse_pink.png'), auto;
        }
    </style>
</head>

<body <?php body_class(); ?>>
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<div id="content" class="site-content">
	
