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
                <div class="carousel-inner">
                    <div class="carousel-item active" data-type="image" data-interval="10000">
                        <img src="/assets/images/Savoy_Kemalpasa_Sunset_003.webp" alt="" class="img-fluid">
                        <div class="carousel-caption text-start">
                            <div class="container">
                                <div class="row align-items-center col-lg-12 mx-auto">
                                    <div class="col-lg-6 scroll-reveal-left">
                                        <div class="hero-heading">
                                            <h1 class="hero-title order-2">
                                                HAKKIMIZDA
                                            </h1>
                                            <h2 class="hero-subtitle order-1 animation-text">KURUMSAL</h2>
                                        </div>
                                        <div class="hero-description mt-4 mt-lg-0">
                                            <div class="col-lg-10 col-10">
                                                <div class="carousel-content">
                                                    <p> Lorem ipsum dolar sit amet Lorem ipsum dolor sit amet
                                                        consectetur adipisicing elit. Labore odio expedita, eum
                                                        excepturi incidunt rem et sunt consectetur voluptates eaque
                                                        quasi molestias fugit nisi quibusdam architecto ab voluptatum
                                                        ipsa quo. </p>
                                                </div>
                                            </div>
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
                                <li class="breadcrumb-item"><a href="#">Kurumsal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="secheading">
                            <div class="secheading-border active"></div>
                            <h3 class="sub-heading animation-text">Biz Kimiz?</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4 px-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pe-5">
                        <h4 class="fs-1 animation-text mb-5">We Are Relentlessly Focused on Executing The Highest
                            Standards For Our Employees</h4>

                        <div class="mx-auto position-relative ">
                            <div class="stats-grid scroll-reveal-bottom d-grid row-gap-4">
                                <div class="stats-item">
                                    <h3 class="stats-number">
                                        <output id="statsKm" class="countup" data-value="25">25</output>
                                        %
                                    </h3>
                                    <p class="stats-text">Ölçüm</p>
                                </div>
                                <div class="stats-item">
                                    <h3 class="stats-number">
                                        <output id="" class="countup" data-value="35">35</output>
                                        +
                                    </h3>
                                    <p class="stats-text">PROJEYE ATILAN İMZA</p>
                                </div>
                                <div class="stats-item">
                                    <h3 class="stats-number">
                                        <output id="" class="countup" data-value="100">100</output>
                                        %
                                    </h3>
                                    <p class="stats-text">Başarı</p>
                                </div>
                                <div class="stats-item">
                                    <h3 class="stats-number">
                                        <output id="" class="countup" data-value="100">100</output>
                                        +
                                    </h3>
                                    <p class="stats-text">UZMAN ÇALIŞAN</p>
                                </div>
                            </div>
                        </div>

                        <div class="content fw-light fs-5 mt-3">
                            <p>ACC Yapı, yüksek kalite standartlarını esas alan yaklaşımıyla hayata geçirdiği yeni
                                projeleriyle modern ve güvenli yaşam alanları oluşturmaya devam ediyor. Estetik mimari
                                anlayışı, güçlü mühendislik altyapısı ve titiz uygulama süreçleriyle geliştirilen
                                projeler, hem konforlu bir yaşam hem de yüksek yatırım değeri sunmayı hedefliyor.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="/assets/images/Savoy_Kemalpasa_Sunset_003.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-black py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <h5 class="text-white fs-1 text-uppercase fw-medium font-inter"> Dive into our Core Values and see why we're not your average CONSTRUCTION company! </h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-8 mx-auto">
                        <iframe class="w-100 " width="560" height="615" src="https://www.youtube.com/embed/77ygz-MC6_8?si=I21rKTWYTVevbRh9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" style="" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

</body>

</html>