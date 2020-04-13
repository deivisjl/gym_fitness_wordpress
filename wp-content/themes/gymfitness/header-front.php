<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
	<div class="contenedor">
		<div class="barra-navegacion">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo_sitio">
			</div>
			<?php  
				$args = array(
					'theme_location' => 'menu-principal',
					'container' => 'nav',
					'container_class' => 'menu-principal'
				);

				wp_nav_menu($args);
			?>
		</div> 
		<!-- barra de navegacion -->
		<div class="tagline text-center">
			<h1><?php the_field('encabezado_hero'); ?></h1>
			<h3><?php the_field('contenido_hero'); ?></h3>
		</div>
	</div>
</header>