<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage kmgimport
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since kmgimport
	 *
	 * @return void
	 */
	function kmgimport_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'kmgimport-columns-overlap',
				'label' => esc_html__( 'Overlap', 'kmgimport' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'kmgimport-border',
				'label' => esc_html__( 'Borders', 'kmgimport' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'kmgimport-border',
				'label' => esc_html__( 'Borders', 'kmgimport' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kmgimport-border',
				'label' => esc_html__( 'Borders', 'kmgimport' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kmgimport-image-frame',
				'label' => esc_html__( 'Frame', 'kmgimport' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'kmgimport-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'kmgimport' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'kmgimport-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'kmgimport' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'kmgimport-border',
				'label' => esc_html__( 'Borders', 'kmgimport' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'kmgimport-separator-thick',
				'label' => esc_html__( 'Thick', 'kmgimport' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'kmgimport-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'kmgimport' ),
			)
		);
	}
	add_action( 'init', 'kmgimport_register_block_styles' );
}
