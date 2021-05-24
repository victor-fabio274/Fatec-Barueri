<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fatec_Barueri
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
<div class="container-fluid" style="background-color: #333">
	<div class="row">
		<div class="col text-white">
			<h2>Docentes</h2>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm docente-section-bg">
			<div>
				<p>
					Este espaço destina-se a informações relevantes aos profissionais
					docentes que atuam na Fatec Barueri, bem como aos interessados em vir
					a trabalhar conosco.
				</p>
			</div>
			<div>
				<a>Perfil dos professores</a>
			</div>
			<div>
				<a>Editais e Concursos</a>
			</div>
		</div>
		<div class="col-sm remove-padding">
			<img src="/wp-content/uploads/2021/05/giz.png" />
		</div>
	</div>
</div>

<?php
get_sidebar();
get_footer();
