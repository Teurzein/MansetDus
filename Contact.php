<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>ManşetDuş – İletişim</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/site.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/mlogo.png">

  <style>
    body {
      background: url('images/3.jpg') center center / cover no-repeat fixed;
      color: #fff;
    }
    .contact-section {
      padding: 5rem 1rem;
    }
    .contact-card {
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 12px;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }
    .contact-card h3 {
      margin-bottom: 1.5rem;
    }
    .contact-info-line {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255, 255, 255, 0.05);
      padding: 0.75rem 1rem;
      border-radius: 8px;
      margin-bottom: 1rem;
    }
    .contact-info-line span {
      color: #fff;
      font-size: 1rem;
    }
    .copy-icon {
      color: #ccc;
      cursor: pointer;
    }
    .copy-icon:hover {
      color: #fff;
    }
    .whatsapp-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background-color: #25D366;
      color: #fff;
      width: 55px;
      height: 55px;
      border-radius: 50%;
      font-size: 24px;
      text-decoration: none;
      transition: background-color 0.3s ease;
      margin-top: 1rem;
    }
    .whatsapp-button:hover {
      background-color: #1ebc57;
    }
    .map-top-link {
      text-align: right;
      margin-bottom: 0.5rem;
    }
    .map-top-link a {
      color: #25D366;
      text-decoration: none;
      font-weight: 500;
    }
    .map-top-link a:hover {
      text-decoration: underline;
    }
    .map-container {
      border-radius: 12px;
      overflow: hidden;
      border: 3px solid #fff;
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
        <li class="nav-item"><a class="nav-link" href="contact.php" style="color: #1ebc57">İletişim</a></li>
        <li class="nav-item"><a class="nav-link" href="references.php">Referanslar</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.php">SSS</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- İLETİŞİM -->
<section class="contact-section container" data-aos="fade-up" data-aos-duration="800">
  <div class="row justify-content-center">
    <div class="col-md-7 contact-card">
      <h3>İletişim Bilgileri</h3>

      <div class="contact-info-line">
        <span><strong>Adres:</strong> Pınar Mahallesi 1502. Sokak No: 7/A İstanbul/Esenyurt</span>
      </div>

      <div class="contact-info-line">
        <span><strong>Telefon:</strong> +90 542 740 66 42</span>
        <i class="fas fa-copy copy-icon" onclick="navigator.clipboard.writeText('+905427406642')"></i>
      </div>

      <div class="contact-info-line">
        <span><strong>E-posta:</strong> zabit.demirkazik@mansetdus.com</span>
        <i class="fas fa-copy copy-icon" onclick="navigator.clipboard.writeText('zabit.demirkazik@mansetdus.com<')"></i>
      </div>

      <a class="whatsapp-button me-2" href="https://wa.me/905427406642?text=Merhaba%2C%20ManşetDuş%20ile%20iletişime%20geçmek%20istiyorum." target="_blank" title="WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>
<a class="whatsapp-button me-2" style="background-color: #E1306C;" href="https://www.instagram.com/mansetdus" target="_blank" title="Instagram">
  <i class="fab fa-instagram"></i>
</a>
<a class="whatsapp-button" style="background-color: #D44638;" href="mailto:zabit.demirkazik@mansetdus.com<" title="E-posta">
  <i class="fas fa-envelope"></i>
</a>


    </div>
  </div>

  

  <!-- HARİTA -->
  <div class="row justify-content-center mt-4">
    <div class="col-12">
      <div class="map-top-link">
        <a href="https://www.google.com/maps?q=41.027233,28.6432475" target="_blank">
          <i class="fas fa-map-marked-alt me-1"></i> Büyük haritada göster
        </a>
      </div>
      <div class="map-container" data-aos="zoom-in" data-aos-duration="800">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3009.9099440332743!2d28.63837908943527!3d41.02722614439127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDAxJzM4LjAiTiAyOMKwMzgnMzUuNyJF!5e0!3m2!1str!2str!4v1745518599174!5m2!1str!2str"
          width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
        <p><strong>E-posta:</strong> zabit.demirkazik@mansetdus.com<</p>
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
