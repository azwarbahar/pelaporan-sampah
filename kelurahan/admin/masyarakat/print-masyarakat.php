<?php
require '../../../koneksi.php';
if (!isset($_SESSION['login_admin_kelurahan'])) {
  header("location: ../../login.php");
}
$get_id_session = $_SESSION['get_id_kelurahan'];
$query_header_akun = mysqli_query($conn, "SELECT * FROM tb_akun_kelurahan WHERE id_akun_kelurahan = '$get_id_session'");
$get_data_akun = mysqli_fetch_assoc($query_header_akun);
$kelurahan_header = $get_data_akun['kelurahan_akun_kelurahan'];
$masyarakat = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE kelurahan_masyarakat = '$kelurahan_header'");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Prin Data Area Kerja</title>
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
        <h4 style="text-align: center;">Retribusi Sampah Kelurahan <?= $kelurahan_header ?></h4>
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
            <th style="text-align: center; font-size: 15px;">Nama</th>
            <th style="text-align: center; font-size: 15px;">Telpon</th>
            <th style="text-align: center; font-size: 15px;">Alamat</th>
            <th style="text-align: center; font-size: 15px;">Status</th>
          </tr>
          </thead>
          <tbody>

          <?php
                   $i = 1; foreach($masyarakat as $dta) {
                    ?>
                    <tr>
                    <td style="text-align: center; font-size: 15px;"><?= $i ?></td>
                    <td style="font-size: 15px;"><?= $dta['nik_masyarakat'] ?></td>
                    <td style="font-size: 15px;"><?= $dta['nama_masyarakat'] ?></td>
                    <td style="font-size: 15px;"><?= $dta['telpon_masyarakat'] ?></td>
                    <td style="font-size: 15px;"><?= $dta['alamat_masyarakat'] ?></td>
                    <td style="font-size: 15px;"><?= $dta['status_masyarakat'] ?></td>
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
