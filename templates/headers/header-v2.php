<header class="bs-header">
	<div class="header-container">
		<div class="container">
			<?php if( (wp_is_mobile() && $mydecor_theme_options['ts_only_load_mobile_menu_on_mobile']) || !$mydecor_theme_options['ts_only_load_mobile_menu_on_mobile'] ): ?>
			<div class="bs-mobile-icon-toggle">
				<span class="icon"></span>
			</div>
			<?php endif; ?>

			<div class="header-logo">
				<?php if ( has_nav_menu('vertical') ):?>
				<span class="vertical-menu-button hidden-phone"></span>
				<?php endif; ?>

				<div class="logo-wrapper"><?php mydecor_theme_logo(); ?></div>
			</div>

			<div class="menu-wrapper hidden-phone">

				<div class="bs-menu">
					<?php
					if (has_nav_menu('primary')) {
						wp_nav_menu(array('container' => 'nav', 'container_class' => 'main-menu pc-menu bs-mega-menu-wrapper', 'theme_location' => 'primary', 'walker' => new MyDecor_Walker_Nav_Menu()));
					} else {
						wp_nav_menu(array('container' => 'nav', 'container_class' => 'main-menu pc-menu bs-mega-menu-wrapper'));
					}
					?>
				</div>

			</div>

			<div class="header-right">

				<?php if( $mydecor_theme_options['ts_enable_search'] ): ?>
				<div class="search-button hidden-phone">
					<span class="icon"></span>
				</div>
				<?php endif; ?>

				<?php if( $mydecor_theme_options['ts_enable_tiny_account'] ): ?>
				<div class="my-account-wrapper hidden-phone">
					<?php echo mydecor_tiny_account(); ?>
				</div>
				<?php endif; ?>

				<?php if( class_exists('YITH_WCWL') && $mydecor_theme_options['ts_enable_tiny_wishlist'] ): ?>
				<div class="my-wishlist-wrapper hidden-phone"><?php echo mydecor_tini_wishlist(); ?></div>
				<?php endif; ?>

				<?php if( $mydecor_theme_options['ts_enable_tiny_shopping_cart'] ): ?>
				<div class="shopping-cart-wrapper">
					<?php echo mydecor_tiny_cart(); ?>
				</div>
				<?php endif; ?>

			</div>

		</div>

	</div>
</header>