<?php 
	//consultas reutilizables
	require get_template_directory() . '/inc/querys.php';
	require get_template_directory() . '/inc/shortcodes.php';

	//cuando el tema es activado
	function gymfitness_setup(){
		//habilitar imagenes destacadas
		add_theme_support('post-thumbnails');

		add_theme_support('title-tag');

		//Agregar tamaños personalizados
		add_image_size('square',350, 350, true);
		add_image_size('portrait',350, 724, true);
		add_image_size('cajas',400, 375, true);
		add_image_size('mediano',700, 400, true);
		add_image_size('blog',966, 664, true);
	}

	add_action('after_setup_theme','gymfitness_setup');

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

		//cargando normalize
		wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');

		//cargando el slick nav menu mobil
		wp_enqueue_style('slicknavCSS', get_template_directory_uri().'/css/slicknav.min.css', array(), '1.0.10');

		//fuentes de google
		wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap',array(),'1.0.0');

		if(is_page('galeria')) :
			//cargando el lightbox2
			wp_enqueue_style('lightboxCSS', get_template_directory_uri().'/css/lightbox.min.css', array(), '2.11.1');
		endif;

		if(is_page('contacto')) :
			//cargando el cdn de leaflet
			wp_enqueue_style('leafleftCSS', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css', array(), '1.6.0');
		endif;

		if(is_page('inicio')) :
			//cargando el cdn de bxSliderCSS
			wp_enqueue_style('bxSliderCSS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
		endif;		

		//la hoja de estilos principal
		wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googleFont'), '1.0.0');

		wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery','slicknavJS'), '1.0.10', true);

		if(is_page('galeria')) :
			//cargar script de lightbox
			wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.1', true);
		endif;

		if(is_page('contacto')) :
			//cargar script de lightbox
			wp_enqueue_script('leafleftJS', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js', array(), '1.6.0', true);
		endif;

		if(is_page('inicio')) :
			//cargar script de bxSliderJS
			wp_enqueue_script('bxSliderJS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true);
		endif;
	}

	add_action('wp_enqueue_scripts','gymfitness_scripts_styles');

	//Definir zona de widgets

	function gymfitness_widgets(){

		register_sidebar(array(
			'name' => 'Sidebar 1',
			'id' => 'sidebar_1',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="text-center texto-primario">',
			'after_title' => '</h3>'
			));

		register_sidebar(array(
			'name' => 'Sidebar 2',
			'id' => 'sidebar_2',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="text-center texto-primario">',
			'after_title' => '</h3>'
			));
	}

	add_action('widgets_init','gymfitness_widgets');

	/** Image Hero **/
	function gymfitness_hero_image(){

		// obtener id pagina principal
		$front_page_id = get_option('page_on_front');

		$id_imagen = get_field('imagen_hero', $front_page_id);

		$imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

		// Style CSS
		wp_register_style('custom', false);

		wp_enqueue_style('custom');

		$imagen_destacada_css = "
			body.home .site-header{
				background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url($imagen);
			}
		";

		wp_add_inline_style('custom', $imagen_destacada_css);
	} 

	add_action('init','gymfitness_hero_image');
	
?>