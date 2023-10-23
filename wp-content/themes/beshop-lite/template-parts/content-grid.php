<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BeShop Lite
 */
$beshop_lite_blogdate = get_theme_mod('beshop_blogdate', 1);
$beshop_lite_blogauthor = get_theme_mod('beshop_blogauthor', 1);

?>
<div class="col-lg-6 bsgrid-item">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="bshop-single-list">
			<?php beshop_post_thumbnail(); ?>
			<div class="bslite-gcontent">
				<?php
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				?>

				<div class="entry-content">
					<?php
					the_excerpt();

					if ('post' === get_post_type() && (!empty($beshop_lite_blogdate) || !empty($beshop_lite_blogauthor))) {
						beshop_lite_posts_author_meta();
					}
					?>

				</div><!-- .entry-content -->
			</div>

		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>