<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WGG_2016
 */

get_header(); ?>

	<div class="container">
		<div class="row" id="primary">

			<main id="content" class="col-sm-8">

				<section class="error-404 not-found">
					<header class="page-header">
						<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wgg-2016' ); ?></h2>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wgg-2016' ); ?></p>

						<div class="widget">
							<?php
                                get_search_form();
							?>
						</div>
						<?php
							the_widget( 'WP_Widget_Recent_Posts', '', "before_title=<h4 class='widget-title'>&after_title=</h4>"  );

							// Only show the widget if site has multiple categories.
							if ( wgg_2016_categorized_blog() ) :
						?>

						<div class="widget widget_categories">
							<h4 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'wgg-2016' ); ?></h4>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div><!-- .widget -->

						<?php
							endif;

							/* translators: %1$s: smiley */
							$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'wgg-2016' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "before_title=<h4 class='widget-title'>&after_title=</h4>$archive_content" );

							the_widget( 'WP_Widget_Tag_Cloud' );
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #content -->

			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>

		</div><!-- #primary -->
	</div><!-- .container -->

<?php
get_footer();
