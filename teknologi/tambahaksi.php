<?php
include 'koneksi.php';

    $username        = $_POST['username'];
    $email           = $_POST['email'];
    $alamat          = $_POST['alamat'];
    $barang          = $_POST['barang'];
    $jumlah_pesanan  = $_POST['jumlah_pesanan'];
    $kode_diskon     = $_POST['kode_diskon'];

mysqli_query($koneksi, "INSERT INTO pemesanan (username, email, alamat, barang, jumlah_pesanan, kode_diskon) 
                        VALUES ('$username', '$email', '$alamat','$barang','$jumlah_pesanan','$kode_diskon')");

header("location:showdata.php");
?>