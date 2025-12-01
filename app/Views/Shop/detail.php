
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
      margin:0;background:linear-gradient(180deg,var(--bg),#2b3538);color:var(--light);-webkit-font-smoothing:antialiased;font-size:15px;
    }

    /* breadcrumb */
    .breadcrumb{color:#bfc8cb;font-size:13px;margin:18px 0;padding-left: 48px;}

    /* product top card */
    .product-wrap{display:grid;grid-template-columns:1fr 1fr;padding-left: 48px;padding-right: 48px;}
    .left-card{background:var(--panel);padding:26px;border-radius:14px;border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    box-shadow: -4px 0 12px hsla(0, 0%, 0%, 0.15);}
    .gallery-main{background:#303841;padding:22px;border-radius:10px;display:flex;justify-content:center;align-items:center}
    .gallery-main img{max-width:100%;height:340px;object-fit:cover;border-radius:8px}
    .thumbs{display:flex;gap:12px;margin-top:14px}
    .thumbs img{width:70px;height:54px;border-radius:8px;object-fit:cover;background:#2c373a;padding:6px;border:2px solid transparent}
    .thumbs img.active{border-color:var(--accent)}

    .right-card{background:var(--panel);padding:26px;border-radius:14px;position:relative;border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    box-shadow: 4px 0 12px rgba(0,0,0,0.15);}
    .badges{display:flex;gap:8px;margin-bottom:8px}
    .badge{background:#2f3b3e;color:var(--light);padding:6px 10px;border-radius:8px;font-weight:600}
    .title{font-size:26px;font-weight:700;margin:6px 0 10px}
    .rating{display:flex;align-items:center;gap:10px;color:var(--accent);margin-bottom:12px}
    .rating .stars i {font-size: 18px;color: #F6C90E;}
    .rating-number {font-weight: 800;}
    .rating-count {color: #bfc8cb;}

    .desc{color:#b9c0c2;line-height:1.6;padding-top:12px;margin-bottom:12px;}

    .price{font-size:28px;color:var(--accent);font-weight:800;border-top:1px solid rgba(0, 0, 0, 0.22);}
    .meta{margin-top:12px;color:#bfc8cb;font-size:14px}

    .qty{display:flex;align-items:center;gap:10px;margin-top:12px}
    .qty button{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--light);padding:6px 10px;border-radius:6px}
    .qty .number{min-width:34px;display:inline-block;text-align:center}

    .actions{display:flex;gap:12px;margin-top:18px;padding-bottom:18px;border-bottom:1px solid rgba(0, 0, 0, 0.22);}
    .btn-primary-add-cart{background:var(--accent);color:#1d2830;border:none;padding:12px 22px;border-radius:10px;font-weight:700;cursor:pointer;box-shadow:0 6px 14px rgba(242,191,24,0.12);width: 100%;}
    .btn-primary{background:var(--accent);color:#1d2830;border:none;padding:12px 22px;border-radius:10px;font-weight:700;cursor:pointer;box-shadow:0 6px 14px rgba(242,191,24,0.12);width: 100%;}
    .btn-like{background:transparent;border:1px solid rgba(255,255,255,0.06);padding:10px;border-radius:10px}

    .features{display:flex;align-items:center;gap:10px;margin-top:20px;color:#bfc8cb}
    .features .f{display:flex;flex-direction:column;align-items:center;gap:8px}
    .features > div {
    flex: 1;
    text-align: center;
}


    /* specs & reviews */
    .lower{display:grid;grid-template-columns:1fr 600px;gap:20px;margin-top:28px;padding-left: 48px;padding-right: 48px;}
    .card{background:var(--panel);padding:18px;border-radius:12px;box-shadow:var(--shadow)}
    .spec-list{display:flex;flex-direction:column;gap:12px}
    .spec-item{background:var(--card);padding:14px;border-radius:8px;color:#c9d1d3}
    .spec-item strong{display:block;color:var(--light);margin-bottom:6px}

    .reviews .score{font-size:40px;font-weight:800;color:var(--accent)}
    .review-item{background:var(--card);padding:12px;border-radius:8px;margin-top:12px}
    .review-item .name{font-weight:700}
    .review-item p{color:#c9d1d3;margin:8px 0 0}

    .review-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .review-left {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .review-stars i {
        font-size: 20px;
        color: var(--accent);
    }

    .review-based {
        color: #c9d1d3;
        font-size: 14px;
    }

    .write-review-btn {
        padding: 10px 16px;
        font-size: 14px;
        white-space: nowrap;
    }
    /* related products */
    .related{margin-top:28px;margin-bottom: 28px;padding-left: 48px;padding-right: 48px;}
    .related-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}
    .rel-card{background:var(--panel);padding:14px;border-radius:10px}
    .rel-card img{width:100%;height:120px;object-fit:cover;border-radius:6px}
    .rel-card .rel-title{font-weight:700;margin-top:8px;font-size:16px;}
    .rel-bottom {
        margin-top: 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .rel-price {
        font-weight: 700;
        color: var(--primary);
        font-size: 15px;
    }

    .rel-cart-btn {
        background-color: #F6C90E;
        border: none;
        width: 32px;
        height: 32px;
        border-radius: 6px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .rel-cart-btn i {
        color: #000; /* atau putih, terserah kamu */
        font-size: 15px;
    }
  </style>
</head>
<body>
    <?= $this->include('Layout/header'); ?>


  <div class="breadcrumb">Home &gt; Shop &gt; Cement &amp; Concrete &gt; <strong style="color:var(--accent)">Premium Portland Cement</strong></div>

  <!-- <main> -->
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
          <!-- <div class="badge">Best Seller</div>
          <div class="badge">In Stock</div> -->
        </div>
        <h2 class="title"><?= esc($product['name']) ?></h2>

        <div class="rating">
            <div class="stars">
                <?= renderStars(round($avgRating, 1)) ?>
            </div>

            <span class="rating-number" style="color:var(--accent);font-weight:800;">
                <?= number_format($avgRating, 1) ?>
            </span>

            <span class="rating-count" style="color:#bfc8cb;">
                (<?= $reviewCount ?> reviews)
            </span>
        </div>


        <p class="desc"><?= esc($product['description']) ?></p>

        <div class="price">Rp <?= number_format($product['price'], 0, ',', '.') ?> <span style="font-size:14px;color:#c9d1d3;font-weight:600">/ bag (40kg)</span></div>
        <div class="meta">Stock Available: <strong style="color:var(--accent)"><?= esc($product['stock']) ?></strong></div>

        <div class="qty">
          <label style="min-width:70px;color:#c9d1d3">Quantity:</label>
          <button onclick="decrement()">−</button>
          <div class="number" id="qty">1</div>
          <button onclick="increment()">+</button>
        </div>

        <div class="actions">
          <button class="btn-primary-add-cart" onclick="addToCart()">
              <i class="fas fa-shopping-cart"></i> Add to Cart
          </button>
        </div>

        <div class="features">
          <div class="f"><i class="fas fa-truck" style="color: var(--accent);"></i><small>Free Delivery<br><strong style="color:var(--light)">Orders over Rp 500k</strong></small></div>
          <div class="f"><i class="fas fa-shield-alt" style="color: var(--accent);"></i><small>Quality Guarantee<br><strong style="color:var(--light)">100% Authentic</strong></small></div>
          <div class="f"><i class="fas fa-undo" style="color: var(--accent);"></i><small>Easy Returns<br><strong style="color:var(--light)">7 Days Return</strong></small></div>
        </div>
      </aside>
    </section>

    <section class="lower">
      <div class="card">
        <h3><i class="fa-solid fa-clipboard-list" style="margin-right: 8px; color: var(--accent); margin-bottom: 20px;"></i>Product Specifications</h3>
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
        <h3><i class="fa-solid fa-comments" style="margin-right: 8px; color: var(--accent); margin-bottom: 10px;"></i>Customer Reviews</h3>
        <div class="review-header">
            <div class="review-left">
                <div class="score"><?= number_format($avgRating, 1) ?></div>

                <div class="review-stars">
                    <?= renderStars(round($avgRating, 1)) ?>
                </div>

                <div class="review-based">
                    Based on <?= $reviewCount ?> reviews
                </div>
            </div>

            <div class="review-right">
                <button class="btn-primary write-review-btn">Write Review</button>
            </div>
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

            <?php
            function renderStars($rating) {
                $full = floor($rating);
                $empty = 5 - $full;

                return str_repeat('<i class="fa-solid fa-star" style="color:#F6C90E"></i>', $full)
                    . str_repeat('<i class="fa-regular fa-star" style="color:#F6C90E"></i>', $empty);
            }
            ?>
    <section class="related">
      <h3 style="color:var(--light)"><i class="fa-solid fa-layer-group" style="color: #F6C90E; margin-right: 8px;"></i>Related Products</h3>
      <div class="related-grid" style="margin-top:12px">

        <?php foreach ($related as $rp): ?>
          <div class="rel-card" onclick="window.location.href='<?= base_url('shop/detail/' . $rp['slug']) ?>'">
              <img src="<?= base_url($rp['image_url'] ?? 'no-image.png') ?>" alt="rel">

              <div class="rel-title"><?= esc($rp['name']) ?></div>

              <div class="rel-rating" style="margin-top:8px; font-size:13px;">
                  <?= renderStars(round($rp['avg_rating'] ?? 0, 1)) ?>
                  <span style="color:#bfc8cb; margin-left:4px;">
                      (<?= $rp['review_count'] ?>)
                  </span>
              </div>

              <div class="rel-bottom">
                  <div class="rel-price">Rp <?= number_format($rp['price'], 0, ',', '.') ?></div>

                  <a class="rel-cart-btn" href="<?= base_url('shop/' . $rp['slug']) ?>">
                      <i class="fa-solid fa-cart-shopping"></i>
                  </a>
              </div>

          </div>

        <?php endforeach; ?>

      </div>
    </section>

    <?= $this->include('Layout/footer'); ?>

  <!-- </main> -->

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
