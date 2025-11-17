<?php
include 'koneksi.php';

// TANGKAP SEMUA DATA TERMASUK ID
$id              = $_POST['id'];
$username        = $_POST['username'];
$email           = $_POST['email'];
$alamat          = $_POST['alamat'];
$barang          = $_POST['barang'];
$jumlah_pesanan  = $_POST['jumlah_pesanan'];
$kode_diskon     = $_POST['kode_diskon'];

// QUERY UPDATE
mysqli_query($koneksi, "UPDATE pemesanan SET
    username='$username',
    email='$email',
    alamat='$alamat',
    barang='$barang',
    jumlah_pesanan='$jumlah_pesanan',
    kode_diskon='$kode_diskon'
    WHERE id='$id'
");

// KEMBALI KE SHOWDATA
header("Location: showdata.php");
exit;
?>
