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
                        <img src="./assets/images/haber-banner.webp" alt="" class="img-fluid">
                        <div class="carousel-caption text-start">
                            <div class="container p-0 mx-auto">
                                <div class="row align-items-center col-lg-10 mx-auto">
                                    <div class="col-lg-6 scroll-reveal-left">
                                        <h1 class="hero-title">HABERLER</h1>
                                        <h2 class="hero-subtitle">Majestİk Yapı’dan Güncel Gelİşmeler</h2>
                                        <div class="hero-description mt-4 mt-lg-0">
                                            <div class="col-lg-10 col-12">
                                                <div class="carousel-content">
                                                    <p>Majestik Yapı’nın projeleri, duyuruları ve tüm güncel gelişmelerini bu alandan takip edebilirsiniz.</p>
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

        <section class="news-section py-5">
            <div class="container">
                <div class="row align-items-center row-gap-5">
                    <div class="col-lg-4 scroll-reveal-left">
                        <div class="card">
                            <img src="./assets/images/18879.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                                <div class="card-content">
                                    <a href="haber-detay.php" class="stretched-link">
                                        <h5 class="card-title mb-3">Majestİk İnşaat’tan Şehİr
                                            Sİluetİne Değer Katan Yenİ Proje</h5>
                                    </a>
                                    <p class="card-text">Her projede estetik mimariyi sağlam yapı teknikleriyle birleştirir, yatırım değerini artıran, uzun ömürlü ve prestijli yapılar üretir. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 scroll-reveal-bottom">
                        <div class="card">
                            <img src="./assets/images/111032.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                                <div class="card-content">
                                    <a href="haber-detay.php" class="stretched-link">
                                        <h5 class="card-title mb-3">Majestİk İnşaat’tan Şehİr
                                            Sİluetİne Değer Katan Yenİ Proje</h5>
                                    </a>
                                    <p class="card-text">Her projede estetik mimariyi sağlam yapı teknikleriyle birleştirir, yatırım değerini artıran, uzun ömürlü ve prestijli yapılar üretir. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 scroll-reveal-right">
                        <div class="card">
                            <img src="./assets/images/111032.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                                <div class="card-content">
                                    <a href="haber-detay.php" class="stretched-link">
                                        <h5 class="card-title mb-3">Majestİk İnşaat’tan Şehİr
                                            Sİluetİne Değer Katan Yenİ Proje</h5>
                                    </a>
                                    <p class="card-text">Her projede estetik mimariyi sağlam yapı teknikleriyle birleştirir, yatırım değerini artıran, uzun ömürlü ve prestijli yapılar üretir. </p>
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