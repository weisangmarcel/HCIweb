<?php include("connect.php");
session_start();

//Getting Orders
$nama = $_POST['name'];
$email = $_POST['email'];
$foto_ktp = $_POST['foto_ktp'];
$foto_selfie = $_POST['foto_selfie'];
$notelp = $_POST['notelp'];
$namabarang = $_POST['namabarang'];
$jumlahbarang = $_POST['jumlahbarang'];
$hargatotal = $_POST['hargatotal'];
$pesanan = "Nama barang = " . $namabarang . " | Jumlah pesanan = " . $jumlahbarang . " | Total Harga = ". $hargatotal;

//Mengirim ke Database
$send = "INSERT INTO tb_pesanan(nama, pesanan, email, foto_ktp, foto_selfie, notelp)
    VALUES('$nama','$pesanan','$email','$foto_ktp','$foto_selfie','$notelp')";
$result = mysqli_query($conn,$send);

session_destroy();
header("location:Exit.html");
?>