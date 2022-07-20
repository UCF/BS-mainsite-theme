<header id="header" style="background: url(<?php bloginfo('template_directory'); ?>/library/images/header-background.jpg); background-size: cover; background-position: center;">

	<div class="overlay"></div>

	<div class="mobile-menu">

		<div class="outer">

			<div class="inner">

				<div class="center extra">

					<a href="<?php echo get_option('siteurl'); ?>" class="logo pull-left">Business Services</a>

					<div id="menu-trigger-wrap" class="pull-right">
						<div class="open_menu">
							<span class="hamburger_bun_top header_nav_open_icon">Open</span>
							<span class="hamburger_meat header_nav_open_icon">The</span>
							<span class="hamburger_bun_bottom header_nav_open_icon">Menu</span>
						</div>
					</div>

					<div class="clear"></div>

				</div>

			</div>

		</div>

	</div>

	<div class="mobile-menu-dropdown">
		<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container' => '' ) ); ?>
	</div>

	<div class="container desktop-menu">

		<div class="inner-menu-container">

			<div class="outer">

				<div class="inner">

					<div class="logo-container pull-left">

						<div class="outer">
							<div class="inner">
								<a href="<?php echo get_option('siteurl'); ?>" class="logo">Business Services</a>
							</div>
						</div>

					</div>

					<div class="pull-right menu-container">
						<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container' => '' ) ); ?>
					</div>

					<div class="clear"></div>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<section class="header-box light-blue-bg<?php if ( !is_page_template( 'templates/template-home.php' ) ) { ?> alternate-1<?php }?>">

			<div class="inner-wrap-container">

				<div class="top-wrap">

					<?php if ( get_field( 'first_line' ) ) { ?>
						<h1><?php the_field( 'first_line'); ?></h1>
						<?php /* spry dev id <h1><?php the_field( 'first_line', 2 ); ?></h1> */ ?>
					<?php } ?>

					<?php if ( get_field( 'second_line' ) ) { ?>
						<h1><span><?php the_field( 'second_line'); ?></span></h1>
						<?php /* spry dev id <h1><span><?php the_field( 'second_line', 2 ); ?></span></h1> */ ?>
					<?php } ?>

					<div class="divider"></div>

					<?php echo wpautop( $post->post_content ); ?>

				</div>

				<?php if ( is_page_template( 'templates/template-home.php' ) ) { ?>
					<div class="header-buttons">
						<a href="<?php the_field( 'left_button_link', $post->ID ) ?>" target="_blank" class="white-btn btn chart pull-left">VIEW ORGANIZATION CHART</a>
						<a href="<?php the_field( 'right_button_link', $post->ID ) ?>" target="_blank" class="white-btn btn report pull-right">VIEW ANNUAL REPORT</a>
						<div class="clear"></div>
					</div>
				<?php } ?>

			</div>

			<div class="fence-border<?php if ( is_page_template( 'templates/template-catering.php' ) || is_page_template( 'templates/template-contracts.php' ) ) { ?> dark-green<?php } ?>"></div>

		</section>

	</div>
	

</header>
