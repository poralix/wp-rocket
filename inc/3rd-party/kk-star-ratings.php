<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

if ( class_exists( 'BhittaniPlugin_kkStarRatings' ) ) :

	add_action( 'kksr_rate', 'rocket_clear_cache_on_kksr_rate' );
	/**
	 * Conflict with kk Star Ratings: Clear the cache when a post gets rated.
	 *
	 * @since 2.5.3
	 *
	 * @param int $post_id Post ID.
	 */
	function rocket_clear_cache_on_kksr_rate( $post_id ) {
		rocket_clean_post( $post_id );
	}

endif;
