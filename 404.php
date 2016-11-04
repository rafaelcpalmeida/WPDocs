<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WPDocs
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header page404">
					<h1 class="page-title"><?php esc_html_e( '/* You shouldn\'t be seeing this */', 'wpdocs' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php $str = "You've found a secret page and you shouldn't be here. Mind if I take you <a href=\"" . get_site_url() . "\">home</a>?"; ?>
					
					<p><?php _e( $str, 'wpdocs' ); ?></p>
					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
