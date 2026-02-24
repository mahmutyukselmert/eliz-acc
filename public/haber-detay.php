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
                        <img src="./assets/images/4595.webp" alt="" class="img-fluid">
                        <div class="carousel-caption text-start">
                            <div class="container p-0 mx-auto">
                                <div class="row align-items-center col-lg-10 col-11 mx-auto">
                                    <div class="col-lg-10 scroll-reveal-left">
                                        <div class="hero-heading">
                                            <h1 class="hero-subtitle order-2">Majestİk İnşaat’tan
                                                Yüksek Standartlarda
                                                Yenİ Yaşam Alanları</h1>
                                            <h2 class="hero-title order-1">Haberler</h2>
                                        </div>
                                        <div class="hero-description mt-4 mt-lg-0">
                                            <div class="col-lg-10 col-10">
                                                <div class="carousel-content">
                                                    <date>20 Mart 2026</date>
                                                    <p>Majestik Yapı, yüksek kalite standartlarıyla tasarladığı yeni projeleriyle modern, güvenli ve prestijli yaşam alanları sunmaya devam ediyor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="play-pulse-animation">
                                            <a href="#" class="btn play-button" aria-label="Play Video" data-bs-toggle="modal" data-bs-target="#videoModal">
                                                <i class="icon-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto scroll-reveal-bottom">
                        <div class="content">
                            <p>Majestik Yapı, yüksek kalite standartlarını esas alan yaklaşımıyla hayata geçirdiği yeni projeleriyle modern ve güvenli yaşam alanları oluşturmaya devam ediyor. Estetik mimari anlayışı, güçlü mühendislik altyapısı ve titiz uygulama süreçleriyle geliştirilen projeler, hem konforlu bir yaşam hem de yüksek yatırım değeri sunmayı hedefliyor.</p>
                            <p>
                                Yeni yaşam alanları; fonksiyonel daire planları, ferah iç mekân çözümleri ve doğal ışığı maksimum seviyede kullanan mimari tasarımıyla dikkat çekiyor. Projelerde kullanılan tüm yapı sistemleri ve malzemeler, dayanıklılık, güvenlik ve uzun ömür kriterlerine uygun olarak özenle seçiliyor. Bu sayede Majestik Yapı, sadece bugünün değil, geleceğin ihtiyaçlarını da karşılayan yapılar ortaya koyuyor. </p>
                            <p>
                                Majestik Yapı yetkilileri, projelerini tasarlarken kullanıcı konforunu ve yaşam kalitesini merkeze aldıklarını belirtiyor. Sosyal alanlar, peyzaj düzenlemeleri ve çevreyle uyumlu mimari yaklaşım sayesinde sakinlerine huzurlu, güvenli ve ayrıcalıklı bir yaşam ortamı sunulması hedefleniyor. Aynı zamanda projeler, bulunduğu bölgenin mimari değerine katkı sağlayarak şehir estetiğine prestij kazandırıyor.</p>
                            <p>
                                Yüksek standartlarda geliştirilen bu yeni yaşam alanları, yatırımcılar için de önemli fırsatlar sunuyor. Kaliteli yapı anlayışı, doğru lokasyon seçimi ve sürdürülebilir mimari çözümler sayesinde projeler uzun vadede değer kazanan güçlü bir yatırım alternatifi oluşturuyor.</p>
                            <p>
                                Majestik Yapı, her projesinde kaliteyi bir tercih değil, vazgeçilmez bir standart olarak kabul ediyor. Güvenli yapı sistemleri, nitelikli işçilik ve profesyonel proje yönetimi anlayışıyla sektörde kalıcı bir iz bırakmayı hedefliyor.</p>
                            <p>
                                Bu yeni projelerle birlikte Majestik Yapı, yaşam alanlarına sadece yapı değil; güven, prestij ve değer kazandırmaya devam ediyor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-projects-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto mx-auto">
                        <h3 class="section-title left-line right-line text-primary scroll-reveal-bottom mb-4 fw-bold fs-2">
                            HABER GALERİ
                        </h3>
                    </div>
                </div>
                <div class="row reveal-3d">
                    <div class="col-lg-12">
                        <div id="carouselProjects" class="carousel slide carouselProjects" data-bs-touch="true" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/images/18879.webp" class="img-fluid zoomable-image" alt="...">
                                    <button class="zoom-button zoom-trigger" aria-label="Zoom Image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                            <path d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                            <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/BeykozPrive_24.webp" class="img-fluid" alt="...">
                                    <button class="zoom-button zoom-trigger" aria-label="Zoom Image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                            <path d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                            <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="position-absolute top-50 end-minus-4 pointer-events-none">
                                <div class="carousel-controls">
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProjects" data-bs-slide="next">
                                        <i class="icon-arrow-right"></i>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-section py-0">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto mx-auto">
                        <h3 class="section-title left-line right-line text-primary scroll-reveal-bottom mb-4 fw-bold fs-2">
                            DİĞER HABERLER
                        </h3>
                    </div>
                </div>
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