<?php
/**
 * The template for displaying the footer nav
 *
 */

?>

<div class="site-footer bg-black text-pink-300">
    <div class="flex flex-col md:flex-row pt-4 sm:pt-6 md:pt-10 md:pb-8 pl-5 sm:pl-6 md:pl-10">
        <div class="md:w-3/12 pb-3 sm:pb-5">
            <h3 class="font-medium text-lg sm:text-xl sm:pb-1">Contacto</h3>
            <div class="text-xs sm:text-sm">
                <p>alessandro@ulivieri.studio</p>
                <p>+34 696 952 534</p>
                <p>Carrer de les Escoles Pies 65, 1º</p>
                <p>08017 Barcelona</p>
            </div>
        </div>
        <div class="md:w-2/12 pb-3 sm:pb-5">
            <h3 class="font-medium text-lg sm:text-xl sm:pb-1">Redes</h3>
            <ul class="text-xs sm:text-sm">
                <li><a href="https://www.instagram.com/ulivieri.studio_" class="hover:text-white">Instagram</a></li>
                <li><a href="https://twitter.com/ulivieristudio" class="hover:text-white">Twitter</a></li>
                <li><a href="https://open.spotify.com/user/ales07?si=5cf1914554c746b5" class="hover:text-white">Spotify</a></li>
                <li><a href="https://www.linkedin.com/in/aulivieri/" class="hover:text-white">LinkedIn</a></li>
            </ul>
        </div>
        <div class="md:w-4/12 lg:w-5/12 pb-5 hidden md:block hidden">
            <h3 class="font-medium text-lg sm:text-xl pb-1"></h3>
            <div class="">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu_class'     => 'text-sm',
                ]);
                ?>
            </div>
        </div>
        <div  class="pb-3 sm:pb-5">
            <h3 class="font-medium text-lg sm:text-xl sm:pb-1">Ulivieri <?php echo date("Y"); ?> <span class="font-thin text-base align-top">©</span></h3>
            <p id="MyClockDisplay" class="clock text-xs sm:text-sm"><?php echo date("H:i:s") ?></p>
            <p class="-mt-1 text-xs sm:text-sm"><?php echo date("d.m.Y") ?></p>
            <p class="pt-2 text-xs sm:text-sm">
                <img src="http://openweathermap.org/img/wn/01n@2x.png" alt="weather icon" id="weather-icon" class="w-8 inline -ml-1 sm:-ml-3 -mt-1">
                <span id="temperature"></span>° Barcelona
            </p>
        </div>
    </div>

    <div class="px-5 sm:px-6 pb-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1315 350">
            <path id="Layer" fill="#F5AFCA" fill-rule="evenodd" class="shp0" d="M1245.31 105.87L1311.7 105.87L1311.7 341.38L1245.31 341.38L1245.31 105.87ZM1243.97 0.45L1313.5 0.45L1313.5 63.7L1243.97 63.7L1243.97 0.45ZM1072.16 105.88L1136.31 105.88L1136.31 150.29C1145.73 131.89 1159.18 115.3 1176.23 107.67C1189.24 101.84 1202.7 100.04 1221.54 100.04L1221.54 166.88L1214.36 166.88C1164.57 166.88 1138.55 199.62 1138.55 248.52L1138.55 341.38L1072.16 341.38L1072.16 105.88ZM821.85 223.4C821.85 149.83 864.46 98.69 935.79 98.69C999.94 98.69 1049.73 140.41 1049.73 213.08L1049.73 241.34L887.79 241.34C891.38 274.99 909.32 296.07 939.38 296.07C964.51 296.07 981.1 280.37 985.14 263.77L1050.19 263.77C1046.15 304.14 1004.43 348.55 937.14 348.55C863.57 348.55 821.85 296.07 821.85 223.4ZM984.24 200.52C984.24 168.66 963.61 151.17 937.14 151.17C909.32 151.17 888.24 168.22 888.24 200.52L984.24 200.52ZM733.03 105.87L799.42 105.87L799.42 341.38L733.03 341.38L733.03 105.87ZM731.69 0.45L801.22 0.45L801.22 63.7L731.69 63.7L731.69 0.45ZM477.34 105.87L545.97 105.87L591.28 248.97L599.35 273.19L600.25 273.19L607.88 248.97L653.19 105.87L721.82 105.87L632.55 341.38L566.61 341.38L477.34 105.87ZM397.05 105.87L463.44 105.87L463.44 341.38L397.05 341.38L397.05 105.87ZM395.7 0.45L465.23 0.45L465.23 63.7L395.7 63.7L395.7 0.45ZM303.3 0.45L369.69 0.45L369.69 341.38L303.3 341.38L303.3 0.45ZM0.5 197.83L0.5 0.45L67.33 0.45L67.33 174.06C67.33 241.8 71.81 288.9 139.55 288.9C207.29 288.9 211.33 241.8 211.33 174.06L211.33 0.45L278.62 0.45L278.62 197.82C278.62 288.44 247.22 348.55 139.56 348.55C30.56 348.55 0.5 286.2 0.5 197.83Z" />
        </svg>
    </div>

</div>
