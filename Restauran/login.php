<?php
$username   = $_POST['username'];
$password   = $_POST['password'];

include 'koneksi.php';

$user = mysqli_query($conn,"select * from login where user='$username' and pass='$password'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['nama'] = $row['nama'];
    header("location:beranda.php");
}else
{
    header("location:index.php");
}
?>