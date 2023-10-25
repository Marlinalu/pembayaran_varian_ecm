<?php

/**
 * This file adds block styles to the Ona WordPress theme.
 *
 * @since 	 1.5
 * @package Ona
 * @link    https://ona.deothemes.com
 */
/*--------------------------------------------------------------
# Block Styles
--------------------------------------------------------------*/

if ( function_exists( 'register_block_style' ) ) {
    register_block_style( 'core/navigation', array(
        'name'         => 'ona-tablet-justify-center',
        'label'        => esc_html__( 'Tablet align center', 'ona' ),
        'inline_style' => '@media only screen and (max-width: 781px) {
				.is-style-ona-tablet-justify-center {
					justify-content: center !important;
					align-items: center !important;
					--navigation-layout-justify: center !important;
					--navigation-layout-align: center !important;
					--navigation-layout-justification-setting: center !important;
				}
			}',
    ) );
    register_block_style( 'core/navigation', array(
        'name'         => 'ona-tablet-justify-end',
        'label'        => esc_html__( 'Tablet align right', 'ona' ),
        'inline_style' => '@media only screen and (max-width: 781px) {
				.is-style-ona-tablet-justify-end {
					justify-content: flex-end !important;
					align-items: flex-end !important;
					--navigation-layout-justify: flex-end !important;
					--navigation-layout-align: flex-end !important;
					--navigation-layout-justification-setting: flex-end !important;
				}
			}',
    ) );
    register_block_style( 'core/navigation', array(
        'name'         => 'ona-tablet-justify-start',
        'label'        => esc_html__( 'Tablet align left', 'ona' ),
        'inline_style' => '@media only screen and (max-width: 781px) {
				.is-style-ona-tablet-justify-start {
					justify-content: flex-start !important;
					align-items: flex-start !important;
					--navigation-layout-justify: flex-start !important;
					--navigation-layout-align: flex-start !important;
					--navigation-layout-justification-setting: flex-start !important;
				}
			}',
    ) );
    register_block_style( 'core/navigation-submenu', array(
        'name'         => 'ona-megamenu',
        'label'        => esc_html__( 'Mega Menu', 'ona' ),
        'inline_style' => '@media only screen and (min-width: 782px) {
				.is-style-ona-megamenu .wp-block-navigation__submenu-container {
					display: grid!important;
					grid-template-columns: repeat(2,minmax(0,1fr));
					min-width: 400px!important;
				}
			}',
    ) );
    // Search
    register_block_style( 'core/search', array(
        'name'         => 'ona-search-button-no-space',
        'label'        => esc_html__( 'Button no Space', 'ona' ),
        'inline_style' => '.is-style-ona-search-button-no-space .wp-block-search__button {
				border-top-left-radius: 0 !important;
				border-bottom-left-radius: 0 !important;
				margin: 0 !important;
			}
			
			.is-style-ona-search-button-no-space .wp-block-search__input {
				border-top-right-radius: 0 !important;
				border-bottom-right-radius: 0 !important;
			}',
    ) );
    // Post Template Grid
    register_block_style( 'core/post-template', array(
        'name'         => 'ona-post-grid-gap-30',
        'label'        => esc_html__( 'Gap 30', 'ona' ),
        'inline_style' => '.is-style-ona-post-grid-gap-30 { column-gap: 30px !important; }',
    ) );
    register_block_style( 'core/post-template', array(
        'name'         => 'ona-post-grid-gap-40',
        'label'        => esc_html__( 'Gap 40', 'ona' ),
        'inline_style' => '.is-style-ona-post-grid-gap-40 { column-gap: 40px !important; }',
    ) );
    register_block_style( 'core/post-template', array(
        'name'         => 'ona-post-grid-gap-64',
        'label'        => esc_html__( 'Gap 64', 'ona' ),
        'inline_style' => '.is-style-ona-post-grid-gap-64 { column-gap: 64px !important; }',
    ) );
    // Post Terms
    register_block_style( 'core/post-terms', array(
        'name'         => 'ona-post-terms-pill-shape',
        'label'        => esc_html__( 'Pill shape', 'ona' ),
        'inline_style' => '.is-style-ona-post-terms-pill-shape a {
				background-color: black;
				background-image: none !important;
				padding: 4px 10px;
				border-radius: 50px;
			}
			.is-style-ona-post-terms-pill-shape a:hover {
				background-color: #222222;
			}
			',
    ) );
    // Read More
    register_block_style( 'core/read-more', array(
        'name'         => 'ona-read-more-cover',
        'label'        => esc_html__( 'Cover', 'ona' ),
        'inline_style' => '.is-style-ona-read-more-cover {
				font-size: 0;
				display: block;
				width: 100%;
				position: absolute;
				bottom: 0;
				top: 0;
				left: 0;
				right: 0;
			}',
    ) );
    
    if ( function_exists( 'mc4wp' ) ) {
        // Mailchimp for WP
        register_block_style( 'mailchimp-for-wp/form', array(
            'name'         => 'ona-newsletter',
            'label'        => esc_html__( 'Newsletter', 'ona' ),
            'is_default'   => true,
            'inline_style' => '
					.ona-newsletter-fields {
						flex-grow: 1;
						margin-bottom: 24px;
					}
					.ona-newsletter-break {
						flex-basis: 100%;
						height: 0;
					}
					.ona-consent-checkbox {
						font-size: var(--wp--preset--font-size--small);
						flex-basis: 100%;
					}
					.ona-newsletter .mc4wp-form-fields {
						display: flex;
						position: relative;
						flex-wrap: wrap;
					}
					.ona-newsletter .mc4wp-form-fields p {
						margin: 0;
						font-size: 14px;
						color: inherit;
					}
					.ona-newsletter .mc4wp-form-fields p input {
						font-size: var(--wp--preset--font-size--small);
					}
					.ona-newsletter .mc4wp-form-fields p:first-child {
						flex: 1 0 auto;
					}
					.ona-newsletter .mc4wp-form-fields p:first-child label {
						font-size: 0;
					}
					.ona-newsletter .mc4wp-form-fields p:first-child input {
						background-color: transparent;
						color: inherit;
						border: 0;
						padding: 5px 0;
						border-bottom: 1px solid;
						border-color: inherit;
					}
					.ona-newsletter .mc4wp-form-fields p:last-child {
						position: absolute;
						right: 0;
						top: 0;
					}
					.ona-newsletter .mc4wp-form-fields p:last-child input {
						background-color: transparent;
						color: inherit;
						border: 0;
						padding: 5px;
						font-weight: 700;
					}',
        ) );
        register_block_style( 'mailchimp-for-wp/form', array(
            'name'         => 'ona-newsletter-style-2',
            'label'        => esc_html__( 'Style 2', 'ona' ),
            'inline_style' => '
					.ona-newsletter-style-2 .mc4wp-form-fields {
						display: flex;
						position: relative;
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p {
						margin: 0;
						font-size: 14px;
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p input {
						font-size: var(--wp--preset--font-size--small);
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:first-child {
						flex: 1 0 auto;
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:first-child label {
						font-size: 0;
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:first-child input {
						background-color: #2B2D31;
						color: var(--wp--preset--color--white);
						border: 0;
						border-radius: 50px;
						padding: 17px 20px;
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:first-child input:focus {
						outline: 1px solid var(--wp--preset--color--white);
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:first-child input::placeholder {				
						color: var(--wp--preset--color--white);
						opacity: 1;
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:first-child input:-ms-input-placeholder {
						color: var(--wp--preset--color--white);
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:first-child input::-ms-input-placeholder {
						color: var(--wp--preset--color--white);
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:last-child {
						position: absolute;
						right: 6px;
						top: 7px;
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:last-child input {
						background-color: var(--wp--preset--color--white);
						color: var(--wp--preset--color--black);
						border: 0;
						border-radius: 50px;
						padding: 10px 28px;
						font-weight: 700;
					}
					.ona-newsletter-style-2 .mc4wp-form-fields p:last-child input:hover {
						background-color: var(--wp--preset--color--primary);
						color: var(--wp--preset--color--white);
					}',
        ) );
        register_block_style( 'mailchimp-for-wp/form', array(
            'name'         => 'ona-newsletter-style-3',
            'label'        => esc_html__( 'Style 3', 'ona' ),
            'inline_style' => '
					.ona-newsletter-style-3 .mc4wp-form-fields p {
						margin-top: 0;
						margin-bottom: 8px;
					}
					.ona-newsletter-style-3 .mc4wp-form-fields p:first-child label {
						font-size: 0;
					}
					.ona-newsletter-style-3 .mc4wp-form-fields p:first-child input {
						border-radius: 4px;
						padding: 10px 20px;
					}
					.ona-newsletter-style-3 .mc4wp-form-fields p:first-child input:focus {
						outline: 1px solid var(--wp--preset--color--white);
					}
					.ona-newsletter-style-3 .mc4wp-form-fields p:last-child input {
						background-color: var(--wp--preset--color--primary);
						color: var(--wp--preset--color--white);
						border-color: var(--wp--preset--color--stroke);
						border-radius: 4px;
						padding: 10px 28px;
					}
					.ona-newsletter-style-3 .mc4wp-form-fields p:last-child input:hover {
						background-color: var(--wp--preset--color--primary);
						color: var(--wp--preset--color--white);
					}',
        ) );
    }
    
    $ona_offset_styles = array(
        'negative-offset-left'   => '@media only screen and (min-width: 782px) {
			div.is-style-ona-negative-offset-left {
				margin-left: -100px !important;
				z-index: 1;
			}
		}',
        'negative-offset-right'  => '@media only screen and (min-width: 782px) {
			div.is-style-ona-negative-offset-right {
				margin-right: -100px !important;
				z-index: 1;
			}
		}',
        'negative-offset-bottom' => '@media only screen and (min-width: 782px) {
			div.is-style-ona-negative-offset-bottom {
				margin-bottom: -100px;
				margin-block-end: -100px !important;
				z-index: 1;
			}
		}',
        'negative-offset-top'    => '@media only screen and (min-width: 782px) {
			div.is-style-ona-negative-offset-top {
				margin-top: -100px !important;
				margin-block-start: -100px !important;
				z-index: 1;
			}
		}',
        'shift-right'            => '@media only screen and (min-width: 782px) {
			div.is-style-ona-shift-right {
				margin-left: 100px !important;
				margin-right: -100px !important;
				z-index: 1;
			}
		}',
        'shift-left'             => '@media only screen and (min-width: 782px) {
			div.is-style-ona-shift-left {
				margin-right: 100px !important;
				margin-left: -100px !important;
				z-index: 1;
			}
		}',
    );
    register_block_style( 'core/heading', array(
        'name'         => 'ona-alt-font',
        'label'        => esc_html__( 'Alt font', 'ona' ),
        'inline_style' => '.is-style-ona-alt-font { font-family: var(--wp--preset--font-family--alt); }',
    ) );
    register_block_style( 'core/cover', array(
        'name'         => 'ona-stroke-frame',
        'label'        => esc_html__( 'Stroke frame', 'ona' ),
        'inline_style' => '.is-style-ona-stroke-frame > span {
				margin: 1.5rem;
				border: 1px solid #fff;
				background-color: transparent!important;
			}',
    ) );
    register_block_style( 'core/group', array(
        'name'         => 'ona-negative-offset-left',
        'label'        => esc_html__( 'Offset left', 'ona' ),
        'inline_style' => $ona_offset_styles['negative-offset-left'],
    ) );
    register_block_style( 'core/column', array(
        'name'         => 'ona-negative-offset-left',
        'label'        => esc_html__( 'Offset left', 'ona' ),
        'inline_style' => $ona_offset_styles['negative-offset-left'],
    ) );
    register_block_style( 'core/group', array(
        'name'         => 'ona-negative-offset-left',
        'label'        => esc_html__( 'Offset left', 'ona' ),
        'inline_style' => $ona_offset_styles['negative-offset-left'],
    ) );
    register_block_style( 'core/column', array(
        'name'         => 'ona-negative-offset-right',
        'label'        => esc_html__( 'Offset right', 'ona' ),
        'inline_style' => $ona_offset_styles['negative-offset-right'],
    ) );
    register_block_style( 'core/group', array(
        'name'         => 'ona-negative-offset-bottom',
        'label'        => esc_html__( 'Offset bottom', 'ona' ),
        'inline_style' => $ona_offset_styles['negative-offset-bottom'],
    ) );
    register_block_style( 'core/column', array(
        'name'         => 'ona-negative-offset-bottom',
        'label'        => esc_html__( 'Offset bottom', 'ona' ),
        'inline_style' => $ona_offset_styles['negative-offset-bottom'],
    ) );
    register_block_style( 'core/group', array(
        'name'         => 'ona-negative-offset-top',
        'label'        => esc_html__( 'Offset top', 'ona' ),
        'inline_style' => $ona_offset_styles['negative-offset-top'],
    ) );
    register_block_style( 'core/column', array(
        'name'         => 'ona-negative-offset-top',
        'label'        => esc_html__( 'Offset top', 'ona' ),
        'inline_style' => $ona_offset_styles['negative-offset-top'],
    ) );
    register_block_style( 'core/group', array(
        'name'         => 'ona-shift-right',
        'label'        => esc_html__( 'Shift right', 'ona' ),
        'inline_style' => $ona_offset_styles['shift-right'],
    ) );
    register_block_style( 'core/column', array(
        'name'         => 'ona-shift-right',
        'label'        => esc_html__( 'Shift right', 'ona' ),
        'inline_style' => $ona_offset_styles['shift-right'],
    ) );
    register_block_style( 'core/group', array(
        'name'         => 'ona-shift-left',
        'label'        => esc_html__( 'Shift left', 'ona' ),
        'inline_style' => $ona_offset_styles['shift-left'],
    ) );
    register_block_style( 'core/column', array(
        'name'         => 'ona-shift-left',
        'label'        => esc_html__( 'Shift left', 'ona' ),
        'inline_style' => $ona_offset_styles['shift-left'],
    ) );
    register_block_style( 'core/group', array(
        'name'         => 'ona-hide-on-tablet',
        'label'        => esc_html__( 'Hide on Tablet', 'ona' ),
        'inline_style' => '@media only screen and (max-width: 781px) { display: none; }',
    ) );
    register_block_style( 'core/column', array(
        'name'         => 'ona-hide-on-tablet',
        'label'        => esc_html__( 'Hide on Tablet', 'ona' ),
        'inline_style' => '@media only screen and (max-width: 781px) { display: none; }',
    ) );
    register_block_style( 'core/group', array(
        'name'         => 'ona-hide-on-mobile',
        'label'        => esc_html__( 'Hide on Mobile', 'ona' ),
        'inline_style' => '@media only screen and (max-width: 599px) { display: none; }',
    ) );
    register_block_style( 'core/column', array(
        'name'         => 'ona-hide-on-mobile',
        'label'        => esc_html__( 'Hide on Mobile', 'ona' ),
        'inline_style' => '@media only screen and (max-width: 599px) { display: none; }',
    ) );
    register_block_style( 'core/button', array(
        'name'         => 'ona-button-arrow-icon',
        'label'        => esc_html__( 'Arrow icon', 'ona' ),
        'inline_style' => '
			.is-style-ona-button-arrow-icon .wp-block-button__link::after {
				content: "";
				width: 18px;
				height: 18px;
				margin-left: 10px;
				-webkit-mask: url( "' . get_template_directory_uri() . '/assets/img/arrow-right-line.svg" );
				mask: url( "' . get_template_directory_uri() . '/assets/img/arrow-right-line.svg" );
				-webkit-mask-size: cover;
				mask-size: cover;
				background-color: currentColor;
				display: inline-block;
				transition: transform .2s var(--ona-transition);
			}
			.is-style-ona-button-arrow-icon .wp-block-button__link {
				display: inline-flex;
				align-items: center;
			}
			.is-style-ona-button-arrow-icon .wp-block-button__link:hover::after {
				transform: translateX(6px);
			}
			',
    ) );
}
