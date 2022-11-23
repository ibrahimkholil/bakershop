<?php

/* Header Templates */
if( !function_exists('bakershop_get_header_template') ){
	function bakershop_get_header_template(){
		// get_template_part('templates/headers/header', bakershop_get_theme_options('bs_header_layout'));
		get_template_part('templates/headers/header', 'v1');
	}
}
