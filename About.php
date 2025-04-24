<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>ManşetDuş – Hakkımızda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/mlogo.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Site CSS -->
  <link href="css/site.css" rel="stylesheet">
  <!-- AOS CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <style>
    .about-section {
      position: relative;
      background: url('images/3.jpg') center/cover no-repeat;
      min-height: calc(100vh - 200px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
    }
    .about-content {
      background: rgba(0, 0, 0, 0.75);
      border-radius: 15px;
      padding: 3rem 2rem;
      max-width: 900px;
      width: 90%;
      margin: 0 auto;
      color: #fff;
      position: relative;
      z-index: 1;
    }
    .about-section h2 {
      font-size: 2.8rem;
      margin-bottom: 1.5rem;
      position: relative;
      padding-bottom: 1rem;
      text-align: center;
    }
    .about-section h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 3px;
      background: #fff;
    }
    .about-section p.main-description {
      font-size: 1.2rem;
      line-height: 1.8;
      margin-bottom: 2rem;
      opacity: 0.9;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }
    .about-row {
      display: flex;
      justify-content: space-between;
      gap: 2rem;
      margin: 2rem 0;
    }
    .about-subsection {
      flex: 1;
      padding: 1.5rem;
      background: rgba(255,255,255,0.1);
      border-radius: 8px;
    }
    .about-subsection h3 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: #fff;
    }
    .about-subsection p {
      font-size: 1rem;
      line-height: 1.6;
      opacity: 0.9;
    }
    .about-logo {
      display: block;
      width: 120px;
      margin: 2rem auto;
      filter: brightness(0) invert(1);
    }
    .about-contact-btn {
      display: inline-block;
      background-color: #ffffff;
      color: #191620;
      padding: 0.75rem 1.75rem;
      border-radius: 4px;
      font-size: 1rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
      margin-top: 1rem;
    }
    .about-contact-btn:hover {
      background-color: rgba(255,255,255,0.9);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-duration="800">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/mansetdus_Logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navLinks">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Anasayfa</a></li>
        <li class="nav-item"><a class="nav-link" href="product.php">Ürünler</a></li>
        <li class="nav-item"><a class="nav-link active" href="about.php">Hakkımızda</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
        <li class="nav-item"><a class="nav-link" href="references.php">Referanslar</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.php">SSS</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HAKKIMIZDA BÖLÜMÜ -->
<section id="about" class="about-section" data-aos="fade-up" data-aos-duration="800">
  <div class="about-content">
    <h2 data-aos="zoom-in" data-aos-delay="100">Hakkımızda</h2>
    <p class="main-description" data-aos="fade-right" data-aos-delay="200">
    Manşet Duş, sadece bir duş markası değil; aynı zamanda yaşam alanlarına estetik ve fonksiyon kazandıran bir tasarım anlayışıdır. Kuruluşumuzdan bu yana, “estetik ve fonksiyon” dengesini Türkiye’nin dört bir yanındaki projelere taşıma vizyonuyla hareket ediyoruz. Modern çizgiler, akıllı çözümler ve yüksek kaliteli üretim anlayışı ile sektörümüzde fark yaratmayı hedefliyoruz.
    </p>
    <p class="main-description" data-aos="fade-left" data-aos-delay="300">
    Mimari estetikle uyumlu, kullanıcı dostu ve dayanıklı ürünler üretmek temel ilkemizdir. Kullandığımız malzemeler, hem uzun ömürlü kullanım hem de zarif görünüm açısından titizlikle seçilmektedir. Ürün yelpazemizde yer alan her detay; fonksiyonelliği, tasarımı ve konforu aynı potada birleştirir.
    </p>
    <p class="main-description" data-aos="fade-right" data-aos-delay="400">
    Yenilikçi tasarım felsefemizle, değişen yaşam biçimlerine uyum sağlayan çözümler geliştiriyor; bireysel yaşam alanlarından toplu konut projelerine kadar birçok farklı ölçek ve ihtiyaca hitap ediyoruz. Müşterilerimizin ihtiyaçlarını en doğru şekilde analiz ederek, çözüm odaklı hizmet anlayışımızı projelere yansıtıyoruz.

    </p>
    <p class="main-description" data-aos="fade-left" data-aos-delay="500">
    Sadece satış anında değil, satış sonrasında da eksiksiz servis anlayışımızla daima müşterilerimizin yanındayız. Montajdan teknik desteğe, yedek parça hizmetinden garanti süreçlerine kadar her aşamada hızlı ve güvenilir çözümler sunuyoruz.
    </p>
    <p class="main-description" data-aos="fade-up" data-aos-delay="600">
    Manşet Duş olarak, her geçen gün yenileniyor, büyüyor ve daha iyisini hedefliyoruz. Müşteri memnuniyetini merkezimize alarak çıktığımız bu yolda, kaliteyi bir standart değil, vazgeçilmez bir değer olarak görüyoruz.
    </p>
    <img src="images/mansetdus_Logo.png" alt="Manşet Duş Logo" class="about-logo" data-aos="zoom-in" data-aos-delay="700">
    <div class="text-center">
      <a href="contact.php" class="about-contact-btn" data-aos="zoom-in-up" data-aos-delay="800">Bizimle İletişime Geç</a>
    </div>
  </div>
</section>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    offset: 120,
    duration: 600,
    easing: 'ease-in-out',
    once: true
  });
</script>
</body>
</html>
