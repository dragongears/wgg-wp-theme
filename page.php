<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WGG_2016
 */

get_header(); ?>

<!-- BLOG CONTENT
================================================== -->
<div class="container">
	<div class="row" id="primary">

		<main id="content" class="col-sm-8" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

<!--				--><?php //wgg_2016_paging_nav(); ?>
				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- content -->

		<!-- SIDEBAR
		================================================== -->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>

	</div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>
