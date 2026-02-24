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
                                            <h1 class="hero-subtitle order-2 text-capitalize border-0">Projelerimize <br> Göz Atın</h1>
                                            <h2 class="hero-title order-1 border-3 border-primary border-bottom">PROJELER</h2>
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
                                <li class="breadcrumb-item active" aria-current="page">Projeler</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="secheading">
                            <div class="secheading-border active"></div>
                            <div class="sub-heading animation-text">Projelerimiz</div>
                            <h2> Bizim Projelerimiz </h2>
                        </div>
                    </div>
                    <div class="col-md-6 px-4">
                        <form action="" method="">
                            <select class="form-control rounded-0">
                                <option value="">Devam Eden Projeler</option>
                                <option value="">Tamamlanan Projeler</option>
                            </select>
                        </form>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="service-item service-gallery-column">
                            <img src="./assets/images/beykoz-prive-1.webp"
                                class="service-image" alt="">
                            <div class="service-content">
                                <a href="#" class="service-info">
                                    <h3>Beykoz Prive</h3>
                                    <p>We’ll work closely with your team to plan out this critical construction phase with a
                                        keen
                                        emphasis on cost estimating & management as well as logistical planning. We’ll provide
                                        all
                                        budgeting from schematic design straight through to construction documents.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item service-gallery-column">
                            <img src="./assets/images/beykoz-prive-2.webp"
                                class="service-image" alt="">
                            <div class="service-content">
                                <a href="#" class="service-info">
                                    <h3>Beykoz Prive</h3>
                                    <p>We’ll work closely with your team to plan out this critical construction phase with a
                                        keen
                                        emphasis on cost estimating & management as well as logistical planning. We’ll provide
                                        all
                                        budgeting from schematic design straight through to construction documents.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item service-gallery-column">
                            <img src="./assets/images/beykoz-prive-3.webp"
                                class="service-image" alt="">
                            <div class="service-content">
                                <a href="#" class="service-info">
                                    <h3>Beykoz Prive</h3>
                                    <p>We’ll work closely with your team to plan out this critical construction phase with a
                                        keen
                                        emphasis on cost estimating & management as well as logistical planning. We’ll provide
                                        all
                                        budgeting from schematic design straight through to construction documents.</p>
                                </a>
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