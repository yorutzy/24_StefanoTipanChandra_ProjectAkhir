<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA PEMESANAN</title>

<style>
    * {
        margin: 0; padding: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }

    body {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    min-height: 100vh;
    color: #000;
}
    /* NAVBAR */
    .navbar {
        width: 100%;
        padding: 15px 40px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(15px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .nav-left {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .nav-left img {
        height: 45px;
        filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.3));
    }

    .nav-title {
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 1px;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    .nav-links a {
        color: #fff;
        margin-left: 25px;
        font-size: 16px;
        text-decoration: none;
        transition: 0.3s;
        position: relative;
    }

    .nav-links a::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #00fff7;
        transition: width 0.3s;
        position: absolute;
        bottom: -4px;
        left: 0;
    }

    .nav-links a:hover::after {
        width: 100%;
    }

    .nav-links a:hover {
        color: #00fff7;
    }

    /* FORM CONTAINER */
    .wrapper {
    margin-top: 130px;
    width: 480px;
    background: rgba(255, 255, 255, 0.05); /* lebih transparan */
    padding: 35px;
    border-radius: 20px;
    backdrop-filter: blur(15px); /* blur ringan */
    margin-left: auto;
    margin-right: auto;
    border: 1px solid rgba(255,255,255,0.2); /* border tipis supaya lebih ringan */
    box-shadow: none; /* hapus shadow gelap */
}

    h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 28px;
        font-weight: 700;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    label {
        display: block;
        margin-top: 12px;
        margin-bottom: 5px;
        font-size: 15px;
        color: #fff;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    input {
        width: 100%;
        padding: 12px;
        border-radius: 12px;
        border: none;
        outline: none;
        background: rgba(255, 255, 255, 0.15);
        color: #000;
        font-size: 15px;
        margin-bottom: 5px;
        transition: 0.3s;
        box-shadow: inset 0 2px 5px rgba(0,0,0,0.2);
    }

    input:focus {
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 0 10px rgba(0,255,255,0.5);
    }

    input::placeholder {
        color: #555;
    }

    .btn-save {
        width: 100%;
        margin-top: 20px;
        padding: 12px;
        background: linear-gradient(90deg, #00c3ff, #ffff1c);
        color: #000;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: 0.3s;
        font-size: 16px;
        font-weight: 600;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .btn-save:hover {
        background: linear-gradient(90deg, #00f7ff, #ffe600);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.35);
    }

    .btn-back {
        display: block;
        width: 100%;
        text-align: center;
        margin-top: 15px;
        padding: 10px;
        background: #00bfff;
        color: white;
        border-radius: 12px;
        text-decoration: none;
        transition: 0.3s;
        font-weight: 600;
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    }

    .btn-back:hover {
        background: #0099ff;
        transform: translateY(-1px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.25);
    }
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="nav-left">
        <img src="teknologia.png">
        <div class="nav-title">TEKNOLOGIA</div>
    </div>

    <div class="nav-links">
        <a href="pemesanan.php">Input Data</a>
        <a href="showdata.php">Show Data</a>
        <a href="logout.php">Logout</a>
    </div>
</div>


<div class="wrapper">
    <h2>Update Data</h2>

<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <form method="post" action="ubah.php">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

        <label>Username</label>
        <input type="text" name="username" value="<?php echo $d['username']; ?>">

        <label>Email</label>
        <input type="text" name="email" value="<?php echo $d['email']; ?>">

        <label>Alamat</label>
        <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">

        <label>Barang</label>
        <input type="text" name="barang" value="<?php echo $d['barang']; ?>">

        <label>Jumlah Pesanan</label>
        <input type="number" name="jumlah_pesanan" value="<?php echo $d['jumlah_pesanan']; ?>">

        <label>Kode Diskon</label>
        <input type="text" name="kode_diskon" value="<?php echo $d['kode_diskon']; ?>">

        <button type="submit" class="btn-save">Simpan Perubahan</button>
    </form>

    <a href="showdata.php" class="btn-back">Kembali</a>

<?php } ?>
</div>

</body>
</html>
