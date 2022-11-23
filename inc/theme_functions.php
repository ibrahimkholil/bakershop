<?php

/*
 * Logo 
 */
if( !function_exists('bakershop_theme_logo') ){
	function bakershop_theme_logo(){
		$theme_options = bakershop_get_theme_options();
		$logo_image = is_array($theme_options['ts_logo'])?$theme_options['ts_logo']['url']:$theme_options['ts_logo'];
		$logo_image_mobile = is_array($theme_options['ts_logo_mobile'])?$theme_options['ts_logo_mobile']['url']:$theme_options['ts_logo_mobile'];
		$logo_image_sticky = is_array($theme_options['ts_logo_sticky'])?$theme_options['ts_logo_sticky']['url']:$theme_options['ts_logo_sticky'];
		$logo_text = stripslashes($theme_options['ts_text_logo']);

		if( !$logo_image_mobile ){
			$logo_image_mobile = $logo_image;
		}
		if( !$logo_image_sticky ){
			$logo_image_sticky = $logo_image;
		}
		if( !$logo_text ){
			$logo_text = get_bloginfo('name');
		}
		?>
		<div class="logo">
			<a href="<?php echo esc_url( home_url('/') ); ?>">
				<?php if( $logo_image ): ?>
					<img src="<?php echo esc_url($logo_image); ?>" alt="<?php echo esc_attr($logo_text); ?>" title="<?php echo esc_attr($logo_text); ?>" class="normal-logo" />
				<?php endif; ?>

				<?php if( $logo_image_mobile ): ?>
					<img src="<?php echo esc_url($logo_image_mobile); ?>" alt="<?php echo esc_attr($logo_text); ?>" title="<?php echo esc_attr($logo_text); ?>" class="mobile-logo" />
				<?php endif; ?>

				<?php if( $logo_image_sticky ): ?>
					<img src="<?php echo esc_url($logo_image_sticky); ?>" alt="<?php echo esc_attr($logo_text); ?>" title="<?php echo esc_attr($logo_text); ?>" class="sticky-logo" />
				<?php endif; ?>

				<?php
				if( !$logo_image ){
					echo esc_html($logo_text);
				}
				?>
			</a>
		</div>
		<?php
	}
}

/* Header Templates */
if( !function_exists('bakershop_get_header_template') ){
	function bakershop_get_header_template(){
		// get_template_part('templates/headers/header', bakershop_get_theme_options('bs_header_layout'));
		get_template_part('templates/headers/header', 'v1');
	}
}
