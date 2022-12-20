<?php 
session_start()

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="foto/png" href="foto/ALFIN.png">
	  <title>

     <?php 
        @$p = $_GET['page'];
        if (!empty($p)) {
        if ($p == 'dasboard') {
          echo "Dasboard";
        }elseif ($p == 'masakan') {
          echo "Masakan";
        }elseif ($p == 'masakan_tambah') {
          echo "Masakan";
        }elseif ($p == 'masakan_edit') {
          echo "Masakan";
        }elseif ($p == 'pesanan') {
          echo "Pesanan";
        }elseif ($p == 'pesanan_tambah') {
          echo "Pesanan";
        }elseif ($p == 'pesanan_edit') {
          echo "Pesanan";
        }elseif ($p == 'transaksi') {
          echo "Transaksi";
        }
        }else {
          echo "Dasboard";
        }
      ?> 
    </title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>


    
</head>
<body>
   
<div class="wrapper">
            
            <div class="header">
                <div class="header-menu">
                    <div class="title">Multi <span>Studi</span></div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul>
                        <li><a href="logout.php"><i class="fas fa-power-off"></i></a></li>
                    </ul>
                </div>
            </div>
            
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="foto/user.jpg" alt="">
                      <p><?php echo $_SESSION['nama']; ?></p>
                    </center>
                    <li class="item">
                        <a href="?page=dasboard" class="menu-btn">
                            <i class="fa fa-windows"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="item" id="profile">
                        <a href="?page=masakan" class="menu-btn">
                            <i class="fa fa-linux"></i><span>Masakan <i></i></span>
                        </a>
                    </li>
                    <li class="item" id="messages">
                        <a href="?page=pesanan" class="menu-btn">
                            <i class="fa fa-apple"></i><span>Pesanan <i></i></span>
                        </a>
                     </li>
                    <li class="item">
                        <a href="?page=transaksi" class="menu-btn">
                            <i class="fa fa-android"></i><span>Transaksi </span>
                        </a>
                    </li>
                </div>
            </div>
            
            <div class="main-container">
                <?php
                  @$page = $_GET['page'];
                  if (!empty($page)) {
                    
switch ($page) {
  case 'dasboard':
    include "dasboard.php";
    break;
  case 'masakan':
    include "masakan.php";
    break;
    case 'masakan_tambah':
    include "masakan_tambah.php";
    break;
    case 'masakan_edit':
    include "masakan_edit.php";
    break;
    case 'pesanan':
    include "pesanan.php";
    break;
    case 'pesanan_tambah':
    include "pesanan_tambah.php";
    break;
    case 'pesanan_edit':
    include "pesanan_edit.php";
    break;
    case 'transaksi':
    include "transaksi.php";
    break;
    case 'transaksi_tambah':
    include "transaksi_tambah.php";
    break;
  
  default:
    include "dasboard.php";
    break;
}

                  }else{
                    include "dasboard.php";
                  }
                  ?>
            </div>
        

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>

</body>
</html>