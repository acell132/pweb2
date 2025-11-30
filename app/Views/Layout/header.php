<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bangun Bangsa</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    *{ margin:0; padding:0; box-sizing:border-box; font-family:"Poppins",sans-serif; }
    body{ background:#2E363F; color:#EDEDED; }

    /* NAVBAR */
    nav{
        background:#3A4750;
        box-shadow:0 0 20px rgba(0,0,0,0.3);
        padding:12px 40px;
        display:flex;
        align-items:center;
        justify-content:space-between;
        border-bottom:1px solid #3A434E;
    }

    nav .left{
        display:flex;
        align-items:center;
        gap:30px;
    }

    nav img{ width:40px; }

    nav .left span{ padding:10px; }

    nav ul{
        display:flex;
        gap:35px;
        list-style:none;
    }

    nav ul li a{
        color:#EDEDED;
        font-size:14px;
        text-decoration:none;
    }

    nav .search{
        background:#fff;
        padding:6px 12px;
        border-radius:20px;
        display:flex;
        align-items:center;
        width:350px;
        height:40px;
        flex-direction:row-reverse;
    }

    nav .search input{
        border:none;
        outline:none;
        width:100%;
    }
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="left">
        <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo"/>
        <span>Bangun Bangsa</span>
    </div>

    <ul>
        <li><a href="<?= base_url('/home'); ?>">Home</a></li>
        <li><a href="<?= base_url('/build'); ?>">Build</a></li>
        <li><a href="<?= base_url('/shop'); ?>">Shop</a></li>
        <li><a href="<?= base_url('/contact'); ?>">Contact</a></li>
    </ul>

    <div class="search">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search...">
    </div>
</nav>
