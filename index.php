<?php
/**
 * The main template file
 */

get_header();
?>

<main id="main" class="site-main" role="main">

    <section class="scrollify h-screen text-center px-6 sm:px-12 text-2xl md:text-5xl leading-tight flex items-center justify-center" style="background-color: #cfb826" data-section-name="somos">
        <div class="max-w-4xl">
            <h1 class="pb-8 font-medium">Comunicación estratégica y creativa en Barcelona.</h1>
            <h2 class="">Trabajamos con entidades y marcas para que puedan dar al mundo lo mejor de sí mismas con compromiso, dedicación, análisis y buenas ideas.</h2>
        </div>
    </section>

    <section class="scrollify bg-gray-landing sm:h-scree text-center px-6 sm:px-12 text-2xl md:text-5xl leading-tight flex items-center justify-center sm:relative sm:overflow-hidden" data-section-name="servicios">
        <div class="sm:absolute left-0 bottom-0">
            <div class="sm:relative">
                <div class="service creatividad sm:absolute left-0 bottom-0 mx-auto mt-32 mb-8 sm:m-0"></div>
                <div class="sm:absolute service-text sm:hidden">
                    <p>Conceptualizamos, diseñamos y desarrollamos ideas para despertar el interés y la reflexión.</p>
                </div>
            </div>
            <div class="sm:relative">
                <div class="service copywritting sm:absolute left-0 bottom-0 mx-auto mt-16 mb-8 sm:m-0"></div>
                <div class="sm:absolute service-text sm:hidden">
                    <p>Escogemos muy bien las palabras para que cada mensaje encuentre su camino entre el ruido.</p>
                </div>
            </div>
            <div class="sm:relative">
                <div class="service estrategia sm:absolute left-0 bottom-0 mx-auto mt-16 mb-8 sm:m-0"></div>
                <div class="sm:absolute service-text sm:hidden">
                    <p>Generamos valor definiendo estrategias claras. Ponemos orden, facilitamos la toma de decisiones y no confundimos datos con opiniones.</p>
                </div>
            </div>
            <div class="sm:relative">
                <div class="service naming sm:absolute left-0 bottom-0 mx-auto mt-16 mb-8 sm:m-0"></div>
                <div class="sm:absolute service-text sm:hidden mb-32 sm:m-0">
                    <p>Creamos identidades de marca, producto o servicio con personalidad propia para dar vida a nuevas experiencias y narrativas.</p>
                </div>
            </div>
        </div>

        <style>
            @media (min-width: 640px) {
                .service:hover + .service-text {
                    display: block;
                }

                .service-text {
                    width: 75vw;
                    bottom: calc(48vh + 15vw);
                    transform: translateX(16%);
                }
            }

            .service {
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .copywritting {
                background-image: url('<?php bloginfo('template_url'); ?>/assets/images/serveis/copywritting_blk.svg');
                width: 32vw;
                height: 32vw;
                left: 67vw
            }
            .copywritting:hover {
                background-image: url('<?php bloginfo('template_url'); ?>/assets/images/serveis/copywritting_hover.svg');
            }
            .creatividad {
                background-image: url('<?php bloginfo('template_url'); ?>/assets/images/serveis/creatividad_blk.svg');
                width: calc(1.52*20vw);
                height: 20vw;
                left: 7vw;
                bottom: -2px;
            }
            .creatividad:hover {
                background-image: url('<?php bloginfo('template_url'); ?>/assets/images/serveis/creatividad_hover.svg');
            }

            .estrategia {
                background-image: url('<?php bloginfo('template_url'); ?>/assets/images/serveis/estrategia_blk.svg');
                width: calc(2.24*21vw);
                height: 21vw;
                bottom: 19.5vw;
            }
            .estrategia:hover {
                background-image: url('<?php bloginfo('template_url'); ?>/assets/images/serveis/estrategia_hover.svg');
            }
            .naming {
                background-image: url('<?php bloginfo('template_url'); ?>/assets/images/serveis/naming_blk.svg');
                width: 32vw;
                height: 32vw;
                left: 35vw;
            }
            .naming:hover {
                background-image: url('<?php bloginfo('template_url'); ?>/assets/images/serveis/naming_hover.svg');
            }

            @media (min-width: 640px) {
                .service:hover + .service-text {
                    display: block;
                }

                .service-text {
                    width: 75vw;
                    bottom: calc(48vh + 15vw);
                    transform: translateX(16%);
                }
            }

            @media (max-width: 640px) {
                .creatividad {
                    width: calc(1.52*41vw);
                    height: 41vw;
                }
                .copywritting {
                    width: 66vw;
                    height: 66vw;
                }
                .estrategia {
                    width: calc(2.24*40vw);
                    height: 40vw;
                }
                .naming {
                    width: 65vw;
                    height: 65vw;
                }
            }
        </style>
    </section>

    <section class="scrollify bg-yellow-300 h-screen text-center px-6 sm:px-12 text-2xl md:text-5xl leading-tight flex items-center justify-center" style="background-color: #498363">
        <div class="max-w-4xl">
            <h1 class="pb-8 font-medium">Creemos en una comunicación responsable y con altura de miras.</h1>
            <h2 class="">Apelamos a la inteligencia de las personas con nuestros proyectos, vinculando su razón de ser con la curiosidad, emociones e imaginación que nos mueve.</h2>
        </div>
    </section>
    <section class="landing-posts bg-black">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/landing-post', get_post_type());
        endwhile;
        endif;
        ?>
    </section>

<!--    <section class="scrollif h-scree site-main about entry lg:h-screen overflow-hidden lg:relative post-content" id="nosotros">-->
<!--        --><?php //echo apply_filters('the_content', get_post_field('post_content', 10)); ?>
<!--    </section>-->

    <?php if ( wp_is_mobile() ) : ?>
        <section class="scrollify text-center leading-tight flex items-center justify-center" data-section-name="nosotros">
            <div class="max-w-4xl px-6 sm:px-8 md:px-12 lg:px-20 xl:px-30 2xl:px-48 text-2xl md:text-3xl lg:text-4xl">
                <h1 class="pb-8 font-medium">Nosotros</h1>
                <h2 class="pb-10">Somos una red de inconformistas procedentes de las humanidades y el diseño confabulando bajo el mismo nombre propio.</h2>
                <h2 class="">Buscamos la unión de contrarios para sintetizar nuevas formas de expresión entre entidades y personas, e instamos a nuestros colaboradores a tomar partido para dejar atrás el egoísmo y la banalidad.</h2>
            </div>
        </section>
        <section class="scrollify h-screen flex items-center justify-center" style="background-color: #797EA4">
            <img loading="lazy" class="" src="https://ulivieri.studio/wp-content/uploads/2021/05/about_foto.png" alt="" srcset="http://ulivieri.studio/wp-content/uploads/2021/05/about_foto.png 512w, http://ulivieri.studio/wp-content/uploads/2021/05/about_foto-200x300.png 200w">
        </section>
    <?php else : ?>
        <div class="scrollify flex" data-section-name="nosotros">
            <section class="text-center leading-tight flex items-center justify-center" style="width: 50%;">
                <div class="max-w-4xl px-4 sm:px-8 md:px-12 lg:px-20 xl:px-30 2xl:px-48 text-2xl md:text-3xl lg:text-4xl">
                    <h1 class="pb-8 font-medium">Nosotros</h1>
                    <h2 class="pb-10">Somos una red de inconformistas procedentes de las humanidades y el diseño confabulando bajo el mismo nombre propio.</h2>
                    <h2 class="">Buscamos la unión de contrarios para sintetizar nuevas formas de expresión entre entidades y personas, e instamos a nuestros colaboradores a tomar partido para dejar atrás el egoísmo y la banalidad.</h2>
                </div>
            </section>
            <section class="flex items-center justify-center" style="background-color: #797EA4;width: 50%;">
                <img loading="lazy" class="" src="https://ulivieri.studio/wp-content/uploads/2021/05/about_foto.png" alt=""  srcset="http://ulivieri.studio/wp-content/uploads/2021/05/about_foto.png 512w, http://ulivieri.studio/wp-content/uploads/2021/05/about_foto-200x300.png 200w">
            </section>
        </div>
    <?php endif; ?>

    <div class="scrollify h-screen flex flex-col" data-section-name="contacto">
        <section class="bg-pink-300 font-medium text-center px-6 sm:px-12 text-xl sm:text-3xl md:text-5xl leading-tight flex items-center justify-center" style="height: inherit">
            <div class="max-w-4xl">
                <p>La comunicación puede lograr que el mundo sea un lugar más amable.</p>
                <p class="mt-5 sm:mt-10">¿Empezamos?</p>
            </div>
        </section>

        <?php get_template_part( 'template-parts/footer-nav' ); ?>

    </div>

    <div class="scroll-indicator">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>
</main>

<script src="<?php bloginfo('template_url'); ?>/assets/js/landing.js?v=13"></script>

<script>
  // Progress bar
  window.onscroll = function() {myFunction()};
  function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";

    if(winScroll >= window.innerHeight) {
      document.getElementById('home').style.opacity = '1';
    } else {
      document.getElementById('home').style.opacity = '0';
    }
  }

  // Auto hide/show nav on scroll
  (function(){

    var doc = document.documentElement;
    var w = window;

    var prevScroll = w.scrollY || doc.scrollTop;
    var curScroll;
    var direction = 0;
    var prevDirection = 0;
    var buffer = 0;

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
      buffer++;

      if (direction === 2 && curScroll > 10 && buffer > 8) {

        //replace 52 with the height of your header in px

        header.classList.add('hide');
        prevDirection = direction;
        buffer = 0;
      }
      else if (direction === 1 && buffer > 8) {
        header.classList.remove('hide');
        prevDirection = direction;
        buffer = 0;
      }
    };

    window.addEventListener('scroll', checkScroll);

  })();
</script>

<?php
get_footer();