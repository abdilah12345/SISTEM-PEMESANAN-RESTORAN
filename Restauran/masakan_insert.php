<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$nama=$_POST["nama"];
$stok=$_POST["stok"];
$harga=$_POST["harga"];


//Query input menginput data kedalam tabel barang
  $sql="insert into masakan (nama,stok,harga) values
        ('$nama','$stok','$harga')";

//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($conn,$sql);

//Kondisi apakah berhasil atau tidak
  header("location:beranda.php?page=masakan");

?>