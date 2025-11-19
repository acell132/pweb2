<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bangun Bangsa - Contact</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: #2E363F;
        color: #EDEDED;
        line-height: 1.6;
    }

    section.hero {
      position: relative;
      width: 100%;
      height: 580px;  /* Tinggi area hero */
      overflow: hidden;
      background: #2D2F36;
    }

    /* Gambar Shape */
    section.hero img.logo {
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
    section.hero .text-content {
      position: absolute;
      top: 80px;         /* geser turun */
      left: 360px;        /* geser ke kanan agar pas */
      z-index: 3;
      max-width: 700px;
    }

    /* Judul */
    section.hero h1 {
      font-weight: 900;
      font-size: 62px;
      line-height: 1.2;
      color: #EEE;
      margin-bottom: 45px;
    }

    section.hero h1 .highlight {
      color: #F7C600;
    }

    section.hero p {
      color: #AAA;
      font-size: 16px;
      max-width: 600px;
      margin-bottom: 35px;
      text-align: center;
      margin-left: 100px;
    }

    /* Tombol */
    section.hero .btn-primary {
      margin-left: 200px;
    }

    section.hero .btn-primary,
    section.hero .btn-secondary {
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

    section.hero .btn-primary {
      background: #F7C600;
      color: #2D2F36;
      border: none;
    }

    section.hero .btn-secondary {
      background: transparent;
      border: 2px solid #F7C600;
      color: #F7C600;
    }

    /* NAVBAR */
    nav {
        background: #3A4750;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
        padding: 12px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #3A434E;
    }

    nav .left {
        display: flex;
        align-items: center;
        gap: 30px;
    }
    nav .left span{
        padding: 10px;
    }

    nav img {
        width: 40px;
    }

    nav ul {
        display: flex;
        gap: 35px;
        list-style: none;
    }

    nav ul li a {
        color: #EDEDED;
        font-size: 14px;
        text-decoration: none;
    }

    nav .search {
        background: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        width: 350px;
        height: 40px;
        flex-direction: row-reverse;  /* ⬅ ikon pindah ke kanan */
    }

    nav .search input {
        border: none;
        outline: none;
        width: 100%;
    }

    /* TITLE */
    .title {
        text-align: center;
        margin-top: 50px;
    }

    .title h1 {
        font-size: 34px;
        font-weight: 700;
    }

    .title span {
        display: block;
        width: 60px;
        height: 4px;
        background: #FFD230;
        border-radius: 10px;
        margin: 10px auto 20px;
    }

    .title p {
        width: 40%;
        margin: auto;
        color: #C8C8C8;
    }

    /* FORM CARD */
    .form-card {
        background: #232B34;
        width: 65%;
        margin: 40px auto;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 0 25px rgba(0,0,0,0.4);
    }

    .form-row {
        display: flex;
        gap: 25px;
        margin-bottom: 25px;
    }

    .form-group {
        flex: 1;
    }

    label {
        font-size: 13px;
        font-weight: 600;
        color: #B8B8B8;
    }

    input, textarea {
        width: 100%;
        margin-top: 5px;
        padding: 10px;
        background: transparent;
        border: none;
        border-bottom: 1px solid #4A535C;
        color: #FFF;
        outline: none;
    }

    textarea {
        height: 100px;
        resize: none;
    }

    .send-btn {
        display: block;
        margin: 25px auto 0;
        background: #FFD230;
        color: #000;
        font-weight: 600;
        padding: 10px 30px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    /* CONTACT CARDS */
    .contact-section {
        text-align: center;
        margin-top: 60px;
    }

    .contact-cards {
        margin-top: 35px;
        display: flex;
        justify-content: center;
        gap: 25px;
    }

    .card {
        background: #232B34;
        padding: 30px;
        width: 260px;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
    }

    .card .icon {
        background: rgba(246, 201, 14, 0.2);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
        font-size: 20px;
        margin-bottom: 12px;
    }

    .card .icon i {
        color: #F6C90E;
    }


    .contact-section h2 {
        font-size: 22px;
        font-weight: 700;
    }

    /* FOLLOW US */
    .follow {
        text-align: center;
        margin: 100px 0 30px;
    }

    .follow .icons {
        margin-top: 15px;
        display: flex;
        justify-content: center;
        gap: 25px;
    }

    .follow .icons i {
        font-size: 22px;
        background: #3A434E;
        padding: 10px;
        border-radius: 50%;
    }

    /* FOOTER */

    footer {
        background: #303841;
        padding: 50px 60px;
        display: grid;
        grid-template-columns: 1.6fr 1fr 1fr 1fr;
        gap: 50px;
        
    }

    footer h3 {
        margin-bottom: 15px;
        font-size: 16px;
    }

    footer ul {
        list-style: none;
        line-height: 30px;
        font-size: 14px;
        color: #C8C8C8;
    }

    footer .brand {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    footer .brand img {
        width: 50px;
    }

    footer .brand .brand-text {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    footer .brand .brand-text .info{
        margin-left: -60px;
        margin-top: 10px;
    }


    footer .brand p {
        margin: 5px 0;
        color: #C8C8C8;
        font-size: 14px;
    }

    footer .brand .icon {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 6px 0;
    }

    .footer-end {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        padding: 10px 20px;   /* tambahkan padding kiri & kanan */
        width: 100%;          /* biar melebar full ke kiri–kanan */
        grid-column: 1 / -1;
        border-top: 1px solid #4A535C;
    }

    .footer-end .social {
        gap: 40px;
    }

    .footer-bottom {
        font-size: 14px;
        color: #C8C8C8;
        text-align: right;    /* jaga-jaga kalau multiline */
    }


    

</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="left">
        <span>Bangun Bangsa</span>
    </div>

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Build</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <div class="search">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search...">
    </div>
</nav>

<section class="hero">
      <img src="<?= base_url('assets/img/home1.png'); ?>" height="570px" alt="Logo" class="logo" />
      <div class="text-content">
        <h1>Solusi Lengkap <span class="highlight">Konstruksi</span> Anda</h1>
        <p>Kami menyediakan bahan bangunan berkualitas, jasa konstruksi profesional, dan peralatan kerja terlengkap untuk mewujudkan proyek impian Anda dengan standar terbaik.</p>

        <button class="btn-primary"><i class="fa-solid fa-phone"></i>  Konsultasi Gratis</button>
        <button class="btn-secondary"><i class="fa-solid fa-play"></i>  Lihat Portfolio</button>
      </div>
    </section>

<!-- TITLE -->
<div class="title">
    <h1>Get in Touch</h1>
    <span></span>
    <p>Kami siap membantu Anda untuk setiap pertanyaan, proyek, atau kerja sama.</p>
</div>

<!-- FORM -->
<div class="form-card">
    <div class="form-row">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Enter your full name">
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Enter your email">
        </div>
    </div>

    <div class="form-group">
        <label>Message</label>
        <textarea placeholder="Tell us about your project or inquiry..."></textarea>
    </div>

    <button class="send-btn">Send Message</button>
</div>

<!-- CONTACT INFORMATION -->
<div class="contact-section">
    <h2>Contact Information</h2>

    <div class="contact-cards">
        <div class="card">
            <div class="icon"><i class="fa fa-envelope"></i></div>
            <h4>Email</h4>
            <p>sales@bangunbangsa.com</p>
        </div>

        <div class="card">
            <div class="icon"><i class="fa fa-phone"></i></div>
            <h4>Phone</h4>
            <p>+62 812 2123 1238</p>
        </div>

        <div class="card">
            <div class="icon"><i class="fa fa-location-dot"></i></div>
            <h4>Location</h4>
            <p>Jl. Mununggul No.5, Jakarta</p>
        </div>
    </div>
</div>

<!-- FOLLOW US -->
<div class="follow">
    <h3>Follow Us</h3>
    <div class="icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
    </div>
</div>

<!-- FOOTER -->
<footer>
    <div class="brand">
    <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo" class="logo" />

    <div class="brand-text">
        <h2 style="font-size:18px; padding-top: 12px; padding-bottom: 12px;">Bangun Bangsa</h2>

        <div class="info">
            <p>Jl. Pembangunan No. 123 Jakarta Selatan 12345 Indonesia</p>
    
            <div class="icon"><i class="fa fa-envelope"></i> info@bangunbangsa.com</div>
            <div class="icon"><i class="fa fa-phone"></i> +62 21 1234 5678</div>
        </div>

        
    </div>
</div>


    <div>
        <h3>Company</h3>
        <ul>
            <li>About</li>
            <li>Career</li>
            <li>Contact</li>
            <li>Services</li>
        </ul>
    </div>

    <div>
        <h3>Layanan</h3>
        <ul>
            <li>Home Construction</li>
            <li>Tools Rental</li>
            <li>Safety Gear</li>
            <li>Architecture</li>
            <li>Consultant</li>
        </ul>
    </div>

    <div>
        <h3>Support & Store</h3>
        <ul>
            <li>Jakarta Pusat</li>
            <li>Jakarta Selatan</li>
            <li>Bandung</li>
            <li>Surabaya</li>
            <li>Konsultasi</li>
        </ul>
    </div>

    <div class="footer-end">
        <div class="social" >
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
        </div>

        <div class="footer-bottom">
            © 2024 Bangun Bangsa. All rights reserved.
        </div>
    </div>
</footer>



</body>
</html>
