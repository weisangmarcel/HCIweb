<?php

//Creating Connection
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword);
if(!$conn){
    die("Database Connection Failed" . mysqli_connect_error());
}

//Creating Database
$sql = "CREATE DATABASE db_restaurant";
$result = mysqli_query($conn,$sql);
$conn->select_db("db_restaurant");

//Creating Table
$create_table = "CREATE TABLE tb_pesanan (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    pesanan VARCHAR(100) NOT NULL,
    email VARCHAR(30) NOT NULL,
    foto_ktp VARCHAR(255) NOT NULL,
    foto_selfie VARCHAR(255) NOT NULL,
    notelp BIGINT(15) NOT NULL
    )";
$result = mysqli_query($conn,$create_table);

$create_table = "CREATE TABLE tb_barang (
    id INT (6) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    type VARCHAR(30) NOT NULL,
    harga INT(20) NOT NULL
    )";
$result = mysqli_query($conn,$create_table);

//Inserting data to table tb_barang
$id = 1;
$nama = "Kakap Merah";
$type = "Fish";
$harga = 85000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 2;
$nama = "Kakap Putih";
$type = "Fish";
$harga = 95000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 3;
$nama = "Bawal";
$type = "Fish";
$harga = 80000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 4;
$nama = "Kerapu";
$type = "Fish";
$harga = 85000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 5;
$nama = "Baronang";
$type = "Fish";
$harga = 90000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 6;
$nama = "Dorang";
$type = "Fish";
$harga = 70000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 7;
$nama = "Kakatua";
$type = "Fish";
$harga = 80000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 8;
$nama = "Kakap Sirip Hitam";
$type = "Fish";
$harga = 95000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 9;
$nama = "Shrimp";
$type = "Others";
$harga = 80000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 10;
$nama = "Squid";
$type = "Others";
$harga = 125000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 11;
$nama = "Crabs";
$type = "Others";
$harga = 135000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 12;
$nama = "Lobster";
$type = "Others";
$harga = 225000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 13;
$nama = "Kelapa Muda";
$type = "Drinks";
$harga = 15000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 14;
$nama = "Orange";
$type = "Drinks";
$harga = 6000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 15;
$nama = "Ice Tea";
$type = "Drinks";
$harga = 5000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}
$id = 16;
$nama = "Sogem";
$type = "Drinks";
$harga = 15000;
$insert_data = ("INSERT INTO tb_barang (nama,type,harga) 
    VALUES ('$nama', '$type','$harga')");
$check_data = "SELECT nama FROM tb_barang WHERE id=$id";
$result_check = $conn->query($check_data);
if($result_check->num_rows > 0){
    $row = $result_check->fetch_assoc();
    if($row["nama"] != $nama){
        $result = mysqli_query($conn,$insert_data);
    }
}
else{
    $result = mysqli_query($conn,$insert_data);
}

?>