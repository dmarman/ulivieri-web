<?php
/**
 * Template part for displaying posts
 */

?>
<div id="post-<?php the_ID(); ?>" class="scrollify demo-wrap-<?php the_ID(); ?> relative overflow-hidden" data-section-name="proyectos">
    <?php
    if(get_post_meta($post->ID, 'video', true)){
        echo '<video src="' . get_post_meta($post->ID, 'video', true) . '" autoplay loop muted playsinline></video>';
        ;}
    ?>

    <div class="w-full h-full flex flex-col items-center justify-center text-white opacity-90 relative">
        <h2 class="text-5xl sm:text-7xl pb-2">
<!--            <a href="--><?php //the_permalink(); ?><!--" class="text-center">-->
            <div class="text-center px-6">
                <?php the_title(); ?>
            </div>
        </h2>
        <div class="text-center text-lg sm:text-2xl leading-6 sm:leading-7 px-6 pb-2">
            <?php
                if(get_post_meta($post->ID, 'description', true)){
                    echo get_post_meta($post->ID, 'description', true);
                } else {
                    the_excerpt();
                }
            ?>
        </div>
        <div class="text-center text-sm sm:text-base leading-6 sm:leading-7 px-6">
            <?php
            if(get_post_meta($post->ID, 'tags', true)){
                echo get_post_meta($post->ID, 'tags', true);
            }
            ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="flex items-center absolute bottom-10 sm:bottom-12 text-xl hidden">
            <p>Ver proyecto</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/fletxa_right.svg" alt="" class="w-20 -ml-4">
        </a>
    </div>
</div>

<style>
    <?php if(!get_post_meta($post->ID, 'video', true)){ ?>
        .demo-wrap-<?php the_ID(); ?>:before {
            content: ' ';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.6;
            background-image: url('<?php the_post_thumbnail_url() ?>');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-color: black;
        }
    <?php ;} else {?>
    .demo-wrap-<?php the_ID(); ?> video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        opacity: 0.6;
        object-fit: cover;
    }
    <?php ;}?>

</style>