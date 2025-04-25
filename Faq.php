<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>ManşetDuş – SSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/site.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: url('images/3.jpg') center center / cover no-repeat fixed;
      color: #fff;
    }
    .faq-section {
      padding: 5rem 1rem;
    }
    .faq-card {
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }

    

    .accordion-item {
      background-color: rgba(255, 250, 250, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 8px;
      margin-bottom: 1rem;
      overflow: hidden;
    }
    .accordion-button {
      background-color: transparent;
      color: #fff;
      padding: 1rem 1.25rem;
      font-weight: 500;
    }
    .accordion-button:focus {
      box-shadow: none;
    }
    .accordion-button:not(.collapsed) {
      background-color: rgba(0, 110, 255, 0.1);
    }
    .accordion-body {
      background-color: rgba(255, 255, 255, 0.02);
      padding: 1rem 1.25rem;
      color: #ccc;
    }
    .contact-btn-wrapper {
      text-align: center;
      margin-top: 3rem;
    }

    .accordion-button:not(.collapsed) {
  background-color: rgba(0, 110, 255, 0.1);
  color: #fff !important;
  font-weight: 600;
}


    .contact-btn-wrapper a {
      background-color: #25D366;
      color: #fff;
      padding: 0.75rem 1.5rem;
      font-size: 1.1rem;
      border-radius: 30px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    .contact-btn-wrapper a:hover {
      background-color: #1ebc57;
    }
    .navbar .nav-link:hover,
    .navbar .nav-link.active {
      color: #25D366 !important;
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
        <li class="nav-item"><a class="nav-link" href="about.php">Hakkımızda</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
        <li class="nav-item"><a class="nav-link" href="references.php">Referanslar</a></li>
        <li class="nav-item"><a class="nav-link active" href="faq.php">SSS</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- SSS BÖLÜMÜ -->
<section class="faq-section container" data-aos="fade-up" data-aos-duration="800">
  <div class="row justify-content-center">
    <div class="col-md-8 faq-card">
      <h3 class="mb-4 text center">Sıkça Sorulan Sorular</h3>
      <div class="accordion" id="faqAccordion">

        <div class="accordion-item">
          <h2 class="accordion-header" id="q1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a1">
              Duş sistemlerinizin garanti süresi nedir?
            </button>
          </h2>
          <div id="a1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Tüm duş ürünlerimiz 2 yıl garanti kapsamındadır. Garanti, montaj sonrası başlamaktadır.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">
              Ürün teslimat süresi ne kadar?
            </button>
          </h2>
          <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              İstanbul içi teslimatlar 3 iş günü, şehir dışı gönderimler ise 5-7 iş günü içinde yapılır.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="q3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">
              Özel ölçülerde duş siparişi verebilir miyim?
            </button>
          </h2>
          <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Evet. Ekibimiz ölçü alımı sonrası özel üretim yapabilmektedir. Detaylı bilgi için iletişime geçebilirsiniz.
            </div>
          </div>
        </div>

      </div>

      <!-- BİZİMLE İLETİŞİME GEÇİN BUTONU -->
      <div class="contact-btn-wrapper" data-aos="fade-up" data-aos-delay="200">
        <a href="contact.php"><i class="fas fa-paper-plane me-2"></i>Bizimle İletişime Geçin</a>
      </div>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="mt-5" data-aos="fade-up" data-aos-duration="800">
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
        <p><strong>E-posta:</strong> zabit@mansetdus.com</p>
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
  AOS.init({ offset: 120, duration: 600, easing: 'ease-in-out', once: true });
</script>

</body>
</html>
