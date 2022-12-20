<?php
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM transaksi ORDER BY id_transaksi DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/tabel.css">
  </style>
</head>
<body>
  <section>
<h1>Daftar Masakan</h1> 
    <div  class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
  
          <thead>

            <a href="?page=transaksi_tambah"><img src="foto/add.png"></a>
            
              <th>No</th>
              <th>Nomor Meja</th>
              <th>Nama Masakan</th>
              <th>Harga</th>
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
            <td><?php echo $data["harga"];?></td>
            <td>
                <a href="transaksi_delete.php?id_transaksi=<?php echo $data['id_transaksi'];?>">Delete</a> |
                <a href="?page=transaksi_edit&id_transaksi=<?php echo $data['id_transaksi']; ?>">Update</a>
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