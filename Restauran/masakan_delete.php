<?php

include "koneksi.php";

$id=$_GET['id'];   
$hapus = mysqli_query($conn, "DELETE FROM masakan where id='$id'");
header("location:beranda.php?page=masakan");
?>