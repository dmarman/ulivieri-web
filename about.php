<?php
/* Template Name: About */

get_header('post');
?>

<nav class="main-navigation text-center pt-4 pb-3 sm:pt-6 sm:pb-5 text-2xl font-medium" id="site-header">
    <div class="hidden sm:block">
        <div class="fixed ml-6 md:ml-12" style="width: 80px; opacity: 0; padding-top: 2px" id="home">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1315 350">
                    <path id="Layer" fill="#000000" fill-rule="evenodd" class="shp0" d="M1245.31 105.87L1311.7 105.87L1311.7 341.38L1245.31 341.38L1245.31 105.87ZM1243.97 0.45L1313.5 0.45L1313.5 63.7L1243.97 63.7L1243.97 0.45ZM1072.16 105.88L1136.31 105.88L1136.31 150.29C1145.73 131.89 1159.18 115.3 1176.23 107.67C1189.24 101.84 1202.7 100.04 1221.54 100.04L1221.54 166.88L1214.36 166.88C1164.57 166.88 1138.55 199.62 1138.55 248.52L1138.55 341.38L1072.16 341.38L1072.16 105.88ZM821.85 223.4C821.85 149.83 864.46 98.69 935.79 98.69C999.94 98.69 1049.73 140.41 1049.73 213.08L1049.73 241.34L887.79 241.34C891.38 274.99 909.32 296.07 939.38 296.07C964.51 296.07 981.1 280.37 985.14 263.77L1050.19 263.77C1046.15 304.14 1004.43 348.55 937.14 348.55C863.57 348.55 821.85 296.07 821.85 223.4ZM984.24 200.52C984.24 168.66 963.61 151.17 937.14 151.17C909.32 151.17 888.24 168.22 888.24 200.52L984.24 200.52ZM733.03 105.87L799.42 105.87L799.42 341.38L733.03 341.38L733.03 105.87ZM731.69 0.45L801.22 0.45L801.22 63.7L731.69 63.7L731.69 0.45ZM477.34 105.87L545.97 105.87L591.28 248.97L599.35 273.19L600.25 273.19L607.88 248.97L653.19 105.87L721.82 105.87L632.55 341.38L566.61 341.38L477.34 105.87ZM397.05 105.87L463.44 105.87L463.44 341.38L397.05 341.38L397.05 105.87ZM395.7 0.45L465.23 0.45L465.23 63.7L395.7 63.7L395.7 0.45ZM303.3 0.45L369.69 0.45L369.69 341.38L303.3 341.38L303.3 0.45ZM0.5 197.83L0.5 0.45L67.33 0.45L67.33 174.06C67.33 241.8 71.81 288.9 139.55 288.9C207.29 288.9 211.33 241.8 211.33 174.06L211.33 0.45L278.62 0.45L278.62 197.82C278.62 288.44 247.22 348.55 139.56 348.55C30.56 348.55 0.5 286.2 0.5 197.83Z"></path>
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
        <div class="hidden bg-white"  id="menu-items">
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-1',
                'menu_class'     => 'header-menu bg-white',
            ]);
            ?>
        </div>
    </div>
</nav>

<main id="main" class="site-main about" role="main">
    <article id="post-<?php the_ID(); ?>" class="entry lg:h-screen overflow-hidden lg:relative">
        <div class="post-content lg:h-screen">
            <?php the_content(); ?>
        </div>
    </article>
</main>

<script src="<?php bloginfo('template_url'); ?>/assets/js/post.js?v=1"></script>
<script>
  // When the user scrolls the page, execute myFunction
  window.onscroll = function() {myFunction()};

  function myFunction() {
    if(!document.getElementById('menu-items').classList.contains('hidden')) return;

    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;

    if(winScroll >= window.innerHeight) {
      document.getElementById('site-header').style.backgroundColor = 'white';
      document.getElementById('home').style.opacity = '1';
    } else {
      document.getElementById('site-header').style.backgroundColor = 'transparent';
      document.getElementById('home').style.opacity = '0';
    }

    // Auto hide/show nav on scroll
    (function(){

      var doc = document.documentElement;
      var w = window;

      var prevScroll = w.scrollY || doc.scrollTop;
      var curScroll;
      var direction = 0;
      var prevDirection = 0;

      var header = document.getElementById('site-header');

      var checkScroll = function() {
        if(!document.getElementById('menu-items').classList.contains('hidden')) return;

        /*
        ** Find the direction of scroll
        ** 0 - initial, 1 - up, 2 - down
        */

        curScroll = w.scrollY || doc.scrollTop;
        if (curScroll > prevScroll) {
          //scrolled up
          direction = 2;
        }
        else if (curScroll < prevScroll) {
          //scrolled down
          direction = 1;
        }

        if (direction !== prevDirection) {
          toggleHeader(direction, curScroll);
        }

        prevScroll = curScroll;
      };

      var toggleHeader = function(direction, curScroll) {
        if (direction === 2 && curScroll > 52) {

          //replace 52 with the height of your header in px

          header.classList.add('hide');
          prevDirection = direction;
        }
        else if (direction === 1) {
          header.classList.remove('hide');
          prevDirection = direction;
        }
      };

      window.addEventListener('scroll', checkScroll);

    })();
  }
</script>
<?php
get_footer();