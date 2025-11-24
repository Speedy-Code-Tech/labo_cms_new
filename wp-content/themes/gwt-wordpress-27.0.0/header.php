<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "main" div.
 *
 * @package GWT
 * @since Government Website Template 2.0
 * eol-264
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
	<link rel="stylesheet" href="//cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script async defer crossorigin="anonymous"
		src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v20.0"></script>
	<?php wp_head(); ?>
	<style>
		.bg-facebook {
			background: linear-gradient(135deg, #1877f2, #0d5bd8);
		}

		.social-card {
			width: 340px;
		}

		.hover-lift {
			transition: all 0.4s ease;
		}

		.hover-lift:hover {
			transform: translateY(-12px);
			box-shadow: 0 25px 50px rgba(0, 181, 24, 0.2) !important;
		}

		.socials-container {
			-webkit-overflow-scrolling: touch;
		}

		.socials-container::-webkit-scrollbar {
			height: 6px;
		}

		.socials-container::-webkit-scrollbar-track {
			background: #f1f1f1;
			border-radius: 10px;
		}

		.socials-container::-webkit-scrollbar-thumb {
			background: #00B518;
			border-radius: 10px;
		}

		@media (max-width: 768px) {
			.social-card {
				width: 300px;
			}

			.fb-page {
				width: 100% !important;
			}
		}
	</style>
	<style>
		.social-card-greens {
			transition: all 0.4s ease;
			border: 2px solid transparent;
		}

		.social-card-grees:hover {
			transform: translateY(-12px);
			box-shadow: 0 25px 50px rgba(0, 181, 24, 0.25) !important;
			border-color: #00B518;
		}

		.fb-page {
			display: block !important;
		}

		/* Ensure FB widget fits perfectly */
		@media (max-width: 768px) {
			.fb-page {
				width: 100% !important;
				height: 500px !important;
			}
		}
	</style>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

		/* === GOVPH THEME OPTIONS (keep these – they come from the customizer) === */
		.container-main a,
		.container-main a:active,
		.container-main a:visited,
		.anchor a,
		.anchor a:active,
		.anchor a:visited {
			<?php govph_displayoptions('govph_anchorcolor'); ?>
		}

		.container-main a:focus,
		.container-main a:hover,
		.anchor a:focus,
		.anchor a:hover {
			<?php govph_displayoptions('govph_anchorcolor_hover'); ?>
		}

		div.container-masthead {
			<?php govph_displayoptions('govph_header_setting'); ?>
		}

		h1.logo a {
			<?php govph_displayoptions('govph_logo_setting'); ?>
		}

		div.container-banner {
			<?php govph_displayoptions('govph_slider_setting'); ?>
		}

		.darkGreen {
			color: #03720D;
		}

		.dark {
			background-color: #03720D;
		}

		.banner-content,
		.orbit .orbit-bullets {
			<?php govph_displayoptions('govph_slider_fullwidth'); ?>
		}

		#pst-container {
			<?php govph_displayoptions('govph_custom_pst'); ?>
		}

		#panel-top {
			<?php govph_displayoptions('govph_custom_panel_top'); ?>
		}

		#panel-bottom {
			<?php govph_displayoptions('govph_custom_panel_bottom'); ?>
		}

		#sidebar-left .widget,
		#sidebar-right .widget,
		.callout.secondary {
			<?php govph_displayoptions('govph_widget_setting'); ?>
		}

		.container-main .entry-title a {
			<?php govph_displayoptions('govph_headings_setting'); ?>
		}

		.container-banner .entry-title {
			<?php govph_displayoptions('govph_inner_headings_setting'); ?>
		}

		#footer {
			<?php govph_displayoptions('govph_custom_footer_background_color'); ?>
		}

		/* === MASTHEAD – CLEAN & FIXED === */
		.container-masthead {
			position: relative;
			min-height: 120px;
			background-color: #03720D;
			overflow: hidden;
			padding: 15px 20px;
			display: flex;
			align-items: center;
			/* controls inner spacing */
		}

		.mainBg {
			position: absolute;
			inset: 0;
			/* top/right/bottom/left = 0 */
			background: linear-gradient(50deg, #03720D 28%, transparent 100%);
			z-index: 1;
			pointer-events: none;
		}

		.container-masthead>.container-fluid {
			position: relative;
			z-index: 2;
			height: 100%;
			display: flex;
			align-items: center;
			/* perfect vertical centering */
			gap: 20px;
		}

		.iconation {
			width: 110px;
			height: 110px;
			flex-shrink: 0;
			object-fit: contain;
		}

		.texts p {
			margin: 0 !important;
			color: white;
			line-height: 1.2;
		}

		.h1s {
			font-size: 1rem;
			font-weight: 400;
		}

		.h2s {
			font-size: 2.2rem;
			font-weight: 700;
			letter-spacing: 1px;
		}

		.h3s {
			font-size: 1.1rem;
			font-weight: 400;
		}

		/* === RESPONSIVE === */
		@media (max-width: 600px) {
			.container-masthead {
				min-height: 120px;
				padding: 10px 15px;
				display: flex;
				align-items: center;
			}

			.icon {
				width: 80px;
				height: 80px;
			}

			.h1s,
			.h3s {
				font-size: 0.75rem;
			}

			.h2s {
				font-size: 1.2rem;
			}
		}

		@media (min-width: 768px) {
			.icon {
				width: 130px;
				height: 130px;
			}

			.h1s,
			.h3s {
				font-size: 1rem;
			}

			.h2s {
				font-size: 2rem;
			}
		}

		@media (min-width: 1024px) {
			.container-masthead {
				min-height: 120px;
				display: flex;
				align-items: center;
			}

			.icon {
				width: 100px;
				height: 100px;
			}

			.h2s {
				font-size: 2rem;
			}
		}

		/* === MENU CURRENT ITEM COLORS === */
		#main-nav li.current-menu-item:not(.has-form) a:not(.button),
		#aux-main li.current-menu-item:not(.has-form) a:not(.button),
		#offCanvasRight li.current-menu-item:not(.has-form)>a:not(.button) {
			background-color: #00B518 !important;
			font-weight: bold;
		}

		#main-nav li.current-menu-item:not(.has-form) a:not(.button):hover {
			background-color: #45c656 !important;
		}

		.poppins-thin {
			font-family: "Poppins", sans-serif;
			font-weight: 100;
			font-style: normal;
		}

		.poppins-extralight {
			font-family: "Poppins", sans-serif;
			font-weight: 200;
			font-style: normal;
		}

		.poppins-light {
			font-family: "Poppins", sans-serif;
			font-weight: 300;
			font-style: normal;
		}

		.poppins-regular {
			font-family: "Poppins", sans-serif;
			font-weight: 400;
			font-style: normal;
		}

		.poppins-medium {
			font-family: "Poppins", sans-serif;
			font-weight: 500;
			font-style: normal;
		}

		.poppins-semibold {
			font-family: "Poppins", sans-serif;
			font-weight: 600;
			font-style: normal;
		}

		.poppins-bold {
			font-family: "Poppins", sans-serif;
			font-weight: 700;
			font-style: normal;
		}

		.poppins-extrabold {
			font-family: "Poppins", sans-serif;
			font-weight: 800;
			font-style: normal;
		}

		.poppins-black {
			font-family: "Poppins", sans-serif;
			font-weight: 900;
			font-style: normal;
		}

		.poppins-thin-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 100;
			font-style: italic;
		}

		.poppins-extralight-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 200;
			font-style: italic;
		}

		.poppins-light-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 300;
			font-style: italic;
		}

		.poppins-regular-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 400;
			font-style: italic;
		}

		.poppins-medium-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 500;
			font-style: italic;
		}

		.poppins-semibold-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 600;
			font-style: italic;
		}

		.poppins-bold-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 700;
			font-style: italic;
		}

		.poppins-extrabold-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 800;
			font-style: italic;
		}

		.poppins-black-italic {
			font-family: "Poppins", sans-serif;
			font-weight: 900;
			font-style: italic;
		}

		.bids-card {
			transition: all 0.35s ease;
			border: 1px solid #f0f0f0 !important;
		}

		.bids-card:hover {
			transform: translateY(-8px);
			box-shadow: 0 20px 40px rgba(0, 181, 24, 0.12) !important;
			border-color: #00B518 !important;
		}

		.bids-card:hover h5 {
			color: #00B518;
		}

		.bids-card:hover .arrow-icon i {
			transform: translateX(10px);
		}

		.arrow-icon i {
			transition: transform 0.3s ease;
		}

		.line-clamp-2,
		.line-clamp-3 {
			display: -webkit-box;
			-webkit-box-orient: vertical;
			overflow: hidden;
		}

		.line-clamp-2 {
			-webkit-line-clamp: 2;
		}

		.line-clamp-3 {
			-webkit-line-clamp: 3;
		}

		::root {
			font-family: "Poppins", sans-serif;
		}
	</style>


	<!-- Font Awesome (if not already loaded in your theme) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	</style>
	<script type="text/javascript" language="javascript">
		var template_directory = '<?php echo get_template_directory_uri() ?>';
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>

	<div id="accessibility-shortcuts">
		<ul>
			<li><a href="#" class="skips toggle-statement" title="Toggle Accessibility Statement" accesskey="0" data-toggle="a11y-modal">Toggle Accessibility Statement</a></li>
			<?php if ($govph_acc_link_home = govph_displayoptions('govph_acc_link_home')): ?>
				<li><a href="<?php echo $govph_acc_link_home; ?>" accesskey="h">Home</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_contact = govph_displayoptions('govph_acc_link_contact')): ?>
				<li><a href="<?php echo $govph_acc_link_contact; ?>" accesskey="c">Contacts</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_feedback = govph_displayoptions('govph_acc_link_feedback')): ?>
				<li><a href="<?php echo $govph_acc_link_feedback; ?>" accesskey="k">Feedback</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_faq = govph_displayoptions('govph_acc_link_faq')): ?>
				<li><a href="<?php echo $govph_acc_link_faq; ?>" accesskey="q">FAQ</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_search = govph_displayoptions('govph_acc_link_search')): ?>
				<li><a href="<?php echo $govph_acc_link_search; ?>" accesskey="s">Search</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_main_content = govph_displayoptions('govph_acc_link_main_content')): ?>
				<li><a href="<?php echo $govph_acc_link_main_content; ?>" accesskey="R">Skip to Main Content</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_sitemap = govph_displayoptions('govph_acc_link_sitemap')): ?>
				<li><a href="<?php echo $govph_acc_link_sitemap; ?>" accesskey="M">Sitemap</a></li>
			<?php endif; ?>
		</ul>
	</div>


	<div id="a11y-modal" class="reveal large" title="Accessibility Statement" data-reveal>
		<textarea rows="21" class="statement-textarea" readonly>
This website adopts the Web Content Accessibility Guidelines (WCAG 2.0) as the accessibility standard for all its related web development and services. WCAG 2.0 is also an international standard, ISO 40500. This certifies it as a stable and referenceable technical standard. 

WCAG 2.0 contains 12 guidelines organized under 4 principles: Perceivable, Operable, Understandable, and Robust (POUR for short). There are testable success criteria for each guideline. Compliance to these criteria is measured in three levels: A, AA, or AAA. A guide to understanding and implementing Web Content Accessibility Guidelines 2.0 is available at: https://www.w3.org/TR/UNDERSTANDING-WCAG20/

Accessibility Features

Shortcut Keys Combination Activation Combination keys used for each browser.

	Chrome for Linux press (Alt+Shift+shortcut_key) 
	Chrome for Windows press (Alt+shortcut_key) 
	For Firefox press (Alt+Shift+shortcut_key) 
	For Internet Explorer press (Alt+Shift+shortcut_key) then press (enter)
	On Mac OS press (Ctrl+Opt+shortcut_key)

	Accessibility Statement (Combination + 0): Statement page that will show the available accessibility keys. 
	Home Page (Combination + H): Accessibility key for redirecting to homepage. 
	Main Content (Combination + R): Shortcut for viewing the content section of the current page. 
	FAQ (Combination + Q): Shortcut for FAQ page. 
	Contact (Combination + C): Shortcut for contact page or form inquiries. 
	Feedback (Combination + K): Shortcut for feedback page. 
	Site Map (Combination + M): Shortcut for site map (footer agency) section of the page. 
	Search (Combination + S): Shortcut for search page. 

Press esc, or click the close the button to close this dialog box.
	</textarea>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

			<!-- off-canvas title bar for 'small' screen -->
			<div id="off-canvas-container" class="title-bar columns hide-for-large" data-responsive-toggle="main-nav" data-hide-for="large">
				<div class="title-bar-right">
					<span class="title-bar-title">Menu</span>
					<button class="menu-icon" type="button" data-open="offCanvasRight"></button>
				</div>
				<div class="title-bar-left">
					<span class="title-bar-title name"><a href="http://www.gov.ph">GOVPH</a></span>
				</div>
			</div>

			<!-- off-canvas right menu -->
			<nav id="offCanvasRight" class="off-canvas position-right hide-for-large" data-off-canvas data-position="right">
				<div class="list-item"><?php get_search_form(); ?></div>
				<ul class="vertical menu" data-drilldown data-parent-link="true">
					<?php wp_nav_menu(['theme_location'  => 'topbar_left', 'items_wrap' => '%3$s', 'container' => false, 'walker' => new Off_Canvass_Menu()]); ?>
					<?php wp_nav_menu(['theme_location'  => 'topbar_right', 'items_wrap' => '%3$s', 'container' => false, 'fallback_cb' => false, 'walker' => new Off_Canvass_Menu()]); ?>
					<?php // if(has_nav_menu('aux_nav')): 
					?>
					<?php //endif; 
					?>
				</ul>
			</nav>

			<!-- "main-nav" top-bar menu for 'medium' and up -->
			<div id="main-nav" style="z-index:999;">
				<div class="row">
					<div class="large-12 columns">
						<nav class="top-bar-left">
							<ul class="dropdown menu" data-dropdown-menu>
								<li class="name"><a href="http://www.gov.ph">GOVPH</a></li>
								<?php wp_nav_menu(['theme_location'  => 'topbar_left', 'items_wrap' => '%3$s', 'container' => false, 'fallback_cb' => false, 'walker' => new Topbar_Nav_Menu()]); ?>

							</ul>
						</nav>

						<nav class="top-bar-right">
							<ul class="dropdown menu" data-dropdown-menu>
								<?php wp_nav_menu(['theme_location'  => 'topbar_right', 'items_wrap' => '%3$s', 'container' => false, 'fallback_cb' => false, 'walker' => new Topbar_Nav_Menu()]); ?>
								<?php if (!govph_displayoptions('govph_disable_search')): ?>
									<li class="search right"><?php get_search_form(); ?></li>
								<?php endif ?>
								<li>
									<button id="accessibility-button" class="button" type="button">
										<span class="show-for-sr">Accessibility Button</span>
										<i class="fa fa-universal-access fa-2x" aria-hidden="true"></i>
									</button>

									<ul class="menu" style="min-width:inherit;">
										<li>
											<a href="#" id="accessibility-statement" title="Accessibility Statement" class="toggle-statement" data-toggle="a11y-modal">
												<span class="show-for-sr">Accessibility Statement</span>
												<i class="fa fa-file-text-o fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="#" id="accessibility-contrast" title="Toggle High Contrast" class="toggle-contrast">
												<span class="show-for-sr">High Contrast</span>
												<i class="fa fa-low-vision fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="#" id="accessibility-skip-content" title="Skip to Content">
												<span class="show-for-sr">Skip to Content</span>
												<i class="fa fa-arrow-circle-o-down fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="#" id="accessibility-skip-footer" title="Skip to Footer">
												<span class="show-for-sr">Skip to Footer</span>
												<i class="fa fa-chevron-down fa-2x"></i>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<!-- original content goes in this container -->
			<div class="off-canvas-content" data-off-canvas-content>
				<?php
				$name_slogan_class = 'large-12 ';
				$ear_content_class = '';
				$ear_content_2_class = '';
				if (is_active_sidebar('ear-content-1') && is_active_sidebar('ear-content-2')) {
					$name_slogan_class = 'large-6 ';
					$ear_content_class = 'large-3 ';
					$ear_content_2_class = 'large-3 ';
				} elseif (is_active_sidebar('ear-content-1') && !is_active_sidebar('ear-content-2')) {
					$name_slogan_class = 'large-9 ';
					$ear_content_class = 'large-3 ';
				} elseif (!is_active_sidebar('ear-content-1') && is_active_sidebar('ear-content-2')) {
					$name_slogan_class = 'large-9 ';
					$ear_content_2_class = 'large-3 ';
				}
				?>

				<!-- masthead -->
				<header class="container-masthead">
					<div class="mainBg"></div>
					<div class="container-fluid d-flex h-100 ">
						<img class="iconation" src="<?= get_template_directory_uri(); ?>/images/lgu_icon.png" alt="LGU Labo Seal">
						<div class="d-flex flex-column texts ms-3 gap-0">
							<p class="h1s poppins-regular p-0 text-white m-0">REPUBLIC OF THE PHILIPPINES</p>
							<p class="p-0 poppins-bold m-0 text-white h2s">MUNICIPAL GOVERNMENT OF LABO</p>
							<p class="p-0 poppins-regular m-0 text-white h3s">LABO CAMARINES NORTE REGION V</p>
						</div>
					</div>
				</header>
				<!-- masthead -->