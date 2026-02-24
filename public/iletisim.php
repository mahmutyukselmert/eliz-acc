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
                                            <h1 class="hero-subtitle order-2 text-capitalize border-0">İletişim</h1>
                                            <h2 class="hero-title order-1 border-3 border-primary border-bottom">Bize Ulaşın</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="breadcrumb-container border-bottom border-2 border-primary">
                    <div class="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="contact-content">
                    <div class="contact-info-panel">
                        <h2>Bize Yazın</h2>

                        <div class="info-list">
                            <div class="info-item">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>111 West 33rd St<br>4th Floor<br>New York, NY 10120</p>
                            </div>

                            <div class="info-item">
                                <i class="fa-solid fa-phone"></i>
                                <p>212-545-0500</p>
                            </div>

                            <div class="info-item">
                                <i class="fa-solid fa-paper-plane"></i>
                                <p>info@acc.com</p>
                            </div>
                        </div>

                        <form class="contact-form">
                            <div class="form-row">
                                <input type="text" placeholder="Ad Soyad">
                                <input type="text" placeholder="Firma">
                            </div>
                            <div class="form-row">
                                <input type="email" placeholder="E-Posta">
                                <input type="tel" placeholder="Telefon">
                            </div>
                            <div class="form-row">
                                <textarea placeholder="İletişim"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-0">GÖNDER</button>
                        </form>
                    </div>

                    <div class="map-panel">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.617548123282!2d-73.99158568459422!3d40.74844097932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2s111%20W%2033rd%20St%2C%20New%20York%2C%20NY%2010120%2C%20USA!5e0!3m2!1sen!2str!4v1680000000000!5m2!1sen!2str"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

</body>

</html>