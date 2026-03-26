<?php require_once 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page">

        <section class="hero">
            <div id="carouselSlider" class="carousel slide">
                <div class="carousel-inner black-effect">
                    <div class="carousel-item active" data-type="image" data-interval="10000">
                        <img src="./assets/images/Savoy_Kemalpasa_Sunset_003.webp" alt="" class="img-fluid">
                        <div class="carousel-caption text-start">
                            <div class="container p-0">
                                <div class="row align-items-center col-lg-12 mx-auto">
                                    <div class="col-lg-12 scroll-reveal-left">
                                        <div class="hero-heading">
                                            <h1 class="hero-title order-2 text-capitalize">
                                                BİZDEN HABERLER
                                            </h1>
                                            <h2 class="hero-subtitle order-1 animation-text">HABERLER</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper position-relative py-0">
            <div class="container">
                <div class="breadcrumb-container">
                    <div class="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Haberler</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="secheading">
                            <div class="secheading-border active"></div>
                            <div class="sub-heading animation-text">Haberler</div>
                            <h3>Turning Client Into Reality</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-section py-5">
            <div class="container">
                <div class="row align-items-center row-gap-5">
                    <div class="col-lg-6 scroll-reveal-left">
                        <div class="card news-card news-left-image">
                            <div class="row g-0">
                                <div class="col-md-6 col-4">
                                    <img src="./assets/images/beykoz-prive-2.webp" class="img-fluid h-100" alt="">
                                </div>
                                <div class="col-md-6 col-8">
                                    <div class="card-body d-flex flex-column justify-content-between h-100">
                                        <div class="card-content">
                                            <a href="haber-detay" class="stretched-link">
                                                <h5 class="card-title mb-3">
                                                    Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet öşçğüiı
                                                </h5>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <date>20.06.2024</date>
                                            <strong class="text-primary text-decoration-none fw-bold"> 
                                                HABER DETAYI
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll-reveal-left">
                        <div class="card news-card news-left-image">
                            <div class="row g-0">
                                <div class="col-md-6 col-4">
                                    <img src="./assets/images/beykoz-prive-2.webp" class="img-fluid h-100" alt="">
                                </div>
                                <div class="col-md-6 col-8">
                                    <div class="card-body d-flex flex-column justify-content-between h-100">
                                        <div class="card-content">
                                            <a href="haber-detay" class="stretched-link">
                                                <h5 class="card-title mb-3">
                                                    Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet öşçğüiı
                                                </h5>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <date>20.06.2024</date>
                                            <strong class="text-primary text-decoration-none fw-bold"> 
                                                HABER DETAYI
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll-reveal-left">
                        <div class="card news-card news-left-image">
                            <div class="row g-0">
                                <div class="col-md-6 col-4">
                                    <img src="./assets/images/beykoz-prive-2.webp" class="img-fluid h-100" alt="">
                                </div>
                                <div class="col-md-6 col-8">
                                    <div class="card-body d-flex flex-column justify-content-between h-100">
                                        <div class="card-content">
                                            <a href="haber-detay" class="stretched-link">
                                                <h5 class="card-title mb-3">
                                                    Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet öşçğüiı Lorem
                                                </h5>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <date>20.06.2024</date>
                                            <strong class="text-primary text-decoration-none fw-bold"> 
                                                HABER DETAYI
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>