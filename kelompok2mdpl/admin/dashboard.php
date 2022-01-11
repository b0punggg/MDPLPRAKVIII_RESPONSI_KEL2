<?php
include('../koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  
  <table border="0"  width="1000px">
    <tr>

    <td width="50" height="150">
        <table width="90%" border="0" align="center">
          <tr align="center">
            <td height="120px" style="background-color: #DD49B3;">
                <i class="fa fa-shopping-cart fa-5x"></i>
                <?php
                  $sqlcount = 'SELECT COUNT(*)AS COUNT FROM data';
                  $commit =  mysqli_query($koneksi,$sqlcount);
                  $result = mysqli_fetch_array($commit);
                  echo $result[0];
                ?>
                <p class="text-light font-weight-bold">DATA PAKET</p>
                <a href="index.php?page=tampil_paket">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </td> 
          </tr>
        </table>
      </td>

      <td width="50" height="150">
        <table width="60%" border="0" align="center">
          <tr align="center">
            <td height="120px" style="background-color: #78DD49;">
                <i class="fa fa-user fa-5x"></i>
                <?php
                  $sqlcount = 'SELECT COUNT(*)AS COUNT FROM data';
                  $commit =  mysqli_query($koneksi,$sqlcount);
                  $result = mysqli_fetch_array($commit);
                  echo $result[0];
                ?>
                <p class="text-light font-weight-bold">DATA PELANGGAN</p>
                <a href="index.php?page=tampil_antri">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </td> 
          </tr>
        </table>
      </td>

      <td width="50" height="150">
        <table width="60%" border="0" align="center">
          <tr align="center">
            <td height="120px" style="background-color: #FF3E3E;">
                <i class="fa fa-exchange fa-5x"></i>
                <?php
                  $sqlcount = 'SELECT COUNT(*)AS COUNT FROM transaksi2';
                  $commit =  mysqli_query($koneksi,$sqlcount);
                  $result = mysqli_fetch_array($commit);
                  echo $result[0];
                ?>
                <p class="text-light font-weight-bold">TRANSAKSI</p>
                <a href="index.php?page=tampil_transaksi">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </td> 
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <table border="0"  width="1000px">
    <tr>
    <td width="50" height="150">
        <table style="margin-left: 10px;" width="22%" border="0" align="center">
          <tr align="center">
            <td height="120px" style="background-color: #FFD646;">
                <i class="fa fa-book fa-5x"></i>
                <?php
                  $sqlcount = 'SELECT COUNT(*)AS COUNT FROM transaksi';
                  $commit =  mysqli_query($koneksi,$sqlcount);
                  $result = mysqli_fetch_array($commit);
                  echo $result[0];
                ?>
                <p class="text-light font-weight-bold">LAPORAN</p>
                <a href="index.php?page=tampil_laporan">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </td> 
          </tr>
        </table>
      </td>
    </tr>
  </table>

</body>
</html>