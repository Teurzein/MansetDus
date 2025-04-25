<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>MANŞETDUŞ - Anasayfa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Site CSS -->
    <link href="css/site.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
          integrity="sha512-GYfUn4XbOe+0Z3fsLs+hsTtTYixmH3YyI+Gv+qYr5Qhfy6YPsioyj1Isnnpbbig+0QqQolpSkU70PcgtXf+qdw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/mlogo.png">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-duration="800">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/mansetdus_Logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="product.php">Ürünler</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
                <li class="nav-item"><a class="nav-link" href="references.php">Referanslar</a></li>
                <li class="nav-item"><a class="nav-link" href="faq.php">SSS</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- CAROUSEL -->
<div id="mainCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-aos="fade-up" data-aos-duration="1000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/hosgeldiniz.jpg" class="d-block w-100" alt="Duşakabin 1">
        </div>
        <div class="carousel-item">
            <a href="contact.php">
                <img src="images/slider2.jpg" class="d-block w-100" alt="Duşakabin 2">
            </a>
        </div>
        <div class="carousel-item">
            <img src="images/slider3.jpg" class="d-block w-100" alt="Duşakabin 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- ÜRÜN KARTLARI -->
<div class="container section-links my-5">
    <div class="row g-4 justify-content-center">
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
            <a href="product.php#cam" class="product-card text-decoration-none">
                <div class="card-image-container" style="background-image: url('images/slider1.jpg');">
                    <div class="overlay-text">
                        <h5>Duşakabinler</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Siyah Kare Duşakabin</li>
                            <li>Sade Tasarım</li>
                            <li>Özel İşlemeli Cam</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
            <a href="product.php#kuvet" class="product-card text-decoration-none">
                <div class="card-image-container" style="background-image: url('images/kuvet.jpg');">
                    <div class="overlay-text">
                        <h5>Küvetler</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Premium Malzeme</li>
                            <li>Oval küvet</li>
                            <li>Asimetrik Oval Küvet</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
            <a href="product.php#konsept" class="product-card text-decoration-none">
                <div class="card-image-container" style="background-image: url('images/slider3.jpg');">
                    <div class="overlay-text">
                        <h5>Yenilikçi Tasarımlar</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Şık Tasarımlar</li>
                            <li>Özel Görünümler</li>
                            <li>Akıllı Sistemler</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row my-5">
    <div class="col-12" data-aos="fade-up" data-aos-duration="400">
        <a href="contact.php" class="support-banner-link">
            <div class="support-banner" style="background-image: url('images/bannerkuvet.webp');">
                <h4>Profesyonel Destek Almak için<br>Bizimle İletişime Geçin.</h4>
            </div>
        </a>
    </div>

    <div class="col-12 mt-4" data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
        <a href="about.php" class="support-banner-link">
            <div class="support-banner" style="background-image: url('images/hakkimizda-banner.jpg');">
                <h4>Hakkımızda Bilgi Alın</h4>
            </div>
        </a>
    </div>

    <div class="col-12 mt-4" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200">
        <a href="faq.php" class="support-banner-link">
            <div class="support-banner" style="background-image: url('images/sss-banner.webp');">
                <h4>Sıkça Sorulan Sorular</h4>
            </div>
        </a>
    </div>
</div>



<!-- DESTEK BANNER CSS -->
<style>
.support-banner-link { display: block; text-decoration: none; }
.support-banner {
    position: relative;
    width: 100%;
    height: 200px;
    background-image: url('images/bannerkuvet.webp');
    background-size: cover;
    background-position: center;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
}
.support-banner:hover {
    transform: scale(1.02);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    filter: brightness(0.95);
}
.support-banner h4 {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    margin: 0;
    color: #fff;
    font-size: 2rem;
    font-weight: 600;
    line-height: 1.2;
    text-align: right;
}



</style>

<!-- FOOTER -->
<footer data-aos="fade-up" data-aos-duration="800">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6 footer-logo">
                <img src="images/mansetdus_Logo.png" alt="Footer Logo">
                <p class="mt-3">ManşetDuş - Estetik ve Fonksiyonel Çözümler</p>
            </div>
            <div class="col-md-6">
                <h5 class="mb-3">İletişim</h5>
                <p><strong>Adres:</strong> Pınar Mahallesi 1502. Sokak No: 7/A İstanbul/Esenyurt</p>
                <p><strong>Telefon:</strong> +90 542 740 66 42</p>
                <p><strong>E-posta:</strong> zabit.demirkazik@mansetdus.com</p>
            </div>
        </div>
        <hr class="border-secondary">
        <div class="row">
            <div class="col text-center">
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-3">
                    <a href="index.php">Anasayfa</a>
                    <a href="product.php">Ürünler</a>
                    <a href="about.php">Hakkımızda</a>
                    <a href="contact.php">İletişim</a>
                    <a href="references.php">Referanslar</a>
                    <a href="faq.php">SSS</a>
                </div>
                <p class="mt-2">&copy; 2025 ManşetDuş Duş. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    AOS.init({ offset: 120, duration: 600, easing: 'ease-in', once: true });
</script>
</body>
</html>
