<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technologia | Landing Page</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* === ANIMATION KEYFRAMES === */
    @keyframes fadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeDown { from { opacity: 0; transform: translateY(-40px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes float { 0%,100%{transform:translateY(0);}50%{transform:translateY(-12px);} }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

    /* === VIDEO BACKGROUND === */
    #bg-video {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: center;
      animation: fadeIn 1.5s ease;
      background: transparent;
    }

    /* === NAVBAR === */
    .navbar {
  position: fixed;       /* tetap di atas saat scroll */
  top: 0;
  left: 0;
  width: 100%;
  z-index: 10;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 10%;
  background: rgba(0, 162, 255, 0.35); /* semi-transparent */
  backdrop-filter: blur(6px);   /* blur background di belakang navbar */
  box-shadow: 0 2px 10px rgba(0,0,0,0.3);
  transition: background 0.3s ease, backdrop-filter 0.3s ease;
}

    .navbar .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #0055a5ff;
      font-weight: 700;
    }

    .navbar .nav-links a {
      color: #fff;
      margin-left: 25px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    .navbar .nav-links a:hover { color: #00b4db; }

    /* === HERO === */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 120px 10%;
      color: #fff;
      animation: fadeUp 1.5s ease;
      background: transparent;
      width: 100%;
      box-sizing: border-box;
    }

    .hero-text {
      max-width: 50%;
      animation: fadeUp 1.5s ease;
      background: rgba(0,0,0,0.35);
      padding: 25px;
      border-radius: 15px;
      backdrop-filter: blur(6px);
    }

    .hero-text h1 { font-size: 42px; margin-bottom: 15px; color: #00b4db; font-weight: 700; }
    .hero-text p { font-size: 20px; line-height: 1.6; color: #00ffddff; margin-bottom: 25px; }

    .learn-more-btn {
      display: inline-block;
      background: linear-gradient(135deg, #00b4db, #0083b0);
      color: white;
      padding: 12px 28px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: fadeUp 2s ease;
    }

    .learn-more-btn:hover { transform: translateY(-5px) scale(1.03); box-shadow: 0 5px 15px rgba(0,180,219,0.4); }

    .hero img { width: 420px; border-radius: 20px; box-shadow: 0 0 25px rgba(0,0,0,0.4); animation: float 5s ease-in-out infinite; }

    /* === CONTENT SECTION === */
    .content-section {
      text-align: center;
      padding: 80px 10%;
      width: 100%;
      box-sizing: border-box;
      background: rgba(0,0,0,0.25); /* kotak semi-transparent full width */
      border-radius: 15px;
      backdrop-filter: blur(6px);
      animation: fadeUp 1.5s ease;
      margin-bottom: 50px;
    }

    .content-section h2 { font-size: 36px; color: #00ff88ff; font-weight: 700; margin-bottom: 15px; text-shadow: 1px 1px 3px rgba(0,0,0,0.4); }
    .content-section p { font-size: 20px; color: #00eeffff; max-width: 700px; margin: 0 auto 50px; line-height: 1.7; }

    .photo-boxes { display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; animation: fadeUp 1.5s ease; }
    .photo-box {
      width: 300px;
      height: 180px;
      background: rgba(255,255,255,0.1); /* semi-transparent putih */
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      overflow: hidden;
      transition: 0.4s ease;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeUp 1.5s ease forwards;
    }
    .photo-box:nth-child(1) { animation-delay: 0.2s; }
    .photo-box:nth-child(2) { animation-delay: 0.4s; }
    .photo-box:nth-child(3) { animation-delay: 0.6s; }
    .photo-box:hover { transform: translateY(-8px) scale(1.05); box-shadow: 0 8px 25px rgba(0,180,219,0.4); }
    .photo-box img { width: 100%; height: 100%; object-fit: cover; border-radius: 15px; }

    /* === FOOTER === */
    footer {
  background: #0e0e0e;
  color: white;
  padding: 40px 0;
  margin-top: 40px;
  font-family: Arial;
  font-size: 20px; /* default semua jadi 20px */
}

.footer-container {
  max-width: 1050px;
  margin: auto;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 30px;
}

.footer-col {
  flex: 1;
  min-width: 250px;
  color: #00ffd5ff;
}

.footer-col h3, 
.footer-col h4 {
  margin-bottom: 10px;
  font-size: 25px; /* biar judul sedikit lebih besar */
  color: #00ffd5ff;
}

.footer-small {
  margin-top: 5px;
  font-size: 23px;
  opacity: 0.7;
  color: #00ffd5ff;
}

.footer-contact-item {
  display: flex;
  align-items: center;
  gap: 8px;
  margin: 6px 0;
  font-size: 23px;
  color: #00ffd5ff;
}

.footer-contact-item svg {
  width: 22px;
  height: 22px;
}

.footer-socials {
  display: flex;
  gap: 12px;
  margin-top: 10px;
}

.social-circle {
  width: 45px;
  height: 45px;
  background: #222;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: .3s;
}

.social-circle:hover {
  background: #444;
  transform: scale(1.15);
}

.social-circle svg {
  width: 26px;
  height: 26px;
}

    /* === FEATURES SECTION === */
    .features-section {
      text-align: center;
      padding: 80px 10%;
      width: 100%;
      box-sizing: border-box;
      background: rgba(0,0,0,0.15);
      border-radius: 15px;
      backdrop-filter: blur(6px);
      animation: fadeUp 1.5s ease;
      margin-bottom: 50px;
    }

    .features-section h2 { font-size: 36px; color: #00ff88ff; font-weight: 700; margin-bottom: 15px; text-shadow: 1px 1px 3px rgba(0,0,0,0.4); }
    .features-section p { font-size: 20px; color: #00eeffff; max-width: 700px; margin: 0 auto 50px; line-height: 1.7; }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      animation: fadeUp 1.5s ease;
    }

    .feature-item {
      background: rgba(255,255,255,0.1);
      padding: 30px 20px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      transition: 0.4s ease;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeUp 1.5s ease forwards;
    }

    .feature-item:nth-child(1) { animation-delay: 0.2s; }
    .feature-item:nth-child(2) { animation-delay: 0.4s; }
    .feature-item:nth-child(3) { animation-delay: 0.6s; }
    .feature-item:nth-child(4) { animation-delay: 0.8s; }

    .feature-item:hover {
      transform: translateY(-8px) scale(1.05);
      box-shadow: 0 8px 25px rgba(0,180,219,0.4);
    }

    .feature-icon {
      font-size: 48px;
      margin-bottom: 15px;
    }

    .feature-item h3 {
      font-size: 20px;
      color: #00b4db;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .feature-item p {
      font-size: 20px;
      color: #00eeffff;
      line-height: 1.6;
    }

    @media (max-width: 850px) {
      .hero { flex-direction: column; text-align: center; padding: 80px 5%; }
      .hero-text { max-width: 100%; margin-bottom: 30px; }
      .hero img { width: 80%; }
      .photo-box { width: 90%; }
      .navbar { padding: 15px 5%; }
      footer { padding: 20px 5%; }
      .content-section { padding: 60px 5%; }
      .features-section { padding: 60px 5%; }
      .features-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<!-- VIDEO BACKGROUND -->
<video autoplay muted loop id="bg-video">
  <source src="teknologi.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<nav class="navbar">
  <div class="logo">
    <img src="teknologia.png" alt="Logo">
    TECHNOLOGIA
  </div>
  <div class="nav-links">
    <a href="landingpage.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="login.php" class="login-btn">Log In</a>
    <a href="register.php" class="login-btn">Register</a>
  </div>
</nav>

<section class="hero">
  <div class="hero-text">
    <h1>Welcome to Technologia</h1>
    <p>
      A modern digital platform designed to connect technology enthusiasts, innovators and people who interested in AI based electronics device.
      Join us to explore the world of technology and discover opportunities to grow and collaborate.
    </p>
    <a href="#content" class="learn-more-btn">Learn More</a>
  </div>
  <img src="AI.jpg" alt="Technology Image">
</section>

<section class="content-section" id="content">
  <h2>Our Content</h2>
  <p>
    We provide various products, articles, and updates about emerging technologies — helping you stay inspired and informed in this ever-evolving digital world.
    Our goal is to create advanced electronic devices to make our everyday life feel easier.
  </p>

  <div class="photo-boxes">
    <div class="photo-box"><img src="LG.jpeg" alt="Tech 1"></div>
    <div class="photo-box"><img src="hpai.jpg" alt="Tech 2"></div>
    <div class="photo-box"><img src="andro.jpg" alt="Tech 3"></div>
  </div>
</section>

<!-- NEW FEATURES SECTION -->
<section class="features-section">
  <h2>Why Choose Technologia?</h2>
  <p>Discover the key features that make our platform stand out in the tech world.</p>
  <div class="features-grid">
    <div class="feature-item">
      <div class="feature-icon">🤖</div>
      <h3>AI-Powered Insights</h3>
      <p>Leverage advanced AI to get personalized recommendations and insights on the latest tech trends.</p>
    </div>
    <div class="feature-item">
      <div class="feature-icon">🌐</div>
      <h3>Global Community</h3>
      <p>Connect with innovators and enthusiasts from around the world to collaborate and share ideas.</p>
    </div>
    <div class="feature-item">
      <div class="feature-icon">📱</div>
      <h3>Smart Devices</h3>
      <p>Explore our range of AI-based electronic devices designed to simplify your daily life.</p>
    </div>
    <div class="feature-item">
      <div class="feature-icon">📚</div>
      <h3>Educational Resources</h3>
      <p>Access articles, tutorials, and updates to stay ahead in the rapidly evolving tech landscape.</p>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer-container">

    <!-- Column 1: Brand -->
    <div class="footer-col">
      <h3>TECHNOLOGIA</h3>
      <p style="color: #00ffd5ff;font-size:18px;">Empowering Your Digital Experience</p>
      <p class="footer-small">© 2025 Stefano Tipan Chandra</p>
    </div>

    <!-- Column 2: Contact Info -->
    <div class="footer-col">
      <h4>Contact</h4>

      <p class="footer-contact-item">
        <!-- Phone Icon -->
        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
          <path d="M6.62 10.79a15.534 15.534 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1-.24 11.72 11.72 0 0 0 3.67.59 1 1 0 0 1 1 1V21a1 1 0 0 1-1 1A17 17 0 0 1 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.72 11.72 0 0 0 .59 3.67 1 1 0 0 1-.24 1l-2.23 2.12z"/>
        </svg>
        +62 821 5124 4008
      </p>

      <p class="footer-contact-item">
        <!-- Email Icon -->
        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
          <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 2-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
        </svg>
        technologia@gmail.com
      </p>

      <p class="footer-contact-item">
        <!-- Location Icon -->
        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
          <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5z"/>
        </svg>
        Indonesia
      </p>
    </div>

    <!-- Column 3: Social Media -->
    <div class="footer-col">
      <h4>Follow Us</h4>
      <div class="footer-socials">

        <!-- WhatsApp -->
        <a href="#" class="social-circle">
          <svg viewBox="0 0 24 24" fill="white">
            <path d="M20.52 3.48A11.86 11.86 0 0 0 12 .5C5.73.5.72 5.51.72 11.78c0 2.08.55 4.11 1.6 5.92L.5 23.5l6.02-1.79c1.72.94 3.66 1.43 5.65 1.43h.01c6.27 0 11.28-5.01 11.28-11.28 0-2.98-1.16-5.78-3.32-7.96zM12 21.36h-.01c-1.74 0-3.44-.47-4.93-1.35l-.35-.21-3.57 1.06 1.07-3.48-.23-.36a9.76 9.76 0 0 1-1.51-5.23c0-5.42 4.41-9.83 9.84-9.83 2.63 0 5.1 1.02 6.96 2.87a9.76 9.76 0 0 1 2.88 6.96c0 5.42-4.41 9.83-9.85 9.83z"/>
          </svg>
        </a>

        <!-- Instagram -->
        <a href="#" class="social-circle">
          <svg viewBox="0 0 24 24" fill="white">
            <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3.5A5.51 5.51 0 0 0 6.5 12 5.51 5.51 0 0 0 12 17.5 5.51 5.51 0 0 0 17.5 12 5.51 5.51 0 0 0 12 7.5z"/>
          </svg>
        </a>

        <!-- TikTok -->
        <a href="#" class="social-circle">
          <svg viewBox="0 0 24 24" fill="white">
            <path d="M12.83 2h3.09c.1.82.41 1.57.93 2.27.52.7 1.17 1.21 1.95 1.54.78.33 1.61.48 2.48.45v3.24a6.1 6.1 0 0 1-3.18-.88 7.36 7.36 0 0 1-1.61-1.27v7.89c0 1.57-.53 2.89-1.58 3.96A5.34 5.34 0 0 1 12 20.9c-1.52 0-2.83-.53-3.92-1.58A5.34 5.34 0 0 1 6.5 15.4c0-1.52.53-2.83 1.58-3.92A5.34 5.34 0 0 1 12 9.9c.29 0 .6.03.93.1v3.37c-.31-.1-.59-.15-.85-.15-1.03 0-1.88.34-2.56 1.02a3.4 3.4 0 0 0-1 2.47c0 .97.34 1.8 1.02 2.49.68.68 1.52 1.02 2.52 1.02s1.83-.34 2.52-1.02c.68-.68 1.02-1.52 1.02-2.49V2z"/>
          </svg>
        </a>

        <!-- Facebook -->
        <a href="#" class="social-circle">
          <svg viewBox="0 0 24 24" fill="white">
            <path d="M22 12a10 10 0 1 0-11.5 9.87v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12"/>
          </svg>
        </a>

      </div>
    </div>

  </div>
</footer>
</body>
</html>
