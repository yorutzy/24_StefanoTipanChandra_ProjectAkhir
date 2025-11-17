<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Technologia</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .team-container {
  display: flex;
  justify-content: center;   /* Center horizontally */
  align-items: center;       /* Center vertically */
  gap: 30px;
  flex-wrap: wrap;
  padding: 40px 10%;
  text-align: center;        /* Center text + image */
}

.team-box {
  text-align: center;        /* memastikan icon di tengah */
}

.team-box img {
  display: block;
  margin: 0 auto;            /* center image */
}

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
      min-height: 100vh;
      background: transparent;
      animation: fadeIn 1.5s ease;
      text-align: center;
    }

    /* === NAVBAR === */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 10;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 10%;
      background: rgba(0, 162, 255, 0.35);
      backdrop-filter: blur(6px);
      box-shadow: 0 2px 10px rgba(0,0,0,0.3);
      transition: background 0.3s ease, backdrop-filter 0.3s ease;
    }
    .navbar .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #00c8ff;
      font-weight: 700;
    }
    .navbar .nav-links a {
      color: #d7faff;
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
      color: #b5fdff;
      animation: fadeUp 1.5s ease;
      width: 100%;
      box-sizing: border-box;
      flex-wrap: wrap;
      gap: 30px;
    }
    .hero-text {
      max-width: 600px;
      background: rgba(0,0,0,0.35);
      padding: 25px;
      border-radius: 15px;
      backdrop-filter: blur(6px);
      animation: fadeUp 1.5s ease;
    }
    .hero-text h1 { font-size: 42px; margin-bottom: 15px; color: #00b4db; font-weight: 700; }
    .hero-text p { font-size: 20px; line-height: 1.6; color: #00fac4; margin-bottom: 25px; }

    .hero img { width: 400px; border-radius: 20px; box-shadow: 0 0 25px rgba(0,0,0,0.4); animation: float 5s ease-in-out infinite; }

    /* === TEAM SECTION (PRODUCTS) === */
    .team-box img:hover {
      transform: scale(1.05) rotate(2deg);
      box-shadow: 0 10px 30px rgba(0, 180, 219, 0.5);
      filter: brightness(1.1) saturate(1.2);
    }
    .team-box h3 {
      color: #00b4db;
      position: relative;
      transition: color 0.3s ease;
      text-align:center;
    }
    
    .team-box .box-desc:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 180, 219, 0.3);
    }
    .team-box p { color: #b8f7ff; line-height: 1.7;font-size:20px; }

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





    @media (max-width: 850px) {
      .hero { flex-direction: column; text-align: center; padding: 80px 5%; }
      .hero-text { max-width: 100%; margin-bottom: 30px; }
      .hero img { width: 80%; }
      .navbar { padding: 15px 5%; }
      footer { padding: 20px 5%; }
    }
  </style>
</head>
<body>

<video autoplay muted loop id="bg-video">
  <source src="vr.mp4" type="video/mp4">
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
    <h1>Our Products</h1>
    <p>
      Technologia provide various electronic devices which already supported by the latest model of Artificial Intelligence.
      Starting from Ipad with AI tools, Virtual Reality that can generate realistic surroundings 10 times more advanced than basic VR, and also washing machines that can operate and stop automatically.
    </p>
  </div>
  <img src="IOT.png" alt="Innovation Image">
</section>

<div class="team-container">

  <!-- Product 1 -->
  <div class="team-box" style="display:flex; align-items:center; gap:20px; margin-bottom:40px; flex-wrap:wrap;">
    <div style="width:180px; height:180px; border-radius:15px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.3);">
      <img src="vr.jpg" alt="Photo 1" style="width:100%; height:100%; object-fit:cover;">
    </div>
    <div class="box-desc" style="flex:1; min-width:200px; text-align:left; color:#b8f7ff; background: rgba(0,0,0,0.35); padding:25px; border-radius:15px; backdrop-filter:blur(6px);">
      <h3 style="color:#00b4db; margin-bottom:10px;">Virtual Reality with Latest AI Generation</h3>
      <p>
        Our next–generation VR headset is equipped with deep-learning image reconstruction and fully adaptive motion tracking.
        This allows users to experience environments that respond dynamically to their movements, emotions, and interaction style.
        With ultra‑high‑resolution display layers and AI‑powered rendering, the device produces surreal clarity and realism—perfect for gaming, simulation, and creative industries.
      </p>
    </div>
  </div>

  <!-- Product 2 -->
  <div class="team-box" style="display:flex; align-items:center; gap:20px; margin-bottom:40px; flex-wrap:wrap;">
    <div style="width:180px; height:180px; border-radius:15px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.3);">
      <img src="ipad.jpg" alt="Photo 2" style="width:100%; height:100%; object-fit:cover;">
    </div>
    <div class="box-desc" style="flex:1; min-width:200px; text-align:left; color:#b8f7ff; background: rgba(0,0,0,0.35); padding:25px; border-radius:15px; backdrop-filter:blur(6px);">
      <h3 style="color:#00b4db; margin-bottom:10px;">iPad with AI Tools</h3>
      <p>
        Powered with enhanced onboard AI assistants, this iPad is capable of real-time content generation, advanced handwriting recognition,
        automated workflow suggestions, and smart task prediction. Whether used for productivity, design, or studying, the device analyzes your habits
        and optimizes tools to boost your efficiency while maintaining a smooth and intuitive user experience.
      </p>
    </div>
  </div>

  <!-- Product 3 -->
  <div class="team-box" style="display:flex; align-items:center; gap:20px; margin-bottom:40px; flex-wrap:wrap;">
    <div style="width:180px; height:180px; border-radius:15px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.3);">
      <img src="laptop.jpg" alt="Photo 3" style="width:100%; height:100%; object-fit:cover;">
    </div>
    <div class="box-desc" style="flex:1; min-width:200px; text-align:left; color:#b8f7ff; background: rgba(0,0,0,0.35); padding:25px; border-radius:15px; backdrop-filter:blur(6px);">
      <h3 style="color:#00b4db; margin-bottom:10px;">Laptop with AI Companion</h3>
      <p>
        This laptop comes with an integrated AI companion capable of assisting in coding, project planning, media creation, and performance optimization.
        It automatically adjusts processing power based on workload, protects your system using adaptive security algorithms, and learns from your workflow
        to deliver personalized shortcuts and automation. Designed for students, developers, and professionals who need speed and intelligence in one device.
      </p>
    </div>
  </div>

</div>

<script>
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      document.body.classList.add('scrolled');
    } else {
      document.body.classList.remove('scrolled');
    }
  });
</script>

<!-- EXTRA SECTION: COMPANY MISSION -->
<section style="padding:60px 10%; text-align:center; color:#b5fdff; animation: fadeUp 1.5s;">
  <div style="background: rgba(0,0,0,0.35); padding:25px; border-radius:15px; backdrop-filter:blur(6px); max-width:900px; margin:0 auto;">
    <h2 style="color:#00d8ff; font-size:32px; margin-bottom:15px;">Our Mission</h2>
    <p style="max-width:800px; margin:0 auto; font-size:17px; line-height:1.7; color:#cfffff;">
      At Technologia, our mission is to push the boundaries of what technology can achieve.
      We strive to create intelligent, accessible, and futuristic solutions that enhance the daily life of every user.
      With a strong commitment to innovation and quality, we aim to shape a better, smarter future.
    </p>
  </div>
</section>

<!-- EXTRA SECTION: WHY CHOOSE US -->
<section style="padding:60px 10%; text-align:center; color:#b5fdff; animation: fadeUp 1.5s;">
  <h2 style="color:#00d8ff; font-size:32px; margin-bottom:15px;">Why Choose Technologia?</h2>

  <div style="display:flex; justify-content:center; gap:30px; flex-wrap:wrap; margin-top:30px;">

    <div style="background:rgba(0,0,0,0.35); padding:25px; border-radius:15px; width:280px; backdrop-filter:blur(6px);">
      <h3 style="color:#00b4db; margin-bottom:10px;">AI-Powered Devices</h3>
      <p style="color:#cfffff; font-size:15px;">
        All our products are enhanced with powerful AI that adapts to your needs and delivers smarter performance.
      </p>
    </div>

    <div style="background:rgba(0,0,0,0.35); padding:25px; border-radius:15px; width:280px; backdrop-filter:blur(6px);">
      <h3 style="color:#00b4db; margin-bottom:10px;">High Performance</h3>
      <p style="color:#cfffff; font-size:15px;">
        Designed with next-generation hardware for seamless multitasking, gaming, simulation, and creativity.
      </p>
    </div>

    <div style="background:rgba(0,0,0,0.35); padding:25px; border-radius:15px; width:280px; backdrop-filter:blur(6px);">
      <h3 style="color:#00b4db; margin-bottom:10px;">Elegant Design</h3>
      <p style="color:#cfffff; font-size:15px;">
        Stylish, minimalistic, and futuristic — our products are built to look as smart as they perform.
      </p>
    </div>

  </div>
</section>

<!-- EXTRA SECTION: CUSTOMER REVIEWS -->
<section style="padding:60px 10%; text-align:center; animation: fadeUp 1.5s;font-s20pxize:;">
  <h2 style="color:#00d8ff; font-size:32px; margin-bottom:15px;font-s20pxize:;">What Our Customers Say</h2>

  <div style="display:flex; justify-content:center; gap:30px; flex-wrap:wrap; margin-top:30px;">

    <div style="background:rgba(0,0,0,0.35); padding:25px; border-radius:15px; width:300px; backdrop-filter:blur(6px);">
      <p style="color:#cfffff; font-size:15px;font-s20pxize:;">"The VR headset is insane! The clarity is unreal, and the motion tracking feels like real life."</p>
      <h4 style="color:#00b4db; margin-top:15px;font-s20pxize:;">— Aiden</h4>
    </div>

    <div style="background:rgba(0,0,0,0.35); padding:25px; border-radius:15px; width:300px; backdrop-filter:blur(6px);">
      <p style="color:#cfffff; font-size:15px;font-s20pxize:;">"The AI iPad boosted my productivity. It feels like having a personal assistant built in."</p>
      <h4 style="color:#00b4db; margin-top:15px;font-s20pxize:;">— Clara</h4>
    </div>

    <div style="background:rgba(0,0,0,0.35); padding:25px; border-radius:15px; width:300px; backdrop-filter:blur(6px);">
      <p style="color:#cfffff; font-size:15px;font-s20pxize:;">"Super fast, smooth, and smart. The AI companion on the laptop learns my workflow!"</p>
      <h4 style="color:#00b4db; margin-top:15px;font-s20pxize:;">— Revan</h4>
    </div>

  </div>
</section>

<footer class="footer">
  <div class="footer-container">

    <!-- Column 1: Brand -->
    <div class="footer-col">
      <h3>TECHNOLOGIA</h3>
      <p style="color: #00ffd5ff; font-size:18px;">Empowering Your Digital Experience</p>
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
