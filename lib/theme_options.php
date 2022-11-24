<?php
$redux_url = '';
if( class_exists('ReduxFramework') ){
	$redux_url = ReduxFramework::$_url;
}

$logo_url 					= get_template_directory_uri() . '/images/logo.png'; 
$favicon_url 				= get_template_directory_uri() . '/images/favicon.ico';



$family_fonts = array(
	"Arial, Helvetica, sans-serif"                          => "Arial, Helvetica, sans-serif"
	,"'Arial Black', Gadget, sans-serif"                    => "'Arial Black', Gadget, sans-serif"
	,"'Bookman Old Style', serif"                           => "'Bookman Old Style', serif"
	,"'Comic Sans MS', cursive"                             => "'Comic Sans MS', cursive"
	,"Courier, monospace"                                   => "Courier, monospace"
	,"Garamond, serif"                                      => "Garamond, serif"
	,"Georgia, serif"                                       => "Georgia, serif"
	,"Impact, Charcoal, sans-serif"                         => "Impact, Charcoal, sans-serif"
	,"'Lucida Console', Monaco, monospace"                  => "'Lucida Console', Monaco, monospace"
	,"'Lucida Sans Unicode', 'Lucida Grande', sans-serif"   => "'Lucida Sans Unicode', 'Lucida Grande', sans-serif"
	,"'MS Sans Serif', Geneva, sans-serif"                  => "'MS Sans Serif', Geneva, sans-serif"
	,"'MS Serif', 'New York', sans-serif"                   => "'MS Serif', 'New York', sans-serif"
	,"'Palatino Linotype', 'Book Antiqua', Palatino, serif" => "'Palatino Linotype', 'Book Antiqua', Palatino, serif"
	,"Tahoma,Geneva, sans-serif"                            => "Tahoma, Geneva, sans-serif"
	,"'Times New Roman', Times,serif"                       => "'Times New Roman', Times, serif"
	,"'Trebuchet MS', Helvetica, sans-serif"                => "'Trebuchet MS', Helvetica, sans-serif"
	,"Verdana, Geneva, sans-serif"                          => "Verdana, Geneva, sans-serif"
	,"CustomFont"                          					=> "CustomFont"
);

$header_layout_options = array();
$header_image_folder = get_template_directory_uri() . '/admin/assets/images/headers/';
for( $i = 1; $i <= 3; $i++ ){
	$header_layout_options['v' . $i] = array(
		'alt'  => sprintf(esc_html__('Header Layout %s', 'bakershop'), $i)
		,'img' => $header_image_folder . 'header_v'.$i.'.jpg'
	);
}

$loading_screen_options = array();
$loading_image_folder = get_template_directory_uri() . '/images/loading/';
for( $i = 1; $i <= 10; $i++ ){
	$loading_screen_options[$i] = array(
		'alt'  => sprintf(esc_html__('Loading Image %s', 'bakershop'), $i)
		,'img' => $loading_image_folder . 'loading_'.$i.'.svg'
	);
}

// $footer_block_options = bakershop_get_footer_block_options();

// $breadcrumb_layout_options = array();
// $breadcrumb_image_folder = get_template_directory_uri() . '/admin/assets/images/breadcrumbs/';
// for( $i = 1; $i <= 2; $i++ ){
// 	$breadcrumb_layout_options['v' . $i] = array(
// 		'alt'  => sprintf(esc_html__('Breadcrumb Layout %s', 'bakershop'), $i)
// 		,'img' => $breadcrumb_image_folder . 'breadcrumb_v'.$i.'.jpg'
// 	);
// }

// $sidebar_options = array();
// $default_sidebars = bakershop_get_list_sidebars();
// if( is_array($default_sidebars) ){
// 	foreach( $default_sidebars as $key => $_sidebar ){
// 		$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
// 	}
// }

$product_loading_image = get_template_directory_uri() . '/images/prod_loading.gif';

$option_fields = array();

/*** General Tab ***/
$option_fields['general'] = array(
	array(
		'id'        => 'section-logo-favicon'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Logo - Favicon', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_logo'
		,'type'     => 'media'
		,'url'      => true
		,'title'    => esc_html__( 'Logo', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => esc_html__( 'Select an image file for the main logo', 'bakershop' )
		,'readonly' => false
		,'default'  => array( 'url' => $logo_url )
	)
	,array(
		'id'        => 'bs_logo_mobile'
		,'type'     => 'media'
		,'url'      => true
		,'title'    => esc_html__( 'Mobile Logo', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => esc_html__( 'Display this logo on mobile', 'bakershop' )
		,'readonly' => false
		,'default'  => array( 'url' => '' )
	)
	,array(
		'id'        => 'bs_logo_sticky'
		,'type'     => 'media'
		,'url'      => true
		,'title'    => esc_html__( 'Sticky Logo', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => esc_html__( 'Display this logo on sticky header', 'bakershop' )
		,'readonly' => false
		,'default'  => array( 'url' => '' )
	)
	,array(
		'id'        => 'bs_logo_width'
		,'type'     => 'text'
		,'url'      => true
		,'title'    => esc_html__( 'Logo Width', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => esc_html__( 'Set width for logo (in pixels)', 'bakershop' )
		,'default'  => '155'
	)
	,array(
		'id'        => 'bs_device_logo_width'
		,'type'     => 'text'
		,'url'      => true
		,'title'    => esc_html__( 'Logo Width on Device', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => esc_html__( 'Set width for logo (in pixels)', 'bakershop' )
		,'default'  => '141'
	)
	,array(
		'id'        => 'bs_favicon'
		,'type'     => 'media'
		,'url'      => true
		,'title'    => esc_html__( 'Favicon', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => esc_html__( 'Select a PNG, GIF or ICO image', 'bakershop' )
		,'readonly' => false
		,'default'  => array( 'url' => $favicon_url )
	)
	,array(
		'id'        => 'bs_text_logo'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Text Logo', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => 'bakershop'
	)
	
	,array(
		'id'        => 'section-layout-style'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Layout Style', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_layout_fullwidth'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Layout Fullwidth', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
	)
	,array(
		'id'        => 'bs_header_layout_fullwidth'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Header Layout Fullwidth', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'required'	=> array( 'bs_layout_fullwidth', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_main_content_layout_fullwidth'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Main Content Layout Fullwidth', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'required'	=> array( 'bs_layout_fullwidth', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_footer_layout_fullwidth'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Footer Layout Fullwidth', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'required'	=> array( 'bs_layout_fullwidth', 'equals', '1' )
	)
	,array(
		'id'       	=> 'bs_layout_style'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Layout Style', 'bakershop' )
		,'subtitle' => esc_html__( 'You can override this option for the individual page', 'bakershop' )
		,'desc'     => ''
		,'options'  => array(
			'wide' 		=> 'Wide'
			,'boxed' 	=> 'Boxed'
		)
		,'default'  => 'wide'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
		,'required'	=> array( 'bs_layout_fullwidth', 'equals', '0' )
	)
	
	,array(
		'id'        => 'section-rtl'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Right To Left', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_enable_rtl'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Enable Right To Left', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
	)
	
	,array(
		'id'        => 'section-smooth-scroll'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Smooth Scroll', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_smooth_scroll'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Enable Smooth Scroll', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
	)
	
	,array(
		'id'        => 'section-back-to-top-button'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Back To Top Button', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_back_to_top_button'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Enable Back To Top Button', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
	,array(
		'id'        => 'bs_back_to_top_button_on_mobile'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Enable Back To Top Button On Mobile', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
	
	,array(
		'id'        => 'section-loading-screen'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Loading Screen', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_loading_screen'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Loading Screen', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
	)
	,array(
		'id'        => 'bs_loading_image'
		,'type'     => 'image_select'
		,'title'    => esc_html__( 'Loading Image', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $loading_screen_options
		,'default'  => '1'
	)
	,array(
		'id'        => 'bs_custom_loading_image'
		,'type'     => 'media'
		,'url'      => true
		,'title'    => esc_html__( 'Custom Loading Image', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => ''
		,'readonly' => false
		,'default'  => array( 'url' => '' )
	)
	,array(
		'id'       	=> 'bs_display_loading_screen_in'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Display Loading Screen In', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'all-pages' 		=> esc_html__( 'All Pages', 'bakershop' )
			,'homepage-only' 	=> esc_html__( 'Homepage Only', 'bakershop' )
			,'specific-pages' 	=> esc_html__( 'Specific Pages', 'bakershop' )
		)
		,'default'  => 'all-pages'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'       	=> 'bs_loading_screen_exclude_pages'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Exclude Pages', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'data'     => 'pages'
		,'multi'    => true
		,'default'	=> ''
		,'required'	=> array( 'bs_display_loading_screen_in', 'equals', 'all-pages' )
	)
	,array(
		'id'       	=> 'bs_loading_screen_specific_pages'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Specific Pages', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'data'     => 'pages'
		,'multi'    => true
		,'default'	=> ''
		,'required'	=> array( 'bs_display_loading_screen_in', 'equals', 'specific-pages' )
	)
);

/*** Color Scheme Tab ***/
$option_fields['color-scheme'] = array(
	array(
		'id'          => 'bs_color_scheme'
		,'type'       => 'image_select'
		,'presets'    => true
		,'full_width' => false
		,'title'      => esc_html__( 'Select Color Scheme of Theme', 'bakershop' )
		,'subtitle'   => ''
		,'desc'       => ''
		,'options'    => $preset_colors_options
		,'default'    => 'red'
	)
	,array(
		'id'        => 'section-general-colors'
		,'type'     => 'section'
		,'title'    => esc_html__( 'General Colors', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'      => 'info-primary-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Primary Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_primary_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Primary Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_text_color_in_bg_primary'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Text Color In Background Primary Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'      => 'info-main-content-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Main Content Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_main_content_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Main Content Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#707070'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_text_light_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Text Light Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#999999'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_text_bold_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Text Bold Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_text_highlight_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Text Highlight Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_link_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Link Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_link_color_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Link Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#e5e5e5'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'      => 'info-input-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Input Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_input_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Input - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_input_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Input - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#e5e5e5'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_input_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Input - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_input_border_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Input - Border Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#d1d1d1'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'      => 'info-button-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Button Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_button_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Button - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_button_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Button - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 0
		)
	)
	,array(
		'id'       => 'bs_button_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Button - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_button_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Button - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_button_background_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Button - Background Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_button_border_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Button - Border Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-breadcrumb-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Breadcrumb Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_breadcrumb_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Breadcrumb - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#707070'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_breadcrumb_heading_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Breadcrumb - Heading Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_breadcrumb_link_color_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Breadcrumb - Link Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_breadcrumb_img_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Breadcrumb Has Background Image - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_breadcrumb_img_heading_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Breadcrumb Has Background Image - Heading Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_breadcrumb_img_link_color_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Breadcrumb Has Background Image - Link Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_breadcrumb_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Breadcrumb - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_breadcrumb_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Breadcrumb - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#e5e5e5'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-shop-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Shop Page Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_shop_categories_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Shop Categories Background Colors', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#f6f5f6'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'        => 'section-header-colors'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Header Colors', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'      => 'info-middle-header-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Middle Header Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_middle_header_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Middle Header - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_middle_header_icon_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Middle Header - Icon Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_middle_header_icon_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Middle Header - Icon Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#e5e5e5'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_middle_header_icon_color_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Middle Header - Icon Hover Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_middle_header_icon_border_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Middle Header - Icon Border Hover Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-header-cart-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Header Cart Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_header_cart_number_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Number Of Cart Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_cart_number_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Number Of Cart Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-header-search-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Header Search Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_header_search_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Search - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#707070'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_search_placeholder_text'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Search Placeholder - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#999999'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_search_icon_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Search - Icon Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_search_icon_hover_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Search - Icon Hover Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_search_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Search - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#f6f5f6'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_search_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Search - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#f6f5f6'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-bottom-header-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Bottom Header Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_bottom_header_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Bottom Header - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_bottom_header_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Bottom Header - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#e5e5e5'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'        => 'section-menu-colors'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Menu Colors', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'       => 'bs_menu_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_menu_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'      => 'info-sub-menu-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Sub Menu Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_sub_menu_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Sub Menu - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#707070'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_sub_menu_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Sub Menu - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_sub_menu_heading_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Sub Menu - Heading Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_sub_menu_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Sub Menu - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-vertical-menu-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Vertical Menu Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_vertical_icon_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Vertical Menu - Icon Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_vertical_menu_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Vertical Menu - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_vertical_menu_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Vertical Menu - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_vertical_menu_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Vertical Menu - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#e5e5e5'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_vertical_menu_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Vertical Menu - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_vertical_sub_menu_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Vertical Sub Menu - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#707070'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_vertical_sub_menu_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Vertical Sub Menu - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-header-mobile-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Menu Header Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_header_mobile_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Mobile - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_mobile_icon_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Mobile - Icon Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_mobile_cart_number_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Mobile - Cart Number Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_header_mobile_cart_number_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Header Mobile - Cart Number Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-menu-mobile-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Menu Mobile Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_tab_menu_mobile_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Tab Mobile - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_tab_menu_mobile_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Tab Mobile - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_tab_menu_mobile_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Tab Mobile - Text Hover Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_tab_menu_mobile_background_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Tab Mobile - Background Hover Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_menu_mobile_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Mobile - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_menu_mobile_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Mobile - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_menu_mobile_heading_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Mobile - Heading Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_menu_mobile_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Mobile - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_menu_mobile_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Menu Mobile - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#e5e5e5'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_bottom_menu_mobile_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Bottom Menu Mobile - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#f6f5f6'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_bottom_menu_mobile_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Bottom Menu Mobile - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#707070'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'        => 'section-footer-colors'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Footer Colors', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'       => 'bs_footer_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Footer - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_footer_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Footer - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#707070'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_footer_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Footer - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_footer_heading_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Footer - Heading Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_footer_border_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Footer - Border Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#e5e5e5'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_footer_border_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Footer - Border Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'        => 'section-product-colors'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Product Colors', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'       => 'bs_product_name_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Product Name - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_name_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Product Name - Text Hover Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_price_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Product - Price Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#000000'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_del_price_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Product - Del Price Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#848484'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_sale_price_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Product - Sale Price Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_rating_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Product - Rating Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#f9ac00'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_rating_fill_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Product - Rating Fill Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#f9ac00'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-product-button-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Thumbnail Product Button Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_product_button_thumbnail_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Thumbnail Button - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_button_thumbnail_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Thumbnail Button - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_button_thumbnail_text_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Thumbnail Button - Text Color Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_button_thumbnail_background_hover'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Thumbnail Button - Background Hover', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#161616'
			,'alpha'	=> 1
		)
	)
	
	,array(
		'id'      => 'info-product-label-colors'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Product Label Colors', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       => 'bs_product_sale_label_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Sale Label - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_sale_label_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Sale Label - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#39b54a'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_new_label_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'New Label - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_new_label_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'New Label - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#0b5fb5'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_feature_label_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Feature Label - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_feature_label_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'Feature Label - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#a20401'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_outstock_label_text_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'OutStock Label - Text Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#ffffff'
			,'alpha'	=> 1
		)
	)
	,array(
		'id'       => 'bs_product_outstock_label_background_color'
		,'type'     => 'color_rgba'
		,'title'    => esc_html__( 'OutStock Label - Background Color', 'bakershop' )
		,'subtitle' => ''
		,'default'  => array(
			'color' 	=> '#989898'
			,'alpha'	=> 1
		)
	)
);

/*** Typography Tab ***/
$option_fields['typography'] = array(
	array(
		'id'        => 'section-fonts'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Fonts', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'       			=> 'bs_body_font'
		,'type'     		=> 'typography'
		,'title'    		=> esc_html__( 'Body Font', 'bakershop' )
		,'subtitle' 		=> ''
		,'google'   		=> true
		,'font-style'   	=> true
		,'text-align'   	=> false
		,'color'   			=> false
		,'letter-spacing' 	=> true
		,'preview'			=> array('always_display' => true)
		,'default'  		=> array(
			'font-family'  		=> 'Jost'
			,'font-weight' 		=> '400'
			,'font-size'   		=> '16px'
			,'line-height' 		=> '28px'
			,'letter-spacing' 	=> '0'
			,'font-style'   	=> ''
			,'google'	   		=> true
		)
		,'fonts'	=> $family_fonts
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 20)
	)
	,array(
		'id'       			=> 'bs_heading_font'
		,'type'     		=> 'typography'
		,'title'    		=> esc_html__( 'Heading Font', 'bakershop' )
		,'subtitle' 		=> ''
		,'google'   		=> true
		,'font-style'   	=> false
		,'text-align'   	=> false
		,'color'   			=> false
		,'line-height'  	=> false
		,'font-size'    	=> false
		,'letter-spacing' 	=> true
		,'preview'			=> array('always_display' => true)
		,'default'  			=> array(
			'font-family'  		=> 'Jost'
			,'font-weight' 		=> '600'
			,'letter-spacing' 	=> '0'
			,'google'	   		=> true
		)
		,'fonts'	=> $family_fonts
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 20)
	)
	,array(
		'id'       			=> 'bs_menu_font'
		,'type'     		=> 'typography'
		,'title'    		=> esc_html__( 'Menu Font', 'bakershop' )
		,'subtitle' 		=> ''
		,'google'   		=> true
		,'font-style'   	=> false
		,'text-align'   	=> false
		,'color'   			=> false
		,'letter-spacing' 	=> true
		,'preview'			=> array('always_display' => true)
		,'default'  			=> array(
			'font-family'  		=> 'Jost'
			,'font-weight' 		=> '500'
			,'font-size'   		=> '16px'
			,'line-height' 		=> '22px'
			,'letter-spacing' 	=> '0'
			,'google'	   		=> true
		)
		,'fonts'	=> $family_fonts
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 20)
	)
	,array(
		'id'       			=> 'bs_sub_menu_font'
		,'type'     		=> 'typography'
		,'title'    		=> esc_html__( 'Sub Menu Font', 'bakershop' )
		,'subtitle' 		=> ''
		,'google'   		=> true
		,'font-style'   	=> false
		,'text-align'   	=> false
		,'color'   			=> false
		,'letter-spacing' 	=> true
		,'preview'			=> array('always_display' => true)
		,'default'  			=> array(
			'font-family'  		=> 'Jost'
			,'font-weight' 		=> '400'
			,'font-size'   		=> '16px'
			,'line-height' 		=> '22px'
			,'letter-spacing' 	=> '0'
			,'google'	   		=> true
		)
		,'fonts'	=> $family_fonts
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 20)
	)
	,array(
		'id'        => 'section-custom-font'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Custom Font', 'bakershop' )
		,'subtitle' => esc_html__( 'If you get the error message \'Sorry, this file type is not permitted for security reasons\', you can add this line define(\'ALLOW_UNFILTERED_UPLOADS\', true); to the wp-config.php file', 'bakershop' )
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_custom_font_ttf'
		,'type'     => 'media'
		,'url'      => true
		,'preview'  => false
		,'title'    => esc_html__( 'Custom Font ttf', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => esc_html__( 'Upload the .ttf font file. To use it, you select CustomFont in the Standard Fonts group', 'bakershop' )
		,'default'  => array( 'url' => '' )
		,'mode'		=> 'application'
	)
	
	,array(
		'id'        => 'section-font-sizes'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Font Sizes', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'      => 'info-font-size-pc'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Font size on PC', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       		=> 'bs_h1_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H1 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-size'   => '72px'
			,'line-height' => '80px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h2_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H2 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-size'   => '46px'
			,'line-height' => '54px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h3_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H3 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-size'   => '32px'
			,'line-height' => '44px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h4_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H4 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-size'   => '24px'
			,'line-height' => '34px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h5_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H5 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-size'   		=> '20px'
			,'line-height' 		=> '28px'
			,'google'	   		=> false
		)
	)
	,array(
		'id'       		=> 'bs_h6_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H6 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-size'   	=> '18px'
			,'line-height' 	=> '26px'
			,'google'	  	=> false
		)
	)
	,array(
		'id'       		=> 'bs_small_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'Small Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'line-height'	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-size'   => '13px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_button_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'Button Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'line-height'  => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-size'   => '13px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h1_ipad_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H1 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '52px'
			,'line-height' => '60px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h2_ipad_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H2 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '32px'
			,'line-height' => '40px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h3_ipad_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H3 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '24px'
			,'line-height' => '34px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h4_ipad_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H4 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '20px'
			,'line-height' => '28px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h5_ipad_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H5 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '18px'
			,'line-height' => '26px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h6_ipad_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H6 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '16px'
			,'line-height' => '22px'
			,'google'	   => false
		)
	)
	
	,array(
		'id'      => 'info-font-size-mobile'
		,'type'   => 'info'
		,'notice' => false
		,'title'  => esc_html__( 'Font size on Mobile', 'bakershop' )
		,'desc'   => ''
	)
	,array(
		'id'       		=> 'bs_h1_mobile_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H1 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '42px'
			,'line-height' => '50px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h2_mobile_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H2 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '32px'
			,'line-height' => '40px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h3_mobile_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H3 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '24px'
			,'line-height' => '34px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h4_mobile_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H4 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '20px'
			,'line-height' => '28px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h5_mobile_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H5 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '18px'
			,'line-height' => '26px'
			,'google'	   => false
		)
	)
	,array(
		'id'       		=> 'bs_h6_mobile_font'
		,'type'     	=> 'typography'
		,'title'    	=> esc_html__( 'H6 Font Size', 'bakershop' )
		,'subtitle' 	=> ''
		,'class' 		=> 'typography-no-preview'
		,'google'   	=> false
		,'font-family'  => false
		,'font-weight'  => false
		,'font-style'   => false
		,'text-align'   => false
		,'color'   		=> false
		,'preview'		=> array('always_display' => false)
		,'default'  	=> array(
			'font-family'  => ''
			,'font-weight' => ''
			,'font-size'   => '16px'
			,'line-height' => '24px'
			,'google'	   => false
		)
	)
);

/*** Header Tab ***/
$option_fields['header'] = array(
	array(
		'id'        => 'section-header-options'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Header Options', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_header_layout'
		,'type'     => 'image_select'
		,'title'    => esc_html__( 'Header Layout', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $header_layout_options
		,'default'  => 'v1'
	)
	,array(
		'id'        => 'bs_enable_sticky_header'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Sticky Header', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
	)
	,array(
		'id'        => 'bs_enable_search'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Search Bar', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
	)
	,array(
		'id'        => 'bs_search_popular_keywords'
		,'type'     => 'textarea'
		,'title'    => esc_html__( 'Popular Keywords For Search', 'bakershop' )
		,'subtitle' => esc_html__( 'A comma separated list of keywords. Ex: Furniture, Outdoor, Sofa', 'bakershop' )
		,'desc'     => ''
		,'default'  => ''
		,'validate' => 'no_html'
		,'required'	=> array( 'bs_enable_search', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_enable_tiny_wishlist'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Wishlist', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
	)
	,array(
		'id'        => 'bs_header_currency'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Header Currency', 'bakershop' )
		,'subtitle' => esc_html__( 'Only available on some header layouts. If you don\'t install WooCommerce Multilingual plugin, it may display demo html', 'bakershop' )
		,'default'  => false
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
	)
	,array(
		'id'        => 'bs_header_language'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Header Language', 'bakershop' )
		,'subtitle' => esc_html__( 'Only available on some header layouts. If you don\'t install WPML plugin, it may display demo html', 'bakershop' )
		,'default'  => false
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
	)
	,array(
		'id'        => 'bs_enable_tiny_account'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'My Account', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
	)
	,array(
		'id'        => 'bs_enable_tiny_shopping_cart'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Shopping Cart', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
	)
	,array(
		'id'        => 'bs_shopping_cart_sidebar'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Shopping Cart Sidebar', 'bakershop' )
		,'subtitle' => esc_html__( 'Show shopping cart in sidebar instead of dropdown. You need to update cart after changing', 'bakershop' )
		,'default'  => false
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
		,'required'	=> array( 'bs_enable_tiny_shopping_cart', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_show_shopping_cart_after_adding'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Show Shopping Cart After Adding Product To Cart', 'bakershop' )
		,'subtitle' => esc_html__( 'You need to enable Ajax add to cart in WooCommerce > Settings > Products', 'bakershop' )
		,'default'  => false
		,'on'		=> esc_html__( 'Enable', 'bakershop' )
		,'off'		=> esc_html__( 'Disable', 'bakershop' )
		,'required'	=> array( 'bs_shopping_cart_sidebar', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_add_to_cart_effect'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Add To Cart Effect', 'bakershop' )
		,'subtitle' => esc_html__( 'You need to enable Ajax add to cart in WooCommerce > Settings > Products. If "Show Shopping Cart After Adding Product To Cart" is enabled, this option will be disabled', 'bakershop' )
		,'options'  => array(
			'0'				=> esc_html__( 'None', 'bakershop' )
			,'fly_to_cart'	=> esc_html__( 'Fly To Cart', 'bakershop' )
			,'show_popup'	=> esc_html__( 'Show Popup', 'bakershop' )
		)
		,'default'  => '0'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	
	,array(
		'id'        => 'section-breadcrumb-options'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Breadcrumb Options', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_breadcrumb_layout'
		,'type'     => 'image_select'
		,'title'    => esc_html__( 'Breadcrumb Layout', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $breadcrumb_layout_options
		,'default'  => 'v1'
	)
	,array(
		'id'        => 'bs_enable_breadcrumb_background_image'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Enable Breadcrumbs Background Image', 'bakershop' )
		,'subtitle' => esc_html__( 'You can set background color by going to Color Scheme tab > Breadcrumb Colors section', 'bakershop' )
		,'default'  => true
	)
	,array(
		'id'        => 'bs_bg_breadcrumbs'
		,'type'     => 'media'
		,'url'      => true
		,'title'    => esc_html__( 'Breadcrumbs Background Image', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => esc_html__( 'Select a new image to override the default background image', 'bakershop' )
		,'readonly' => false
		,'default'  => array( 'url' => '' )
	)
	,array(
		'id'        => 'bs_breadcrumb_bg_parallax'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Enable Breadcrumbs Background Parallax', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
	)
	
	,array(
		'id'        => 'section-mobile-bottom-bar'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Mobile Bottom Bar', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_mobile_bottom_bar_custom_content'
		,'type'     => 'editor'
		,'title'    => esc_html__( 'Mobile Bottom Bar Custom Content', 'bakershop' )
		,'subtitle' => esc_html__( 'You can add more buttons or custom content to bottom bar on mobile', 'bakershop' )
		,'desc'     => ''
		,'default'  => ''
		,'args'     => array(
			'wpautop'        => false
			,'media_buttons' => true
			,'textarea_rows' => 5
			,'teeny'         => false
			,'quicktags'     => true
		)
	)
);



/*** Menu Tab ***/
$option_fields['menu'] = array(
	array(
		'id'             => 'bs_menu_thumb_width'
		,'type'          => 'slider'
		,'title'         => esc_html__( 'Menu Thumbnail Width', 'bakershop' )
		,'subtitle'      => ''
		,'desc'          => esc_html__( 'Min: 5, max: 50, step: 1, default value: 46', 'bakershop' )
		,'default'       => 46
		,'min'           => 5
		,'step'          => 1
		,'max'           => 50
		,'display_value' => 'text'
	)
	,array(
		'id'             => 'bs_menu_thumb_height'
		,'type'          => 'slider'
		,'title'         => esc_html__( 'Menu Thumbnail Height', 'bakershop' )
		,'subtitle'      => ''
		,'desc'          => esc_html__( 'Min: 5, max: 50, step: 1, default value: 46', 'bakershop' )
		,'default'       => 46
		,'min'           => 5
		,'step'          => 1
		,'max'           => 50
		,'display_value' => 'text'
	)
	,array(
		'id'        => 'bs_only_load_mobile_menu_on_mobile'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Only Load Mobile Menu On Mobile', 'bakershop' )
		,'subtitle' => esc_html__( 'Only load mobile menu on a real mobile device. This may improve your site speed', 'bakershop' )
		,'default'  => false
	)
);

/*** Blog Tab ***/
$option_fields['blog'] = array(
	array(
		'id'        => 'section-blog'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Blog', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_blog_layout'
		,'type'     => 'image_select'
		,'title'    => esc_html__( 'Blog Layout', 'bakershop' )
		,'subtitle' => esc_html__( 'This option is available when Front page displays the latest posts', 'bakershop' )
		,'desc'     => ''
		,'options'  => array(
			'0-1-0' => array(
				'alt'  => esc_html__('Fullwidth', 'bakershop')
				,'img' => $redux_url . 'assets/img/1col.png'
			)
			,'1-1-0' => array(
				'alt'  => esc_html__('Left Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/2cl.png'
			)
			,'0-1-1' => array(
				'alt'  => esc_html__('Right Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/2cr.png'
			)
			,'1-1-1' => array(
				'alt'  => esc_html__('Left & Right Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/3cm.png'
			)
		)
		,'default'  => '0-1-1'
	)
	,array(
		'id'       	=> 'bs_blog_left_sidebar'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Left Sidebar', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $sidebar_options
		,'default'  => 'blog-sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'       	=> 'bs_blog_right_sidebar'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Right Sidebar', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $sidebar_options
		,'default'  => 'blog-sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'        => 'bs_blog_thumbnail'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Thumbnail', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_date'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Date', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_title'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Title', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_author'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Author', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_comment'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Comment', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_read_more'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Read More Button', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_categories'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Categories', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_excerpt'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Excerpt', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_excerpt_strip_tags'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Excerpt Strip All Tags', 'bakershop' )
		,'subtitle' => esc_html__( 'Strip all html tags in Excerpt', 'bakershop' )
		,'default'  => false
	)
	,array(
		'id'        => 'bs_blog_excerpt_max_words'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Blog Excerpt Max Words', 'bakershop' )
		,'subtitle' => esc_html__( 'Input -1 to show full excerpt', 'bakershop' )
		,'desc'     => ''
		,'default'  => '-1'
	)
	
	,array(
		'id'        => 'section-blog-details'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Blog Details', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_blog_details_layout'
		,'type'     => 'image_select'
		,'title'    => esc_html__( 'Blog Details Layout', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'0-1-0' => array(
				'alt'  => esc_html__('Fullwidth', 'bakershop')
				,'img' => $redux_url . 'assets/img/1col.png'
			)
			,'1-1-0' => array(
				'alt'  => esc_html__('Left Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/2cl.png'
			)
			,'0-1-1' => array(
				'alt'  => esc_html__('Right Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/2cr.png'
			)
			,'1-1-1' => array(
				'alt'  => esc_html__('Left & Right Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/3cm.png'
			)
		)
		,'default'  => '0-1-1'
	)
	,array(
		'id'       	=> 'bs_blog_details_left_sidebar'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Left Sidebar', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $sidebar_options
		,'default'  => 'blog-detail-sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'       	=> 'bs_blog_details_right_sidebar'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Right Sidebar', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $sidebar_options
		,'default'  => 'blog-detail-sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'        => 'bs_blog_details_thumbnail'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Thumbnail', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_date'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Date', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_title'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Title', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_author'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Author', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_comment'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Comment', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_content'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Content', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_tags'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Tags', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_categories'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Categories', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_sharing'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Sharing', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_sharing_sharethis'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Sharing - Use ShareThis', 'bakershop' )
		,'subtitle' => esc_html__( 'Use share buttons from sharethis.com. You need to add key below', 'bakershop')
		,'default'  => true
		,'required'	=> array( 'bs_blog_details_sharing', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_blog_details_sharing_sharethis_key'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Blog Sharing - ShareThis Key', 'bakershop' )
		,'subtitle' => esc_html__( 'You get it from script code. It is the value of "property" attribute', 'bakershop' )
		,'desc'     => ''
		,'default'  => ''
		,'required'	=> array( 'bs_blog_details_sharing', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_blog_details_author_box'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Author Box', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_navigation'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Navigation', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_related_posts'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Related Posts', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_blog_details_comment_form'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Blog Comment Form', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
);

/*** Portfolio Details Tab ***/
$option_fields['portfolio-details'] = array(
	array(
		'id'       	=> 'bs_portfolio_page'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Portfolio Page', 'bakershop' )
		,'subtitle' => esc_html__( 'Select the page which displays the list of portfolios. You also need to add our portfolio shortcode to that page', 'bakershop' )
		,'desc'     => ''
		,'data'     => 'pages'
		,'default'	=> ''
	)
	,array(
		'id'       	=> 'bs_portfolio_thumbnail_style'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Thumbnail Style', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'slider'	=> esc_html__( 'Slider', 'bakershop' )
			,'gallery'	=> esc_html__( 'Gallery', 'bakershop' )
		)
		,'default'	=> 'slider'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'       	=> 'bs_portfolio_thumbnail_columns'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Thumbnail Columns', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			1	=> 1
			,2	=> 2
		)
		,'default'  => '1'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'        => 'bs_portfolio_thumbnail'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Thumbnail', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_title'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Title', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_likes'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Likes', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_content'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Content', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_client'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Client', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_year'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Year', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_url'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio URL', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_categories'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Categories', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_sharing'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Sharing', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_related_posts'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Related Posts', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_custom_field'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Portfolio Custom Field', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_portfolio_custom_field_title'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Portfolio Custom Field Title', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => 'Custom Field'
		,'required'	=> array( 'bs_portfolio_custom_field', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_portfolio_custom_field_content'
		,'type'     => 'editor'
		,'title'    => esc_html__( 'Portfolio Custom Field Content', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => 'Custom content goes here'
		,'args'     => array(
			'wpautop'        => false
			,'media_buttons' => true
			,'textarea_rows' => 5
			,'teeny'         => false
			,'quicktags'     => true
		)
		,'required'	=> array( 'bs_portfolio_custom_field', 'equals', '1' )
	)
);

/*** WooCommerce Tab ***/
$option_fields['woocommerce'] = array(
	array(
		'id'        => 'section-product-label'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Product Label', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'       	=> 'bs_product_label_style'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Product Label Style', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'rectangle' 	=> esc_html__( 'Rectangle', 'bakershop' )
			,'circle' 		=> esc_html__( 'Circle', 'bakershop' )
		)
		,'default'  => 'rectangle'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'        => 'bs_product_show_new_label'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product New Label', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_product_new_label_text'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Product New Label Text', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => 'New'
		,'required'	=> array( 'bs_product_show_new_label', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_product_show_new_label_time'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Product New Label Time', 'bakershop' )
		,'subtitle' => esc_html__( 'Number of days which you want to show New label since product is published', 'bakershop' )
		,'desc'     => ''
		,'default'  => '30'
		,'required'	=> array( 'bs_product_show_new_label', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_product_sale_label_text'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Product Sale Label Text', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => 'Sale'
	)
	,array(
		'id'        => 'bs_product_feature_label_text'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Product Feature Label Text', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => 'Hot'
	)
	,array(
		'id'        => 'bs_product_out_of_stock_label_text'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Product Out Of Stock Label Text', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => 'Sold out'
	)
	,array(
		'id'       	=> 'bs_show_sale_label_as'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Show Sale Label As', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'text' 		=> esc_html__( 'Text', 'bakershop' )
			,'number' 	=> esc_html__( 'Number', 'bakershop' )
			,'percent' 	=> esc_html__( 'Percent', 'bakershop' )
		)
		,'default'  => 'text'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	
	,array(
		'id'        => 'section-product-rating'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Product Rating', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'       	=> 'bs_product_rating_style'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Product Rating Style', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'border' 		=> esc_html__( 'Border', 'bakershop' )
			,'fill' 		=> esc_html__( 'Fill', 'bakershop' )
		)
		,'default'  => 'fill'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	
	,array(
		'id'        => 'section-product-hover'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Product Hover', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'       	=> 'bs_product_hover_style'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Hover Style', 'bakershop' )
		,'subtitle' => esc_html__( 'Select the style of buttons/icons when hovering on product', 'bakershop' )
		,'desc'     => ''
		,'options'  => array(
			'hover-style-1' 			=> esc_html__( 'Style 1', 'bakershop' )
			,'hover-style-2' 			=> esc_html__( 'Style 2', 'bakershop' )
		)
		,'default'  => 'hover-style-2'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'        => 'bs_effect_product'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Back Product Image', 'bakershop' )
		,'subtitle' => esc_html__( 'Show another product image on hover. It will show an image from Product Gallery', 'bakershop' )
		,'default'  => false
	)
	,array(
		'id'        => 'bs_product_tooltip'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Tooltip', 'bakershop' )
		,'subtitle' => esc_html__( 'Show tooltip when hovering on buttons/icons on product', 'bakershop' )
		,'default'  => true
	)
	
	,array(
		'id'        => 'section-lazy-load'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Lazy Load', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_prod_lazy_load'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Activate Lazy Load', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
	,array(
		'id'        => 'bs_prod_placeholder_img'
		,'type'     => 'media'
		,'url'      => true
		,'title'    => esc_html__( 'Placeholder Image', 'bakershop' )
		,'desc'     => ''
		,'subtitle' => ''
		,'readonly' => false
		,'default'  => array( 'url' => $product_loading_image )
	)
	
	,array(
		'id'        => 'section-quickshop'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Quickshop', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_enable_quickshop'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Activate Quickshop', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
	
	,array(
		'id'        => 'section-catalog-mode'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Catalog Mode', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_enable_catalog_mode'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Enable Catalog Mode', 'bakershop' )
		,'subtitle' => esc_html__( 'Hide all Add To Cart buttons on your site. You can also hide Shopping cart by going to Header tab > turn Shopping Cart option off', 'bakershop' )
		,'default'  => false
	)
	
	,array(
		'id'        => 'section-ajax-search'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Ajax Search', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_ajax_search'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Enable Ajax Search', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
	,array(
		'id'        => 'bs_ajax_search_number_result'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Number Of Results', 'bakershop' )
		,'subtitle' => esc_html__( 'Input -1 to show all results', 'bakershop' )
		,'desc'     => ''
		,'default'  => '4'
	)
	
	,array(
		'id'        => 'section-cart-checkout'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Cart Checkout', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_cart_checkout_process_bar'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Cart Checkout Process Bar', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
);

/*** Shop/Product Category Tab ***/
$option_fields['shop-product-category'] = array(
	array(
		'id'        => 'bs_prod_cat_layout'
		,'type'     => 'image_select'
		,'title'    => esc_html__( 'Shop/Product Category Layout', 'bakershop' )
		,'subtitle' => esc_html__( 'Sidebar is only available if Filter Widget Area is disabled', 'bakershop' )
		,'desc'     => ''
		,'options'  => array(
			'0-1-0' => array(
				'alt'  => esc_html__('Fullwidth', 'bakershop')
				,'img' => $redux_url . 'assets/img/1col.png'
			)
			,'1-1-0' => array(
				'alt'  => esc_html__('Left Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/2cl.png'
			)
			,'0-1-1' => array(
				'alt'  => esc_html__('Right Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/2cr.png'
			)
			,'1-1-1' => array(
				'alt'  => esc_html__('Left & Right Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/3cm.png'
			)
		)
		,'default'  => '0-1-0'
	)
	,array(
		'id'       	=> 'bs_prod_cat_left_sidebar'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Left Sidebar', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $sidebar_options
		,'default'  => 'product-category-sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'       	=> 'bs_prod_cat_right_sidebar'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Right Sidebar', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $sidebar_options
		,'default'  => 'product-category-sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'       	=> 'bs_prod_cat_columns'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Product Columns', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			3	=> 3
			,4	=> 4
			,5	=> 5
			,6	=> 6
		)
		,'default'  => '4'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'        => 'bs_prod_cat_per_page'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Products Per Page', 'bakershop' )
		,'subtitle' => esc_html__( 'Number of products per page', 'bakershop' )
		,'desc'     => ''
		,'default'  => '20'
	)
	,array(
		'id'       	=> 'bs_prod_cat_loading_type'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Product Loading Type', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'default'			=> esc_html__( 'Default', 'bakershop' )
			,'infinity-scroll'	=> esc_html__( 'Infinity Scroll', 'bakershop' )
			,'load-more-button'	=> esc_html__( 'Load More Button', 'bakershop' )
			,'ajax-pagination'	=> esc_html__( 'Ajax Pagination', 'bakershop' )
		)
		,'default'  => 'load-more-button'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'        => 'bs_prod_cat_per_page_dropdown'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Products Per Page Dropdown', 'bakershop' )
		,'subtitle' => esc_html__( 'Allow users to select number of products per page', 'bakershop' )
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_onsale_checkbox'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Products On Sale Checkbox', 'bakershop' )
		,'subtitle' => esc_html__( 'Allow users to view only the discounted products', 'bakershop' )
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_glt'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Grid/List Toggle', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'       	=> 'bs_prod_cat_glt_default'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Grid/List Toggle Default', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'grid'	=> esc_html__( 'Grid', 'bakershop' )
			,'list'	=> esc_html__( 'List', 'bakershop' )
		)
		,'default'  => 'grid'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
		,'required'	=> array( 'bs_prod_cat_glt', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_prod_cat_quantity_input'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Quantity Input', 'bakershop' )
		,'subtitle' => esc_html__( 'Show the quantity input on the List view', 'bakershop' )
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
		,'required'	=> array( 'bs_prod_cat_glt', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_filter_widget_area'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Filter Widget Area', 'bakershop' )
		,'subtitle' => esc_html__( 'Display Filter Widget Area on the Shop/Product Category page. If enabled, the shop sidebar will be removed', 'bakershop' )
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'       	=> 'bs_filter_widget_area_style'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Filter Widget Area Style', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'sidebar'	=> esc_html__( 'Sidebar', 'bakershop' )
			,'dropdown'	=> esc_html__( 'Dropdown', 'bakershop' )
		)
		,'default'  => 'sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
		,'required'	=> array( 'bs_filter_widget_area', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_prod_cat_bestsellers'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Best Selling Products', 'bakershop' )
		,'subtitle' => esc_html__( 'Show best selling products at the top of product category page. It only shows if total products is more than double the maximum best selling products (default is 7)', 'bakershop' )
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_thumbnail'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Thumbnail', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_label'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Label', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_brand'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Brands', 'bakershop' )
		,'subtitle' => esc_html__( 'Add brands to product list on all pages', 'bakershop' )
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_cat'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Categories', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_title'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Title', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_sku'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product SKU', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_rating'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Rating', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_price'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Price', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_add_to_cart'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Add To Cart Button', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_desc'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Short Description', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat_desc_words'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Product Short Description - Limit Words', 'bakershop' )
		,'subtitle' => esc_html__( 'It is also used for product shortcode', 'bakershop' )
		,'desc'     => ''
		,'default'  => '8'
	)
	,array(
		'id'        => 'bs_prod_cat_color_swatch'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Color Swatches', 'bakershop' )
		,'subtitle' => esc_html__( 'Show the color attribute of variations. The slug of the color attribute has to be "color"', 'bakershop' )
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'       	=> 'bs_prod_cat_number_color_swatch'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Number Of Color Swatches', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			2	=> 2
			,3	=> 3
			,4	=> 4
			,5	=> 5
			,6	=> 6
		)
		,'default'  => '3'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
		,'required'	=> array( 'bs_prod_cat_color_swatch', 'equals', '1' )
	)
);

/*** Product Details Tab ***/
$option_fields['product-details'] = array(
	array(
		'id'        => 'bs_prod_layout'
		,'type'     => 'image_select'
		,'title'    => esc_html__( 'Product Layout', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => array(
			'0-1-0' => array(
				'alt'  => esc_html__('Fullwidth', 'bakershop')
				,'img' => $redux_url . 'assets/img/1col.png'
			)
			,'1-1-0' => array(
				'alt'  => esc_html__('Left Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/2cl.png'
			)
			,'0-1-1' => array(
				'alt'  => esc_html__('Right Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/2cr.png'
			)
			,'1-1-1' => array(
				'alt'  => esc_html__('Left & Right Sidebar', 'bakershop')
				,'img' => $redux_url . 'assets/img/3cm.png'
			)
		)
		,'default'  => '0-1-0'
	)
	,array(
		'id'       	=> 'bs_prod_left_sidebar'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Left Sidebar', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $sidebar_options
		,'default'  => 'product-detail-sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'       	=> 'bs_prod_right_sidebar'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Right Sidebar', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'options'  => $sidebar_options
		,'default'  => 'product-detail-sidebar'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
	)
	,array(
		'id'        => 'bs_prod_breadcrumb'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Breadcrumb', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
	,array(
		'id'        => 'bs_prod_cloudzoom'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Cloud Zoom', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
	,array(
		'id'        => 'bs_prod_lightbox'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Lightbox', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
	)
	,array(
		'id'        => 'bs_prod_attr_dropdown'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Attribute Dropdown', 'bakershop' )
		,'subtitle' => esc_html__( 'If you turn it off, the dropdown will be replaced by image or text label', 'bakershop' )
		,'default'  => true
	)
	,array(
		'id'        => 'bs_prod_attr_color_text'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Attribute Color Text', 'bakershop' )
		,'subtitle' => esc_html__( 'Show text for the Color attribute instead of color/color image', 'bakershop' )
		,'default'  => false
		,'required'	=> array( 'bs_prod_attr_dropdown', 'equals', '0' )
	)
	,array(
		'id'        => 'bs_prod_summary_2_columns'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Summary 2 Columns', 'bakershop' )
		,'subtitle' => esc_html__( 'If product has sidebar, this option will be disabled', 'bakershop' )
		,'default'  => false
	)
	,array(
		'id'        => 'bs_prod_next_prev_navigation'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Next/Prev Product Navigation', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_thumbnail'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Thumbnail', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_label'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Label', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_title'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Title', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_title_in_content'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Title In Content', 'bakershop' )
		,'subtitle' => esc_html__( 'Display the product title in the page content instead of above the breadcrumbs', 'bakershop' )
		,'default'  => true
	)
	,array(
		'id'        => 'bs_prod_rating'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Rating', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_excerpt'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Excerpt', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_count_down'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Count Down', 'bakershop' )
		,'subtitle' => esc_html__( 'You have to activate ThemeSky plugin', 'bakershop' )
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_price'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Price', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_add_to_cart'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Add To Cart Button', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_ajax_add_to_cart'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Ajax Add To Cart', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'required'	=> array( 'bs_prod_add_to_cart', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_prod_buy_now'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Buy Now Button', 'bakershop' )
		,'subtitle' => esc_html__( 'Only support the simple and variable products', 'bakershop' )
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_sku'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product SKU', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_availability'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Availability', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_sold_number'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Sold Number', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_brand'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Brands', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_cat'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Categories', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_tag'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Tags', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_sharing'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Sharing', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_sharing_sharethis'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Sharing - Use ShareThis', 'bakershop' )
		,'subtitle' => esc_html__( 'Use share buttons from sharethis.com. You need to add key below', 'bakershop' )
		,'default'  => false
		,'required'	=> array( 'bs_prod_sharing', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_prod_sharing_sharethis_key'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Product Sharing - ShareThis Key', 'bakershop' )
		,'subtitle' => esc_html__( 'You get it from script code. It is the value of "property" attribute', 'bakershop' )
		,'desc'     => ''
		,'default'  => ''
		,'required'	=> array( 'bs_prod_sharing', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_prod_size_chart'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Size Chart', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'       	=> 'bs_prod_size_chart_style'
		,'type'     => 'select'
		,'title'    => esc_html__( 'Product Size Chart Style', 'bakershop' )
		,'subtitle' => esc_html__( 'Modal Popup is only available if the slug of the Size attribute is "size" and Attribute Dropdown is disabled', 'bakershop' )
		,'desc'     => ''
		,'options'  => array(
			'popup'		=> esc_html__( 'Modal Popup', 'bakershop' )
			,'tab'		=> esc_html__( 'Additional Tab', 'bakershop' )
		)
		,'default'  => 'popup'
		,'select2'	=> array('allowClear' => false, 'minimumResultsForSearch' => 'Infinity')
		,'required'	=> array( 'bs_prod_size_chart', 'equals', '1' )
	)
	,array(
		'id'        => 'bs_prod_more_less_content'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product More/Less Content', 'bakershop' )
		,'subtitle' => esc_html__( 'Show more/less content in the Description tab', 'bakershop' )
		,'default'  => true
	)
	,array(
		'id'        => 'bs_prod_wfbt_in_summary'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Frequently Bought Together In Summary', 'bakershop' )
		,'subtitle' => esc_html__( 'Move Frequently Bought Together to product summary', 'bakershop' )
		,'default'  => false
	)
	
	,array(
		'id'        => 'section-product-tabs'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Product Tabs', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_prod_tabs'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Tabs', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_tabs_show_content_default'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Show Product Tabs Content By Default', 'bakershop' )
		,'subtitle' => esc_html__( 'Show the content of all tabs by default and hide the tab headings', 'bakershop' )
		,'default'  => false
	)
	,array(
		'id'        => 'bs_prod_custom_tab'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Product Custom Tab', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_custom_tab_title'
		,'type'     => 'text'
		,'title'    => esc_html__( 'Product Custom Tab Title', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => 'Custom tab'
	)
	,array(
		'id'        => 'bs_prod_custom_tab_content'
		,'type'     => 'editor'
		,'title'    => esc_html__( 'Product Custom Tab Content', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => esc_html__( 'Your custom content goes here. You can add the content for individual product', 'bakershop' )
		,'args'     => array(
			'wpautop'        => false
			,'media_buttons' => true
			,'textarea_rows' => 5
			,'teeny'         => false
			,'quicktags'     => true
		)
	)
	
	,array(
		'id'        => 'section-ads-banner'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Ads Banner', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_prod_ads_banner'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Ads Banner', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_ads_banner_content'
		,'type'     => 'editor'
		,'title'    => esc_html__( 'Ads Banner Content', 'bakershop' )
		,'subtitle' => ''
		,'desc'     => ''
		,'default'  => ''
		,'args'     => array(
			'wpautop'        => false
			,'media_buttons' => true
			,'textarea_rows' => 5
			,'teeny'         => false
			,'quicktags'     => true
		)
	)
	
	,array(
		'id'        => 'section-related-up-sell-products'
		,'type'     => 'section'
		,'title'    => esc_html__( 'Related - Up-Sell Products', 'bakershop' )
		,'subtitle' => ''
		,'indent'   => false
	)
	,array(
		'id'        => 'bs_prod_upsells'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Up-Sell Products', 'bakershop' )
		,'subtitle' => ''
		,'default'  => true
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
	,array(
		'id'        => 'bs_prod_related'
		,'type'     => 'switch'
		,'title'    => esc_html__( 'Related Products', 'bakershop' )
		,'subtitle' => ''
		,'default'  => false
		,'on'		=> esc_html__( 'Show', 'bakershop' )
		,'off'		=> esc_html__( 'Hide', 'bakershop' )
	)
);

/*** Custom Code Tab ***/
$option_fields['custom-code'] = array(
	array(
		'id'        => 'bs_custom_css_code'
		,'type'     => 'ace_editor'
		,'title'    => esc_html__( 'Custom CSS Code', 'bakershop' )
		,'subtitle' => ''
		,'mode'     => 'css'
		,'theme'    => 'monokai'
		,'desc'     => ''
		,'default'  => ''
	)
	,array(
		'id'        => 'bs_custom_javascript_code'
		,'type'     => 'ace_editor'
		,'title'    => esc_html__( 'Custom Javascript Code', 'bakershop' )
		,'subtitle' => ''
		,'mode'     => 'javascript'
		,'theme'    => 'monokai'
		,'desc'     => ''
		,'default'  => ''
	)
);