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
      padding:0 20px 80px;
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
      margin-top:8px;
      border-radius:12px;
      overflow:hidden;
      position:relative;
      min-height:260px;
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .hero .bg{
      position:absolute;inset:0;
      background-image: url('/mnt/data/2c6b9dfb-464b-499a-b3a7-d3e9dea7ea61.png');
      background-size:cover;
      background-position:center;
      filter:brightness(.45) contrast(.95);
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
      padding:14px;border-radius:8px;
    }
    .filters .left{display:flex;gap:10px;align-items:center}
    .select{
      background:transparent;border:1px solid rgba(255,255,255,0.06);padding:8px 12px;border-radius:8px;color:#fff;
    }

    /* promo */
    .promo{
      margin-top:14px;
      background:var(--accent);
      color:#222;
      padding:10px 14px;
      border-radius:6px;
      text-align:center;font-weight:700;
    }

    /* products grid */
    .grid{
      margin-top:20px;
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
    .card .thumb{
      height:140px;background-image:url('/mnt/data/2c6b9dfb-464b-499a-b3a7-d3e9dea7ea61.png');
      background-position:center;background-size:cover;
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
    .pagination{
      margin-top:26px;display:flex;gap:8px;justify-content:center;align-items:center;
    }
    .page{
      width:36px;height:36px;border-radius:8px;background:rgba(255,255,255,0.03);display:flex;
      align-items:center;justify-content:center;color:#dbe8ec;font-weight:700;cursor:pointer;
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
    <header>
      <div class="brand">
        <div class="logo">B</div>
        <div>
          <div style="font-weight:800">Bangun Bangsa</div>
          <div style="font-size:12px;color:var(--muted)">Premium Construction Materials</div>
        </div>
      </div>

      <nav>
        <a href="#">Home</a>
        <a href="#">Build</a>
        <a href="#">Shop</a>
        <a href="#">Contact</a>
      </nav>

      <div style="display:flex;gap:12px;align-items:center;width:360px;max-width:40%">
        <div class="search" aria-label="search">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" style="opacity:.9" xmlns="http://www.w3.org/2000/svg"><path d="M21 21L16.65 16.65" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <input placeholder="Search..." />
        </div>
      </div>
    </header>

    <!-- HERO -->
    <section class="hero">
      <div class="bg"></div>
      <div class="content">
        <h1>Premium Construction Materials</h1>
        <p>Build your dreams with quality materials from trusted suppliers</p>
        <button class="btn-primary">Shop Now</button>
      </div>
    </section>

    <!-- filters -->
    <div class="filters">
      <div class="left">
        <select class="select">
          <option>All Categories</option>
          <option>Building Materials</option>
          <option>Tools</option>
          <option>Safety</option>
        </select>

        <select class="select">
          <option>All Prices</option>
          <option>Under $50</option>
          <option>$50 - $200</option>
          <option>Over $200</option>
        </select>

        <select class="select">
          <option>Sort By: Featured</option>
          <option>Newest</option>
          <option>Price: Low to High</option>
          <option>Price: High to Low</option>
        </select>
      </div>

      <div style="color:var(--muted);font-weight:600">Showing 24 of 156 products</div>
    </div>

    <div class="promo">🔥 Limited Time Offer: 20% OFF on all Steel Products | Free Delivery on Orders Over $500</div>

    <!-- product grid -->
    <section class="grid" aria-label="product-grid">
      <!-- repeat card 8x for demo -->
      <article class="card">
        <div class="thumb"></div>
        <div class="body">
          <h3>Premium Portland Cement</h3>
          <p>High-strength cement for professional construction</p>
          <div class="meta">
            <div class="price">$45.99</div>
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="thumb" style="background-image:url('/mnt/data/2c6b9dfb-464b-499a-b3a7-d3e9dea7ea61.png')"></div>
        <div class="body">
          <h3>Steel Rebar Set</h3>
          <p>Reinforcement steel bars for concrete structures</p>
          <div class="meta">
            <div class="price">$189.99</div>
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="thumb"></div>
        <div class="body">
          <h3>Clay Bricks (100 pcs)</h3>
          <p>Traditional red clay bricks for masonry work</p>
          <div class="meta">
            <div class="price">$89.99</div>
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="thumb"></div>
        <div class="body">
          <h3>Professional Power Drill</h3>
          <p>Heavy-duty cordless drill for construction work</p>
          <div class="meta">
            <div class="price">$299.99</div>
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="thumb"></div>
        <div class="body">
          <h3>Concrete Mixer</h3>
          <p>Portable concrete mixer for medium projects</p>
          <div class="meta">
            <div class="price">$1,299.99</div>
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="thumb"></div>
        <div class="body">
          <h3>Safety Helmet Set</h3>
          <p>Professional safety helmets with adjustable straps</p>
          <div class="meta">
            <div class="price">$24.99</div>
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="thumb"></div>
        <div class="body">
          <h3>Premium Lumber Pack</h3>
          <p>High-quality wooden planks for construction</p>
          <div class="meta">
            <div class="price">$159.99</div>
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="thumb"></div>
        <div class="body">
          <h3>Measuring Tools Kit</h3>
          <p>Complete set of precision measuring tools</p>
          <div class="meta">
            <div class="price">$79.99</div>
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </article>
    </section>

    <!-- pagination -->
    <div class="pagination">
      <div class="page">&lt;</div>
      <div class="page active">1</div>
      <div class="page">2</div>
      <div class="page">3</div>
      <div class="page">&gt;</div>
    </div>

    <!-- footer -->
    <footer>
      <div class="footer-grid">
        <div class="contact">
          <div class="logo-small"></div>
          <h4 style="color:#fff">Bangun Bangsa</h4>
          <div>Jl. Pembangunan No. 123 Jakarta<br>Selatan 12345 Indonesia</div>
          <div style="margin-top:8px;color:var(--muted)">
            <div>✉ info@bangunbangsa.com</div>
            <div>📞 +62 21 1234 5678</div>
          </div>
        </div>

        <div>
          <h4>Company</h4>
          <div style="color:var(--muted);display:flex;flex-direction:column;gap:8px">
            <a href="#" style="color:var(--muted);text-decoration:none">About</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Career</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Contact</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Services</a>
          </div>
        </div>

        <div>
          <h4>Layanan</h4>
          <div style="color:var(--muted);display:flex;flex-direction:column;gap:8px">
            <a href="#" style="color:var(--muted);text-decoration:none">Home Construction</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Tools Rental</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Safety Gear</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Architecture</a>
          </div>
        </div>

        <div>
          <h4>Support & Store</h4>
          <div style="color:var(--muted);display:flex;flex-direction:column;gap:8px">
            <a href="#" style="color:var(--muted);text-decoration:none">Jakarta Pusat</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Bandung</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Surabaya</a>
            <a href="#" style="color:var(--muted);text-decoration:none">Konsultasi</a>
          </div>
        </div>
      </div>

      <div style="text-align:center;color:var(--muted);padding:18px 0 0;font-size:13px">
        © 2024 Bangun Bangsa. All rights reserved.
      </div>
    </footer>

  </div>

</body>
</html>
