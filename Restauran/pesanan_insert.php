<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$no_meja=$_POST["no_meja"];
$nama=$_POST["nama"];
$jumlah_pesanan=$_POST["jumlah_pesanan"];
$status=$_POST["status"];


//Query input menginput data kedalam tabel barang
  $sql="insert into pesanan (no_meja,nama,jumlah_pesanan,status) values
        ('$no_meja','$nama','$jumlah_pesanan','status')";

//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($conn,$sql);

//Kondisi apakah berhasil atau tidak
  header("location:beranda.php?page=pesanan");

?>