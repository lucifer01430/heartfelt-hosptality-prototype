<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Coming Soon — Heartfelt Hospitality</title>

<!-- Favicon -->
<link rel="icon" type="image/png" href="{% static 'core/img/favicon/favicon-96x96.png' %}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{% static 'core/img/favicon/favicon.svg' %}" />
<link rel="shortcut icon" href="{% static 'core/img/favicon/favicon.ico' %}" />
<link rel="apple-touch-icon" sizes="180x180" href="{% static 'core/img/favicon/apple-touch-icon.png' %}" />
<link rel="manifest" href="{% url 'pwa-manifest' %}" />

<style>
:root {
  --primary-color: #7B3F00;    /* Heartfelt Brown */
  --background: #F8F5F0;       /* Light Beige Background */
  --text-color: #3a2a16;       /* Dark Coffee Text */
  --muted-color: #6d5c48;      /* Muted Text */
}

/* Reset */
* { box-sizing: border-box; margin: 0; padding: 0; }/* Body Flex Center */
body {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Segoe UI", Roboto, sans-serif;
  background: var(--background);
  color: var(--text-color);
  padding: 20px;
}

/* Glass Card - Compact */
.card {
  background: rgba(123, 63, 0, 0.1);
  border: 1px solid rgba(123, 63, 0, 0.2);
  border-radius: 20px;
  backdrop-filter: blur(14px) saturate(140%);
  -webkit-backdrop-filter: blur(14px) saturate(140%);
  padding: 30px 25px;
  max-width: 480px;   /* ✅ smaller width */
  width: 100%;
  text-align: center;
  box-shadow: 0 6px 20px rgba(123, 63, 0, 0.15);
  margin: auto;
}

/* Logo */
.logo {
  display: block;
  margin: 0 auto 15px auto;
  width: 200px; /* ✅ smaller logo */
}

/* Heading */
.huge-coming {
  font-size: clamp(40px, 10vw, 70px); /* ✅ reduced font size */
  font-weight: 800;
  color: var(--primary-color);
  margin-bottom: 10px;
}
.subtitle {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 12px;
  color: var(--text-color);
}
.desc {
  font-size: 15px;
  color: var(--muted-color);
  margin: 0 auto 20px auto;
  max-width: 400px;
  line-height: 1.5;
}

/* Button */
.btn {
  display: inline-flex;
  align-items: center;
  gap: .5rem;
  padding: 10px 20px;  /* ✅ smaller button */
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  background: var(--primary-color);
  color: #fff;
  box-shadow: 0 4px 14px rgba(123, 63, 0, 0.25);
  transition: all .2s ease;
  font-size: 14px;
}
.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 22px rgba(123, 63, 0, 0.35);
}
.btn svg { width: 16px; height: 16px; }

/* Footer Line */
.hr {
  height: 1px;
  width: 100%;
  background: linear-gradient(90deg, transparent, rgba(123, 63, 0, .3), transparent);
  margin: 20px 0;
}
.hint {
  font-size: 12px;
  color: var(--muted-color);
}


@media (max-width: 576px) {
  .card {
    padding: 25px 20px;
    max-width: 95%;
  }
  .logo { width: 160px; }
  .huge-coming { font-size: 40px; }
}

</style>
</head>
<body>

<section class="card">
  <!-- Website Logo -->
  <img src="assets/img/logo/logo-main.png" alt="Heartfelt Hospitality" class="logo">

  <!-- Coming Soon Heading -->
  <h1 class="huge-coming">Coming Soon</h1>
  <p class="subtitle">We’re Launching Something Exciting!</p>
  <p class="desc">
    Our website is currently under development.  
    Stay tuned — <strong>Heartfelt Hospitality</strong> is bringing you a world of 
    innovative hospitality solutions soon.
  </p>

  <!-- Button -->
  <a class="btn" href="index.php">
    <svg viewBox="0 0 24 24" fill="none">
      <path d="M3 10.5l9-7 9 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M5 9.5V20a1 1 0 001 1h12a1 1 0 001-1V9.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
    </svg>
    Go To Home
  </a>

  <!-- Footer -->
  <div class="hr"></div>
  <p class="hint">© 2025 Heartfelt Hospitality • All Rights Reserved</p>
</section>

</body>
</html>
