<header id="home">
	<div class="uk-position-relative">
		<div class="uk-position-top">
			<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
				<div class="uk-navbar-right">
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'top_menu',
							'container' => false,
							'items_wrap' => '<ul class="uk-navbar-nav uk-visible@m" uk-scrollspy-nav="scroll: true" uk-scroll>%3$s</ul>',
						));
					?>
					<a uk-navbar-toggle-icon="" 
						href="#offcanvas-menu" 
						uk-toggle="" 
						class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon"></a>
				</div>
			</nav>
		</div>
		<div class="alekei-hero">
			<div id="pt" class="canvas"></div>
		</div>
		<div class="alekei-hero-content uk-position-center">
			<div class="uk-flex uk-flex-column uk-flex-middle uk-flex-center">
				<h1 class="hero-title">
					<?php the_field('hero_welcome_message'); ?>
					<span> <?php the_field('hero_user_name'); ?></span>
				</h1>
				<h2 class="hero-subtitle"><?php the_field('hero_subtitle'); ?></h2>
				<div class="page-link-portfolio uk-animation-toggle">
					<a class="uk-animation-slide-top-small"  href="#portfolio" uk-icon="icon: chevron-down; ratio: 2" uk-scroll></a>
				</div>
			</div>
		</div>
	</div>
</header>