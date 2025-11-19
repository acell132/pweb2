<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>

  <!-- Font Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #1E2A36, #10151B);
    }

    .register-container {
      width: 380px;
      background: rgba(255, 255, 255, 0.05);
      padding: 35px;
      border-radius: 12px;
      text-align: center;
      backdrop-filter: blur(6px);
      border: 1px solid rgba(255, 255, 255, 0.15);
    }

    h2 {
      color: #fff;
      font-weight: 600;
      margin-bottom: 4px;
    }

    p.subtitle {
      color: #ccc;
      font-size: 14px;
      margin-bottom: 25px;
    }

    .input-group {
      text-align: left;
      margin-bottom: 18px;
    }

    .input-group label {
      font-size: 13px;
      color: #ddd;
    }

    .input-box {
      display: flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 6px;
      padding: 10px 14px;
      margin-top: 6px;
      border: 1px solid transparent;
    }

    .input-box:hover {
      border: 1px solid #F7C600;
    }

    .input-box i {
      color: #bbb;
      font-size: 14px;
    }

    .input-box input {
      width: 100%;
      background: transparent;
      border: none;
      outline: none;
      color: #fff;
      font-size: 14px;
    }

    ::placeholder {
      color: #bbb;
    }

    button.register-btn {
      width: 100%;
      border: none;
      margin-top: 5px;
      padding: 12px;
      background: #F7C600;
      border-radius: 25px;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button.register-btn:hover {
      opacity: 0.9;
    }

    .login-link {
      margin-top: 12px;
      font-size: 14px;
      color: #ddd;
    }

    .login-link a {
      color: #F7C600;
      font-weight: 500;
      text-decoration: none;
    }

    .divider {
      margin: 18px 0;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: #bbb;
    }

    .divider span {
      flex: 1;
      height: 1px;
      background: rgba(255,255,255,0.2);
    }

    .social-btn {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 8px;
      justify-content: center;
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 8px;
      transition: 0.3s;
    }

    .google {
      background: #fff;
      color: #222;
    }

    .facebook {
      background: #1877F2;
      color: #fff;
    }

    footer {
      text-align: center;
      color: #aaa;
      font-size: 12px;
      margin-top: 20px;
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

  <div class="register-container">
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

    <h2>Create Account</h2>
    <p class="subtitle">Register to get started</p>

    <form action="<?= base_url('auth/doRegister'); ?>" method="post">
      
      <div class="input-group">
        <label>Full Name</label>
        <div class="input-box">
          <i class="fa-solid fa-user"></i>
          <input type="text" name="username" placeholder="Enter your username" required>
        </div>
      </div>

      <div class="input-group">
        <label>Email</label>
        <div class="input-box">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
      </div>

      <div class="input-group">
        <label>Password</label>
        <div class="input-box">
          <i class="fa-solid fa-lock"></i>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>
      </div>

      <div class="input-group">
        <label>Confirm Password</label>
        <div class="input-box">
          <i class="fa-solid fa-lock"></i>
          <input type="password" name="confirm" placeholder="Confirm your password" required>
        </div>
      </div>

      <button type="submit" class="register-btn">Register</button>
    </form>

    <div class="login-link">
      Already have an account? <a href="<?= base_url('/login'); ?>">Login here</a>
    </div>

    <div class="divider"><span></span> Or register with <span></span></div>

    <button class="social-btn google"><i class="fa-brands fa-google"></i> Register with Google</button>
    <button class="social-btn facebook"><i class="fa-brands fa-facebook-f"></i> Register with Facebook</button>

    <footer>
      © 2025 Bangun Bangsa. All Rights Reserved.
    </footer>

  </div>
<script>
  setTimeout(() => {
    const alert = document.querySelector('.alert');
    if (alert) alert.style.display = 'none';
  }, 3000);
</script>

</body>
</html>
