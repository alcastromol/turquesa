<?php get_header(); ?>
	
	<!--============================
	=            Fondo             =
	=============================-->
	
	<div class="fondo-home slider overflow-hidden">
		<?php echo wp_get_attachment_image( 6, array('1920 ', '1140'), false, [
		'class' => '', 
		'loading' => 'eager',
		'data-wow-duration' => '800ms' ] );  ?>
	</div>

	<!--====  End of Fondo   ====-->
	
	<main role="main" aria-label="Content" >
		

		<!-- section -->
		<section id="main-head" class="container d-grid grid12 mb-3">

			<header class="d-none">
				<h1><?php the_title(); ?></h1>
				<article>
					<?php the_content(); ?>
				</article>
			</header>
			
			<div class="encabezado d-flex flex-column justify-content-center">
				<h2 class="f70 cl-blanco mb-05 titulo">Agencia de Marketing</h2>
				<?php echo wp_get_attachment_image( 9, array('1920 ', '1140'), false, [
				'class' => 'logo2', 
				'loading' => 'eager',
				'data-wow-duration' => '800ms' ] );  ?>

				<p class="cl-blanco">Sus aliados en diseño web y marketing digital especializados en desarrollo web, SEO y PPC para aumentar sus ingresos.</p>

				<div class="btns">
					<a href="#" class="btn bg-dg-turquesa text-decoration-none fw-medium d-inline-block me-1 mb-1">Contactar</a>
					<a href="#" class="btn bg-blanco text-decoration-none fw-medium d-inline-block">¿Cómo ayudamos?</a>
				</div>
			</div>

			<div class="portada">
				<div class="position-relative text-end">

					<div class="fondo-chica">
						<?php echo wp_get_attachment_image( 11, array('1920 ', '1140'), false, [
						'class' => '', 
						'loading' => 'eager',
						'data-wow-duration' => '800ms' ] );  ?>
					</div>

					<div class="grafico1 position-absolute">
						<?php echo wp_get_attachment_image( 12, array('1920 ', '1140'), false, [
						'class' => '', 
						'loading' => 'eager',
						'data-wow-duration' => '800ms' ] );  ?>
					</div>

					<div class="grafico2 position-absolute">
						<?php echo wp_get_attachment_image( 13, array('1920 ', '1140'), false, [
						'class' => '', 
						'loading' => 'eager',
						'data-wow-duration' => '800ms' ] );  ?>
					</div>

					<div class="grafico3 position-absolute">
						<?php echo wp_get_attachment_image( 14, array('1920 ', '1140'), false, [
						'class' => '', 
						'loading' => 'eager',
						'data-wow-duration' => '800ms' ] );  ?>
					</div>

				</div>
			</div>


			<div class="fondo-bola">
				<?php echo wp_get_attachment_image( 15, array('1920 ', '1140'), false, [
				'class' => '', 
				'loading' => 'eager',
				'data-wow-duration' => '800ms' ] );  ?>
			</div>

		</section>
		<!-- /section -->

		<section id="servicios" class="container">

			<div class="d-grid grid11">
				<div class="servicios d-grid grid11-2">
					<article class="servicio">
						<?php echo wp_get_attachment_image( 18, array('1920 ', '1140'), false, [
						'class' => 'mb-05', 
						'loading' => 'eager',
						'data-wow-duration' => '800ms' ] );  ?>
						<h2 class="f22 mb-05 fw-medium">Diseño web</h2>
						<p class="f16">Sus aliados en diseño web y marketing digital especiali</p>
						<a href="#" class="btn bg-morado cl-blanco text-decoration-none d-inline-block fw-bold f16">Ver más</a>
					</article>
					<article class="servicio">
						<?php echo wp_get_attachment_image( 19, array('1920 ', '1140'), false, [
						'class' => 'mb-05', 
						'loading' => 'eager',
						'data-wow-duration' => '800ms' ] );  ?>
						<h2 class="f22 mb-05 fw-medium">Desarrollo web</h2>
						<p class="f16">Sus aliados en diseño web y marketing digital especiali</p>
						<a href="#" class="btn bg-morado cl-blanco text-decoration-none d-inline-block fw-bold f16">Ver más</a>
					</article>
					<article class="servicio">
						<?php echo wp_get_attachment_image( 17, array('1920 ', '1140'), false, [
						'class' => 'mb-05', 
						'data-wow-duration' => '800ms' ] );  ?>
						<h2 class="f22 mb-05 fw-medium">SEO</h2>
						<p class="f16">Sus aliados en diseño web y marketing digital especiali</p>
						<a href="#" class="btn bg-morado cl-blanco text-decoration-none d-inline-block fw-bold f16">Ver más</a>
					</article>
					<article class="servicio">
						<?php echo wp_get_attachment_image( 16, array('1920 ', '1140'), false, [
						'class' => 'mb-05', 
						'data-wow-duration' => '800ms' ] );  ?>
						<h2 class="f22 mb-05 fw-medium">SEM</h2>
						<p class="f16">Sus aliados en diseño web y marketing digital especiali</p>
						<a href="#" class="btn bg-morado cl-blanco text-decoration-none d-inline-block fw-bold f16">Ver más</a>
					</article>
				</div>
				<div class="ayudamos">
					<h2 class="f30 mb-1">Ayudamos a las empresas y comercios electrónicos a:</h2>
					<ul class="d-grid grid11-2 list-unstyled mb-1">
						<li class="d-grid grid110">
							<div class="d-inline grid-auto">
								<img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="check">
							</div>
							<span class="grid-auto">Aumentar el tráfico dirigido</span>
						</li>
						<li class="d-grid grid110">
							<div class="d-inline grid-auto">
								<img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="check">
							</div>
							<span class="grid-auto">Crear estrategias digitales</span>
						</li>
						<li class="d-grid grid110">
							<div class="d-inline grid-auto">
								<img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="check">
							</div>
							<span class="grid-auto">Generar oportunidades de ventas calificadas</span>
						</li>
						<li class="d-grid grid110">
							<div class="d-inline grid-auto">
								<img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="check">
							</div>
							<span class="grid-auto">Mejorar la visibilidad de la marca</span>
						</li>
						<li class="d-grid grid110">
							<div class="d-inline grid-auto">
								<img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="check">
							</div>
							<span class="grid-auto">Vender más por medios digitales</span>
						</li>
						<li class="d-grid grid110">
							<div class="d-inline grid-auto">
								<img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="check">
							</div>
							<span class="grid-auto">Optimizacion de recursos</span>
						</li>
					</ul>
					<h2 class="f25 mb-1">Marcas con las que hemos colaborado:</h2>
				</div>
			</div>
						
		</section>

	</main>

<?php get_footer(); ?>