<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$no_meja=$_POST["no_meja"];
$nama=$_POST["nama"];
$harga=$_POST["harga"];


//Query input menginput data kedalam tabel barang
  $sql="insert into transaksi (no_meja,nama,harga) values
        ('$no_meja','$nama','$harga')";

//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($conn,$sql);
	mysqli_query($conn, "UPDATE pesanan SET status='Dibayar' WHERE no_meja='$no_meja'");
//Kondisi apakah berhasil atau tidak
  header("location:beranda.php?page=transaksi");

?>