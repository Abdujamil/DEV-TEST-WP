<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package decent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,500;9..40,700&family=Poppins:wght@300;500;700&display=swap"
		rel="stylesheet"
	/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="container">
	<header>
		<div class="logo"><a href="#">Logo</a></div>
		<nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>

		<?php if (have_rows('social_links', 'option')):
		?>
			<div class="social-icons">
			<?php
			while (have_rows('social_links', 'option')) : the_row();
				$image = get_sub_field('image');
				$alt_text = get_sub_field('alt_text');
				$url = get_sub_field('url');
				?>
				<a href="<?php echo $url; ?>">
					<img src="<?php echo $image; ?>" alt="<?php echo $alt_text; ?>">
				</a>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>

		<div class="btns-mob-menu">
			<img class="menu-btn" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Menu.png" alt="menu" />
			<img class="close" src="<?php echo get_stylesheet_directory_uri(); ?>/img/close.png" alt="close" />
		</div>
	</header>
	<div class="mob-menu">
		<nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
		<div class="social-icons">
			<a href="#"><img src="/img/github.svg" alt="GitHub" /></a>
			<a href="#"><img src="/img/twitter.svg" alt="Twitter" /></a>
			<a href="#"><img src="/img/linkdin.svg" alt="LinkedIn" /></a>
		</div>
	</div>
