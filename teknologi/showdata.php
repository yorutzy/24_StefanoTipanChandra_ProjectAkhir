<?php
session_start();
include 'koneksi.php';

// Ambil semua data pemesanan
$data = mysqli_query($koneksi, "SELECT * FROM pemesanan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Show Data</title>
<link rel="stylesheet" href="style.css">
<style>

/* ===== NAVBAR ===== */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px;
    background: rgba(255,255,255,0.6);
    backdrop-filter: blur(10px);
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 999;
}

.logo {
    font-size: 24px;
    font-weight: 700;
}

.nav-menu {
    display: flex;
    gap: 25px;
}

.nav-menu a {
    text-decoration: none;
    color: #777;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 10px;
}

.active-link {
    color: black;
    border-bottom: 2px solid black;
}

.logout-btn {
    padding: 8px 18px;
    background: black;
    color: white;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 600;
}

/* ===== CONTENT ===== */
.container {
    margin-top: 130px;
    text-align: center;
}

h1 {
    font-size: 40px;
    margin-bottom: 40px;
}

/* ===== TABLE ===== */
table {
    margin: 0 auto;
    border-collapse: collapse;
    width: 85%;
    background: #e3e3e3;
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 12px;
    border: 1px solid #b5b5b5;
    text-align: center;
}

th {
    background: #d5d5d5;
    font-size: 17px;
    font-weight: bold;
}

a.update {
    color: #0066ff;
    font-weight: 600;
}

a.delete {
    color: red;
    font-weight: 600;
    align-items: center;
}
nav {
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 40px;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}
table td {
    text-align: center;
    padding: 10px 15px;
}

.delete {
    color: red;
    text-decoration: none;
    font-weight: bold;
    text-align: center;
    align-content:center;
    align-items:center;
}

table td, table th {
    padding: 12px 18px;
    min-width: 120px; /* agar tidak terlalu sempit */
    text-align:center;
}
nav {
    width: 100%;
    padding: 15px 40px;
    background: linear-gradient(90deg, #0a2a78, #0f6ead);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo img {
    width: 35px;
    height: 35px;
    object-fit: contain;
}

.logo span {
    color: white;
    font-size: 22px;
    font-weight: 700;
    letter-spacing: 1px;
}

.menu {
    display: flex;
    align-items: center;
    gap: 25px;   /* jarak antar menu */
}

.menu a {
    color: #7fe7ff;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 8px;
    transition: 0.2s;
}

.menu a:hover {
    background: rgba(255,255,255,0.15);
}

</style>
</head>
<body>


<nav>
    <div class="logo" style="color: #0055a5ff;">
        <img src="teknologia.png" alt="Logo">
        <span style="color: #0055a5ff;">TEKNOLOGIA</span>
    </div>
    <div class="menu">
        <a href="pemesanan.php">Input Data</a>
        <a href="showdata.php">Show Data</a>
        <a href="logout.php" onclick="return confirm('Are you sure you want to logout?');">
    Logout
</a>
    </div>
</nav>


<div class="container">
    <h1 style="color: #00ff62ff;">Data Website</h1>

    <table>
        <tr>
            <th style="font-size:20px;">Username</th>
            <th style="font-size:20px;">Email</th>
            <th style="font-size:20px;">Alamat</th>
            <th style="font-size:20px;">Barang</th>
            <th style="font-size:20px;">Jumlah</th>
            <th style="font-size:20px;">Kode Diskon</th>
            <th style="font-size:20px;">Tanggal</th>
            <th style="font-size:20px;">Update</th>
            <th style="font-size:20px;">Delete</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td style="font-size:20px;"><?= $row['username']; ?></td>
            <td style="font-size:20px;"><?= $row['email']; ?></td>
            <td style="font-size:20px;"><?= $row['alamat']; ?></td>
            <td style="font-size:20px;"><?= $row['barang']; ?></td>
            <td style="font-size:20px;"><?= $row['jumlah_pesanan']; ?></td>
            <td style="font-size:20px;"><?= $row['kode_diskon']; ?></td>
            <td style="font-size:20px;"><?= $row['tanggal_pemesanan']; ?></td>

            <td style="font-size:20px;"><a class="update" href="update.php?id=<?= $row['id']; ?>">Update</a></td>
            <td style="font-size:20px; text-align:center;"><a class="delete" href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus data ini?')">Delete</a></td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>
