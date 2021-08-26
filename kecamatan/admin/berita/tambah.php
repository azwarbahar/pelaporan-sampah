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
            <h1 class="m-0 text-dark">Data Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item"><a href="../berita/data.php">Data Berita</a></li>
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
        <div class="col-md-11" style="left: 10px">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Berita</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">
            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Judul Berita</label>
                <input type="text" id="judul_berita" name="judul_berita"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Penulis</label>
                <input type="text" id="penulis_berita" name="penulis_berita"class="form-control">
              </div>

              <div class="form-group">
                    <label for="customFile">Foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_berita" name="foto_berita" onchange="readURL(this);" >
                      <label class="custom-file-label" for="foto_berita">Choose file</label>
                    </div>
                  </div>
                  <br>
                  <img style="max-width:500px; max-height:500px;" id="blah" src="" alt="" />
                  <br>
                  <br>

              <div class="form-group">
                <label for="inputName">Isi Berita</label>
                <textarea class="form-control" name="isi_berita" rows="200" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 250px;"></textarea>
              </div>

              <div class="col-12">
              <button type="submit" name="submit_berita" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
              <a href="../berita/data.php" class="btn btn-secondary float-right" style="margin-top: 3% ;">Batal</a>
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