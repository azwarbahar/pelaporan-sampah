<?php
require '../../koneksi.php';
$id_mahasiswa = $_GET['id_mahasiswa'];
$ranking = $_GET['ranking'];
$hasil_akhir = mysqli_query($conn, "SELECT * FROM tb_hasil_akhir_mahasiswa ORDER BY nilai_hasil_akhir_mahasiswa DESC");
$mahasiswa = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");
$dta = mysqli_fetch_assoc($mahasiswa);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Universita Negeri Makassar</title>
  <link rel="icon" href="/spk_pm_unm/assets/dist/img/logo_unm_bg_white.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/spk_pm_unm/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/spk_pm_unm/assets/dist/css/adminlte.min.css">

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
        <h5 style="text-align: center;">HASIL AKHIR RANKING PENERIMAAN CALON MAHASISWA JALUR MANDIRI</h5>
        <h5 style="text-align: center;">JURUSAN PENDIDIKAN TEKNIK ELEKTRO FT UNM</h5>
        <h5 style="text-align: center;">MENGGUNAKAN METODE PROFILE MATCHING</h5>
        <br>
      </div><br>
      <!-- /.col -->

      <div class="col-sm-3 invoice-col">

        <address>
          <strong>No Induk</strong><br>
          <strong>Nama</strong><br>
          <strong>Jenis Kelamin</strong><br>
          <strong>Tanggal Lahir</strong><br>
          <strong>Hasil :</strong><br>
        </address>
      </div>

      <div class="col-sm-6 invoice-col">

        <address>
          <strong>: <?= $dta['no_induk_mahasiswa'] ?></strong><br>
          <strong>: <?= $dta['nama_mahasiswa'] ?></strong><br>
          <strong>: <?= $dta['jekel_mahasiswa'] ?></strong><br>
          <strong>: <?= $dta['tgl_lahir_mahasiswa'] ?></strong><br>
        </address>
      </div>
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th style="text-align: center; font-size: 15px;">No</th>
            <th style="font-size: 15px;">Nama</th>
            <th style="text-align: center; font-size: 15px;">Nilai</th>
            <th style="text-align: center; font-size: 15px;">Ranking</th>
          </tr>
          </thead>
          <tbody>

          <?php
                   $i = 1; foreach($hasil_akhir as $dta) {
                    ?>
                    <tr>
                    <td style="text-align: center; font-size: 15px;"><?= $i ?></td>
                    <?php
                        $mahasiswa = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa='$dta[id_mahasiswa]'");
                        $dta_mahasiswa = mysqli_fetch_assoc($mahasiswa);
                    ?>
                    <td style="font-size: 15px;"><?= $dta_mahasiswa['no_induk_mahasiswa'] ?> - <?= $dta_mahasiswa['nama_mahasiswa'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?= $dta['nilai_hasil_akhir_mahasiswa'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><b>Ranking <?= $i ?></b></td>
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
