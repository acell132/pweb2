<?= $this->include('Layout/header'); ?>

<style>
:root {
    --bg:#323a3f;
    --panel:#2f3a40;
    --muted:#8b9498;
    --accent:#f3c213;
    --card:#3a4448;
    --radius:12px;
    --glass: rgba(255,255,255,0.03);
}

body { background: linear-gradient(180deg,var(--bg), #2c3438); color:#e6eef2; font-family:'Poppins', sans-serif; margin:0; padding:0; }
.wrap { padding: 40px 80px; }

/* Page Header */
.page-header { margin-bottom: 30px; text-align:center; }
.page-header h1 { font-size:36px; font-weight:800; }
.page-header p { color: var(--muted); font-size:16px; }

/* Order card summary */
.order-card {
    background: var(--card);
    border-radius: var(--radius);
    padding: 20px;
    margin-bottom: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.4), inset 0 1px rgba(255,255,255,0.03);
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: transform 0.2s;
}
.order-card:hover { transform: translateY(-3px); }

.order-summary {
    display: flex;
    gap: 15px;
    font-weight:600;
}
.order-summary span { color: var(--accent); }

/* Status */
.status {
    padding: 4px 10px;
    border-radius: 8px;
    font-weight:600;
    font-size:12px;
    text-transform: uppercase;
}
.status.completed { color: #0adf74ff; }
.status.shipped { color: #29abf7ff; }
.status.paid { color: #134ff3ff; }
.status.verification { color: #f3c213; }
.status.pending { color: #f39c12; }
.status.cancelled { color: #f54633ff; }

/* Modal */
.modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    padding: 20px;
}
.modal-box {
    background: var(--panel);
    border-radius: var(--radius);
    padding: 30px;
    width: 600px;
    max-width: 95%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 12px 40px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.03);
    position: relative;
}

/* Modal header */
.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}
.modal-header h3 { margin:0; color: var(--accent); }
.modal-close {
    cursor: pointer;
    font-weight: bold;
    font-size: 20px;
    color:#fff;
}

/* Order items table inside modal */
.order-items {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}
.order-items th, .order-items td {
    padding: 10px 8px;
    text-align: left;
}
.order-items th { font-weight:600; color: var(--muted); font-size:14px; }
.order-items td { font-size:14px; color:#fff; }
.order-items img { width: 60px; height: 60px; object-fit: cover; border-radius:8px; }

/* Summary row */
.summary { margin-top: 15px; display:flex; justify-content:flex-end; gap:20px; font-weight:600; font-size:14px; }
.summary span { color: var(--accent); }

/* Responsive */
@media (max-width:768px){
    .wrap { padding: 20px; }
    .order-items img { width:50px; height:50px; }
    .modal-box { width: 90%; padding: 20px; }
}
/* ========================= */
    /*  MODAL OVERLAY */
    /* ========================= */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 99999;
        padding: 20px;
        backdrop-filter: blur(4px);
        animation: fadeInOverlay 0.3s ease;
    }

    @keyframes fadeInOverlay {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* ========================= */
    /*  MODAL CONTAINER */
    /* ========================= */
    .modal-box {
        width: 900px;
        max-width: 95%;
        background: linear-gradient(135deg, #2c3542 0%, #364150 100%);
        border-radius: 20px;
        padding: 40px;
        animation: slideInUp 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5), 
                    inset 0 1px 1px rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(247, 209, 74, 0.15);
        overflow-y: auto;
        max-height: 90vh;
    }

    @keyframes slideInUp {
        from { 
            opacity: 0; 
            transform: translateY(30px); 
        }
        to { 
            opacity: 1; 
            transform: translateY(0); 
        }
    }

    /* Title */
    .modal-box h2 {
        text-align: center;
        background: linear-gradient(135deg, #f7d14a 0%, #ffd700 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 10px;
        font-weight: 700;
        font-size: 28px;
        letter-spacing: 0.5px;
    }

    .modal-subtitle {
        text-align: center;
        color: #b0b9c1;
        font-size: 14px;
        margin-bottom: 35px;
        font-weight: 400;
    }

    /* ========================= */
    /* FLEX WRAPPER 2 KOLOM */
    /* ========================= */
    .modal-flex {
        display: flex;
        gap: 35px;
        margin-bottom: 30px;
    }

    /* LEFT */
    .modal-left {
        width: 40%;
    }

    .modal-left h3 {
        color: #f7d14a;
        margin-bottom: 18px;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* RIGHT */
    .modal-right {
        width: 60%;
        background: linear-gradient(135deg, rgba(52, 65, 80, 0.5) 0%, rgba(43, 52, 64, 0.5) 100%);
        padding: 25px;
        border-radius: 16px;
        border: 1px solid rgba(247, 209, 74, 0.1);
        backdrop-filter: blur(10px);
    }

    /* ========================= */
    /* BANK LIST */
    /* ========================= */
    .bank-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 20px;
    }

    .bank-item {
        padding: 14px 18px;
        background: linear-gradient(135deg, #37424f 0%, #2f3a47 100%);
        border-radius: 12px;
        cursor: pointer;
        border: 2px solid transparent;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        font-weight: 500;
        position: relative;
        overflow: hidden;
    }

    .bank-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(247, 209, 74, 0.2), transparent);
        transition: left 0.5s;
    }

    .bank-item:hover {
        border-color: #f7d14a;
        background: linear-gradient(135deg, #445065 0%, #364150 100%);
        transform: translateX(8px);
    }

    .bank-item:hover::before {
        left: 100%;
    }

    .bank-selected {
        /* background: linear-gradient(135deg, #f7d14a22 0%, #ffd70022 100%); */
        border-color: #f7d14a !important;
    }

    .bank-item span {
        font-size: 18px;
        transition: transform 0.3s ease;
    }

    .bank-selected span {
        transform: translateX(4px);
    }

    /* ========================= */
    /* BANK DETAILS */
    /* ========================= */
    .bank-details {
        display: none;
        margin-bottom: 22px;
        animation: fadeIn 0.4s ease;
        padding: 18px;
        border-radius: 12px;
        border: 1px solid rgba(247, 209, 74, 0.2);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .bank-details p {
        margin: 10px 0;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .bank-details strong {
        color: #b0b9c1;
        font-weight: 600;
    }

    .bank-details span {
        color: #f7d14a;
        font-weight: 600;
        word-break: break-all;
    }

    /* ========================= */
    /* TOTAL BOX */
    /* ========================= */
    .total-box {
        padding: 20px;
        border-radius: 12px;
        text-align: center;
        color: #f7d14a;
        font-size: 24px;
        font-weight: 700;
        border: 2px solid #f7d14a;
        margin: 15px 0;
        letter-spacing: 0.5px;
    }

    /* ========================= */
    /* UPLOAD AREA */
    /* ========================= */
    /* FILAMENT STYLE UPLOAD AREA */
.upload-section {
    margin-top: 25px;
}

.upload-field {
    background: #2f3b49;
    border: 2px dashed #6b7280;
    border-radius: 14px;
    padding: 24px;
    text-align: center;
    cursor: pointer;
    transition: all 0.25s ease;
    position: relative;
}

.upload-field:hover {
    border-color: #f7d14a;
    background: #3d4856;
}

.upload-field.dragover {
    background: rgba(247, 209, 74, 0.15);
    border-color: #f7d14a;
}

.upload-field i {
    font-size: 40px;
    color: #f7d14a;
    margin-bottom: 10px;
}

.upload-field p {
    margin-top: 5px;
    color: #b0b9c1;
    font-size: 14px;
}

.preview-wrapper {
    margin-top: 15px;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid rgba(247, 209, 74, 0.25);
    display: none;
}

.preview-wrapper img {
    width: 100%;
    height: 220px;
    object-fit: contain;
    display: block;
}

/* Remove Button */
.remove-upload {
    background: #ff5252;
    color: #fff;
    border: none;
    padding: 10px 14px;
    border-radius: 8px;
    width: 100%;
    font-size: 13px;
    font-weight: 600;
    margin-top: 10px;
    cursor: pointer;
    display: none;
}


    /* ========================= */
    /* BUTTONS */
    /* ========================= */
    .copy-btn, .close-btn {
        border: none;
        border-radius: 10px;
        width: 100%;
        padding: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 12px;
    }

    .copy-btn {
        background: #ffd700;
        color: #1e2732;
    }

    .copy-btn:hover {
        transform: translateY(-2px);
    }

    .copy-btn:active {
        transform: translateY(0);
    }

    .close-btn {
        background: linear-gradient(135deg, #ff6b6b 0%, #ff5252 100%);
        color: #fff;
        margin-top: 20px;
    }

    .close-btn:hover {
        transform: translateY(-2px);
    }

    .close-btn:active {
        transform: translateY(0);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .modal-flex {
            flex-direction: column;
            gap: 20px;
        }
        .modal-left, .modal-right {
            width: 100%;
        }
        .modal-box {
            padding: 25px;
        }
    }
    .left-details {
        margin-top: 20px;
        background: linear-gradient(135deg, rgba(58,71,80,0.7), rgba(52,65,80,0.5));
        border-radius: 12px;
        padding: 18px;
        border: 1px solid rgba(247,209,74,0.25);
    }
    .modal-close-btn {
        position: absolute;
        top: 16px;
        right: 16px;
        width: 32px;
        height: 32px;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 6px;
        color: #f7d14a;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }

    .modal-close-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: scale(1.1);
    }
    .pagination {
  margin: 26px 26px 60px;
  display: flex;
  gap: 8px;
  justify-content: center;
  align-items: center;
}

.page{
  width:36px;
  height:36px;
  border-radius:8px;
  background:rgba(255,255,255,0.03);
  display:flex;
  align-items:center;
  justify-content:center;
  color:#dbe8ec;
  font-weight:700;
  cursor:pointer;
  text-decoration: none;
}

.page.active {
  background:var(--accent);
  color:#222;
}
.filter-input {
    background: #2f3a40;
    color: #e6eef2;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 8px;
    padding: 10px 14px;
    font-size: 14px;
    transition: all 0.3s ease;
}
.filter-input::placeholder {
    color: #e6eef2;
}

.filter-input:focus {
    border-color: var(--accent);
    outline: none;
}

.filter-btn {
    background: var(--accent);
    color: #222;
    border: none;
    border-radius: 8px;
    padding: 10px 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover {
    background: #f7d14a;
    transform: translateY(-2px);
}
.swal2-container {
        z-index: 999999 !important;
    }
</style>
<?php
// --- PAGINATION & FILTER LOGIC ---
$perPage = 5; // jumlah order per page

// ambil filter dari form
$startDate = $_GET['start_date'] ?? '';
$endDate = $_GET['end_date'] ?? '';
$minPrice = $_GET['min_price'] ?? '';
$maxPrice = $_GET['max_price'] ?? '';

// filter orders berdasarkan input
$filteredOrders = array_filter($orders, function($order) use ($startDate, $endDate, $minPrice, $maxPrice) {
    $dateOk = true;
    $priceOk = true;

    if($startDate) $dateOk = $dateOk && ($order['order_date'] >= $startDate);
    if($endDate)   $dateOk = $dateOk && ($order['order_date'] <= $endDate);
    if($minPrice)  $priceOk = $priceOk && ($order['total'] >= $minPrice);
    if($maxPrice)  $priceOk = $priceOk && ($order['total'] <= $maxPrice);

    return $dateOk && $priceOk;
});

$totalOrders = count($filteredOrders); 
$totalPages = ceil($totalOrders / $perPage);
$currentPage = $_GET['page'] ?? 1;

// ambil slice orders untuk current page
$start = ($currentPage - 1) * $perPage + 1;
$end = min($currentPage * $perPage, $totalOrders);
$orders = array_slice($filteredOrders, $start - 1, $perPage);
?>
<div class="wrap">
    <div class="page-header">
        <h1>My Orders</h1>
        <p>Click on an order to view details</p>
    </div>
<div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
    <form method="GET" style="display: flex; gap: 12px; flex-wrap: wrap; padding: 16px 0; border-radius: 12px;">

        <div style="display: flex; flex-direction: column;">
            <label for="start_date" style="margin-bottom: 4px; font-size: 14px;">Start Date</label>
            <input type="date" id="start_date" name="start_date" value="<?= htmlspecialchars($startDate) ?>" class="filter-input">
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="end_date" style="margin-bottom: 4px; font-size: 14px;">End Date</label>
            <input type="date" id="end_date" name="end_date" value="<?= htmlspecialchars($endDate) ?>" class="filter-input">
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="min_price" style="margin-bottom: 4px; font-size: 14px;">Min Price</label>
            <input type="number" id="min_price" name="min_price" value="<?= htmlspecialchars($minPrice) ?>" class="filter-input">
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="max_price" style="margin-bottom: 4px; font-size: 14px;">Max Price</label>
            <input type="number" id="max_price" name="max_price" value="<?= htmlspecialchars($maxPrice) ?>" class="filter-input">
        </div>

        <button type="submit" class="filter-btn" style="height: 45px; align-self: end;">Filter</button>

    </form>


    <div style="color: #b0b9c1; font-weight:500; font-size:14px;">
        Showing <?= $start ?> to <?= $end ?> of <?= $totalOrders ?> orders
    </div>
</div>
    <?php if(!empty($orders)): ?>
        <?php foreach($orders as $order): ?>
        <div class="order-card">
            <div style="display:flex; flex-direction:column; gap:5px; flex:1; max-width: 65%;">
                <!-- Baris pertama: Order #, Tanggal, Total -->
                <div style="display:flex; gap:25px; align-items:center; flex-wrap:wrap;">
                    <span style="color: #f3c213; font-weight: 600;">Order #<?= $order['order_id'] ?></span> 
                    <span style=""><i class="fa-solid fa-calendar-days" style="margin-right: 8px;"></i><?= date('d M Y', strtotime($order['order_date'])) ?></span>
                    <span style=""><i class="fa-solid fa-tags" style="margin-right: 8px;"></i>Rp <?= number_format($order['total'],0,',','.') ?></span>
                </div>

                <!-- Baris kedua: Daftar produk -->
                <div style=" overflow:hidden; text-overflow:ellipsis; white-space:nowrap; font-weight:500; color:#dce7eb; margin-top: 5px;"><img src="assets/img/carbon_financial-assets.png" width="15px" height="15px" style="margin-right: 12px;" alt="">
                    <?php 
                        $productNames = array_map(fn($item) => esc($item['name']), $order['items']);
                        echo implode(', ', $productNames);
                    ?>
                </div>
            </div>

            <div class="order-actions" style="display:flex; gap:5px; margin-top:5px;">
                <?php if(strtolower($order['status']) === 'pending'): ?>
                    <div class="status <?= strtolower($order['status']) ?>"><?= ucfirst($order['status']) ?></div>
                    <!-- Button bayar -->
                    <!-- Button bayar -->
                    <button 
                        style="width:28px; height:28px; background:#27ae60; border:none; border-radius:4px; color:#fff; cursor:pointer;" 
                        title="Pay" 
                        onclick="openCheckoutModal(<?= $order['order_id'] ?>)">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </button>
                    <!-- Button cancel -->
                    <button style="width:28px; height:28px; background:#c0392b; border:none; border-radius:4px; color:#fff; cursor:pointer;" title="Cancel">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <!-- Button detail -->
                    <button style="width:28px; height:28px; background:#34495e; border:none; border-radius:4px; color:#fff; cursor:pointer;" title="Detail" onclick="openModal(<?= $order['order_id'] ?>)">
                        <i class="fa-solid fa-circle-info"></i>
                    </button>
                <?php else: ?>
                    <div class="status <?= strtolower($order['status']) ?>" style="margin-right: 31px;"><?= ucfirst($order['status']) ?></div>
                    <!-- Button detail saja -->
                    <button style="width:28px; height:28px; background:#34495e; border:none; border-radius:4px; color:#fff; cursor:pointer; margin-right: 35px;" title="Detail" onclick="openModal(<?= $order['order_id'] ?>)">
                        <i class="fa-solid fa-circle-info"></i>
                    </button>
                <?php endif; ?>
            </div>

        </div>
        <?php endforeach; ?>


    <?php else: ?>
        <p style="text-align:center;color:#ccc;margin-top:40px;">You have no orders yet.</p>
    <?php endif; ?>
    <?php
$pagerInfo = $pager->getDetails('orders');
$currentPage = $pagerInfo['currentPage'];
$pageCount   = $pagerInfo['pageCount'];
?>
<div class="pagination">
    <!-- PREVIOUS -->
    <?php if ($currentPage > 1): ?>
        <a class="page" href="<?= $pager->getPreviousPageURI('orders') ?>">&lt;</a>
    <?php else: ?>
        <div class="page" style="opacity:0.3">&lt;</div>
    <?php endif; ?>

    <!-- NUMBER LIST -->
    <?php for ($i = 1; $i <= $pageCount; $i++): ?>
        <a class="page <?= ($i == $currentPage ? 'active' : '') ?>"
           href="<?= $pager->getPageURI($i, 'orders') ?>">
           <?= $i ?>
        </a>
    <?php endfor; ?>

    <!-- NEXT -->
    <?php if ($currentPage < $pageCount): ?>
        <a class="page" href="<?= $pager->getNextPageURI('orders') ?>">&gt;</a>
    <?php else: ?>
        <div class="page" style="opacity:0.3">&gt;</div>
    <?php endif; ?>
</div>

</div>

<!-- Modal -->
<div class="modal-overlay" id="orderModal">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Order Details</h3>
            <span class="modal-close-btn" onclick="closeModal()">✕</span>
        </div>
        <div id="modalContent">
            <!-- Content will be injected via JS -->
        </div>
    </div>
</div>

<!-- Checkout Modal -->
<div class="modal-overlay" id="checkoutModal">
    <div class="modal-box">
        <h2>💳 Bank Transfer Payment</h2>
        <p class="modal-subtitle">Select the bank and transfer the amount below</p>
        
        <div class="modal-flex">
            <!-- LEFT SIDE -->
            <div class="modal-left">
                <h3>🏦 Select Bank</h3>
                <div class="bank-list">
                    <div class="bank-item" onclick="selectBank('BRI', event)">
                        <span>🏢 Bank BRI</span>
                        <span>→</span>
                    </div>
                    <div class="bank-item" onclick="selectBank('BNI', event)">
                        <span>🏢 Bank BNI</span>
                        <span>→</span>
                    </div>
                    <div class="bank-item" onclick="selectBank('Mandiri', event)">
                        <span>🏢 Bank Mandiri</span>
                        <span>→</span>
                    </div>
                    <div class="bank-item" onclick="selectBank('BCA', event)">
                        <span>🏢 Bank BCA</span>
                        <span>→</span>
                    </div>
                </div>
                <!-- BANK DETAILS -->
                <div class="bank-details" id="bankDetails">
                    <p><strong>Bank:</strong> <span id="detailBank">-</span></p>
                    <p><strong>Account Number:</strong> <span id="detailNumber">-</span></p>
                    <p><strong>A/N:</strong> <span id="detailName">-</span></p>
                    <button class="copy-btn" onclick="copyAccount()">📋 Copy Account Number</button>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="modal-right">
                <!-- TOTAL -->
                <div id="paymentTotal">
                    <p style="color: #b0b9c1; font-size: 14px; margin-bottom: 10px;"><strong>Total payment</strong></p>
                    <div class="total-box">Rp 0</div>
                    <button class="copy-btn" onclick="copyTotal()">📋 Copy Total Payment</button>
                </div>

                <!-- UPLOAD -->
                <div class="upload-section">
                    <p style="font-weight:600; color:#b0b9c1; margin-bottom:8px;">📸 Upload Proof of Transfer</p>

                    <div class="upload-field" id="uploadField">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <p>Click or drag & drop the proof of transfer image</p>
                        <input type="file" id="uploadInput" hidden accept="image/*">
                    </div>

                    <div class="preview-wrapper" id="previewWrapper">
                        <img id="previewImage">
                    </div>

                    <button class="remove-upload" id="removeUpload">Delete Image</button>
                </div>

                <!-- SUBMIT PAYMENT BUTTON -->
                <button id="submitPayment" style="background:#27ae60; color:#fff; padding:10px 20px; border:none; border-radius:8px; margin-top:20px; display:block; margin-left:auto; margin-right:auto; cursor:pointer;">
    Submit
</button>


            </div>
        </div>

        <button class="modal-close-btn" onclick="closeCheckoutModal()">✕</button>
    </div>
</div>

<script>
const orders = <?= json_encode($orders) ?>;
const modal = document.getElementById('orderModal');
const modalContent = document.getElementById('modalContent');

function openModal(orderId){
    const order = orders.find(o => o.order_id == orderId);
    if(!order) return;

    let html = `<table class="order-items">
        <thead>
            <tr>
                <th>Product</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>`;
    
    order.items.forEach(item => {
        html += `<tr>
            <td><img src="${item.image}" /></td>
            <td>${item.name}</td>
            <td>${item.quantity}</td>
            <td>${formatRupiah(item.unit_price)}</td>
            <td>${formatRupiah(item.unit_price * item.quantity)}</td>
        </tr>`;
    });

    html += `</tbody></table>
    <div class="summary">
        <div>Subtotal: <span>${formatRupiah(order.subtotal)}</span></div>
        <div>Shipping: <span>${formatRupiah(order.shipping)}</span></div>
        <div>Tax: <span>${formatRupiah(order.tax)}</span></div>
        <div>Total: <span>${formatRupiah(order.total)}</span></div>
    </div>`;

    modalContent.innerHTML = html;
    modal.style.display = 'flex';
}

function closeModal(){
    modal.style.display = 'none';
}
function formatRupiah(angka) {
    let nilai = parseInt(angka); // buang desimal (".58" jadi hilang)
    return 'Rp ' + nilai.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}


const checkoutModal = document.getElementById('checkoutModal');
const paymentTotalBox = checkoutModal.querySelector('.total-box');

function openCheckoutModal(orderId) {
    const order = orders.find(o => o.order_id == orderId);
    if(!order) return;

    // Set total di modal
    paymentTotalBox.textContent = formatRupiah(order.total);

    // Tampilkan modal
    checkoutModal.style.display = 'flex';
    checkoutModal.dataset.orderId = orderId;
    document.body.style.overflow = 'hidden';
}

// Reuse fungsi close
function closeCheckoutModal() {
    checkoutModal.style.display = 'none';
    document.body.style.overflow = 'auto';
}
document.getElementById('submitPayment').addEventListener('click', function() {
    const orderId = checkoutModal.dataset.orderId;
    const fileInput = document.getElementById('uploadInput');
    const file = fileInput.files[0];
    

    if (!file) {
        Swal.fire("Oops!", "Bukti transfer wajib di-upload.", "warning");
        return; // HENTIKAN proses submit
    }

    // Ambil total pembayaran dari modal
    let totalAmountText = paymentTotalBox.textContent;
    let totalAmountCleaned = totalAmountText.split(',')[0];
    let totalAmount = totalAmountCleaned.replace(/[^\d]/g,'');
    totalAmount = parseInt(totalAmount); // convert ke number

    const formData = new FormData();
    formData.append('order_id', orderId);
    formData.append('amount', totalAmount); // angka yang benar
    if(file) formData.append('payment_proof', file);

    fetch('<?= base_url('payments/submit') ?>', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            '<?= csrf_header() ?>': '<?= csrf_hash() ?>'
        }
    })
    .then(res => res.json())
    .then(data => {
        if(data.status === 'success'){
            Swal.fire('Success', data.message, 'success').then(() => {
                location.reload();
            });
        } else {
            Swal.fire('Error', data.message, 'error');
        }
    })
    .catch(err => {
        Swal.fire('Error', 'Something went wrong', 'error');
    });
});
    
</script>

<script>

/* BANK DATA */
const bankData = {
    "BRI": { number: "1234 5678 9900", name: "PT Bangun Bangsa" },
    "BNI": { number: "8811 2200 5577", name: "PT Bangun Bangsa" },
    "Mandiri": { number: "9876 5432 1122", name: "PT Bangun Bangsa" },
    "BCA": { number: "1122 3344 5566", name: "PT Bangun Bangsa" }
};

/* SELECT BANK */
function selectBank(bank, event) {
    document.querySelectorAll(".bank-item").forEach(el => 
        el.classList.remove("bank-selected")
    );
    event.currentTarget.classList.add("bank-selected");
    
    document.getElementById("detailBank").textContent = bank;
    document.getElementById("detailNumber").textContent = bankData[bank].number;
    document.getElementById("detailName").textContent = bankData[bank].name;
    document.getElementById("bankDetails").style.display = "block";
}

/* COPY ACCOUNT */
function copyAccount() {
    const number = document.getElementById("detailNumber").textContent;
    navigator.clipboard.writeText(number).then(() => {
        showNotification("✓ Nomor rekening berhasil disalin!");
    });
}

/* COPY TOTAL */
function copyTotal() {
    const totalAmount = paymentTotalBox.textContent.replace(/[^\d]/g,'');
    navigator.clipboard.writeText(totalAmount).then(() => {
        showNotification("✓ Total pembayaran berhasil disalin!");
    });
}


/* SHOW NOTIFICATION */
function showNotification(message) {
    const notif = document.createElement("div");
    notif.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #f7d14a, #ffd700);
        color: #1e2732;
        padding: 14px 24px;
        border-radius: 10px;
        font-weight: 600;
        z-index: 100000;
        animation: slideInRight 0.3s ease;
        box-shadow: 0 8px 20px rgba(247, 209, 74, 0.4);
    `;
    notif.textContent = message;
    document.body.appendChild(notif);
    
    setTimeout(() => {
        notif.style.animation = "slideOutRight 0.3s ease";
        setTimeout(() => notif.remove(), 300);
    }, 2000);
}

/* ADD CSS ANIMATIONS */
const style = document.createElement("style");
style.textContent = `
    @keyframes slideInRight {
        from { transform: translateX(400px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOutRight {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(400px); opacity: 0; }
    }
`;
document.head.appendChild(style);

/* CLOSE MODAL WHEN CLICKING OVERLAY */
modal.addEventListener("click", function(e) {
    if (e.target === modal) {
        closeModal();
    }
});
</script>
<script>
    const uploadField = document.getElementById("uploadField");
const uploadInput = document.getElementById("uploadInput");
const previewWrapper = document.getElementById("previewWrapper");
const previewImage = document.getElementById("previewImage");
const removeUpload = document.getElementById("removeUpload");

/* Click to open file */
uploadField.addEventListener("click", () => uploadInput.click());

/* Drag & Drop Effect */
uploadField.addEventListener("dragover", (e) => {
    e.preventDefault();
    uploadField.classList.add("dragover");
});
uploadField.addEventListener("dragleave", () => {
    uploadField.classList.remove("dragover");
});
uploadField.addEventListener("drop", (e) => {
    e.preventDefault();
    uploadField.classList.remove("dragover");
    const file = e.dataTransfer.files[0];
    handleFile(file);
});

/* When selecting file normally */
uploadInput.addEventListener("change", function () {
    const file = this.files[0];
    handleFile(file);
});

/* Function Show Preview */
function handleFile(file) {
    if (!file) return;
    
    const reader = new FileReader();
    reader.onload = function (e) {
        previewImage.src = e.target.result;
        previewWrapper.style.display = "block";
        removeUpload.style.display = "block";
        uploadField.style.display = "none";
    };
    reader.readAsDataURL(file);
}

/* Delete uploaded file */
removeUpload.addEventListener("click", function () {
    uploadInput.value = "";
    previewWrapper.style.display = "none";
    removeUpload.style.display = "none";
    uploadField.style.display = "block";
});

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelectorAll('button[title="Cancel"]').forEach(btn => {
    btn.addEventListener('click', function() {
        const orderCard = this.closest('.order-card');
        const orderId = orderCard.querySelector('span').textContent.replace('Order #','');

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to cancel this order?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#c0392b',
            cancelButtonColor: '#34495e',
            confirmButtonText: 'Yes, cancel it!',
            cancelButtonText: 'No, keep it'
        }).then((result) => {
            if (result.isConfirmed) {
                // Kirim request ke backend
                fetch('orders/cancel/' + orderId, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-Type': 'application/json',
                        '<?= csrf_header() ?>': '<?= csrf_hash() ?>' // jika pakai CSRF
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Update status text + class
                        const statusEl = orderCard.querySelector('.status');
                        statusEl.textContent = 'Cancelled';
                        statusEl.className = 'status cancelled';

                        // Ganti isi container action menjadi hanya showing "Cancelled" + Detail button
                        const actions = orderCard.querySelector('.order-actions');
                        actions.innerHTML = `
                            <div class="status cancelled" style="margin-right: 31px;">Cancelled</div>
                            <button style="width:28px; height:28px; margin-right: 35px; background:#34495e; border:none; border-radius:4px; color:#fff; cursor:pointer;" title="Detail" onclick="openModal(${orderId})">
                                <i class="fa-solid fa-circle-info"></i>
                            </button>
                        `;

                        Swal.fire('Cancelled!', 'Your order has been cancelled.', 'success');
                    } else {
                        Swal.fire('Error!', data.message, 'error');
                    }
                })
                .catch(err => {
                    Swal.fire(
                        'Error!',
                        'Something went wrong',
                        'error'
                    );
                });
            }
        });
    });
});
</script>


<?= $this->include('Layout/footer'); ?>
