
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
                  // $mahasiswa = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
                  // $row_mahasiswa = mysqli_num_rows($mahasiswa);
                  // $row_mahasiswa_final = $row_mahasiswa;
                  // echo "<h3>$row_mahasiswa_final</h3>";
                ?>
                <h3>20</h3>
                <p>Data Masyarakat</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="../mahasiswa/data.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                    // $aspek = mysqli_query($conn, "SELECT * FROM tb_aspek");
                    // $row_aspek = mysqli_num_rows($aspek);
                    // $row_aspek_final = $row_aspek;
                    // echo "<h3>$row_aspek_final</h3>";
                  ?>
                  <h3>20</h3>
                  <p>Jumlah Kendaraan</p>
                </div>
                <div class="icon">
                  <i class="fas fa-truck"></i>
                </div>
                <a href="../aspek/data.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                    // $kriteria = mysqli_query($conn, "SELECT * FROM tb_kriteria");
                    // $row_kriteria = mysqli_num_rows($kriteria);
                    // $row_kriteria_final = $row_kriteria;
                    // echo "<h3>$row_kriteria_final</h3>";
                  ?>
                  <h3>20</h3>
                  <p>Data Petugas</p>
                </div>
                <div class="icon">
                  <i class="fas fa-id-badge"></i>
                </div>
                <a href="../kriteria/data.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                  // $admin = mysqli_query($conn, "SELECT * FROM tb_admin");
                  // $row_admin = mysqli_num_rows($admin);
                  // $row_admin_final = $row_admin;
                  // echo "<h3>$row_admin_final</h3>";
                ?>
                <h3>20</h3>
                <p>Admin</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="../admin/data.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <br>
        <!-- /.row (main row) -->

        <div class="row">
          <div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Ranking Diagram Bar</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div id="container2" style="min-width: fit-content; height: fit-content; margin: 0 auto"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ranking Tabel</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                
              <!-- <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Nilai</th>
                      <th style="width: 40px">Ranking</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // $hasil_akhir = mysqli_query($conn, "SELECT * FROM tb_hasil_akhir_mahasiswa ORDER BY nilai_hasil_akhir_mahasiswa DESC");
                    // $i = 1; foreach($hasil_akhir as $dta_hasil_akhir) {
                    ?>
                    <tr>
                      
                      <?php
                      // if($i == 1){
                      //   echo "<td><span class='badge bg-success'> Ranking $i </span></td>";
                      // } else if($i == 2){
                      //   echo "<td><span class='badge bg-warning'> Ranking $i </span></td>";
                      // } else if($i == 3){
                      //   echo "<td><span class='badge bg-danger'> Ranking $i </span></td>";
                      // } else {
                      //   echo "<td><span class='badge bg-secondary'> Ranking $i </span></td>";
                      // }
                      ?>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" target="_blank" href="nilai-mahasiswa-print.php?id_mahasiswa=<?= $dta_hasil_akhir['id_mahasiswa']  ?>&ranking=<?= $i ?>"><i class="fas fa-print"></i> Print</a>
                      </td>
                    </tr>
                    <?php //$i = $i + 1; } ?>
                  </tbody>
                </table>
                <br>
                <a href="ranking-print.php" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print Ranking</a>
              </div> -->
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
	            <?php while ($row = mysqli_fetch_assoc($result)){
	                  ?>
	                 //data yang diambil dari database dimasukan ke variable nama dan data
	                 //
	                  {	name: '<?php echo $row['nama_mahasiswa'] ?>',
	                    data: [<?php echo $row['nilai_hasil_akhir_mahasiswa'] ?>]
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
