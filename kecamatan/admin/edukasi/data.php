<?php
require_once '../template/header/header.php';

$edukasi = mysqli_query($conn, "SELECT * FROM tb_edukasi");
$dta_edukasi = mysqli_fetch_assoc($edukasi);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <!-- <a href="/reses-dprd/anggota-dpr/reses/data.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a> -->
              <h1 class="m-0 text-dark">Data Edukasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kecamatan/admin/">Home</a></li>
              <li class="breadcrumb-item active">Data Edukasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Konten</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


              <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Foto
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <?php
                  if($dta_edukasi==null){
                    echo '<div class="col-12"><h5 style="background-color: grey; text-align: center; color:white;">Kosong</h5></div>';
                  } else {
                    foreach($edukasi as $dta) {
                  ?>

                  <div class="col-sm-2">
                    <a href="foto/<?= $dta['foto_edukasi'] ?>" data-toggle="lightbox" data-title="Judul : <?= $dta['judul_edukasi'] ?>" data-gallery="gallery">
                      <img src="foto/<?= $dta['foto_edukasi'] ?>" style="min-height: 150px; min-width: 150px; max-width:150px; max-height:150px;" class="img-fluid mb-2"/>
                    </a>
                  </div>

                  <?php } } ?>
                </div>
              </div>
            </div>
          </div>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
require '../template/footer/footer.php';
?>