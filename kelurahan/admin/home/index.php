
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

                <div class="alert alert-secondary alert-dismissible">
                  <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                  <h5><i class="icon fas fa-info"></i> Welcome Back!</h5>
                  Selamat Datang <b>Admin</b>
                  <br> <br>
                </div>

        <!-- Small boxes (Stat box) -->
        <br>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                  $masyarakat = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE kelurahan_masyarakat = '$get_data_akun[kelurahan_akun_kelurahan]'");
                  $row_masyarakat = mysqli_num_rows($masyarakat);
                  $row_masyarakat_final = $row_masyarakat;
                  echo "<h3>$row_masyarakat_final</h3>";
                ?>
                <!-- <h3>20</h3> -->
                <p>Data Masyarakat</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="../masyarakat/data.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                    $kendaraan = mysqli_query($conn, "SELECT * FROM tb_kendaraan WHERE kelurahan_kendaraan = '$get_data_akun[kelurahan_akun_kelurahan]'");
                    $row_kendaraan = mysqli_num_rows($kendaraan);
                    $row_kendaraan_final = $row_kendaraan;
                    echo "<h3>$row_kendaraan_final</h3>";
                  ?>
                  <!-- <h3>20</h3> -->
                  <p>Jumlah Kendaraan</p>
                </div>
                <div class="icon">
                  <i class="fas fa-truck"></i>
                </div>
                <a href="../kendaraan/data.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                    $petugas = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE kelurahan_pekerja = '$get_data_akun[kelurahan_akun_kelurahan]'");
                    $row_petugas = mysqli_num_rows($petugas);
                    $row_petugas_final = $row_petugas;
                    echo "<h3>$row_petugas_final</h3>";
                  ?>
                  <!-- <h3>20</h3> -->
                  <p>Data Petugas</p>
                </div>
                <div class="icon">
                  <i class="fas fa-id-badge"></i>
                </div>
                <a href="../petugas/data.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                  $laporan = mysqli_query($conn, "SELECT * FROM tb_laporan WHERE kelurahan_laporan = '$get_data_akun[kelurahan_akun_kelurahan]'");
                  $row_laporan = mysqli_num_rows($laporan);
                  $row_laporan_final = $row_laporan;
                  echo "<h3>$row_laporan_final</h3>";
                ?>
                <!-- <h3>20</h3> -->
                <p>Laporan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="../laporan/data.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <br>
        <!-- /.row (main row) -->

        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary card-tabs">
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
                    <h4> <b><small> Total Se-Kecamatan </small> <?= $row_berat_sampah['total_berat'] ?> </b> kg </h4> <br>
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
                            // foreach ($kelurahan_array_tabel as $dta_kelurahan_array_tabel){
                            
                            $getPetugas_tabel = mysqli_query($conn,"SELECT * FROM tb_pekerja WHERE kelurahan_pekerja = '$kelurahan_header' ");
                            foreach ($getPetugas_tabel as $dta_getPetugas_tabel){
                              $result_tabel= mysqli_query($conn,"SELECT SUM(berat_sampah) AS total_berat_tabel FROM tb_laporan_petugas WHERE id_petugas = '$dta_getPetugas_tabel[id_pekerja]' ");
                              $row_tabel = mysqli_fetch_assoc($result_tabel);
                          ?>
                          <tr>
                            <td><?= $no ?></td>
                            <td> <a href="../petugas/detail.php?id_pekerja=<?= $dta_getPetugas_tabel['id_pekerja'] ?>"><?= $dta_getPetugas_tabel['nama_pekerja'] ?></a> </td>
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

          <div class="col-md-6">
            <div class="card card-danger">
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
                      $laporan_petugas = mysqli_query($conn, "SELECT * FROM tb_laporan_petugas WHERE kelurahan = '$kelurahan_header' ORDER BY id_laporan_petugas DESC ");
                      foreach($laporan_petugas as $dta_laporan_petugas) {
                        if ($i > 5)
                          break;
                      $petugas = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$dta_laporan_petugas[id_petugas]' ");
                      $dta_petugas = mysqli_fetch_assoc($petugas);
                    ?>
                    <tr>
                      <td>
                      <img src="../petugas/foto/<?= $dta_petugas['foto_pekerja'] ?>"  alt="Product 1" class="img-circle img-size-50 mr-2">
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
                </table>
                </div>
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
	            text: ' '
	         },
	         xAxis: {
	            categories: ['Petugas']
	         },
	         yAxis: {
	            title: {
	               text: 'Berat Sampah'
	            }
	         },
	              series:
	            [
	            <?php
              // $kelurahan_array = array("Balang Baru", "Barombong", "Bongaya",
              //                          "Bonto Duri", "Jongaya", "Maccini Sombala", "Mangasa",
              //                          "Mannuruki", "Pabaeng-Baeng", "Parang Tambung", "Tanjung Merdeka");
              // foreach ($kelurahan_array as $dta_kelurahan_array){

              $getPetugas = mysqli_query($conn,"SELECT * FROM tb_pekerja WHERE kelurahan_pekerja = '$kelurahan_header' ");
              foreach ($getPetugas as $dta_getPetugas){
                $result= mysqli_query($conn,"SELECT SUM(berat_sampah) AS total_berat FROM tb_laporan_petugas WHERE id_petugas = '$dta_getPetugas[id_pekerja]' ");
                $row = mysqli_fetch_assoc($result)
	                  ?>
	                 //data yang diambil dari database dimasukan ke variable nama dan data
	                 //
	                  {	name: '<?php echo $dta_getPetugas['nama_pekerja'] ?>',
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
