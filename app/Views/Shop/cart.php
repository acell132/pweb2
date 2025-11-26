<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shopping Cart - Bangun Bangsa</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body { background: #1e2732; color: #fff; }
    a { color: #fff; text-decoration: none; }

    /* Header */
    header { display: flex; justify-content: space-between; align-items: center; padding: 18px 45px; background: #2b3440; }
    .logo { display: flex; align-items: center; gap: 10px; font-size: 20px; font-weight: 600; }
    nav a { margin: 0 15px; font-weight: 400; }
    .search-box { display: flex; align-items: center; background: #fff; padding: 6px 12px; border-radius: 25px; }
    .search-box input { border: none; outline: none; padding-left: 5px; }

    /* Page title */
    .page-header { padding: 50px; }
    .page-header h1 { font-size: 32px; font-weight: 600; }
    .page-header p { margin-top: 5px; opacity: 0.8; }

    /* Layout */
    .container { display: grid; grid-template-columns: 2fr 1fr; gap: 30px; padding: 0 50px 60px; }

    /* Cart items */
    .cart-box { background: #2b3440; padding: 25px; border-radius: 12px; }
    .cart-box h3 { margin-bottom: 20px; }

    .cart-item { display: flex; align-items: center; background: #364150; padding: 15px; border-radius: 10px; margin-bottom: 15px; }
    .cart-item img { width: 80px; border-radius: 8px; margin-right: 15px; }
    .item-info { flex: 1; }
    .item-info h4 { font-size: 16px; }
    .item-info p { font-size: 13px; opacity: 0.8; }
    .item-info .price { font-weight: 600; color: #f7d14a; margin-top: 5px; }

    .qty-control { display: flex; align-items: center; gap: 12px; }
    .qty-btn { width: 28px; height: 28px; background: #2b3440; border: none; border-radius: 50%; color: #fff; cursor: pointer; font-size: 18px; }

    .delete-btn { background: none; border: none; color: #ff6b6b; font-size: 20px; cursor: pointer; margin-left: 10px; }

    .cart-actions { display: flex; justify-content: space-between; padding-top: 15px; font-size: 14px; }
    .cart-actions a { display: flex; align-items: center; gap: 6px; }
    .cart-actions .clear { color: #ff6b6b; }

    /* Summary */
    .summary { background: #2b3440; padding: 25px; border-radius: 12px; height: fit-content; }
    .summary h3 { margin-bottom: 20px; }
    .summary div { display: flex; justify-content: space-between; margin: 8px 0; font-size: 14px; }

    .summary .total { font-size: 20px; font-weight: 700; color: #f7d14a; margin-top: 10px; }

    .checkout-btn { margin-top: 15px; width: 100%; padding: 12px; background: #f7d14a; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; }

    .secure { margin-top: 15px; text-align: center; opacity: 0.7; font-size: 13px; }
    .shipping-note { margin-top: 15px; font-size: 13px; background: #364150; padding: 10px; border-radius: 8px; text-align: center; }

    /* Footer */
    footer { margin-top: 80px; background: #2b3440; padding: 50px; display: grid; grid-template-columns: repeat(4,1fr); gap: 30px; }
    footer h4 { margin-bottom: 12px; font-size: 16px; }
    footer p, footer a { font-size: 13px; opacity: 0.8; margin-bottom: 6px; }
</style>
</head>
<body>

<section class="page-header">
    <h1>Shopping Cart</h1>
    <p>Review your selected construction materials</p>
</section>

<div class="container">
    <!-- Cart Items -->
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


        <div class="cart-actions">
            <a href="<?= base_url('/shop') ?>">⬅ Continue Shopping</a>
            <a class="clear" href="<?= base_url('cart/clear/') ?>">🗑 Clear Cart</a>
        </div>
    </div>

    <!-- Summary -->
    <div class="summary">
        <h3>Order Summary</h3>
        <div><span>Subtotal</span><span>Rp <?= number_format($subtotal,0,',','.') ?></span></div>
        <div><span>Shipping</span><span>Rp <?= number_format($shipping,0,',','.') ?></span></div>
        <div><span>Tax (8.5%)</span><span>Rp <?= number_format($tax,0,',','.') ?></span></div>

        <div class="total">Rp <?= number_format($total,0,',','.') ?></div>


        <button class="checkout-btn">Proceed to Checkout →</button>

        <div class="secure">Secure checkout powered by<br>💳 VISA • 🏦 MasterCard • 🅿 PayPal</div>

        <div class="shipping-note">🚚 Free shipping on orders over $500</div>
    </div>
</div>

</body>
</html>