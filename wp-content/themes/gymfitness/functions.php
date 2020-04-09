<?php 
	
	function gymfitness_menus(){

		//agregar pestaña menu al tema administrable
		register_nav_menus(array(
			'menu-principal' => __('Menu Principal','gymfitness')
		));
	}

	//hook para cargar funciones
	add_action('init','gymfitness_menus');

	//cargar scripts y hojas de estilos
	function gymfitness_scripts_styles(){

		//la hoja de estilos principal
		wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
	}

	add_action('wp_enqueue_scripts','gymfitness_scripts_styles');
	
?>