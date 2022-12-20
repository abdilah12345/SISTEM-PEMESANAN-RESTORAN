<?php

include 'koneksi.php';
 

$data = mysqli_query($conn,"SELECT * FROM masakan");

$jumlah_masakan = mysqli_num_rows($data);

$data = mysqli_query($conn,"SELECT * FROM pesanan");

$jumlah_pesanan = mysqli_num_rows($data);

$data = mysqli_query($conn,"SELECT * FROM transaksi");

$jumlah_transaksi = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        
        <title>Awesome Widget</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </head>
    <body>

        <!--Widget Start-->
        <div class="card-body color1">
            <div class="float-left">
                <h3>
                    <span class="count"><?php echo $jumlah_masakan; ?></span>
                </h3>
                <p>Masakan</p>
            </div>
            <div class="float-right">
                <i class="fas fa-utensils"></i>
            </div>
        </div>
        <!--Widget End-->
        <!--Widget Start-->
        <div class="card-body color2">
            <div class="float-left">
                <h3>
                    <span class="count"><?php echo $jumlah_pesanan; ?></span>
                </h3>
                <p>Pesanan</p>
            </div>
            <div class="float-right">
                <i class="pe-7s-users"></i>
            </div>
        </div>
        <!--Widget End-->
        <!--Widget Start-->
        <div class="card-body color3">
            <div class="float-left">
                <h3>
                    <span class="count"><?php echo $jumlah_pesanan; ?></span>
                </h3>
                <p>Transaksi</p>
            </div>
            <div class="float-right">
                <i class="pe-7s-browser"></i>
            </div>
        </div>

     

        <script type="text/javascript">
        $('.count').each(function(){
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration:4000,
                easing:'swing',
                step: function(now){
                    $(this).text(Math.ceil(now));
                }
            });
        });
        </script>

    </body>
</html>
                           