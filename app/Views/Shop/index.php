<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bangun Bangsa - Shop Mockup</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root{
      --bg:#323a3f;
      --panel:#2f3a40;
      --muted:#8b9498;
      --accent:#f3c213; /* yellow */
      --card:#3a4448;
      --radius:10px;
      --glass: rgba(255,255,255,0.03);
    }

    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family: 'Poppins', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background:linear-gradient(180deg,var(--bg), #2c3438);
      color:#e6eef2;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      line-height:1.4;
    }

    /* Container */
    .wrap{
      /* max-width:1200px; */
      /* margin:20px auto; */
      /* padding:0 20px 80px; */
    }

    /* Top navigation */
    header{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:16px;
      padding:14px 0;
    }
    .brand{
      display:flex;
      align-items:center;
      gap:12px;
      background
    }
    .logo{
      width:46px;height:46px;border-radius:8px;
      background:linear-gradient(135deg,#4a5a6a,#2f8bdc);
      display:flex;align-items:center;justify-content:center;font-weight:800;
      box-shadow:0 2px 0 rgba(0,0,0,0.25);
    }
    nav{
      display:flex;
      gap:20px;
      align-items:center;
    }
    nav a{color:#dce7eb;text-decoration:none;font-weight:600;opacity:.95}
    .search{
      display:flex;align-items:center;
      background:var(--glass);padding:8px 12px;border-radius:26px;
      gap:8px;width:300px;
    }
    .search input{
      background:transparent;border:0;outline:0;color:#fff;font-size:14px;width:100%;
    }

    /* Hero */
    .hero{
      /* margin-top:8px; */
      /* border-radius:12px; */
      overflow:hidden;
      position:relative;
      min-height:320px;
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .hero .bg{
      position:absolute;inset:0;
      background: url('<?= base_url('assets/img/shop1.png'); ?>') center/cover no-repeat;
      background-size:cover;
      background-position:center;
      /* filter:brightness(.45) contrast(.95); */
      transform:scale(1.02);
    }
    .hero .content{
      position:relative;text-align:center;padding:40px 24px;
    }
    .hero h1{font-size:36px;margin:0 0 10px;font-weight:800;letter-spacing:-0.5px}
    .hero p{margin:0 0 18px;color:var(--muted);font-weight:500}
    .btn-primary{
      background:var(--accent);color:#222;padding:10px 18px;border-radius:8px;font-weight:700;border:0;
      box-shadow:0 6px 18px rgba(0,0,0,0.35);cursor:pointer;
    }

    /* Filters area */
    .filters{
      margin-top:18px;
      display:flex;
      gap:12px;
      align-items:center;
      justify-content:space-between;
      background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.02));
      padding:14px 80px;border-radius:8px;
    }
    .filters .left{display:flex;gap:10px;align-items:center}
    .select{
      background:transparent;border:1px solid rgba(255,255,255,0.06);padding:8px 12px;border-radius:8px;color:#fff;
    }

    /* promo */
    .promo {
        margin-top: 14px;
        background: var(--accent);
        color: #222;
        padding: 10px 14px;
        border-radius: 6px;
        position: relative;

        display: flex;            /* aktifkan flexbox */
        align-items: center;      /* sejajarkan icon & text secara vertikal */
        justify-content: center;  /* agar semuanya tetap center secara horizontal */

        gap: 6px;                 /* jarak antara icon & teks */
        font-weight: 600;
    }

    .promo-text {
        display: inline-block;    /* tidak perlu block, biar sejajar dengan icon */
    }



    /* products grid */
    .grid{
      margin:20px 80px;

      display:grid;
      grid-template-columns:repeat(auto-fill,minmax(240px,1fr));
      gap:20px;
    }
    .card{
      background:var(--card);
      border-radius:12px;
      overflow:hidden;
      box-shadow:0 6px 14px rgba(0,0,0,0.45), inset 0 1px rgba(255,255,255,0.02);
      display:flex;flex-direction:column;
    }
    .card .thumb {
        height: 140px;
        background: url("https://placehold.co/400x300?text=Image") center/cover no-repeat;
    }



    .card .body{
      padding:14px;
      display:flex;flex-direction:column;gap:12px;flex:1;
    }
    .card h3{margin:0;font-size:16px}
    .card p{margin:0;color:var(--muted);font-size:13px}
    .card .meta{
      display:flex;align-items:center;justify-content:space-between;margin-top:auto;
    }
    .price{font-weight:800;font-size:18px}
    .add{
      background:var(--accent);border:0;padding:8px 12px;border-radius:8px;font-weight:700;color:#222;cursor:pointer;
    }

    /* pagination */
    .pagination {
      margin: 26px 26px 60px; /* atas kanan-kiri bawah */
      display: flex;
      gap: 8px;
      justify-content: center;
      align-items: center;
    }

    .page{
      width:36px;height:36px;border-radius:8px;background:rgba(255,255,255,0.03);display:flex;
      align-items:center;justify-content:center;color:#dbe8ec;font-weight:700;cursor:pointer;text-decoration: none;
    }
    .page.active{background:var(--accent);color:#222}

    /* footer */
    footer{
      margin-top:36px;padding-top:28px;border-top:1px solid rgba(255,255,255,0.03);
      color:var(--muted);
    }
    .footer-grid{display:grid;grid-template-columns:1fr 1fr 1fr 1fr;gap:24px;padding-top:20px}
    .footer-grid h4{margin:0 0 12px;color:#fff}
    .contact .logo-small{width:48px;height:48px;border-radius:8px;background:linear-gradient(135deg,#4a5a6a,#2f8bdc);display:inline-block;margin-bottom:12px}

    /* small screens */
    @media (max-width:880px){
      .wrap{padding:0 16px}
      .footer-grid{grid-template-columns:1fr 1fr}
      .hero h1{font-size:28px}
    }
    @media (max-width:520px){
      nav{display:none}
      .search{width:100%}
      .hero{min-height:220px}
      .footer-grid{grid-template-columns:1fr}
    }
  </style>
</head>
<body>

  <div class="wrap">

    <!-- HERO -->
    <section class="hero">
      <div class="bg"></div>
      <div class="content">
        <h1>Premium Construction Materials</h1>
        <p>Build your dreams with quality materials from trusted suppliers</p>
        <a href="#filters">
          <button class="btn-primary">Shop Now</button>
        </a>
      </div>
    </section>

    <!-- filters -->
    <div class="filters" id="filters">
      <div class="left">
        <select class="select" onchange="applyFilter()">
            <option value="all" <?= ($category_selected == 'all' ? 'selected' : '') ?>>All Categories</option>
            <option value="1" <?= ($category_selected == '1' ? 'selected' : '') ?>>Building Materials</option>
            <option value="2" <?= ($category_selected == '2' ? 'selected' : '') ?>>Tools</option>
            <option value="3" <?= ($category_selected == '3' ? 'selected' : '') ?>>Safety</option>
        </select>

        <select class="select" onchange="applyFilter()">
          <option value="">All Prices</option>
          <option value="under50" <?= ($price_selected == 'under50' ? 'selected' : '') ?>>Under $50</option>
          <option value="50-200" <?= ($price_selected == '50-200' ? 'selected' : '') ?>>$50 - $200</option>
          <option value="over200" <?= ($price_selected == 'over200' ? 'selected' : '') ?>>Over $200</option>
        </select>

        <select class="select" onchange="applyFilter()">
          <option value="">Featured</option>
          <option value="latest" <?= ($sort_selected == 'latest' ? 'selected' : '') ?>>Newest</option>
          <option value="low-high" <?= ($sort_selected == 'low-high' ? 'selected' : '') ?>>Price: Low to High</option>
          <option value="high-low" <?= ($sort_selected == 'high-low' ? 'selected' : '') ?>>Price: High to Low</option>
        </select>
      </div>
      <div style="color:var(--muted);font-weight:400">
          Showing <?= count($products) ?> of <?= $filteredProducts ?> products
          <?= ($filteredProducts != $totalProducts) ? " (Filtered from $totalProducts total)" : "" ?>
      </div>
    </div>


    <?php if ($activePromo): ?>
    <div class="promo">
        <img src="/assets/img/shop2.png" class="promo-icon">
        <?= $activePromo['description'] ?>
    </div>
    <?php endif; ?>


    <!-- product grid -->
    <section class="grid" aria-label="product-grid">

      <?php if (!empty($products)) : ?>
        <?php foreach ($products as $product): ?>
          <article class="card">
            <div class="thumb"
              style="background: url('<?= esc($product['image_url'] ?? "https://placehold.co/400x300"); ?>') center/cover no-repeat;">
            </div>

            <div class="body">
              <h3><?= esc($product['name']); ?></h3>
              <p><?= esc(substr($product['description'], 0, 80)); ?>...</p>

              <div class="meta">
                <div class="price">Rp <?= number_format($product['price'], 0, ',', '.'); ?></div>

                <button class="add"
                    onclick="window.location.href='/shop/<?= $product['slug']; ?>'">
                    Add to Cart
                </button>

              </div>
            </div>
          </article>
        <?php endforeach; ?>
      <?php else: ?>

        <p style="text-align:center; grid-column:1/-1; color:#ccc">No products available.</p>

      <?php endif; ?>

    </section>


    <!-- pagination -->
    <?php
$pagerInfo = $pager->getDetails('products'); 
// getDetails selalu mengembalikan array TIDAK PERNAH string

$currentPage = $pagerInfo['currentPage'];
$pageCount   = $pagerInfo['pageCount'];
?>
<div class="pagination">

    <!-- PREVIOUS -->
    <?php if ($currentPage > 1): ?>
        <a class="page" href="<?= $pager->getPreviousPageURI('products') ?>">&lt;</a>
    <?php else: ?>
        <div class="page" style="opacity:0.3">&lt;</div>
    <?php endif; ?>

    <!-- NUMBER LIST -->
    <?php for ($i = 1; $i <= $pageCount; $i++): ?>
        <a class="page <?= ($i == $currentPage ? 'active' : '') ?>"
           href="<?= $pager->getPageURI($i, 'products') ?>">
           <?= $i ?>
        </a>
    <?php endfor; ?>

    <!-- NEXT -->
    <?php if ($currentPage < $pageCount): ?>
        <a class="page" href="<?= $pager->getNextPageURI('products') ?>">&gt;</a>
    <?php else: ?>
        <div class="page" style="opacity:0.3">&gt;</div>
    <?php endif; ?>

</div>




  </div>
<script>
  function applyFilter() {
      const selects = document.querySelectorAll('.select');
      const url = new URL(window.location.href);

      url.searchParams.set('category', selects[0].value);
      url.searchParams.set('price', selects[1].value);
      url.searchParams.set('sort', selects[2].value);

      window.location.href = url;
  }
</script>

</body>
</html>
