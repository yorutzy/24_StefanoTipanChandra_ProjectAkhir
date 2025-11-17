<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = "INSERT INTO web_teknologi (nama, username, umur, email, password) VALUES ('$nama', '$username', '$umur', '$email', '$password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Gagal mendaftar!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="style.css">
    <Style>footer {
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
}</Style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="teknologia.png" alt="Logo">
            TECHNOLOGIA
        </div>
        <div class="nav-links">
            <a href="landingpage.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="login.php" class="login-btn">Log In</a>
        </div>
    </nav>

    <div class="main-content">
        <div class="container">
            <form method="POST">
                <fieldset>
                    <legend style="color: #00ffd5ff;">Registration Form</legend>
                    <div class="form-row">
                        <label for="nama" style="color: #0dd5f0ff;">Name</label>
                        <span class="colon">:</span>
                        <input type="text" name="nama" placeholder="Enter your name" required>
                    </div>
                    <div class="form-row">
                        <label for="username" style="color: #0dd5f0ff;">Username</label>
                        <span class="colon">:</span>
                        <input type="text" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-row">
                        <label for="umur" style="color: #0dd5f0ff;">Age</label>
                        <span class="colon">:</span>
                        <input type="text" name="umur" placeholder="Enter your age" required>
                    </div>
                    <div class="form-row">
                        <label for="email" style="color: #0dd5f0ff;">Email</label>
                        <span class="colon">:</span>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-row">
                        <label for="password" style="color: #0dd5f0ff;">Password</label>
                        <span class="colon">:</span>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div style="text-align:center; padding-top:10px;">
                        <button type="submit" name="register">Daftar</button>
                    </div>
                </fieldset>
            </form>

            <p class="redirect">
                Alrady have an account? <a href="login.php">Login here</a>
            </p>
        </div>
    </div>

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
