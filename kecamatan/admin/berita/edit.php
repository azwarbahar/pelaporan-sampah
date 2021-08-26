<?php
require_once '../template/header/header.php';

$id_berita = $_GET['id_berita'];
$result = mysqli_query($conn, "SELECT * FROM tb_berita WHERE id_berita = '$id_berita'");
$dta = mysqli_fetch_assoc($result);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item"><a href="../berita/data.php">Data berita</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
              <h3 class="card-title">Tambah berita</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">
            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Judul Berita</label>
                <input type="text" value="<?= $dta['judul_berita'] ?>" id="judul_berita" name="judul_berita"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Penulis</label>
                <input type="text" id="penulis_berita" value="<?= $dta['penulis_berita'] ?>" name="penulis_berita"class="form-control">
              </div>

              <div class="form-group">
                    <label for="customFile">Foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_berita" name="foto_berita" onchange="readURL(this);" >
                      <label class="custom-file-label" for="foto_berita">Choose file</label>
                    </div>
                  </div>
                  <br>
                  <img style="max-width:500px; max-height:500px;" id="blah" src="foto/<?= $dta['foto_berita'] ?>" alt="" />
                  <br>
                  <br>

              <div class="form-group">
                <label for="inputName">Isi Berita</label>
                <textarea class="form-control"  name="isi_berita" rows="200" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 250px;"><?= $dta['isi_berita'] ?></textarea>
              </div>

              <div class="col-12">
                <input type="hidden" name="foto_now" value="<?= $dta['foto_berita'] ?>">
                <input type="hidden" value="<?= $dta['id_berita'] ?>" name="id_berita" id="id_berita">
              <button type="submit" name="edit_berita" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
              <a href="/pelaporan-sampah/kecamatan/admin/berita/data.php" class="btn btn-secondary float-right" style="margin-top: 3% ;">Batal</a>
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