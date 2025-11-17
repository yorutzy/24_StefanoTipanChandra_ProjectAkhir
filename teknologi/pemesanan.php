<?php
session_start();
include 'koneksi.php';

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Silakan login terlebih dahulu!'); window.location='login.php';</script>";
    exit;
}

// Jika tombol simpan ditekan
if (isset($_POST['simpan'])) {

    $username        = $_POST['username'];
    $email           = $_POST['email'];
    $alamat          = $_POST['alamat'];
    $barang          = $_POST['barang'];
    $jumlah_pesanan  = $_POST['jumlah_pesanan'];
    $kode_diskon     = $_POST['kode_diskon'];

    $query = "INSERT INTO pemesanan (username, email, alamat, barang, jumlah_pesanan, kode_diskon)
              VALUES ('$username', '$email', '$alamat', '$barang', '$jumlah_pesanan', '$kode_diskon')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='showdata.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: #f4f7fb;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }
        body {
    padding-top: 90px; /* sesuaikan tinggi navbar kamu */
}


        /* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 30px;
  background: linear-gradient(135deg, rgba(43, 0, 80, 0.6), rgba(0, 80, 130, 0.6));
  backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.15);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
}

.navbar .logo {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 24px;
  font-weight: 700;
  color: #00b4db;
}

.navbar .logo img {
  height: 30px;
  width: auto;
}

.navbar .nav-links {
  display: flex;
  align-items: center;
  gap: 30px;
}

/* ---- kotak + rounded pada link ---- */
.navbar .nav-links a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  padding: 8px 18px; 
  border-radius: 12px; 
  background: rgba(255, 255, 255, 0.12);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  transition: 0.3s;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.navbar .nav-links a:hover {
  background: rgba(0, 180, 219, 0.3);
  color: #00eaff;
  transform: translateY(-2px);
}

/* Tombol login */
.navbar .login-btn {
  background: linear-gradient(135deg, #00b4db, #0083b0);
  padding: 8px 20px;
  border-radius: 25px;
  color: white;
  text-decoration: none;
  font-weight: 600;
  transition: 0.3s;
}

.navbar .login-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0, 180, 219, 0.4);
}


        h2 {
            text-align: center;
            color: #004d61;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
            font-size:20px;
        }

        label {
            display: block;
            font-size: 15px;
            color: #333;
            margin-bottom: 5px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        button {
            background: #00b4db;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #0083b0;
        }

        footer {
            margin-top: 50px;
            background: linear-gradient(135deg, #00b4db, #0083b0);
            text-align: center;
            padding: 15px;
            color: white;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background: linear-gradient(135deg, #91a7ef, #2499dc, #2a0f4c);
  color: #fff;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  margin: 0;
  animation: fadeIn 0.5s ease-in;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.login-page {
  background: linear-gradient(135deg, #141e30, #243b55, #1f2a44);
}

/* Pesan koneksi database */
.status-message {
  background: rgba(0, 180, 219, 0.15);
  padding: 10px 25px;
  border-radius: 10px;
  color: #00b4db;
  font-weight: 600;
  letter-spacing: 1px;
  box-shadow: 0 0 15px rgba(0, 180, 219, 0.3);
  text-align: center;
}

/* Container utama form */
form {
  background: rgba(255, 255, 255, 0.08);
  padding: 50px 60px;
  border-radius: 20px;
  backdrop-filter: blur(12px);
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5), 0 0 60px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.2);
  width: 500px;
  margin: 0 auto;
}

fieldset {
  border: 1.5px solid rgba(255, 255, 255, 0.2);
  border-radius: 15px;
  padding: 25px 30px;
}

/* Judul form */
legend, h2 {
  text-align: center;
  font-weight: 600;
  font-size: 20px;
  color: #fff;
  padding-bottom: 10px;
}

/* Label dan input umum */
label {
  display: block;
  margin-bottom: 6px;
  font-size: 14px;
  color: #ccc;
}

input {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 8px;
  outline: none;
  font-size: 14px;
  background: rgba(255, 255, 255, 0.15);
  color: #fff;
  margin-bottom: 18px;
  transition: 0.3s;
}

input::placeholder {
  color: #bbb;
}

input:focus {
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 0 10px #00b4db;
}

/* Tombol daftar */
button {
  width: 100%;
  padding: 12px;
  background: linear-gradient(135deg, #00b4db, #0083b0);
  border: none;
  border-radius: 10px;
  color: white;
  font-weight: 600;
  font-size: 15px;
  cursor: pointer;
  transition: 0.3s;
  margin-top: 10px;
}

button:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0, 180, 219, 0.4);
}

/* Teks bawah */
p {
  text-align: center;
  margin-top: 18px;
  font-size: 14px;
  color: #ccc;
}

a {
  color: #00b4db;
  text-decoration: none;
  font-weight: 500;
}

a:hover {
  text-decoration: underline;
}

/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 30px;
  background: linear-gradient(135deg, rgba(43, 0, 80, 0.6), rgba(0, 80, 130, 0.6));
  backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.15);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
}

.navbar .logo {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 24px;
  font-weight: 700;
  color: #00b4db;
}

.navbar .logo img {
  height: 30px;
  width: auto;
}

.navbar .nav-links {
  display: flex;
  align-items: center;
  gap: 30px;
}

.navbar .nav-links a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  transition: 0.3s;
}

.navbar .nav-links a:hover {
  color: #00b4db;
}

.navbar .login-btn {
  background: linear-gradient(135deg, #00b4db, #0083b0);
  padding: 8px 20px;
  border-radius: 25px;
  color: white;
  text-decoration: none;
  font-weight: 600;
  transition: 0.3s;
}

.navbar .login-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0, 180, 219, 0.4);
}

/* Main content */
.main-content {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 100px 30px 30px;
}
/* Footer */
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

/* Responsif */
@media (max-width: 450px) {
  form {
    width: 90%;
    padding: 30px;
  }

  fieldset {
    padding: 20px;
  }

  .navbar {
    padding: 10px 15px;
  }

  .navbar .nav-links {
    gap: 15px;
  }

  .navbar .logo {
    font-size: 20px;
  }
}

/* Wrapper tiap baris form (untuk register.php) */
.form-row {
  display: flex;
  align-items: center;
  margin-bottom: 18px;
}

.form-row label {
  width: 120px;
  text-align: left;
  padding-left: 5px;
  font-size: 14px;
  color: #ccc;
}

.form-row .colon {
  padding: 0 8px;
  font-weight: bold;
  color: #ccc;
}

.form-row input {
  flex: 1;
  padding: 10px 12px;
  border: none;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.15);
  color: #fff;
  font-size: 14px;
  outline: none;
  transition: 0.3s;
  min-width: 0;
}

.form-row input::placeholder {
  color: #bbb;
  opacity: 1;
}

.form-row input:focus {
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 0 10px #00b4db;
}

/* Gaya khusus untuk login.php (menggunakan table) */
table {
  width: 100%;
  border-collapse: collapse;
}

table tr {
  margin-bottom: 18px;
}

table td {
  padding: 5px 0;
}

table td:first-child {
  text-align: right;
  width: 120px;
  padding-right: 10px;
}

table td:nth-child(2) {
  text-align: center;
  width: 10px;
  font-weight: bold;
  color: #ccc;
}

table td:last-child {
  text-align: left;
}

table input {
  margin-bottom: 0; /* Override margin-bottom dari input umum agar tidak ada gap ekstra */
}

@media (max-width: 450px) {
  table td:first-child {
    width: 100px;
    font-size: 12px;
  }

  table input {
    font-size: 12px;
  }
}
/* ============================== */
/* GAYA UNTUK HOME.PHP */
/* ============================== */

.home-page {
  background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
  color: #fff;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

/* Container utama home */
.home-container {
  text-align: center;
  padding-top: 80px;
  max-width: 900px;
}

/* Judul besar */
.home-container h1 {
  font-size: 50px;
  font-weight: 700;
  color: #00b4db;
  margin-bottom: 20px;
}

/* Paragraf intro */
.intro {
  font-size: 16px;
  color: #ddd;
  margin-bottom: 40px;
  line-height: 1.6;
}

/* Fitur cards */
.features {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 25px;
}

.feature-card {
  background: rgba(255, 255, 255, 0.08);
  padding: 30px 25px;
  border-radius: 20px;
  width: 250px;
  transition: 0.3s;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}

.feature-card h3 {
  color: #00b4db;
  font-size: 18px;
  margin-bottom: 10px;
}

.feature-card p {
  color: #ccc;
  font-size: 14px;
}

.feature-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 180, 219, 0.3);
}

/* Responsif */
@media (max-width: 768px) {
  .features {
    flex-direction: column;
    align-items: center;
  }

  .feature-card {
    width: 80%;
  }

  .home-container h1 {
    font-size: 26px;
  }

  .intro {
    font-size: 14px;
  }
}
/* Pertebal border pada fieldset form login & register */
fieldset {
  border: 2px solid #10B981; /* emerald green */
  border-radius: 10px;
  padding: 20px;
  background-color: #111827; /* deep dark background */
  box-shadow: 0 0 10px rgba(16, 185, 129, 0.25);
}
.navbar {
    position: fixed;         /* selalu nempel di atas */
    top: 0;
    width: 100%;
    z-index: 1000;

    background: rgba(30, 30, 60, 0.3);   /* semi transparan */
    backdrop-filter: blur(10px);         /* efek blur */
    -webkit-backdrop-filter: blur(10px); /* untuk Safari */

    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;

    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    transition: background 0.3s ease;
}

/* Efek saat di scroll (background lebih gelap) */
.navbar.scrolled {
    background: rgba(30, 30, 60, 0.6);
    backdrop-filter: blur(12px);
}

    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">
            <img src="teknologia.png" alt="Logo">
            TECHNOLOGIA
        </div>
        <div class="nav-links">
            <a href="pemesanan.php">Input Data</a>
            <a href="showdata.php">Show Data</a>
            <a href="logout.php" onclick="return confirm('Are you sure you want to logout?');">
    Logout
</a>
        </div>
    </nav>

    <div class="container">
        <h2 style="font-size:35px;color: #00b4db;">Data Pemesanan</h2>

        <form method="POST">

            <div class="form-group">
                <label style="font-size:20px;color: #00b4db;">Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label style="font-size:20px;color: #00b4db;">Email</label>
                <input type="text" name="email" required>
            </div>

            <div class="form-group">
                <label style="font-size:20px;color: #00b4db;">Alamat</label>
                <input type="text" name="alamat" required>
            </div>

            <div class="form-group">
                <label style="font-size:20px;color: #00b4db;">Barang</label>
                <input type="text" name="barang" required>
            </div>

            <div class="form-group">
                <label style="font-size:20px;color: #00b4db;">Jumlah Pesanan</label>
                <input type="number" name="jumlah_pesanan" required>
            </div>

            <div class="form-group">
                <label style="font-size:20px;color: #00b4db;">Kode Diskon (Optional)</label>
                <input type="text" name="kode_diskon">
            </div>

            <button type="submit" name="simpan" style="font-size:20px;">Simpan Data</button>

        </form>
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
<script>
    window.addEventListener("scroll", function() {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 10) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
</script>

</body>
</html>
