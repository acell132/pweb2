<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <title>Construction Zone</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

    /* Reset & base */
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #2D2F36;
      color: #F6F6F6;
      line-height: 1.5;
    }
    a {
      text-decoration: none;
      color: inherit;
    }

    /* Container wrapper */
    .container {
      /* width: 90%; */
      /* max-width: 1200px; */
      /* margin: 0 auto; */
      /* padding: 30px 0; */
    }

    /* NAVBAR */
    nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 15px;
      /* margin-bottom: 40px; */
      padding: 15px 25px;
      background: #3B4A55;
      
    }

    nav img.logo {
      flex-grow: 0;
    }

    /* wrapper search */
    .search-box {
      position: relative;
      width: 30%;
      max-width: 30%;
      flex-grow: 1;
    }

    /* input search */
    .search-box input {
      width: 100%;
      background: #3B3D44;
      border: none;
      border-radius: 5px;
      padding: 10px 15px 10px 40px;   /* padding kiri 40px untuk icon */
      color: #EEE;
      font-size: 14px;
    }

    /* icon search sebelah kiri */
    .search-box i {
      position: absolute;
      left: 12px;                     /* posisi icon kiri */
      top: 50%;
      transform: translateY(-50%);
      color: #BBB;
      font-size: 15px;
      pointer-events: none;           /* icon tidak menghalangi klik input */
    }



    nav .buttons {
      display: flex;
      gap: 10px;
      flex-grow: 0; /* Biar tetap di kanan */
    }

    nav .buttons button {
      background: #F7C600;
      border: none;
      color: #2D2F36;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
      padding: 10px 20px;
      transition: background-color 0.3s;
    }

    nav .buttons button.signup {
      background: transparent;
      color: #F7C600;
      border: 1.5px solid #F7C600;
    }

    nav .buttons button:hover {
      opacity: 0.85;
    }


    /* HEADER HERO */
    /* HEADER HERO */
    header.hero {
      position: relative;
      width: 100%;
      height: 580px;  /* Tinggi area hero */
      overflow: hidden;
      background: #2D2F36;
    }

    /* Gambar Shape */
    header.hero img.logo {
      position: absolute;
      left: 0;
      top: -40px; 
      width: auto;     /* perbesar sesuai example */
      height: 620px;
      z-index: 1;
      user-select: none;
      pointer-events: none;
    }

    /* Text di atas shape */
    header.hero .text-content {
      position: absolute;
      top: 80px;         /* geser turun */
      left: 360px;        /* geser ke kanan agar pas */
      z-index: 3;
      max-width: 700px;
    }

    /* Judul */
    header.hero h1 {
      font-weight: 900;
      font-size: 62px;
      line-height: 1.2;
      color: #EEE;
      margin-bottom: 45px;
    }

    header.hero h1 .highlight {
      color: #F7C600;
    }

    header.hero p {
      color: #AAA;
      font-size: 16px;
      max-width: 600px;
      margin-bottom: 35px;
      text-align: center;
      margin-left: 100px;
    }

    /* Tombol */
    header.hero .btn-primary {
      margin-left: 200px;
    }

    header.hero .btn-primary,
    header.hero .btn-secondary {
      display: inline-flex;
      min-width: 180px;
      justify-content: center;
      gap: 8px;
      text-align: center;
      cursor: pointer;
      font-weight: 700;
      font-size: 14px;
      padding: 18px 25px;
      border-radius: 6px;
      margin-right: 15px;
    }

    header.hero .btn-primary {
      background: #F7C600;
      color: #2D2F36;
      border: none;
    }

    header.hero .btn-secondary {
      background: transparent;
      border: 2px solid #F7C600;
      color: #F7C600;
    }

    /* CARA PESAN SECTION */
    section.cara-pesan {
      text-align: center;
      padding: 70px 0px;
      background-color: #3B4A55;
    }
    section.cara-pesan h2 {
      font-weight: 700;
      font-size: 24px;
      margin-bottom: 10px;
      color: #EEE;
    }
    section.cara-pesan p {
      font-weight: 400;
      font-size: 14px;
      color: #AAA;
      margin-bottom: 40px;
    }
    .steps {
      display: flex;
      justify-content: center;
      gap: 25px;
      flex-wrap: wrap;
    }
    .step {
      background: #3B3D44;
      padding: 20px;
      border-radius: 8px;
      max-width: 190px;
      text-align: center;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
    }
    .step .icon {
      background: #F7C600;
      width: 45px;
      height: 45px;
      color: #2D2F36;
      border-radius: 50%;
      font-weight: 800;
      font-size: 20px;
      line-height: 45px;
      margin: 0 auto 15px;
    }
    .step h3 {
      font-weight: 700;
      font-size: 16px;
      color: #EEE;
      margin-bottom: 8px;
    }
    .step p {
      font-weight: 400;
      font-size: 13px;
      color: #CCC;
    }

    /* JENIS BANGUNAN SECTION */
    section.jenis-bangunan {
      /* margin-bottom: 70px; */
      padding: 70px 0px;
      text-align: center;
    }
    section.jenis-bangunan h2 {
      font-weight: 700;
      font-size: 22px;
      margin-bottom: 25px;
      color: #EEE;
    }
    .building-types {
      display: grid;
      grid-template-columns: repeat(4, 1fr);   /* FIX 4 KOLOM */
      gap: 20px;
      justify-items: center;
      width: 80%;
      margin: 70px auto; 
    }
    .building {
      background: #3B4A55;
      border-radius: 10px;
      padding: 25px 10px;
      width: 230px;
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: default;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      transition: background-color 0.3s;
    }
    .building:hover {
      background-color: #505358;
    }
    .building .icon {
      font-size: 28px;
      color: #F7C600;
      margin-bottom: 12px;
    }
    .building span {
      font-weight: 400;
      font-size: 14px;
      color: #EEE;
    }
    @media (max-width: 768px) {
      .building-types {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 480px) {
      .building-types {
        grid-template-columns: 1fr;
      }
    }

    section.jenis-bangunan .constractionzone h1 {
      font-weight: 900;
      font-size: 78px;        /* lebih besar */
      letter-spacing: 2px;    /* lebih rapi */
      color: #F7C600;
    }
    section.jenis-bangunan .constractionzone p {
      font-size: 20px;
      /* font-weight: bo  ld; */
      color: #CCCCCC;
      margin-bottom: 30px;
    }
    section.jenis-bangunan .constractionzone .btn-primary {
      background-color: transparent;
      color: #F7C600;
      border: 2px solid #F7C600;
      padding: 15px 26px;
      border-radius: 6px;
      font-weight: 700;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    section.jenis-bangunan .constractionzone i {
      margin-right: 5px;
    }

    /* FOOTER */
    footer {
      margin: 50px 0 20px;
      text-align: center;
      font-size: 13px;
      color: #999;
      user-select: none;
    }

    /* FOOTER MENU BAR BARU (seperti contoh gambar) */
    .footer-menu {
      background: #2F3A42;
      padding: 25px 0 15px;
      margin-top: 30px;
      border-radius: 12px;
      text-align: center;
    }

    .footer-links {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 70px;           /* jarak lebih dekat */
      margin-bottom: 20px;
    }

    .footer-links a {
      color: #FFF;         /* default putih */
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: 0.3s;
    }

    .footer-links .build {
      color: #FFF;         /* default putih */
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: 0.3s;
      padding: 15px 26px;
    }

    .footer-links a i {
      font-size: 16px;
      color: #FFF;         /* icon putih */
      transition: 0.3s;
    }

    /* Saat di-hover */
    .footer-links a:hover {
      color: #F7C600;
      border: 2px solid #F7C600;
      border-radius: 6px;
      padding: 15px 26px;
      background-color: #2a2f35ff;
    }

    .footer-links a:hover i {
      color: #F7C600;
    }

    /*  MODE ACTIVE / DI KLIK */
    .footer-links a.active {
      color: #F7C600;
      font-weight: 600;
    }

    .footer-links a.active i {
      color: #F7C600;
    }

    .footer-build-btn {
      margin: 0 auto 25px;
      width: fit-content;
    }

    .footer-build-btn button {
      background: transparent;
      border: 2px solid #F7C600;
      color: #F7C600;
      padding: 8px 20px;
      font-size: 14px;
      border-radius: 6px;
      cursor: pointer;
    }

    /* Logo */
    .footer-logo {
      margin-bottom: 10px;
    }

    .footer-logo i {
      font-size: 22px;
      color: #F7C600;
    }

    .footer-copy {
      font-size: 12px;
      color: #AAA;
    }
    .user-box {
      background: #F7C600;
      color: #2D2F36;
      padding: 10px 20px;
      border-radius: 6px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    .user-box i {
      font-size: 18px;
    }

    .user-box:hover {
      opacity: 0.85;
    }


    /* Icon fonts (for simplicity I use emojis) */
  </style>
</head>
<body>
  <div class="container">

    <!-- NAVBAR -->
    <nav>
      <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo" class="logo" />
      <div class="search-box">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="search" placeholder="Cari produk, jasa, atau peralatan..." />
      </div>

      <div class="buttons">
          <?php if (!isset($user)) : ?>
              <!-- Belum login = tampil login + register -->
              <button onclick="window.location.href='<?= base_url('login'); ?>'">
                  <i class="fa-solid fa-user"></i> Login
              </button>
              <button class="signup" onclick="window.location.href='<?= base_url('register'); ?>'">
                  Register
              </button>

          <?php else : ?>
              <!-- Sudah login = tampilkan nama -->
              <div class="user-box">
                  <i class="fa-solid fa-user-circle"></i>
                  <?= esc($user['full_name']); ?>
              </div>
          <?php endif; ?>
      </div>

    </nav>

    <!-- HEADER (Hero Section) -->
    <header class="hero">
      <img src="<?= base_url('assets/img/home1.png'); ?>" height="570px" alt="Logo" class="logo" />
      <div class="text-content">
        <h1>Solusi Lengkap <span class="highlight">Konstruksi</span> Anda</h1>
        <p>Kami menyediakan bahan bangunan berkualitas, jasa konstruksi profesional, dan peralatan kerja terlengkap untuk mewujudkan proyek impian Anda dengan standar terbaik.</p>

        <a 
          href="https://wa.me/6288238267981?text=Halo%20saya%20ingin%20konsultasi%20terkait%20konstruksi" 
          target="_blank" 
          class="btn-primary"
        >
          <i class="fa-solid fa-phone"></i> Konsultasi Gratis
        </a>

        <button class="btn-secondary"><i class="fa-solid fa-play"></i>  Lihat Portfolio</button>
      </div>
    </header>

    <!-- CARA PESAN -->
    <section class="cara-pesan">
      <h1>Cara Pesan Layanan Kami</h1>
      <p>Proses mudah dalam 4 langkah sederhana</p>
      <div class="steps">
        <div class="step">
          <div class="icon"><i class="fa-solid fa-list-ul"></i></div>
          <h3>Pilih Layanan</h3>
          <p>Pilih layanan yang Anda butuhkan dari katalog lengkap kami</p>
        </div>
        <div class="step">
          <div class="icon"><i class="fa-solid fa-calculator"></i></div>
          <h3>Lihat Harga</h3>
          <p>Dapatkan estimasi harga yang transparan dan kompetitif</p>
        </div>
        <div class="step">
          <div class="icon"><i class="fa-solid fa-comments"></i></div>
          <h3>Konsultasi</h3>
          <p>Diskusi detail proyek dengan tim ahli kami</p>
        </div>
        <div class="step">
          <div class="icon"><i class="fa-solid fa-credit-card-alt"></i></div>
          <h3>Pembayaran</h3>
          <p>Proses pembayaran aman dengan berbagai metode</p>
        </div>
      </div>
    </section>

    <!-- JENIS BANGUNAN -->
    <section class="jenis-bangunan">
      <h1>Jenis Bangunan Yang Kami Kerjakan</h1>
      <p>Pengalaman puas dalam berbagai layanan konstruksi</p>
      <div class="building-types">

        <div class="building">
          <div class="icon"><i class="fa-solid fa-house-chimney"></i></div>
          <span>Rumah Tinggal</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-building"></i></div>
          <span>Perkantoran</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-school"></i></div>
          <span>Sekolah</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-city"></i></div>
          <span>Apartement</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-mosque"></i></div>
          <span>Masjid</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-industry"></i></div>
          <span>Pabrik</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-landmark"></i></div>
          <span>Gedung</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-hotel"></i></div>
          <span>Hotel</span>
        </div>
      </div>
      <div class="constractionzone">
        <h1>CONSTRUCTION ZONE</h1>
        <p>Area Kerja Profesional • Keselamatan Utama</p>
        <button class="btn-primary"><i class="fa-solid fa-hard-hat"></i> Lihat Proyek Aktif</button>
      </div>

    </section>



    <!-- FOOTER MENU SEPERTI GAMBAR -->
    <div class="footer-menu">

      <div class="footer-links">
        <a href="#"><i class="fa-solid fa-house"></i> Home</a>

        <a href="#" class="build">
          <i class="fa-solid fa-hammer"></i> Build
        </a>

        <a href="#"><i class="fa-solid fa-shop"></i> Shop</a>
        <a href="#"><i class="fa-solid fa-phone"></i> Contact</a>
      </div>
        <footer>
          <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo" class="logo" />
          <div class="footer-copy">
          © 2024 BuildPro. Semua hak dilindungi. Solusi konstruksi terpercaya sejak 2010.
        </div>
      </footer>
    </div>

    <!-- FOOTER -->

  </div>
</body>
</html>
