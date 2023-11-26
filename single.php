<?php
/**
 * The template for displaying all single posts
 *
 */

get_header('post');
?>

<main id="main" class="site-main" role="main">
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/post', get_post_type() );

	endwhile;
	?>

</main>

<?php
get_footer('post');