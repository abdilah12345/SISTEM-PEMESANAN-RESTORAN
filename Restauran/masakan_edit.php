<?php
include_once('koneksi.php');
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>
     <style type="text/css">
            
        @keyframes email{

            0%{transform: translateX(-100px); opacity: 0}
            100%{transform: translateX(0px); opacity: 1}
        }
    
        @keyframes password{

            0%{transform: translateX(100px); opacity: 0}
            100%{transform: translateX(0px); opacity: 1}
        }

        @keyframes button{

            0%{transform: scale(0.2); opacity: 0}
            100%{transform: scale(1); opacity: 1}
        }

        @keyframes content{

            0%{transform: translateY(-200px); opacity: 0}
            100%{transform: translateY(0px); opacity: 1}
        }

        @font-face{
            
            font-family: unisans;
            src: url(UniSans.ttf);
            
        }

        body{

            font-family: unisans, ariel, verdana, Geneva, Verdana, sans-serif;
            background-color: rgb(146, 212, 190);
            background: radial-gradient(rgb(206, 252, 250),rgb(86, 152, 140));
            color: rgb(69, 161, 130);
            height: 100%;
            background-image: url(foto/bg.jpg);
            background-size: 100%;
        }

        #wrapper{

            max-width: 1000px;
            min-height: 200px;
            margin: auto;
            margin-top: 150px;
        }

        #title_section{

            background-color: rgb(69, 161, 130);
            height: 30px;
            color: white;
            text-align: center;
            font-size: 20px;
            padding-top: 10px;
            box-shadow: 0px 5px 6px #000;
        }

        #content_section{

            background-color: #ffffff88;
            height: 300px;
            padding: 1em;
            text-align: center;
            border-bottom-right-radius: 80px;
        }

        .textbox{

            border: none;
            padding: 8px;
            border-radius: 30px;
            width: 400px;
            height: 30px;
            margin-left: -25px;
            transition: 0.5s cubic-bezier(0.68, -2, 0.265, 1.55);
            color: rgb(39, 131, 90);
        }

        .textbox:focus{

            font-size: 16px;
            height: 25px;
            color: black;
            box-shadow: 0px 5px 10px #666;
        }

        #button{

            font-family: unisans, ariel, verdana, Geneva, Verdana, sans-serif;
            border-radius: 30px;
            background-color: rgb(69, 161, 130);
            color: white;
            width: 320px;
            border: none;
            height: 40px;
            margin-left: -25px;
            box-shadow: 0px 5px 10px #333;
            font-size: 18px;
            cursor: pointer;
        }

        #email_label{

            margin-top: -40px;
            position: relative;
            z-index: -1;
            background-color: #000;
            text-align: left;
            padding: 10px;
            border-radius: 30px;
            transition: 0.5s cubic-bezier(0.68, -2, 0.265, 1.55);
            opacity: 0;
        }

        #email:focus ~ #email_label{

            margin-left: -120px;
            opacity: 1;
        }

        #password_label{

            margin-top: -40px;
            position: relative;
            z-index: -1;
            background-color: #000;
            text-align: left;
            padding: 10px;
            border-radius: 30px;
            transition: 0.5s cubic-bezier(0.68, -2, 0.265, 1.55);
            opacity: 0;
        }

        #password:focus ~ #password_label{

            margin-left: -120px;
            opacity: 1;
        }

    </style>
</head>
<body>
<div id="wrapper">
            
            <div id="title_section">
               Edit Makanan
            </div>
 <?php 
  $sql2 = "SELECT * FROM masakan WHERE id='$id'";
  $query = mysqli_query($conn, $sql2);
  $row = mysqli_fetch_array($query);
 ?>
<div id="content_section"  style="animation: content 1s ease;">
<br/>
  <form method="post" action='masakan_update.php?id=<?php echo $row['id']; ?>'>
        <input id="email" class="textbox" type="text" placeHolder="Nama Masakan" name="nama" value="<?php echo $row['nama']; ?>" style="animation: email 1.5s cubic-bezier(0.68, -2, 0.265, 1.55);" />
<div id=""></div>
<br/> 
        <input id="email" class="textbox" type="text" placeHolder="Stok" name="stok"  value="<?php echo $row['stok']; ?>"style="animation: email 1.5s cubic-bezier(0.68, -2, 0.265, 1.55);" />
<div id=""></div>
<br/>
        <input id="email" class="textbox" type="text" placeHolder="Harga" name="harga"  value="<?php echo $row['harga']; ?>" style="animation: email 1.5s cubic-bezier(0.68, -2, 0.265, 1.55);" />
<div id=""></div>
</br>
        <input  id="button" type="submit" name="simpan" value="Update" style="animation: button 1s cubic-bezier(0.68, -2, 0.265, 1.55);"/>
 </form>
</body>
</html>