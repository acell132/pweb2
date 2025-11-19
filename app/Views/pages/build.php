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

    
    /* ===== HERO SECTION ===== */
.hero-build {
    position: relative;
    width: 100%;
    height: 60vh;
    background: url('/assets/img/build-hero.jpg') center/cover no-repeat; /* ganti sesuai gambar */
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}

.hero-build .overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
}

.hero-build .content {
    position: relative;
    text-align: center;
    max-width: 700px;
    padding: 20px;
}

.hero-build h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #f1c40f;
}

.hero-build p {
    font-size: 18px;
    line-height: 1.6;
}

/* ===== BUILD DETAIL SECTION ===== */
.build-detail {
    padding: 70px 0;
    background: #f7f7f7;
}

.build-detail .container {
    width: 90%;
    max-width: 1100px;
    margin: auto;
    text-align: center;
}

.build-detail h2 {
    font-size: 32px;
    margin-bottom: 40px;
    font-weight: 700;
}

.build-detail .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.build-detail .card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    text-align: center;
    transition: 0.3s;
}

.build-detail .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.15);
}

.build-detail .card i {
    font-size: 40px;
    color: #f1c40f;
    margin-bottom: 15px;
}

.build-detail .card h3 {
    font-size: 22px;
    margin-bottom: 10px;
    font-weight: 600;
}

.build-detail .card p {
    color: #444;
    line-height: 1.6;
}

/* ===== CTA SECTION ===== */
.cta {
    background: #1f2937; /* dark gray */
    color: #fff;
    padding: 70px 0;
    text-align: center;
}

.cta .container {
    width: 90%;
    max-width: 900px;
    margin: auto;
}

.cta h2 {
    font-size: 32px;
    margin-bottom: 15px;
}

.cta p {
    font-size: 18px;
    margin-bottom: 30px;
}

.btn-primary {
    padding: 12px 30px;
    background: #f1c40f;
    color: #000;
    font-weight: 600;
    border-radius: 8px;
    text-decoration: none;
    display: inline-block;
    transition: 0.3s;
}

.btn-primary:hover {
    background: #ddb10d;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .hero-build h1 {
        font-size: 36px;
    }

    .hero-build p {
        font-size: 16px;
    }
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




<section class="hero-build">
<div class="overlay"></div>
<div class="content">
<h1>Build</h1>
<p>Layanan konstruksi profesional dengan standar kualitas tinggi untuk bangunan hunian, komersial, dan proyek besar.</p>
</div>
</section>


<section class="build-detail">
<div class="container">
<h2>Apa yang Kami Tawarkan</h2>
<div class="grid">
<div class="card">
<i class="fa-solid fa-wrench"></i>
<h3>Konstruksi Bangunan</h3>
<p>Pembangunan struktur bangunan kuat, aman, dan tahan lama sesuai standar industri.</p>
</div>
<div class="card">
<i class="fa-solid fa-pencil-ruler"></i>
<h3>Renovasi</h3>
<p>Perbaikan dan renovasi ruang agar menjadi lebih modern, fungsional, dan nyaman.</p>
</div>
<div class="card">
<i class="fa-solid fa-helmet-safety"></i>
<h3>Manajemen Proyek</h3>
<p>Pengelolaan konstruksi dengan perencanaan matang untuk hasil tepat waktu dan efisien.</p>
</div>
</div>
</div>
</section>


<section class="cta">
<div class="container">
<h2>Ingin Memulai Proyek?</h2>
<p>Hubungi kami untuk konsultasi gratis dan penawaran terbaik sesuai kebutuhan Anda.</p>
<a href="/contact" class="btn-primary">Hubungi Kami</a>
</div>
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



</body>
</html>
