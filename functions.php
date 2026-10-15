<?php
/**
 * Fieldnote functions and definitions.
 *
 * A block theme needs very little PHP. Everything visual is handled by
 * theme.json, templates, template parts and patterns. This file only:
 *
 *  1. Registers a pattern category so the theme's patterns are grouped.
 *  2. Loads small per-block stylesheets on demand (wp_enqueue_block_style).
 *  3. Registers a couple of block styles that theme.json cannot express.
 *
 * @package Fieldnote
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'fieldnote_setup' ) ) :
	/**
	 * Theme setup.
	 *
	 * Block themes get most supports automatically (title-tag, html5, feed
	 * links, responsive embeds, editor styles, etc.), so this stays short.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function fieldnote_setup() {
		// Load the same per-block CSS inside the editor canvas.
		add_editor_style( 'style.css' );

		// The theme ships its own curated patterns.
		remove_theme_support( 'core-block-patterns' );
	}
endif;
add_action( 'after_setup_theme', 'fieldnote_setup' );

if ( ! function_exists( 'fieldnote_pattern_categories' ) ) :
	/**
	 * Register pattern categories used by files in /patterns.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function fieldnote_pattern_categories() {
		register_block_pattern_category(
			'fieldnote',
			array(
				'label'       => _x( 'Fieldnote', 'Block pattern category', 'fieldnote' ),
				'description' => __( 'Sections and layouts designed for the Fieldnote theme.', 'fieldnote' ),
			)
		);

		register_block_pattern_category(
			'fieldnote-pages',
			array(
				'label'       => _x( 'Fieldnote pages', 'Block pattern category', 'fieldnote' ),
				'description' => __( 'Full-page starting points for the Fieldnote theme.', 'fieldnote' ),
			)
		);
	}
endif;
add_action( 'init', 'fieldnote_pattern_categories' );

if ( ! function_exists( 'fieldnote_block_stylesheets' ) ) :
	/**
	 * Enqueue per-block stylesheets.
	 *
	 * Each file in assets/css/blocks/ is named after the block it styles
	 * (core-button.css -> core/button). WordPress only prints the CSS when
	 * that block is actually rendered on the page, and also loads it in the
	 * editor, so there is no global stylesheet to keep in sync.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function fieldnote_block_stylesheets() {
		$files = glob( get_template_directory() . '/assets/css/blocks/*.css' );

		if ( empty( $files ) ) {
			return;
		}

		foreach ( $files as $file ) {
			$filename   = basename( $file, '.css' );
			$block_name = preg_replace( '/-/', '/', $filename, 1 ); // core-button -> core/button.

			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => 'fieldnote-' . $filename,
					'src'    => get_theme_file_uri( 'assets/css/blocks/' . $filename . '.css' ),
					'path'   => $file,
					'ver'    => wp_get_theme()->get( 'Version' ),
				)
			);
		}
	}
endif;
add_action( 'init', 'fieldnote_block_stylesheets' );

if ( ! function_exists( 'fieldnote_block_styles' ) ) :
	/**
	 * Register custom block styles.
	 *
	 * Section styles (colour schemes for Group/Columns/Cover) are defined as
	 * JSON in /styles/sections and need no PHP. These two need a pseudo
	 * element, which theme.json cannot express, so they carry inline CSS.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function fieldnote_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark',
				'label'        => __( 'Checkmark', 'fieldnote' ),
				'inline_style' => '
				ul.is-style-checkmark { list-style: none; padding-inline-start: 0; }
				ul.is-style-checkmark li { position: relative; padding-inline-start: 1.75em; }
				ul.is-style-checkmark li::before {
					content: "";
					position: absolute;
					inset-inline-start: 0;
					top: 0.45em;
					width: 1em;
					height: 0.55em;
					border-inline-start: 2px solid var(--wp--preset--color--accent);
					border-bottom: 2px solid var(--wp--preset--color--accent);
					transform: rotate(-45deg);
				}',
			)
		);

		register_block_style(
			'core/heading',
			array(
				'name'         => 'eyebrow',
				'label'        => __( 'Eyebrow', 'fieldnote' ),
				'inline_style' => '
				.is-style-eyebrow {
					font-family: var(--wp--preset--font-family--body);
					font-size: var(--wp--preset--font-size--small);
					font-weight: 600;
					letter-spacing: 0.12em;
					text-transform: uppercase;
				}',
			)
		);
	}
endif;
add_action( 'init', 'fieldnote_block_styles' );
