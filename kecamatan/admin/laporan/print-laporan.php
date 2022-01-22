<?php
require '../../../koneksi.php';
$masyarakat = mysqli_query($conn, "SELECT * FROM tb_laporan");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Prin Data Masyarakat</title>
  <link rel="icon" href="../../../assets/dist/img/AdminLTELogo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../assets/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-12 invoice-col">
        <br><br>
        <h5 style="text-align: center;">Daftar Laporan Dari Masyarakat</h5><br>
        <h5 style="text-align: center;">Menggunakan Aplikasi MTR Tamalate</h5>
        <br>
      </div><br>
      <!-- /.col -->
      
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-bordered table-striped" >
          <thead>
          <tr>
            <th style="text-align: center; font-size: 15px;">No</th>
            <th style="text-align: center; font-size: 15px;">NIK</th>
            <th style="text-align: center; font-size: 15px;">Tanggal</th>
            <th style="text-align: center; font-size: 15px;">Keterangan</th>
            <th style="text-align: center; font-size: 15px;">Status</th>
          </tr>
          </thead>
          <tbody>

          <?php
                   $i = 1; foreach($masyarakat as $dta) {
                    ?>
                    <tr>
                    <td style="text-align: center; font-size: 15px;"><?= $i ?></td>
                    <td style="font-size: 15px;"><?= $dta['nik_laporan'] ?></td>
                    <td style="font-size: 15px;"><?= $dta['created_at'] ?></td>
                    <td style="font-size: 15px;"><?= $dta['keterangan_laporan'] ?></td>
                    <?php
                      if ($dta['staus_laporan']=="Done"){
                        echo " <td style='font-size: 15px;'>Selesai</td>";
                      } else if ($dta['staus_laporan']=="Cancel"){
                        echo " <td style='font-size: 15px;'>Batal</td>";
                      } else if ($dta['staus_laporan']=="Proccess") {
                        echo " <td style='font-size: 15px;'>Proses</td>";
                      } else {
                        echo " <td style='font-size: 15px;'>Terbaru</td>";
                      }
                    ?>
                  </tr>
                  <?php
                  $i = $i + 1; }
                  ?>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
  window.addEventListener("load", window.print());
</script>
</body>
</html>
