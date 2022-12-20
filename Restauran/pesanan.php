<?php
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM pesanan ORDER BY id_pesanan DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/tabel.css">
  </style>
</head>
<body>
  <section>
<h1>Daftar Pesanan</h1> 
    <div  class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
  
          <thead>

            <a href="?page=pesanan_tambah"><img src="foto/add.png"></a>
            
              <th>No</th>
              <th>Nomor Meja</th>
              <th>Nama Pesanan</th>
              <th>Jumlah Pesanan</th>
              <th>Status</th>
              <th>Pengaturan</th>
            </tr>
          </thead>
        </table>
    </div>
    <div  class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody>
             <?php 
             if(mysqli_num_rows($query)>0)
              { ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["no_meja"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["jumlah_pesanan"];?></td>
            <td><?php 
                if ($data['status']=='Belum Dibayar') {
                    echo "Belum Dibayar";
                    }else {
                    echo "Dibayar";
                    }
                    ?></td>
            <td>
                <a href="pesanan_delete.php?id_pesanan=<?php echo $data['id_pesanan'];?>">Delete</a> |
                <a href="?page=pesanan_edit&id_pesanan=<?php echo $data['id_pesanan']; ?>">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
          </tbody>
        </table>
    </div>
</section>
<script type="text/javascript">
  $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</body>
</html>