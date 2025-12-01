
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
        background: #F6C90E;
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
        background: #F6C90E;
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
<?= $this->include('Layout/header');?>

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
<?= $this->include('Layout/footer');?>

</body>
</html>
