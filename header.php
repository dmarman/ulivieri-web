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
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
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

<body class="home blog opacity-">

<a class="screen-reader-text" href="#content"></a>

<header class="scrollify site-header bg-pink-300 h-screen overflow-hidden relative">
	<nav class="main-navigation bg-black text-white text-center pt-4 pb-3 sm:pt-6 sm:pb-5 text-2xl" id="site-header">
        <div class="hidden sm:block">
            <div class="fixed ml-6 md:ml-12" style="width: 80px; opacity: 0; padding-top: 2px" id="home">
                <a href="https://ulivieri.studio/#1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1315 350">
                        <path id="Layer" fill="#ffffff" fill-rule="evenodd" class="shp0" d="M1245.31 105.87L1311.7 105.87L1311.7 341.38L1245.31 341.38L1245.31 105.87ZM1243.97 0.45L1313.5 0.45L1313.5 63.7L1243.97 63.7L1243.97 0.45ZM1072.16 105.88L1136.31 105.88L1136.31 150.29C1145.73 131.89 1159.18 115.3 1176.23 107.67C1189.24 101.84 1202.7 100.04 1221.54 100.04L1221.54 166.88L1214.36 166.88C1164.57 166.88 1138.55 199.62 1138.55 248.52L1138.55 341.38L1072.16 341.38L1072.16 105.88ZM821.85 223.4C821.85 149.83 864.46 98.69 935.79 98.69C999.94 98.69 1049.73 140.41 1049.73 213.08L1049.73 241.34L887.79 241.34C891.38 274.99 909.32 296.07 939.38 296.07C964.51 296.07 981.1 280.37 985.14 263.77L1050.19 263.77C1046.15 304.14 1004.43 348.55 937.14 348.55C863.57 348.55 821.85 296.07 821.85 223.4ZM984.24 200.52C984.24 168.66 963.61 151.17 937.14 151.17C909.32 151.17 888.24 168.22 888.24 200.52L984.24 200.52ZM733.03 105.87L799.42 105.87L799.42 341.38L733.03 341.38L733.03 105.87ZM731.69 0.45L801.22 0.45L801.22 63.7L731.69 63.7L731.69 0.45ZM477.34 105.87L545.97 105.87L591.28 248.97L599.35 273.19L600.25 273.19L607.88 248.97L653.19 105.87L721.82 105.87L632.55 341.38L566.61 341.38L477.34 105.87ZM397.05 105.87L463.44 105.87L463.44 341.38L397.05 341.38L397.05 105.87ZM395.7 0.45L465.23 0.45L465.23 63.7L395.7 63.7L395.7 0.45ZM303.3 0.45L369.69 0.45L369.69 341.38L303.3 341.38L303.3 0.45ZM0.5 197.83L0.5 0.45L67.33 0.45L67.33 174.06C67.33 241.8 71.81 288.9 139.55 288.9C207.29 288.9 211.33 241.8 211.33 174.06L211.33 0.45L278.62 0.45L278.62 197.82C278.62 288.44 247.22 348.55 139.56 348.55C30.56 348.55 0.5 286.2 0.5 197.83Z"></path>
                    </svg>
                </a>
            </div>
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-1',
                'menu_class'     => 'header-menu',
            ]);
            ?>
        </div>
        <div class="sm:hidden">
            <div id="menu-btn">Menú</div>
            <div class="hidden" id="menu-items">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu_class'     => 'header-menu bg-black',
                ]);
                ?>
            </div>
        </div>
	</nav>

    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="Ulivieri Logo" class="absolute bottom-0 sm:-bottom-2">

    <img src="<?php bloginfo('template_url'); ?>/assets/images/cafe.png" alt=""  class="hidden absolute random-img">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/jano.png" alt=""  class="hidden absolute random-img">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/pluma.png" alt="" class="hidden absolute random-img">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/puma.png" alt=""  class="hidden absolute random-img random-img-puma">
</header>

<div id="content" class="site-content">
	
