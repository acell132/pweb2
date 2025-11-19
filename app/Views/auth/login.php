<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    .header-login {
      text-align: center;
      margin-bottom: 15px;
    }

    .header-login img {
      width: 50px;
      margin-bottom: 10px;
    }

    .header-login h2 {
      font-weight: 600;
      margin-bottom: 5px;
    }

    .header-login .subtext {
      font-size: 13px;
      opacity: .8;
      margin-bottom: 15px;
    }


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #2f3640, #3b4a5a);
      color: #fff;
      gap: 10px;
    }


    .container {
      width: 380px;
      background: rgba(255, 255, 255, 0.07);
      padding: 30px 35px;
      border-radius: 12px;
      backdrop-filter: blur(8px);
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      text-align: center;
    }

    .container img {
      width: 50px;
      margin-bottom: 10px;
    }

    h2 {
      font-weight: 600;
      margin-bottom: 5px;
    }

    p.subtext {
      font-size: 13px;
      opacity: .8;
      margin-bottom: 25px;
    }

    .input-group {
      text-align: left;
      margin-bottom: 15px;
      position: relative;
    }

    .input-group input {
      width: 100%;
      padding: 12px 40px 12px 40px;
      border: transparent;
      border-bottom: 1px solid #ffffffff;
      background: none;
      color: #fff;
      outline: none;
    }

    .input-group i {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      opacity: .8;
    }

    .forgot {
      display: flex;
      justify-content: flex-end;
      font-size: 12px;
      margin-top: 5px;
      opacity: .9;
      color: #ffdf3c;
      cursor: pointer;
    }

    button.login-btn {
      width: 100%;
      border: none;
      margin-top: 20px;
      padding: 12px;
      border-radius: 30px;
      background: #ffdf3c;
      color: #000;
      font-weight: 600;
      cursor: pointer;
      transition: .2s;
    }

    button.login-btn:hover {
      filter: brightness(.9);
    }

    .register-text {
      font-size: 12px;
      margin-top: 15px;
    }

    .register-text a {
      color: #ffdf3c;
      font-weight: 500;
      text-decoration: none;
    }

    .divider {
      margin: 18px 0;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 10px;
    }

    .divider span {
      flex: 1;
      height: 1px;
      background: rgba(255,255,255,0.2);
    }

    .auth-btn {
      display: flex;
      gap: 10px;
    }

    .auth-btn button {
      flex: 1;
      padding: 10px;
      border-radius: 8px;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      cursor: pointer;
      font-weight: 500;
    }

    .google { background: #fff; }
    .google i { color: #EF4444; }
    .facebook { background: #1877f2; color: #fff; }

    footer {
      font-size: 12px;
      opacity: .7;
      margin-top: 25px;
    }

    input::placeholder {
      color: #B8BDC7;   /* warna placeholder (contoh abu-abu muda) */
      opacity: 1;       /* biar warnanya tidak transparan */
    }
    /* Alert Style */
    .alert {
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 6px;
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 8px;
      animation: fadeIn 0.3s ease;
    }

    .alert i { font-size: 16px; }

    .alert.success {
      background: rgba(46, 204, 113, 0.15);
      border-left: 4px solid #2ecc71;
      color: #2ecc71;
    }

    .alert.error {
      background: rgba(231, 76, 60, 0.15);
      border-left: 4px solid #e74c3c;
      color: #e74c3c;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-5px); }
      to   { opacity: 1; transform: translateY(0); }
    }

  </style>
</head>
<body>
  <div class="header-login">
    <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo" class="logo" />
    <h2>Welcome Back</h2>
    <p class="subtext">Login to Your Account</p>
  </div>

  <div class="container">
    <!-- ALERT MESSAGE -->
    <?php if (session()->getFlashdata('error')) : ?>
      <div class="alert error">
          <i class="fa-solid fa-circle-exclamation"></i>
          <?= session()->getFlashdata('error'); ?>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')) : ?>
      <div class="alert success">
          <i class="fa-solid fa-circle-check"></i>
          <?= session()->getFlashdata('success'); ?>
      </div>
    <?php endif; ?>
    <form action="/login/auth" method="POST">
      <div class="input-group">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="username" placeholder="Email or Username" required />
      </div>

      <div class="input-group">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required />
      </div>

      <div class="forgot">Forgot Password?</div>

      <button type="submit" class="login-btn">Login</button>
    </form>

    <div class="register-text">
      Don’t have an account? <a href="/register">Register here</a>
    </div>

    <div class="divider"><span></span> OR <span></span></div>

    <div class="auth-btn">
      <button class="google"><i class="fa-brands fa-google"></i> Google</button>
      <button class="facebook"><i class="fa-brands fa-facebook"></i> Facebook</button>
    </div>
    
  </div>
  <footer>© 2025 Bangun Bangsa. All Rights Reserved.</footer>
  <script>
  setTimeout(() => {
    const alert = document.querySelector('.alert');
    if (alert) alert.style.display = 'none';
  }, 3000);
</script>
</body>
</html>