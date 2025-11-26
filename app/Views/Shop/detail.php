<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bangun Bangsa — Product</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    :root{
      --bg:#2f3a3f; /* page background */
      --panel:#364245; /* main panels */
      --muted:#4a565b; /* inner muted */
      --card:#3b484d; /* card bg */
      --accent:#f2bf18; /* yellow */
      --light:#e9edf0;
      --radius:12px;
      --shadow: 0 10px 20px rgba(0,0,0,0.45);
      font-family: 'Poppins', sans-serif;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;background:linear-gradient(180deg,var(--bg),#2b3538);color:var(--light);-webkit-font-smoothing:antialiased;
      padding:28px 48px;font-size:15px;
    }

    /* Header */
    .header{display:flex;align-items:center;justify-content:space-between;gap:20px;padding:18px 26px;border-radius:14px;background:#384347;box-shadow:var(--shadow);margin-bottom:24px}
    .brand{display:flex;align-items:center;gap:14px}
    .brand .logo{width:46px;height:34px;border-radius:6px;background:linear-gradient(135deg,#2f6f7c,#f2bf18);display:flex;align-items:center;justify-content:center;font-weight:800}
    .brand h1{font-size:18px;margin:0}
    nav{display:flex;gap:20px;align-items:center}
    nav a{color:var(--light);text-decoration:none;opacity:0.9}
    .search{display:flex;align-items:center;background:#2b3538;padding:8px 12px;border-radius:30px;min-width:300px}
    .search input{border:0;background:transparent;color:var(--light);outline:none;margin-right:8px}

    /* breadcrumb */
    .breadcrumb{color:#bfc8cb;font-size:13px;margin:18px 0}

    /* product top card */
    .product-wrap{display:grid;grid-template-columns:1fr 460px;gap:28px}
    .left-card{background:var(--panel);padding:26px;border-radius:14px;box-shadow:var(--shadow)}
    .gallery-main{background:var(--card);padding:22px;border-radius:10px;display:flex;justify-content:center;align-items:center}
    .gallery-main img{max-width:100%;height:340px;object-fit:cover;border-radius:8px}
    .thumbs{display:flex;gap:12px;margin-top:14px}
    .thumbs img{width:70px;height:54px;border-radius:8px;object-fit:cover;background:#2c373a;padding:6px;border:2px solid transparent}
    .thumbs img.active{border-color:var(--accent)}

    .right-card{background:var(--panel);padding:26px;border-radius:14px;box-shadow:var(--shadow);position:relative}
    .badges{display:flex;gap:8px;margin-bottom:8px}
    .badge{background:#2f3b3e;color:var(--light);padding:6px 10px;border-radius:8px;font-weight:600}
    .title{font-size:26px;font-weight:700;margin:6px 0 10px}
    .rating{display:flex;align-items:center;gap:10px;color:var(--accent);margin-bottom:12px}
    .desc{color:#b9c0c2;line-height:1.6;border-top:1px solid rgba(255,255,255,0.03);padding-top:12px;margin-bottom:12px}

    .price{font-size:28px;color:var(--accent);font-weight:800}
    .meta{margin-top:12px;color:#bfc8cb;font-size:14px}

    .qty{display:flex;align-items:center;gap:10px;margin-top:12px}
    .qty button{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--light);padding:6px 10px;border-radius:6px}
    .qty .number{min-width:34px;display:inline-block;text-align:center}

    .actions{display:flex;gap:12px;margin-top:18px}
    .btn-primary{background:var(--accent);color:#1d2830;border:none;padding:12px 22px;border-radius:10px;font-weight:700;cursor:pointer;box-shadow:0 6px 14px rgba(242,191,24,0.12)}
    .btn-like{background:transparent;border:1px solid rgba(255,255,255,0.06);padding:10px;border-radius:10px}

    .features{display:flex;gap:24px;margin-top:20px;color:#bfc8cb}
    .features .f{display:flex;flex-direction:column;align-items:center;gap:8px}

    /* specs & reviews */
    .lower{display:grid;grid-template-columns:1fr 600px;gap:20px;margin-top:28px}
    .card{background:var(--panel);padding:18px;border-radius:12px;box-shadow:var(--shadow)}
    .spec-list{display:flex;flex-direction:column;gap:12px}
    .spec-item{background:var(--card);padding:14px;border-radius:8px;color:#c9d1d3}
    .spec-item strong{display:block;color:var(--light);margin-bottom:6px}

    .reviews .score{font-size:40px;font-weight:800;color:var(--accent)}
    .review-item{background:var(--card);padding:12px;border-radius:8px;margin-top:12px}
    .review-item .name{font-weight:700}
    .review-item p{color:#c9d1d3;margin:8px 0 0}

    /* related products */
    .related{margin-top:28px}
    .related-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}
    .rel-card{background:var(--panel);padding:14px;border-radius:10px}
    .rel-card img{width:100%;height:120px;object-fit:cover;border-radius:6px}
    .rel-card .rel-title{font-weight:700;margin-top:8px}
    .rel-card .rel-price{color:var(--accent);font-weight:700;margin-top:8px}

    /* footer */
    footer{margin-top:36px;padding:28px;background:#283334;border-radius:10px;color:#aeb7b9;display:flex;gap:40px}
    footer .col{flex:1}
    footer h4{color:var(--light)}

    /* responsive */
    @media (max-width:1100px){
      .product-wrap{grid-template-columns:1fr}
      .lower{grid-template-columns:1fr}
      .related-grid{grid-template-columns:repeat(2,1fr)}
    }
    @media (max-width:600px){
      body{padding:16px}
      .search{min-width:140px}
      .related-grid{grid-template-columns:1fr}
    }
  </style>
</head>
<body>

  <div class="breadcrumb">Home &gt; Shop &gt; Cement &amp; Concrete &gt; <strong style="color:var(--accent)">Premium Portland Cement</strong></div>

  <main>
    <section class="product-wrap">
      <div class="left-card">
        <div class="gallery-main">
          <img id="mainImg" src="<?= base_url($images[0]['image_url'] ?? 'no-image.png') ?>">
        </div>
        <div class="thumbs">
          <?php foreach ($images as $i => $img): ?>
              <img 
                  src="<?= base_url($img['image_url']) ?>" 
                  class="<?= $i == 0 ? 'active' : '' ?>" 
                  onclick="setMain(this)">
          <?php endforeach; ?>

        </div>
      </div>

      <aside class="right-card">
        <div class="badges">
          <div class="badge">Best Seller</div>
          <div class="badge">In Stock</div>
        </div>
        <h2 class="title"><?= esc($product['name']) ?></h2>

        <div class="rating">
            <span style="color:var(--accent);font-weight:800">
                <?= number_format($avgRating, 1) ?>
            </span>
            <span style="color:#bfc8cb">(<?= $reviewCount ?> reviews)</span>
        </div>

        <p class="desc"><?= esc($product['description']) ?></p>

        <div class="price">Rp <?= esc($product['price']) ?> <span style="font-size:14px;color:#c9d1d3;font-weight:600">/ bag (40kg)</span></div>
        <div class="meta">Stock Available: <strong style="color:var(--accent)"><?= esc($product['stock']) ?></strong></div>

        <div class="qty">
          <label style="min-width:70px;color:#c9d1d3">Quantity:</label>
          <button onclick="decrement()">−</button>
          <div class="number" id="qty">1</div>
          <button onclick="increment()">+</button>
        </div>

        <div class="actions">
          <button class="btn-primary" onclick="addToCart()">
              <i class="fas fa-shopping-cart"></i> Add to Cart
          </button>
          <button class="btn-like"><i class="far fa-heart"></i></button>
        </div>

        <div class="features">
          <div class="f"><i class="fas fa-truck"></i><small>Free Delivery<br><strong style="color:var(--light)">Orders over Rp 500k</strong></small></div>
          <div class="f"><i class="fas fa-shield-alt"></i><small>Quality Guarantee<br><strong style="color:var(--light)">100% Authentic</strong></small></div>
          <div class="f"><i class="fas fa-undo"></i><small>Easy Returns<br><strong style="color:var(--light)">7 Days Return</strong></small></div>
        </div>
      </aside>
    </section>

    <section class="lower">
      <div class="card">
        <h3>Product Specifications</h3>
        <div class="spec-list">
          <?php foreach ($specs as $spec): ?>
              <div class="spec-item">
                  <strong><?= esc($spec['specification_name']) ?></strong>
                  <?= esc($spec['specification_value']) ?>
              </div>
          <?php endforeach; ?>

        </div>
      </div>

      <div class="card reviews">
        <h3>Customer Reviews</h3>
        <div style="display:flex;align-items:center;gap:14px;margin-top:8px">
          <div class="score"><?= number_format($avgRating, 1) ?></div>
          <div style="color:#c9d1d3">Based on (<?= $reviewCount ?> reviews) reviews<br><button class="btn-primary" style="padding:8px 12px;font-size:14px;margin-top:8px">Write Review</button></div>
        </div>

        <?php foreach ($reviews as $r): ?>
            <div class="review-item">
                <div style="display:flex;justify-content:space-between;align-items:center">
                    <div>
                        <div class="name"><?= esc($r['full_name']) ?></div>
                        <div style="color:#9fb0b2;font-size:13px">
                            <?= date('d M Y', strtotime($r['created_at'])) ?>
                        </div>
                    </div>
                    <div style="color:var(--accent)">
                        <?= str_repeat('★', $r['rating']) ?>
                    </div>
                </div>
                <p><?= esc($r['review_text']) ?></p>
            </div>
        <?php endforeach; ?>


      </div>
    </section>

    <section class="related">
      <h3 style="color:var(--light)">Related Products</h3>
      <div class="related-grid" style="margin-top:12px">

        <?php foreach ($related as $rp): ?>
          <div class="rel-card" onclick="window.location.href='<?= base_url('shop/detail/' . $rp['slug']) ?>'">
            <img src="<?= base_url($rp['image_url'] ?? 'no-image.png') ?>" alt="rel">
            <div class="rel-title"><?= esc($rp['name']) ?></div>
            <div class="rel-price">Rp <?= number_format($rp['price'], 0, ',', '.') ?></div>
          </div>
        <?php endforeach; ?>

      </div>
    </section>


  </main>

  <script>
    function setMain(el){
      document.getElementById('mainImg').src = el.src;
      document.querySelectorAll('.thumbs img').forEach(i=>i.classList.remove('active'));
      el.classList.add('active');
    }
    function increment(){
        const el = document.getElementById('qty');
        const maxQty = <?= $product['stock'] ?>;
        let n = Number(el.textContent || '1') + 1;
        el.textContent = String(Math.min(n, maxQty));
    }

    function decrement(){
        const el = document.getElementById('qty');
        let n = Number(el.textContent || '1') - 1;
        el.textContent = String(Math.max(n, 1));
    }

  </script>
  <script>
    function addToCart(){
        let qty = Number(document.getElementById('qty').textContent || 1);
        const maxQty = <?= $product['stock'] ?>;

        // Batasi minimal 1, maksimal stok
        qty = Math.max(1, Math.min(qty, maxQty));

        window.location.href = '<?= base_url('cart/add/' . $product['product_id']) ?>?qty=' + qty;
    }
    </script>
</body>
</html>
