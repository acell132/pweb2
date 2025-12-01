
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body { background: #1e2732; color: #fff; }
    a { color: #fff; text-decoration: none; }


    /* Page title */
    .page-header { padding: 50px; }
    .page-header h1 { font-size: 32px; font-weight: 600; }
    .page-header p { margin-top: 5px; opacity: 0.8; }

    /* Layout */
    .container { display: grid; grid-template-columns: 2fr 1fr; gap: 30px; padding: 0 50px 60px; }

    /* Cart items */
    .cart-box { background: #3A4750; padding: 25px; border-radius: 12px; min-height: 392px;}
    .cart-box h3 { margin-bottom: 20px; }

    .cart-item { display: flex; align-items: center; background: #364150; padding: 15px; border-radius: 10px; margin-bottom: 15px; }
    .cart-item img { width: 80px; border-radius: 8px; margin-right: 15px; }
    .item-info { flex: 1; }
    .item-info h4 { font-size: 16px; }
    .item-info p { font-size: 13px; opacity: 0.8; }
    .item-info .price { font-weight: 600; color: #f7d14a; margin-top: 5px; }

    .qty-control { display: flex; align-items: center; gap: 12px; }
    .qty-btn { width: 28px; height: 28px; background: #2b3440; border: none; border-radius: 50%; color: #fff; cursor: pointer; display: flex;justify-content: center;align-items: center;font-size: 18px;text-decoration: none; }

    .delete-btn { background: none; border: none; color: #ff6b6b; font-size: 20px; cursor: pointer; margin-left: 10px; }

    .cart-actions { display: flex; justify-content: space-between; padding-top: 15px; font-size: 14px; }
    .cart-actions a { display: flex; align-items: center; gap: 6px; }
    .cart-actions .next { color:#f7d14a }
    .cart-actions .clear { color: #ff6b6b; }

    /* Summary */
    .summary { background: #3A4750; padding: 25px; border-radius: 12px; height: fit-content; }
    .summary h3 { margin-bottom: 20px; }
    .summary div { display: flex; justify-content: space-between; margin: 8px 0; font-size: 14px; }

    .summary .total { font-size: 20px; font-weight: 700; color: #f7d14a; margin-top: 10px; }

    .checkout-btn { margin-top: 15px; width: 100%; padding: 12px; background: #f7d14a; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; }

    .secure { margin-top: 15px; text-align: center; opacity: 0.7; font-size: 13px; display: flex; flex-direction: column; align-items:center;}
    .shipping-note { margin-top: 20px !important; font-size: 13px; background: #364150; padding: 10px; border-radius: 8px;display: flex !important;justify-content: flex-start !important; gap:6px; align-items: center; text-align: center;}
    .secure.icons {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 12px;
    }

    .secure.icons i {
        font-size: 26px;
    }
    
/* ========================= */
/* CHECKOUT ADDRESS MODAL */
/* ========================= */
#checkoutAddressModal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 99999;
    padding: 20px;
    backdrop-filter: blur(4px);
}

#checkoutAddressModal .modal-box {
    width: 500px;
    max-width: 95%;
    background: linear-gradient(135deg, #2c3542 0%, #364150 100%);
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5),
                inset 0 1px 1px rgba(255,255,255,0.1);
    border: 1px solid rgba(247, 209, 74, 0.15);
    animation: slideInUp 0.4s cubic-bezier(0.34,1.56,0.64,1);
}

/* TITLE */
#checkoutAddressModal h2 {
    text-align: center;
    background: linear-gradient(135deg, #f7d14a 0%, #ffd700 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 10px;
    font-weight: 700;
    font-size: 28px;
}

/* SUBTITLE */
#checkoutAddressModal .modal-subtitle {
    text-align: center;
    color: #b0b9c1;
    font-size: 14px;
    margin-bottom: 25px;
}

/* TEXTAREA ALAMAT */
#checkoutAddressModal textarea {
    width: 100%;
    padding: 15px;
    border-radius: 12px;
    border: 1px solid #f7d14a;
    background: #2f3b49;
    color: #fff;
    font-size: 14px;
    resize: none;
}

/* BUTTONS */
#checkoutAddressModal .checkout-btn {
    width: 100%;
    padding: 12px;
    background: #f7d14a;
    border: none;
    border-radius: 10px;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    margin-top: 15px;
}

#checkoutAddressModal .close-btn {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #ff6b6b 0%, #ff5252 100%);
    border: none;
    border-radius: 10px;
    color: #fff;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    margin-top: 10px;
}

/* ANIMASI MODAL */
@keyframes slideInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    #checkoutAddressModal .modal-box {
        width: 90%;
        padding: 25px;
    }
}
.swal2-container {
    z-index: 999999 !important; /* pastikan lebih tinggi dari modal */
}

</style>
</head>
<body>
<?= $this->include('Layout/header'); ?>

<section class="page-header">
    <h1>Shopping Cart</h1>
    <p>Review your selected construction materials</p>
</section>

<div class="container">
    <!-- Cart Items -->
    <div>
        <div class="cart-box">
            <h3>Cart Items (<?= count($cart) ?>)</h3>

            <?php foreach ($cart as $item): ?>
            <div class="cart-item">
                <img src="<?= base_url($item['image']) ?>">

                <div class="item-info">
                    <h4><?= esc($item['name']) ?></h4>
                    <div class="price">Rp <?= number_format($item['price'], 0, ',', '.') ?></div>
                </div>

                <div class="qty-control">
                    <a href="<?= base_url('cart/decrease/' . $item['product_id']) ?>" class="qty-btn">−</a>
                    <span><?= $item['quantity'] ?></span>
                    <a href="<?= base_url('cart/increase/' . $item['product_id']) ?>" class="qty-btn">+</a>
                </div>

                <a href="<?= base_url('cart/remove/' . $item['product_id']) ?>" class="delete-btn">🗑</a>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- BUTTONS NOW BELOW THE CART BOX -->
        <div class="cart-actions">
            <a href="<?= base_url('/shop') ?>" class="next">⬅ Continue Shopping</a>
            <a class="clear" href="<?= base_url('cart/clear/') ?>">🗑 Clear Cart</a>
        </div>
    </div>

    <!-- Summary -->
    <div class="summary">
        <h3>Order Summary</h3>
        <div><span>Subtotal</span><span>Rp <?= number_format($subtotal,0,',','.') ?></span></div>
        <div><span>Shipping</span><span>Rp <?= number_format($shipping,0,',','.') ?></span></div>
        <div><span>Tax (8.5%)</span><span>Rp <?= number_format($tax,0,',','.') ?></span></div>
        
        <div style="color: #f7d14a; font-size: 18px; font-weight: 600;"><span>Total</span><span>Rp <?= number_format($total,0,',','.') ?></span></div>

        <button class="checkout-btn" onclick="openAddressModal()">Proceed to Checkout →</button>

        <div class="secure">Secure checkout powered by</div>
        <div class="secure icons">
            <i class="fa-brands fa-cc-visa"></i>
            <i class="fa-brands fa-cc-mastercard"></i>
            <i class="fa-brands fa-paypal"></i>
        </div>

        <div class="shipping-note"><i class="fa-solid fa-truck" style="color:#f7d14a"></i> Free shipping on orders over Rp 500.000</div>
    </div>
</div>
<?= $this->include('Layout/footer'); ?>
<!-- Checkout Address Modal -->
<div class="modal-overlay" id="checkoutAddressModal">
    <div class="modal-box">
        <h2>📬 Enter Shipping Address</h2>
        <p class="modal-subtitle">Fill in your address before checkout</p>

        <div class="upload-section">
            <textarea id="shippingAddress" placeholder="Your full address..." style="width:100%; padding:15px; border-radius:10px; border:1px solid #f7d14a; background:#2f3b49; color:#fff; font-size:14px; resize:none;" rows="4"></textarea>
        </div>
        <input type="hidden" id="total" value="<?= $total ?>">


        <button class="checkout-btn" onclick="confirmCheckout()"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Checkout</button>
        <button class="close-btn" onclick="closeAddressModal()"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
    </div>
</div>
<script>
    const addressModal = document.getElementById("checkoutAddressModal");

function openAddressModal() {
    addressModal.style.display = "flex";
    document.body.style.overflow = "hidden";
}

function closeAddressModal() {
    addressModal.style.display = "none";
    document.body.style.overflow = "auto";
}

// Ganti tombol Proceed to Checkout agar buka modal alamat
document.querySelector('.checkout-btn').addEventListener('click', openAddressModal);
function confirmCheckout() {
    const address = document.getElementById("shippingAddress").value.trim();

    if (!address) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Please enter your shipping address!',
        });
        return;
    }

    // SweetAlert2 confirmation
    Swal.fire({
        title: '📦 Confirm Your Order',
        html: `<p>Please make sure your order details are correct before proceeding.</p>`,
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes, place my order!',
        cancelButtonText: 'Cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika user klik Yes, kirim data ke backend
            placeOrder(address);
        }
    });
}


function placeOrder(address) {
    const total = parseFloat(document.getElementById('total').value);

    fetch("<?= base_url('cart/checkout') ?>", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "<?= csrf_token() ?>": "<?= csrf_hash() ?>"
        },
        body: JSON.stringify({ 
            address: address,
            total: total
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Order Placed!',
                text: '🎉 Your order has been placed successfully!',
            }).then(() => window.location.href = "<?= base_url('/shop') ?>");
        } else {
            Swal.fire('Error', data.message, 'error');
        }
    })
    .catch(err => Swal.fire('Error', 'Something went wrong!', 'error'));
}


</script>
</body>
</html>