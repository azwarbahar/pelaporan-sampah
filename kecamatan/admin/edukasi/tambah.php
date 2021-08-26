<?php
require_once '../template/header/header.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Edukasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item"><a href="../edukasi/data.php">Data Edukasi</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10" style="left: 10px">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Konten</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">
            <div class="card-body">

            <div class="form-group">
                <label for="inputName">Judul Konten</label>
                <input type="text" id="judul_edukasi" name="judul_edukasi"class="form-control">
              </div>

            <div class="form-group">
                <label for="customFile">Gambar Edukasi</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="foto_edukasi" name="foto_edukasi" onchange="readURL(this);" >
                  <label class="custom-file-label" for="foto_edukasi">Choose file</label>
                </div>
              </div>
              <img style="max-width:180px; max-height:180px;" id="blah" src="/reses-dprd/assets/dist/img/default-150x150.png" alt="your image" />

              <div class="col-12">
              <button type="submit" name="submit_edukasi" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
              <a href="data.php" class="btn btn-secondary float-right" style="margin-top: 3% ;">Batal</a>
            </div>
            </form>
            </div>
            <!-- /.card-body -->

            <br>
          </div>
          <!-- /.card -->


        </div>
      </div>
    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->


<?php
require '../template/footer/footer.php';
?>