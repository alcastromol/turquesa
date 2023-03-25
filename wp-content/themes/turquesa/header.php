<!doctype html>
  <html <?php language_attributes(); ?> class="no-js overflow-x-hidden">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <!--=================================
    =            Css Critico            =
    ==================================-->
    
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/criticos.css">
    
    <!--====  End of Css Critico  ====-->

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header class="header container-fluid pt-1">
      <nav class="d-flex justify-content-between">
        <div class="logo me-2">
          <a href="<?php echo home_url(); ?>">
            <?php echo wp_get_attachment_image( 5, array('1920 ', '1140'), false, [
              'class' => 'slide', 
              'loading' => 'eager',
              'data-wow-duration' => '800ms' ] );  ?>
            <span class="e-reconocibles">
              Turquesa Digital
            </span>
          </a>
        </div>
        <ul class="list-unstyled d-flex justify-content-between me-auto menu">
          <li class="d-flex align-items-center me-1 ms-1"><a href="#" class="text-decoration-none d-block cl-blanco">Inicio</a></li>
          <li class="d-flex align-items-center me-1 ms-1"><a href="#" class="text-decoration-none d-block cl-blanco">Nosotros</a></li>
          <li class="d-flex align-items-center me-1 ms-1">
            <a href="#" class="text-decoration-none d-block cl-blanco d-flex align-items-center">Servicios 
              <img src="<?php echo get_template_directory_uri() ?>/img/flecha-blanco-abajo.svg" alt="Flecha abajo" class="flecha abajo">
            </a>
            <div class="mega-menu d-grid grid1111 bg-piedras">
              <div class="col1">
                <h5 class="mb-1">Diseño Web</h5>
                <ul>
                  <li class="mb-05"><a href="#">Creación de Mockup para sitio web</a></li>
                  <li class="mb-05"><a href="#">Creación de Mockup para Landing Page's</a></li>
                  <li class="mb-05"><a href="#">Auditorias AU / UI</a></li>
                </ul>
              </div>
              <div class="col2">
                <h5 class="mb-1">Desarrollo Web</h5>
                <ul class="mb-1">
                  <li class="mb-05"><a href="#">Creación de Sitios Web Corporativos</a></li>
                  <li class="mb-05"><a href="#">Creación de Comercio Electrónico</a></li>
                  <li class="mb-05"><a href="#">Creación de Landing Page's</a></li>
                  <li class="mb-05"><a href="#">Creación de Blog's</a></li>
                  <li class="mb-05"><a href="#">Mantenimiento Web</a></li>
                  <li class="mb-05"><a href="#">Migración Web</a></li>
                  <li class="mb-05"><a href="#">Optimizacion de Rendmiento Web</a></li>
                  <li class="mb-05"><a href="#">Optimizacion de Seguridad Web</a></li>
                </ul>
              </div>
              <div class="col3">
                <h5 class="mb-1">SEO</h5>
                <ul class="mb-1">
                  <li class="mb-05"><a href="#">Consultoría SEO</a></li>
                  <li class="mb-05"><a href="#">Posicionamiento SEO</a></li>
                  <li class="mb-05"><a href="#">Auditoría SEO Técnico</a></li>
                  <li class="mb-05"><a href="#">Auditoría para Optimización de Contenidos</a></li>
                  <li class="mb-05"><a href="#">Análisis SEO de la Competencia</a></li>
                  <li class="mb-05"><a href="#">Estudio de Palabras Clave (Keyword's research)</a></li>
                  <li class="mb-05"><a href="#">Link Building</a></li>
                </ul>
              </div>
              <div class="col3">
                <h5 class="mb-1">Metricas Web</h5>
                <ul class="mb-1">
                  <li class="mb-05"><a href="#">Auditorias de codigos de seguimiento</a></li>
                  <li class="mb-05"><a href="#">Implementación de codigos de seguimiento</a></li>
                  <li class="mb-05"><a href="#">Implementación de eventos y metricas web</a></li>
                </ul>
              </div>
              <div class="col3">
                <h5 class="mb-1">Redes sociales</h5>
                <ul class="mb-1">
                  <li class="mb-05"><a href="#">Creación de Redes sociales</a></li>
                  <li class="mb-05"><a href="#">Administración de Redes sociales</a></li>
                </ul>
              </div>
              <div class="col3">
                <h5 class="mb-1">Publicidad de paga</h5>
                <ul>
                  <li class="mb-05"><a href="#">Publicidad en Google Ads</a></li>
                  <li class="mb-05"><a href="#">Publicidad en Facebook e Instagram</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center me-1 ms-1"><a href="#" class="text-decoration-none d-block cl-blanco">Contácto</a></li>
          <li class="d-flex align-items-center me-1 ms-1"><a href="#" class="text-decoration-none d-block cl-blanco">Blog</a></li>
          <li class="d-flex align-items-center me-1 ms-1"><a href="#" class="text-decoration-none d-block cl-blanco">Talento</a></li>
          <li class="d-flex align-items-center me-1 ms-1"><a href="#" class="text-decoration-none d-block cl-blanco">Búscar</a></li>
        </ul>
        <div class="videollamada d-flex justify-content-center align-items-center">
          <a href="#" class="btn bg-dg-turquesa text-decoration-none d-block fw-bold">Cotizar</a>
        </div>
      </nav>
    </header> 