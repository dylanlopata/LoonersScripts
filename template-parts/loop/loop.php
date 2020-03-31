<?php
/**
 * Default WordPress loop content
 *
 * The posts container ID attribute is used for Jetpack plugin's
 * infinite scroll functionality.
 *
 * @package    Modern
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  2.0.0
 */





do_action( 'wmhook_modern_postslist_before' );

?>

<div class="posts posts-list" id="posts">

	<?php

	do_action( 'tha_content_while_before' );

	while ( have_posts() ) : the_post();

		/**
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 *
		 * Or, you can use the filter hook below to modify which content file to load.
		 */
		get_template_part(
			'template-parts/content/content',
			apply_filters( 'wmhook_modern_loop_content_type', get_post_format() )
		);

	endwhile;

	do_action( 'tha_content_while_after' );

	?>

</div>

<?php

do_action( 'wmhook_modern_postslist_after' );
