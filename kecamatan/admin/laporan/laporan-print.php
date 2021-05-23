<?php
require '../../koneksi.php';
$jadwal = mysqli_query($conn, "SELECT * FROM tb_jadwal WHERE status_jadwal='Berjalan'");
$dta_jadwal = mysqli_fetch_assoc($jadwal);
$aspirasi = mysqli_query($conn, "SELECT * FROM tb_aspirasi WHERE status_aspirasi='Approve' AND id_jadwal='$dta_jadwal[id_jadwal]'");


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RESES DPRD Kab Soppeng</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/reses-dprd/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/reses-dprd/assets/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <!-- <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Reses DPRD Kab. Soppeng
          <small class="float-right">Date : </small>
        </h2>
      </div> -->
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-12 invoice-col">
        <br><br>
        <h5 style="text-align: center;">POKOK – POKOK PIKIRAN DPRD</h5>
        <h5 style="text-align: center;">KABUPATEN SOPPENG TAHUN <?= date("Y") ?> BERDASARKAN PRIORITAS</h5>
        <br>
      </div><br>
      <!-- /.col -->
      
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
          <tr>
            <th style="font-size: 15px;">No</th>
            <th style="font-size: 15px;">Kegiatan</th>
            <th style="font-size: 15px;">SKPD</th>
            <th style="font-size: 15px;">Lokasi</th>
            <th style="font-size: 15px;">Nama Dewan</th>
            <th style="font-size: 15px;">Fraksi</th>
            <th style="font-size: 15px;">Dapil</th>
          </tr>
          </thead>
          <tbody>

          <?php
                   $i = 1; foreach($aspirasi as $dta) {
                    ?>
                  <tr>
                  <td style="text-align: center; font-size: 15px;"><?= $i ?></td>
                    <td style="font-size: 15px;"><?= $dta['kegiatan'] ?></td>
                    <td style="font-size: 15px;"><?= $dta['skpd'] ?></td>
                    <td style="font-size: 15px;"><?= $dta['lokasi'] ?></td>
                    <?php
                      $get_id_anggota1 = $dta['id_anggota'];
                      $anggota = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE id_anggota = $get_id_anggota1");
                      while($row_anggota=mysqli_fetch_assoc($anggota)) {
                        echo " <td style=' text-align: center; font-size: 15px;'>$row_anggota[nama_anggota]</td>";
                        $get_id_fraksi = $row_anggota['id_fraksi'];
                        $fraksi = mysqli_query($conn, "SELECT * FROM tb_fraksi WHERE id_fraksi = $get_id_fraksi");
                        while($row_fraksi=mysqli_fetch_assoc($fraksi)) {
                          $get_id_partai = $row_fraksi['id_partai'];
                          $partai = mysqli_query($conn, "SELECT * FROM tb_partai WHERE id_partai = $get_id_partai");
                          while($row_partai=mysqli_fetch_assoc($partai)) {
                            echo " <td style=' text-align: center; font-size: 15px;'>$row_partai[nama_partai]</td>";
                          }
                        }
                        $get_id_dapil = $row_anggota['id_dapil'];
                        $dapil = mysqli_query($conn, "SELECT * FROM tb_dapil WHERE id_dapil = $get_id_dapil");
                        while($row_dapil=mysqli_fetch_assoc($dapil)) {
                          echo " <td style='text-align: center; font-size: 15px;'>$row_dapil[nama_dapil]</td>";
                        }
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
