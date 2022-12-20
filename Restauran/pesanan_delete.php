<?php

include "koneksi.php";

$id_pesanan=$_GET['id_pesanan'];   
$hapus = mysqli_query($conn, "DELETE FROM pesanan where id_pesanan='$id_pesanan'");
header("location:beranda.php?page=pesanan");
?>