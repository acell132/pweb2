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

    
   
    
    /* ========== HERO SECTION ========== */
    .hero {
        position: relative;
        width: 100%;
        height: 500px;
        background: url('<?= base_url('assets/img/construction.jpg'); ?>') center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #fff;
    }

    .hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.75);
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-content h1 {
        font-size: 2.8rem;
        font-weight: 700;
        color: #eab308;
        line-height: 1.3;
    }

    .hero-content p {
        margin-top: 12px;
        font-size: 1rem;
        max-width: 620px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-content .btn-hero {
        margin-top: 20px;
        padding: 10px 28px;
        background: #eab308;
        border-radius: 6px;
        font-weight: 600;
        display: inline-block;
        color: #000;
        text-decoration: none;
    }

    /* ========== SECTION LAYANAN (BUILD & STYLE) ========== */
    .services-section {
        background: #1f2937;
        padding: 60px 0;
    }

    .services-wrapper {
        width: 90%;
        margin: auto;
        display: flex;
        gap: 25px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .service-card {
        width: 420px;
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        min-height: 220px;
        border: 4px solid transparent;
    }

    .service-card.yellow-border {
        border-top-color: #eab308;
    }

    .service-card h3 {
        font-size: 1.2rem;
        margin-top: 8px;
        color: #303841;
    }

    .service-card p {
        margin-top: 10px;
        color: #444;
    }

    .learn-more {
        margin-top: 18px;
        font-weight: bold;
        display: inline-block;
        color: #000;
        text-decoration: none;
    }

    /* ICON STYLE */
    .card-icon {
        width: 43px;
        height: 43px;
        border-radius: 8px;
        background: #ffffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #000;
        font-size: 1.3rem;
    }

    /* ========== ABOUT SECTION ========== */
    .about-section {
        background: #374151;
        padding: 70px 0;
        text-align: center;
        color: #e5e7eb;
    }

    .about-section h2 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #fff;
    }

    .about-underline {
        width: 60px;
        height: 4px;
        background: #eab308;
        margin: 10px auto 25px;
    }

    .about-section p {
        width: 70%;
        margin: auto;
        line-height: 1.7;
        margin-bottom: 20px;
    }


    /* FOOTER */

    footer {
        background: 303841;
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
    .hero-buttons {
        margin-top: 30px;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .circle-btn {
        width: 45px;
        height: 45px;
        background: none;
        border-radius: 50%;
        border: 1px solid #ccc;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        color: #ffffffff;
        font-size: 1.2rem;
        transition: 0.2s ease;
    }

    .circle-btn:hover {
        background: #eab308;
        color: #000;
    }


</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="left">
        <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo" class="logo" />
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

<!-- ================= HERO ================= -->
<section class="hero">
    <div class="hero-content">
        <h1>Bangun Masa Depan<br>Bersama Kami</h1>
        <p>
            Solusi lengkap untuk kebutuhan konstruksi, renovasi, dan bahan bangunan
            berkualitas tinggi dengan layanan profesional terpercaya.
        </p>
        <a href="#" class="btn-hero">Mulai Sekarang</a>
        <div class="hero-buttons">
            <div class="circle-btn" id="prevBtn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="circle-btn" id="nextBtn">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>

    </div>
</section>

<!-- ================ SERVICES (BUILD & STYLE) ================= -->
<section class="services-section">
    <div class="services-wrapper">

        <!-- BUILD CARD -->
        <div class="service-card">
            <div class="card-icon">
                <i class="fa-solid fa-hard-hat"></i>
            </div>
            <h3>Build</h3>
            <p>
                Layanan konstruksi dan pembangunan profesional dengan standar kualitas tinggi.
                Dari rumah tinggal hingga proyek komersial besar.
            </p>
            <a href="#" class="learn-more">Learn More →</a>
        </div>

        <!-- STYLE CARD -->
        <div class="service-card yellow-border">
            <div class="card-icon">
                <i class="fa-solid fa-palette"></i>
            </div>
            <h3>Style</h3>
            <p>
                Desain interior dan eksterior yang memadukan estetika modern dan fungsionalitas
                optimal untuk menciptakan ruang impian Anda.
            </p>
            <a href="#" class="learn-more">Learn More →</a>
        </div>

    </div>
</section>

<!-- ================= ABOUT SECTION ================= -->
<section class="about-section">
    <h2>About</h2>
    <div class="about-underline"></div>

    <p>
        Bangun Bangsa adalah perusahaan konstruksi dan toko bahan bangunan terpercaya yang telah
        melayani ribuan proyek dengan komitmen pada kualitas, ketepatan waktu, dan kepuasan
        pelanggan. Kami menyediakan solusi lengkap mulai dari bahan bangunan berkualitas,
        jasa renovasi profesional, hingga perlengkapan kerja dan safety gear untuk memastikan proyek
        berjalan aman dan sukses.
    </p>

    <p>
        Dengan pengalaman bertahun-tahun dan tim profesional kompeten, kami siap mewujudkan
        visi konstruksi Anda dengan standar internasional dan harga kompetitif.
    </p>
</section>

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

<script>
    // Daftar 5 background
    const heroImages = [
        "<?= base_url('assets/img/construction2.jpg'); ?>",
        "<?= base_url('assets/img/construction3.jpg'); ?>",
        "<?= base_url('assets/img/construction4.jpg'); ?>",
        "<?= base_url('assets/img/construction5.jpg'); ?>",
    ];

    let currentIndex = 0;

    const heroSection = document.querySelector(".hero");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    // Fungsi update background
    function updateHeroBackground() {
        heroSection.style.background = `url('${heroImages[currentIndex]}') center/cover no-repeat`;
    }

    // Tombol kiri
    prevBtn.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + heroImages.length) % heroImages.length;
        updateHeroBackground();
    });

    // Tombol kanan
    nextBtn.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % heroImages.length;
        updateHeroBackground();
    });
</script>


</body>
</html>
