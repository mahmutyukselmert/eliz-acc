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
                        <img src="./assets/images/kariyer-banner.webp" alt="" class="img-fluid">
                        <div class="carousel-caption text-start">
                            <div class="container">
                                <div class="row align-items-center col-lg-10 mx-auto">
                                    <div class="col-lg-6 scroll-reveal-left">
                                        <h1 class="hero-title">KARİYER</h1>
                                        <h2 class="hero-subtitle">Kariyerine Güçlü <br> Bir Temel At</h2>
                                        <div class="hero-description mt-4 mt-lg-0">
                                            <div class="col-lg-10 col-12">
                                                <div class="carousel-content">
                                                    <p>Majestik Yapı ailesinin bir parçası olmak ve güçlü projelerde yer almak için genel başvuruda bulunabilirsiniz. Özgeçmişiniz, uzmanlık alanınız ve kariyer hedefleriniz doğrultusunda değerlendirilerek uygun pozisyonlarda sizinle iletişime geçilecektir.</p>
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

        <section class="about-section wapper py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <h3 class="text-center text-primary fs-2 fw-semibold mb-4">Majestik Yapı ailesine katılmak için başvurunuzu oluşturun.</h3>
                        <div class="content mt-3 mb-5 text-center">
                            <p>Güncel iş ilanlarımızı bu alandan takip edebilir, yetkinliklerinize uygun pozisyonlara başvuruda bulunabilirsiniz.
                                Açık pozisyon bulunmaması durumunda genel başvuru yaparak özgeçmişinizi bizimle paylaşabilirsiniz.</p>
                        </div>

                        <h4 class="text-center fs-4 text-primary fw-semibold">Açık Pozisyonlar</h4>

                        <div class="content mt-5">
                            <div class="job-table-wrapper table-responsive">
                                <table class="table job-table">
                                    <thead>
                                        <tr>
                                            <th>Pozisyon</th>
                                            <th>Departman</th>
                                            <th>Çalışma Şekli</th>
                                            <th>Lokasyon</th>
                                            <th>Başvuru</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>İnşaat Mühendisi</td>
                                            <td>Proje Yönetimi</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Ankara</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Teknik Personel</td>
                                            <td>Uygulama</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Şantiye</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Mimar</td>
                                            <td>Tasarım</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Merkez Ofis</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Satın Alma Uzmanı</td>
                                            <td>Operasyon</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Ankara</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Şantiye Şefi</td>
                                            <td>Uygulama</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Proje Bazlı</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <p>
                            Açık pozisyonlarımız dışında da Esem Yapı ailesine katılmak isteyen adaylar genel başvuru yapabilir.
                            Uygun pozisyon oluştuğunda başvurular değerlendirmeye alınacaktır.
                        </p>
                    </div>

                </div>
            </div>

            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

</body>

</html>