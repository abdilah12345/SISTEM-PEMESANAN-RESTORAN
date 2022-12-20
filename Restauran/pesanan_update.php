<?php

include_once('koneksi.php');

if(isset($_POST["simpan"])){
 $id_pesanan = $_GET["id_pesanan"];
 $no_meja = $_POST["no_meja"];
 $nama = $_POST["nama"];
 $jumlah_pesanan = $_POST["jumlah_pesanan"];
 $status = $_POST["status"];
 $query = "UPDATE pesanan SET no_meja='$no_meja', nama='$nama' , jumlah_pesanan='$jumlah_pesanan' , status='$status' WHERE id_pesanan='$id_pesanan'";
 mysqli_query($conn, $query);
 header('location:beranda.php?page=pesanan');
}

?>