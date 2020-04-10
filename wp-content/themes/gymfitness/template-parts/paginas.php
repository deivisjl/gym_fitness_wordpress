<?php while(have_posts()):the_post(); ?>
	
	<h1 class="text-center texto-primario"><?php the_title(); ?></h1>

	<?php 
		if(has_post_thumbnail()) :
			the_post_thumbnail('blog',array('class' => 'imagen-destacada'));
		else:
		endif;

	?>

	<?php the_content(); ?>

	Escrito por: <?php the_author(); ?>

	Fecha: <?php the_date(); ?>

<?php endwhile; ?>