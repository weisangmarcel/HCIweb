<?php
include ("connect.php");
session_start();

//Get ID
$id = $_GET['id'];
$jumlah = $_GET['jumlah'];
$_SESSION["basket"][$id] = $jumlah;
header("location:Restaurant.html");
?>