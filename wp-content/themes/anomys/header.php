<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header class="bg-red-500 flex justify-center ">
		<nav>
			<?php
			$args_menu = array(
				'menu' => 'main-menu',
				'container' => '',
			);

			wp_nav_menu($args_menu);
			?>
		</nav>
	</header>