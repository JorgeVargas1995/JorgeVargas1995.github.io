<?php
include 'components/connect.php'; // Verifica la existencia y necesidad de incluir el archivo de conexión a la base de datos
session_start(); // Inicia la sesión

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Acerca de nosotros</title>

   <!-- Swiper CSS -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/panel_style.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <style>
      .image-container {
         float: left;
         width: 50%;
      }

      .content {
         float: right;
         width: 50%;
         padding: 20px;
      }

      .btn {
         display: inline-block;
         padding: 10px 20px;
         font-size: 14px;
         font-weight: bold;
         text-transform: uppercase;
         background-color: #007bff; /* Cambia el color de fondo del botón a azul */
         color: #fff;
         border: none;
         border-radius: 4px;
         transition: background-color 0.3s ease;
      }

   </style>
</head>

<body>
   <?php include 'components/user_header.php'; ?> <!-- Incluye el encabezado del usuario -->

   
   <!-- Featured Section -->
   <section id="featured" class="featured">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="icon-box">
                  <i class="bi bi-card-checklist"></i>
                  <h3><a href="#" class="modal-trigger" data-modal="mission-modal">MISIÓN</a></h3>
                  <p>Ofrecer servicios y productos tecnológicos de alta calidad, adaptados a las necesidades y expectativas de nuestros clientes, con un enfoque ágil, creativo y colaborativo. Contribuir al progreso social y económico mediante el uso responsable y eficiente de la tecnología.</p>
               </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
               <div class="icon-box">
                  <i class="bi bi-bar-chart"></i>
                  <h3><a href="#" class="modal-trigger" data-modal="values-modal">VALORES</a></h3>
                  <p>Compromiso con la satisfacción del cliente, la excelencia y la mejora continua. Innovación constante para anticiparnos a los cambios y ofrecer soluciones vanguardistas. Responsabilidad social y ambiental para generar un impacto positivo en nuestro entorno. Respeto, honestidad y transparencia en todas nuestras relaciones. Trabajo en equipo, diversidad y aprendizaje compartido.</p>
               </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
               <div class="icon-box">
                  <i class="bi bi-binoculars"></i>
                  <h3><a href="#" class="modal-trigger" data-modal="vision-modal">VISIÓN</a></h3>
                  <p>Ser una empresa líder en el desarrollo e implementación de soluciones tecnológicas innovadoras y sostenibles que mejoren la calidad de vida de las personas y el rendimiento de las organizaciones.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Featured Section -->

   <!-- Mission Modal -->
   <div id="mission-modal" class="modal">
      <div class="modal-content">
         <span class="close">&times;</span>
         <h2>MISIÓN</h2>
         <p>Ofrecer servicios y productos tecnológicos de alta calidad, adaptados a las necesidades y expectativas de nuestros clientes, con un enfoque ágil, creativo y colaborativo. Contribuir al progreso social y económico mediante el uso responsable y eficiente de la tecnología.</p>
      </div>
   </div>

   <!-- Values Modal -->
   <div id="values-modal" class="modal">
      <div class="modal-content">
         <span class="close">&times;</span>
         <h2>VALORES</h2>
         <p>Compromiso con la satisfacción del cliente, la excelencia y la mejora continua. Innovación constante para anticiparnos a los cambios y ofrecer soluciones vanguardistas. Responsabilidad social y ambiental para generar un impacto positivo en nuestro entorno. Respeto, honestidad y transparencia en todas nuestras relaciones. Trabajo en equipo, diversidad y aprendizaje compartido.</p>
      </div>
   </div>

   <!-- Vision Modal -->
   <div id="vision-modal" class="modal">
      <div class="modal-content">
         <span class="close">&times;</span>
         <h2>VISIÓN</h2>
         <p>Ser una empresa líder en el desarrollo e implementación de soluciones tecnológicas innovadoras y sostenibles que mejoren la calidad de vida de las personas y el rendimiento de las organizaciones.</p>
      </div>
   </div>

   <!-- Featured Section -->
   <section id="featured" class="featured">
      <div class="container">
         <div class="row">
            <div class="image-container">
               <img src="images/homee/logo1.jpeg" alt="Logo" class="logo-image">
            </div>

            <div class="content">
               <h3>¿Por qué comprar con nosotros?</h3>
               <p>Somos la mejor compañía de seguridad para tu hogar o empresa con los mejores productos.</p>
               <a href="contact.php" class="btn">Contáctanos</a>
            </div>
         </div>
      </div>
   </section>
   <!-- End Featured Section -->

   <!-- Resto del código HTML... -->

</body>

</html>

  
   <?php include 'components/footer.php'; ?> <!-- Incluye el pie de página -->

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>
