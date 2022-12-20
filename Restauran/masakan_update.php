<?php

include_once('koneksi.php');

if(isset($_POST["simpan"])){
 $id = $_GET["id"];
 $nama = $_POST["nama"];
 $stok = $_POST["stok"];
 $harga = $_POST["harga"];
 $query = "UPDATE masakan SET nama='$nama', stok='$stok' , harga='$harga' WHERE id='$id'";
 mysqli_query($conn, $query);
 header('location:beranda.php?page=masakan');
}

?>