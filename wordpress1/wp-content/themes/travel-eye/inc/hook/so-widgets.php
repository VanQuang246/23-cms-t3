<?php
/**
 * Hooks for site origin.
 *
 * This file contains hook functions attached to core hooks of site origin bundle.
 *
 * @package Travel_Eye
 */

if ( ! function_exists( 'travel_eye_customize_features_widget_fields' ) ) :

	/**
	 * Customize features widget fields.
	 *
	 * @since 1.0.0
	 *
	 * @param array             $form_options Form options.
	 * @param SiteOrigin_Widget $widget Widget instance.
	 * @return array Modified form options.
	 */
	function travel_eye_customize_features_widget_fields( $form_options, $widget ) {

		// Change defaults.
		$form_options['features']['fields']['container_color']['default'] = '#ed1c24';
		$form_options['features']['fields']['icon_color']['default'] = '#ed1c24';
		$form_options['features']['fields']['icon']['default'] = 'fontawesome-star';
		$form_options['features']['fields']['container_color']['default'] = '#ed1c24';
		$form_options['container_shape']['default'] = '';
		$form_options['icon_size']['default'] = '60px';
		$form_options['per_row']['default'] = 4;

		return $form_options;

	}

endif;

add_filter( 'siteorigin_widgets_form_options_sow-features', 'travel_eye_customize_features_widget_fields', 10, 2 );

if ( ! function_exists( 'travel_eye_add_tab_in_builer_widgets_panel' ) ) :

	/**
	 * Add tab in builder widgets section.
	 *
	 * @since 1.0.0
	 *
	 * @param array $tabs Tabs.
	 * @return array Modified tabs.
	 */
	function travel_eye_add_tab_in_builer_widgets_panel( $tabs ) {
		$tabs['travel-eye'] = array(
			'title'  => __( 'Travel Eye Widgets', 'travel-eye' ),
			'filter' => array(
				'groups' => array( 'travel-eye' ),
			),
		);
		return $tabs;
	}

endif;

add_filter( 'siteorigin_panels_widget_dialog_tabs', 'travel_eye_add_tab_in_builer_widgets_panel' );

if ( ! function_exists( 'travel_eye_group_theme_widgets_in_builder' ) ) :

	/**
	 * Grouping theme widgets in builder.
	 *
	 * @since 1.0.0
	 *
	 * @param array $widgets Widgets array.
	 * @return array Modified widgets array.
	 */
	function travel_eye_group_theme_widgets_in_builder( $widgets ) {

		if ( isset( $GLOBALS['wp_widget_factory'] ) && ! empty( $GLOBALS['wp_widget_factory']->widgets ) ) {
			$all_widgets = array_keys( $GLOBALS['wp_widget_factory']->widgets );
			foreach ( $all_widgets as $widget ) {
				if ( false !== strpos( $widget, 'Travel_Eye_' ) ) {
					$widgets[ $widget ]['groups'] = array( 'travel-eye' );
					$widgets[ $widget ]['icon']   = 'dashicons dashicons-awards';
				}
			}
		}
		return $widgets;

	}
endif;

add_filter( 'siteorigin_panels_widgets', 'travel_eye_group_theme_widgets_in_builder' );


if ( ! function_exists( 'travel_eye_panels_row_style_attributes' ) ) :

	/**
	 * Add custom attributes in row.
	 *
	 * @since 1.0.0
	 *
	 * @param array $attr Attributes.
	 * @param array $style Widget style.
	 * @return array Modified attributes.
	 */
	function travel_eye_panels_row_style_attributes( $attr, $style ) {

		if ( isset( $style['row_stretch'] ) && 'full' === $style['row_stretch'] ) {
			$attr['class'][] = 'panel-row-style-full-width';
		}
		if ( isset( $style['row_stretch'] ) && 'full-stretched' === $style['row_stretch'] ) {
			$attr['class'][] = 'panel-row-style-full-stretched';
		}
		return $attr;

	}

endif;

add_filter( 'siteorigin_panels_row_style_attributes', 'travel_eye_panels_row_style_attributes', 10, 2 );

if ( ! function_exists( 'travel_eye_customize_so_widgets_status' ) ) :

	/**
	 * Customize to make widgets active.
	 *
	 * @since 1.0.0
	 *
	 * @param array $active Array of widgets.
	 * @return array Modified array.
	 */
	function travel_eye_customize_so_widgets_status( $active ) {

		$active['so-features-widget']    = true;
		$active['features']              = true;

		$active['so-slider-widget']      = true;
		$active['slider']                = true;

		$active['so-google-map-widget']  = true;
		$active['google-map']            = true;

		$active['so-image-widget']       = true;
		$active['image']                 = true;

		$active['so-cta-widget']         = true;
		$active['cta']                   = true;

		$active['so-contact-widget']     = true;
		$active['contact']               = true;

		$active['so-testimonial-widget'] = true;
		$active['testimonial']           = true;

		$active['so-hero-widget']        = true;
		$active['hero']                  = true;

		return $active;

	}

endif;

add_filter( 'siteorigin_widgets_active_widgets', 'travel_eye_customize_so_widgets_status' );
