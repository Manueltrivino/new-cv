<?php 
require 'baseDatos.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CV Manuel</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EasyFolio
  * Template URL: https://bootstrapmade.com/easyfolio-bootstrap-portfolio-template/
  * Updated: Feb 21 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Manuel Triviño</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Hola</a></li>
          <li><a href="#about">Perfil</a></li>
          <li><a href="#resume">Experiencia</a></li>
          <li><a href="#educacion">Educacion</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#cursos">Cursos</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <!--<a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>-->
        <a href="https://github.com/Manueltrivino" class="instagram"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/manuel-trivi%C3%B1o-diaz-/" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
   <section id="hero" class="hero section" >
   <div class="container" data-aos="fade-up" data-aos-delay="100">

<div class="row align-items-center content">
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
    <h2>Aprendiendo y amando la tecnologia</h2>
    <p class="lead">Iniciando en un apasionante mundo en el que nunca se deja de aprender</p>
    <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
      <a href="#portfolio" class="btn btn-primary">Ver mi trabajo</a>
      <a href="#contact" class="btn btn-outline">Contactar</a>
    </div>
    <!--<div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
      <div class="stat-item">
        <span class="stat-number">5+</span>
        <span class="stat-label">Years Experience</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">100+</span>
        <span class="stat-label">Projects Completed</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">50+</span>
        <span class="stat-label">Happy Clients</span>
      </div>
    </div>--> 
  </div>
  <div class="col-lg-6">
    <div class="hero-image">
      <div class="shape-1"></div>
      <div class="shape-2"></div>
    </div>
  </div>
</div>
<hr>
<br>
<hr>
<br>

</div>

    </section> <!--/Hero Section -->
  
    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Perfil profecional</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Soy estudiante avanzado de la carrera de Analista de Sistemas, con un firme interés en involucrarme y adquirir experiencia práctica en proyectos de gran envergadura.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/profile/profile-square-2.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <span class="subtitle">Sobre mi</span>

              <h2>Analista de Sistemas &amp; data analyst</h2>

              <p class="lead mb-4">Soy un profesional en tecnologías de la información con conocimientos en Java, Python, JavaScript, HTML,
                CSS y SQL. Estoy cursando el último año de Técnico Analista de Sistemas, también cuento con
                conocimientos como Analista SOC en ciberseguridad, gestionando incidentes y protegiendo sistemas contra
                amenazas. Además, tengo experiencia como Analista de STOCK, lo que refuerza mis habilidades técnicas y
                analíticas. Comprometido con el aprendizaje continuo, busco aportar soluciones tecnológicas innovadoras.
                </p>

              <div class="personal-info">
                <div class="row g-4">
                  
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Nombre</span>
                      <span class="value">Manuel Triviño</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Telefono</span>
                      <span class="value">011 51029955</span>
                    </div>
                  </div>

                 <!-- <div class="col-6">
                    <div class="info-item">
                      <span class="label">Age</span>
                      <span class="value">26 Years</span>
                    </div>
                  </div>-->

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Email</span>
                      <span class="value">arturotrivino@yahoo.com</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Direccion</span>
                      <span class="value">Argentina, Capital Federal</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

        <?php for($i=0; $i < $cantidadHabilidades; $i++){?>
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <h3><?php echo $habilidades[$i]['lengual'];?></h3>
              <p><?php echo $habilidades[$i]['uso'];?></p>
              <span class="text-end d-block"><?php echo $habilidades[$i]['avance'];?>%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $habilidades[$i]['avance'];?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        <?php }?>
<hr>
    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="resume-wrapper">
              <div class="resume-block" data-aos="fade-up">
                <h2>Experiencia</h2>
                <!--<p class="lead"></p>-->

                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">Sodimac </h4>
                      <span class="period">2022 al presente</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Analista de Stock</h3>
                      <p class="description">Reportes y Comunicación:</p>
                      <p class="description"> 
                        <ul>
                          <li>Generar informes de inventario: Elaborar informes periódicos sobre el estado del inventario, incluyendo métricas clave como la rotación de inventario, los niveles de stock, los costos de almacenamiento y las posibles pérdidas por obsolescencia.</li>
                          <li>Comunicar los hallazgos y recomendaciones: Presentar los resultados de los análisis de inventario y las recomendaciones a los diferentes departamentos relevantes, como compras, ventas, producción y finanzas.</li>
                          <li>Colaborar con otros departamentos: Trabajar en estrecha colaboración con otros equipos para asegurar una coordinación efectiva en la planificación de la producción, la gestión de compras y la satisfacción del cliente.</li>
                        </ul>
                      </p>
                        <p class="description">Seguimiento y Control del Inventario:</p>
                      <p class="description">
                        <ul>
                          <li>Monitorear los niveles de stock: Realizar un seguimiento constante de las cantidades disponibles de cada producto en los diferentes almacenes o ubicaciones.</li>
                          <li>Registrar las entradas y salidas de inventario: Asegurar la precisión en el registro de las recepciones de mercancías, los envíos a clientes, las transferencias entre almacenes y cualquier otro movimiento de inventario.</li>
                          <li>Realizar inventarios físicos y cíclicos: Contar físicamente el inventario disponible de forma periódica para verificar la exactitud de los registros del sistema y detectar posibles discrepancias.</li>
                          <li>Investigar y resolver discrepancias: Analizar las diferencias encontradas entre el inventario físico y los registros del sistema para identificar las causas y tomar las medidas correctivas necesarias.</li>
                          <li>Gestionar las devoluciones y productos dañados: Supervisar el proceso de recepción, inspección y registro de las devoluciones de clientes y los productos dañados, determinando su disposición final.</li>
                        </ul>
                      </p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">Sodimac</h4>
                      <span class="period">2014 - 2022</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Vendedor/Repositor</h3>
                      <p class="description">
                        Impulsar ventas asegurando la disponibilidad y correcta presentación de productos en el punto de venta. Reponer, organizar, exhibir, controlar fechas, atiender clientes, informar sobre productos y stock, y colaborar en promociones.</p>
    
                      <p></p>
                    </div>
                  </div>                 
                </div>
              </div>
              <hr>
            
            <section id="educacion">
              <div class="resume-block" data-aos="fade-up" data-aos-delay="100">
                <h2>Educacion</h2>
                
                <?php for($e=0; $e<$cantidadEstudios; $e++){?>
                  <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company"><?php echo $estudio[$e]['istituto'];?></h4>
                      <span class="period"><?php echo $estudio[$e]['anio'];?></span>
                    </div>
                    <div class="timeline-dot"></div>
                      <div class="timeline-right">
                        <h3 class="position"><?php echo $estudio[$e]['titulo'];?></h3>
                        <p class="description">
                          <ul>
                            <li><?php echo $estudio[$e]['descripcion1'];?></li>
                            <li><?php echo $estudio[$e]['descripcion2'];?></li>
                          </ul>
                        </p>
                      </div>
                    </div>
                  </div>
                  <?php }?>
                  <hr>
                </div> 
              </div>
            </section>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Esta sección se encuentra en construccion</p>
      </div><!-- End Section Title -->
      
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

         <!-- <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active"></li>
              <li data-filter=".filter-web"></li>
              <li data-filter=".filter-graphics"></li>
              <li data-filter=".filter-motion"></li>
              <li data-filter=".filter-brand"></li>
            </ul>
          </div> -->

          <?php for($p=0; $p < $cantidadexpe; $p++){?>
          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="<?php echo $portafolio[$p]['imagen'];?>" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                   <div class="portfolio-actions">
                      <a href="" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="<?php echo $portafolio[$p]['redireccion'];?>" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div> 
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category"><?php echo $portafolio[$p]['categoria'];?></span>
                  <h3><?php echo $portafolio[$p]['titulo'];?></h3>
                  <p><?php echo $portafolio[$p]['descripcion'];?></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <?php }?>
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->
    <hr>   
    <!-- Faq Section -->
    <section id="cursos" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>CURSOS</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Con el objetivo de fortalecer y expandir mis competencias, he completado los siguientes cursos relevantes para mi trayectoria profesional</p>
      </div><!-- End Section Title -->

      <div class="container">
      
        <div class="row justify-content-center">
        
          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
          <?php for($c=0; $c < $cantidadCursos; $c++){?>
            <div class="faq-container">
              <div class="faq-item">
                <h3><?php echo$cursos[$c]['nombre'];?></h3>
                <div class="faq-content">
                  <p><embed src="<?php echo $cursos[$c]['certifica'];?>" type="application/pdf" width="800px" height="600px" /></p>
                </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item -->
              <?php }?>
            </div>
            
          </div>
          
        </div>
    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">Contacto</div>
              <h2 class="display-5 mb-4">Puedes elegir cualquier forma de contacto.</h2>
              <p class="lead mb-4"></p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span>arturotrivino@yahoo.com</span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span>+54 011 5102 9955</span>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>Villa Urquiza, Capital Federal, Argentina.</span>
                </div>

                <a href="https://www.google.com/maps/place/Bucarelli+1900,+C1431+Cdad.+Aut%C3%B3noma+de+Buenos+Aires/@-34.5804381,-58.4867932,17z/data=!3m1!4b1!4m6!3m5!1s0x95bcb669bda33465:0x2cc17b8016810551!8m2!3d-34.5804381!4d-58.4842129!16s%2Fg%2F11fxcdfkcm?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" class="map-link d-inline-flex align-items-center">
                  Open Map
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <!--
          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                      <button type="submit" class="btn btn-submit w-100">Submit Message</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div> -->
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Manuel</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
       <!--<a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>--> 
        <a href="https://github.com/Manueltrivino"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/manuel-trivi%C3%B1o-diaz-/"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
       
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> 

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>