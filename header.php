<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage ulm_theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body class="drawer drawer--left">
	<nav class="drawer-nav" role="navigation">
			<div class="mobile-menu-block">
					<div class="wrapper-for-mobile-menu">

						<?php wp_nav_menu('top'); ?>
							<!-- <ul class="drawer-menu">
									<li>
											<a href="/index.html" class="active">HOME</a>
									</li>
									<li>
											<a href="/about.html">ABOUT</a>
									</li>
									<li>
											<a href="/lithium.html">LITHIUM</a>
									</li>
									<li>
											<a href="/index.html">CORPORATE</a>
									</li>
									<li>
											<a href="/news.html">NEWS</a>
									</li>
									<li>
											<a href="/contacts.html">CONTACT INFORMATION</a>
									</li>
							</ul> -->
					</div>
			</div>
	</nav>
	<div class="wrapper">
			<div class="back">
				<header>
						<div class="wrap">
								<div class="phone left hidden">
										<div>
												<span>
														<a href="tel:+380637900642">
																+3 8 (063) 790 06 42
														</a>
												</span>
										</div>
										<div><span>Vladimir Ryabinin</span></div>
								</div>
								<div class="mail left hidden">
										<span>
												<a href="mailto:Ryabinin_v_o@ukr.net">
														Ryabinin_v_o@ukr.net
												</a>
										</span>
								</div>
								<div class="address right hidden">
										<div><span>53A Zhovtneva street, Mala Vyska town</span></div>
										<div><span>Ukraine, Kirovograd Region, P.O.Box 26200</span></div>
								</div>
						</div>
				</header>
				<section class="fixed-block">
						<div class="wrap">
								<div class="main-menu">
										<div class="mobile-menu-btn" id="panel">
												<button type="button" class="drawer-toggle drawer-hamburger">
														<span class="sr-only">toggle navigation</span>
														<span class="drawer-hamburger-icon"></span>
												</button>
										</div>
										<div class="logo left">
												<a href="/index.html"></a>
										</div>
										<div class="left menu">
											<?php wp_nav_menu( array( 'theme_location' => 'top', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'container' => false ) ); ?>
										</div>
								</div>
						</div>
				</section>
				<section class="slider">
						<div class="wrap">
								<div class="sliders">
										<div>
											<?php
											$my_id = 25;
											$post_id_25 = get_post($my_id, ARRAY_A);
											$title = $post_id_25['post_title'];
											?>
												<div class="slide-content">
														<img src="images/slide-1.png" alt="" />
												</div>
										</div>
										<div>
												<div class="slide-content">
														<img src="images/slide-1.png" alt="" />
												</div>
										</div>
										<div>
												<div class="slide-content">
														<img src="images/slide-1.png" alt="" />
												</div>
										</div>
								</div>
								<a href="/lithium.html" class="btn-1">Read more</a>
								<div class="custom-dots"></div>
						</div>
				</section>
		</div>
