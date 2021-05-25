
<?php

require '../template/header/header.php';
// $result= mysqli_query($conn,'SELECT * FROM tb_hasil_akhir_mahasiswa');
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                <div class="callout callout-danger">
                  <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                  <h5><i class="icon fas fa-info"></i> Welcome Back!</h5>
                  Selamat Datang <b>Admin</b>
                </div>

        <!-- Small boxes (Stat box) -->
        <br>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="ion ion-person-add"></i></span>

              <div class="info-box-content">
                <?php
                  $masyarakat_home = mysqli_query($conn, "SELECT * FROM tb_masyarakat");
                  $row_masyarakat_home = mysqli_num_rows($masyarakat_home);
                  $row_masyarakat_home_final = $row_masyarakat_home;
                ?>
                <span class="info-box-text">Data Masyarakat</span>
                <span class="info-box-number"><?= $row_masyarakat_home_final ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-truck"></i></span>

              <div class="info-box-content">
                <?php
                  $kendaraan_home = mysqli_query($conn, "SELECT * FROM tb_kendaraan");
                  $row_kendaraan_home = mysqli_num_rows($kendaraan_home);
                  $row_kendaraan_home_final = $row_kendaraan_home;
                ?>
                <span class="info-box-text">Jumlah Kendaraan</span>
                <span class="info-box-number"><?= $row_kendaraan_home_final ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-id-badge"></i></span>

              <div class="info-box-content">
                <?php
                  $pekerja_home = mysqli_query($conn, "SELECT * FROM tb_pekerja");
                  $row_pekerja_home = mysqli_num_rows($pekerja_home);
                  $row_pekerja_home_final = $row_pekerja_home;
                ?>
                <span class="info-box-text">Data Petugas</span>
                <span class="info-box-number"><?= $row_pekerja_home_final ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="ion ion-person"></i></span>

              <div class="info-box-content">
                <?php
                  $akun_kelurahan_home = mysqli_query($conn, "SELECT * FROM tb_akun_kelurahan");
                  $row_akun_kelurahan_home = mysqli_num_rows($akun_kelurahan_home);
                  $row_akun_kelurahan_home_final = $row_akun_kelurahan_home;
                ?>
                <span class="info-box-text">Admin Kelurahan</span>
                <span class="info-box-number"><?= $row_akun_kelurahan_home_final ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Laporan Sampah</span>
                <span class="info-box-number">20</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fa fa-file-excel"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Laporan Keluhan</span>
                <span class="info-box-number">20</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-image"></i></span>

              <div class="info-box-content">
                <?php
                  $edukasi_home = mysqli_query($conn, "SELECT * FROM tb_edukasi");
                  $row_edukasi_home = mysqli_num_rows($edukasi_home);
                  $row_edukasi_home_final = $row_edukasi_home;
                ?>
                <span class="info-box-text">Konten Edukasi</span>
                <span class="info-box-number"><?= $row_edukasi_home_final ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fa fa-newspaper"></i></span>

              <div class="info-box-content">
                <?php
                  $berita_home = mysqli_query($conn, "SELECT * FROM tb_berita");
                  $row_berita_home = mysqli_num_rows($berita_home);
                  $row_berita_home_final = $row_berita_home;
                ?>
                <span class="info-box-text">Konten Berita</span>
                <span class="info-box-number"><?= $row_berita_home_final ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <br>
        <!-- /.row (main row) -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3"><h3 class="card-title">Data Sampah</h3></li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-grafik-tab" data-toggle="pill" href="#custom-tabs-two-grafik" role="tab" aria-controls="custom-tabs-two-grafik" aria-selected="true">Grafik</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-tabel-tab" data-toggle="pill" href="#custom-tabs-two-tabel" role="tab" aria-controls="custom-tabs-two-tabel" aria-selected="false">Tabel</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <?php
                    $berat_sampah= mysqli_query($conn,"SELECT SUM(berat_sampah) AS total_berat FROM tb_laporan_petugas");
                    $row_berat_sampah = mysqli_fetch_assoc($berat_sampah)
                    ?>
                    <h2><b><small> Total Se-Kecamatan </small> <?= $row_berat_sampah['total_berat'] ?> </b> kg </h2> <br>
                  <div class="tab-pane fade show active" id="custom-tabs-two-grafik" role="tabpanel" aria-labelledby="custom-tabs-two-grafik-tab">
                    <div id="container2" style="min-width: fit-content; height: fit-content; margin: 0"></div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-tabel" role="tabpanel" aria-labelledby="custom-tabs-two-tabel-tab">
                    <div class="card-body p-0">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">No</th>
                            <th>Kelurahan</th>
                            <th style="width: 40px">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no = 1;
                            $kelurahan_array_tabel = array("Balang Baru", "Barombong", "Bongaya",
                                                  "Bonto Duri", "Jongaya", "Maccini Sombala", "Mangasa",
                                                  "Mannuruki", "Pabaeng-Baeng", "Parang Tambung", "Tanjung Merdeka");
                            foreach ($kelurahan_array_tabel as $dta_kelurahan_array_tabel){
                            // $getPetugas_tabel = mysqli_query($conn,"SELECT * FROM tb_pekerja WHERE kelurahan_pekerja = '$kelurahan_header' ");
                            // foreach ($getPetugas_tabel as $dta_getPetugas_tabel){
                              $result_tabel= mysqli_query($conn,"SELECT SUM(berat_sampah) AS total_berat_tabel FROM tb_laporan_petugas WHERE kelurahan = '$dta_kelurahan_array_tabel' ");
                              $row_tabel = mysqli_fetch_assoc($result_tabel);
                          ?>
                          <tr>
                            <td><?= $no ?></td>
                            <td> <?= $dta_kelurahan_array_tabel ?> </td>
                            <?php
                              if ($row_tabel['total_berat_tabel'] < 1){
                                echo "<td><span class='badge bg-success'> 0 kg </span></td>";
                              } else{
                                echo "<td><span class='badge bg-success'> $row_tabel[total_berat_tabel] kg </span></td>";
                              }

                            ?>
                          </tr>
                        </tbody>
                          <?php $no = $no + 1; } ?>
                      </table>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Laporan Masyarakat</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <!-- <th>Berat</th> -->
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 0;
                      $laporan_masyarakat = mysqli_query($conn, "SELECT * FROM tb_laporan ORDER BY id_laporan DESC ");
                      foreach($laporan_masyarakat as $dta_laporan_masyarakat) {
                        if ($i > 5)
                          break;
                      $masyarakat = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE id_masyarakat = '$dta_laporan_masyarakat[masyarakat_id]' ");
                      $dta_masyarakat = mysqli_fetch_assoc($masyarakat);
                    ?>
                    <tr>
                      <td>
                      <img src="../../../kelurahan/admin/masyarakat/foto/<?= $dta_masyarakat['foto_masyarakat'] ?>"  alt="Product 1" class="img-circle img-size-50 mr-2">
                      <?= $dta_masyarakat['nama_masyarakat'] ?>
                      </td>
                      <td><?= $dta_laporan_masyarakat['created_at'] ?></td>
                      <!-- <td><span class="badge bg-danger">// $dta_laporan_petugas['berat_sampah'] ?></span><small> Kg</small></td> -->
                      <td>
                      <a href="../masyarakat/detail.php?id_masyarakat=<?= $dta_masyarakat['id_masyarakat'] ?>" class="text-muted" >
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                    </tr>

                  <?php $i++; } ?>
                  </tbody>
                </table><br>
                    <div class="col-12">
                      <a href="../laporan/data.php"class="btn btn-primary" style="margin-right: 5px;"> Lihat Semua
                      </a>
                    </div><br>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Laporan Petugas Terbaru</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Berat</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 0;
                      $laporan_petugas = mysqli_query($conn, "SELECT * FROM tb_laporan_petugas ORDER BY id_laporan_petugas DESC ");
                      foreach($laporan_petugas as $dta_laporan_petugas) {
                        if ($i > 5)
                          break;
                      $petugas = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$dta_laporan_petugas[id_petugas]' ");
                      $dta_petugas = mysqli_fetch_assoc($petugas);
                    ?>
                    <tr>
                      <td>
                      <img src="../../../kelurahan/admin/petugas/foto/<?= $dta_petugas['foto_pekerja'] ?>"  alt="Product 1" class="img-circle img-size-50 mr-2">
                      <?= $dta_petugas['nama_pekerja'] ?>
                      </td>
                      <td><?= $dta_laporan_petugas['crated_at'] ?></td>
                      <td><span class="badge bg-danger"><?= $dta_laporan_petugas['berat_sampah'] ?></span><small> Kg</small></td>
                      <td>
                      <a href="../petugas/detail.php?id_pekerja=<?= $dta_petugas['id_pekerja'] ?>" class="text-muted" >
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                    </tr>

                  <?php $i++; } ?>
                  </tbody>
                </table><br>
                    <div class="col-12">
                      <a href="../petugas/laporan-petugas.php"class="btn btn-primary" style="margin-right: 5px;"> Lihat Semua
                      </a>
                    </div><br>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  


<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">Sistem Informasi | UINAM</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.0.5 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/spk_pm_unm/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/spk_pm_unm/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- bs-custom-file-input -->
<script src="/spk_pm_unm/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/spk_pm_unm/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/spk_pm_unm/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/spk_pm_unm/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/spk_pm_unm/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/spk_pm_unm/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="/spk_pm_unm/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- ChartJS -->
<script src="/spk_pm_unm/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Ekko Lightbox -->
<script src="/spk_pm_unm/assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/spk_pm_unm/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="/spk_pm_unm/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- Summernote -->
<script src="/spk_pm_unm/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/spk_pm_unm/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/spk_pm_unm/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/spk_pm_unm/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/spk_pm_unm/assets/dist/js/demo.js"></script>
<!-- bootstrap-switch-button -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="/spk_pm_unm/assets/dist/js1/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/spk_pm_unm/assets/dist/js1/bootstrap.min.js"></script>
	<script src="/spk_pm_unm/assets/dist/js1/highcharts.js"></script>
	<script src="/spk_pm_unm/assets/dist/js1/exporting.js"></script>




<!-- page script -->
<script>

	var chart11; // globally available
  $(function () {

    chart11 = new Highcharts.Chart({
	         chart: {
	            renderTo: 'container2',
	            type: 'column'
	         },
	         title: {
	            text: 'Grafik Perangkingan '
	         },
	         xAxis: {
	            categories: ['Mahasiswa']
	         },
	         yAxis: {
	            title: {
	               text: 'Nilai'
	            }
	         },
	              series:
	            [
	            <?php
              $kelurahan_array = array("Balang Baru", "Barombong", "Bongaya",
                                       "Bonto Duri", "Jongaya", "Maccini Sombala", "Mangasa",
                                       "Mannuruki", "Pabaeng-Baeng", "Parang Tambung", "Tanjung Merdeka");
              foreach ($kelurahan_array as $dta_kelurahan_array){
                $result= mysqli_query($conn,"SELECT SUM(berat_sampah) AS total_berat FROM tb_laporan_petugas WHERE kelurahan = '$dta_kelurahan_array' ");
                $row = mysqli_fetch_assoc($result)
	                  ?>
	                 //data yang diambil dari database dimasukan ke variable nama dan data
	                 //
	                  {	name: '<?php echo $dta_kelurahan_array ?>',
	                    data: [<?php echo $row['total_berat'] ?>]
	                  },
	                  <?php } ?>
	            ]
	      });


    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });


    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });


  })
</script>

<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });

  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>

</body>
</html>
