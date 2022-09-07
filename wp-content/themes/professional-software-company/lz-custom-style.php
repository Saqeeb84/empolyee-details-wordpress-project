<?php 

	$professional_software_company_custom_style = '';

	// Logo Size
	$professional_software_company_logo_top_padding = get_theme_mod('professional_software_company_logo_top_padding');
	$professional_software_company_logo_bottom_padding = get_theme_mod('professional_software_company_logo_bottom_padding');
	$professional_software_company_logo_left_padding = get_theme_mod('professional_software_company_logo_left_padding');
	$professional_software_company_logo_right_padding = get_theme_mod('professional_software_company_logo_right_padding');

	if( $professional_software_company_logo_top_padding != '' || $professional_software_company_logo_bottom_padding != '' || $professional_software_company_logo_left_padding != '' || $professional_software_company_logo_right_padding != ''){
		$professional_software_company_custom_style .=' .logo {';
			$professional_software_company_custom_style .=' padding-top: '.esc_attr($professional_software_company_logo_top_padding).'px; padding-bottom: '.esc_attr($professional_software_company_logo_bottom_padding).'px; padding-left: '.esc_attr($professional_software_company_logo_left_padding).'px; padding-right: '.esc_attr($professional_software_company_logo_right_padding).'px;';
		$professional_software_company_custom_style .=' }';
	}

	// Header Image
	$header_image_url = professional_software_company_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$professional_software_company_custom_style .=' #inner-pages-header {';
			$professional_software_company_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$professional_software_company_custom_style .=' }';
		$professional_software_company_custom_style .=' .header-overlay {';
			$professional_software_company_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$professional_software_company_custom_style .=' }';
	} else {
		$professional_software_company_custom_style .=' #inner-pages-header {';
			$professional_software_company_custom_style .=' background: linear-gradient(180deg,#949292 27%,#969595 55%,#ccc 78%); ';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_slider_hide_show = get_theme_mod('professional_software_company_slider_hide_show',false);
	if( $professional_software_company_slider_hide_show == true){
		$professional_software_company_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$professional_software_company_custom_style .=' display:none;';
		$professional_software_company_custom_style .=' }';
	}