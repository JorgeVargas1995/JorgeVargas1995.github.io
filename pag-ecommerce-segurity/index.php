<?php
include 'components/connect.php'; // Incluye el archivo de conexión a la base de datos
session_start(); // Inicia la sesión
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
include 'components/wishlist_cart.php'; // Incluye el archivo que muestra la lista de deseos y el carrito
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/panel_style.css">
    <style>
        #main {
            position: relative;
        }

        .carousel-content {
            position: relative;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            padding: 10px;
            color: #fff;
            text-align: left;
        }

        .carousel-caption h1 {
            margin-top: 0;
            font-size: 36px;
            font-weight: bold;
            line-height: 1.2;
        }

        .carousel-caption p {
            margin-bottom: 0;
            font-size: 18px;
        }
    </style>
</head>

<body style="background-image: url('images/homee/fondoBack1.png');">

    <?php include 'components/user_header.php'; ?> <!-- Incluye el encabezado del usuario -->

    <main id="main">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/homee/homeImage2.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h1>LA MEJOR TECNOLOGÍA PARA CUBRIR SUS NECESIDADES DE SEGURIDAD, SOFTWARE Y REDES</h1>
                        <h2>Contamos con los mejores equipos para uso residencial, comercial e industrial. Nuestro servicio está respaldado por la opinión de nuestros clientes. Lo invitamos a conocer nuestras diferentes líneas de productos y convencerse de que somos la opción para usted.</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/homee/homeImage1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h1>LA MEJOR TECNOLOGÍA PARA CUBRIR SUS NECESIDADES DE SEGURIDAD, SOFTWARE Y REDES</h1>
                        <h2>Contamos con los mejores equipos para uso residencial, comercial e industrial. Nuestro servicio está respaldado por la opinión de nuestros clientes. Lo invitamos a conocer nuestras diferentes líneas de productos y convencerse de que somos la opción para usted.</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner2.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <div class="card">
                            <div class="card-body">
                                <p>SISTEMAS DE VIDEOVIGILANCIA PARA TODAS LAS NECESIDADES Y PRESUPUESTOS. Puede verificar la actividad de sus cámaras desde su celular.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/YBuxCyaM9rw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <div class="card">
                            <div class="card-body">
                                <p>Contamos con el mejor software contable, comercial y de nómina del mercado:</p>
                                <ul>
                                    <li>Contpaqi contabilidad</li>
                                    <li>Adminpaq</li>
                                    <li>Comercial</li>
                                    <li>Nomipaq</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/wCOC2HJbwcg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

    </main>

    <?php include 'components/footer.php'; ?> <!-- Incluye el pie de página -->

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        // Configuraciones del Swiper
        var swiper = new Swiper(".home-slider", {
            loop: true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".category-slider", {
            loop: true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                650: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });

        var swiper = new Swiper(".products-slider", {
            loop: true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                550: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // Carousel auto play
        var carouselInterval = 7000; // Interval in milliseconds
        var carouselElement = document.getElementById("carouselExample");

        setInterval(function () {
            var currentSlide = carouselElement.querySelector(".carousel-item.active");
            var nextSlide = currentSlide.nextElementSibling;
            if (!nextSlide) {
                nextSlide = carouselElement.querySelector(".carousel-item:first-child");
            }
            currentSlide.classList.remove("active");
            nextSlide.classList.add("active");
        }, carouselInterval);
    </script>
</body>

</html>

<style>
    #main {
        position: relative;
    }

    .carousel-content {
        position: relative;
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        padding: 10px;
        color: #fff;
        text-align: left;
    }

    .carousel-caption h1 {
        margin-top: 0;
        font-size: 36px;
        font-weight: bold;
        line-height: 1.2;
    }

    .carousel-caption p {
        margin-bottom: 0;
        font-size: 18px;
    }
</style>

