<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Akses Ditolak</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        background: #2D2F36;
        color: #EEE;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .denied-card {
        background: #3B4A55;
        width: 90%;
        max-width: 420px;
        padding: 35px;
        border-radius: 18px;
        text-align: center;
        box-shadow: 0 0 18px rgba(0,0,0,0.4);
        animation: fadeIn 0.7s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .character {
        width: 170px;
        margin: 0 auto 20px;
        animation: float 2.3s ease-in-out infinite;
    }

    @keyframes float {
        0%   { transform: translateY(0px); }
        50%  { transform: translateY(-8px); }
        100% { transform: translateY(0px); }
    }

    h2 {
        font-size: 1.4rem;
        margin-bottom: 10px;
        font-weight: 600;
    }

    p {
        font-size: 0.95rem;
        color: #DDD;
        margin-bottom: 25px;
    }

    .login-btn {
        display: inline-block;
        background: #F7C600;
        padding: 12px 28px;
        border-radius: 8px;
        color: #2D2F36;
        font-weight: 700;
        font-size: 1rem;
        transition: 0.25s;
        text-decoration: none;
    }

    .login-btn:hover {
        background: #d8aa05;
        transform: translateY(-3px);
    }
</style>
</head>

<body>

<div class="denied-card">

    <svg class="character" id="sadGuy" viewBox="0 0 200 200">
        <circle cx="100" cy="100" r="70" fill="#F7C600"/>
        <circle cx="75" cy="85" r="10" fill="#2D2F36"/>
        <circle cx="125" cy="85" r="10" fill="#2D2F36"/>
        <path id="mouth" d="M70,130 Q100,110 130,130" stroke="#2D2F36" stroke-width="6" fill="none"/>
    </svg>

    <h2>Access Denied</h2>
    <p>You must log in first to access this page.</p>

    <a href="/login" class="login-btn">Login Now</a>

</div>

<script>
    let sad = true;
    setInterval(() => {
        const mouth = document.getElementById("mouth");
        mouth.setAttribute("d",
            sad
            ? "M70,130 Q100,140 130,130"  // sad curve
            : "M70,130 Q100,110 130,130"  // smile curve
        );
        sad = !sad;
    }, 2000);

    setInterval(() => {
        const hand = document.getElementById("hand");
        hand.style.transform = "rotate(-15deg)";
        hand.style.transformOrigin = "135px 115px";

        setTimeout(() => {
            hand.style.transform = "rotate(0deg)";
        }, 400);
    }, 2500);
</script>

</body>
</html>
