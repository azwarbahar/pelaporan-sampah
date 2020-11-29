<?php
require_once '../template/header/header.php';

$id_kendaraan = $_GET['id_kendaraan'];
$result = mysqli_query($conn, "SELECT * FROM tb_kendaraan WHERE id_kendaraan = '$id_kendaraan'");
$dta = mysqli_fetch_assoc($result);


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Kendaraan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/">Home</a></li>
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/kendaraan/data.php">Data Kendaraan</a></li>
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
        <div class="col-md-10" style="left: 10px">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Kendaraan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Kode Kendaraan</label>
                <input type="hidden" value="<?= $dta['kode_kendaraan']?>" id="kode_kendaraan" name="kode_kendaraan" class="form-control">
                <input type="text" disabled value="<?= $dta['kode_kendaraan']?>"  class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Type Kendaraan</label>
                <select class="form-control select2" style="width: 100%;" name="type_kendaraan" id="type_kendaraan">
                  <option selected="selected" value="<?= $dta['type_kendaraan']?>"><?= $dta['type_kendaraan']?></option>
                  <option value="Roda 2">Kendaraan Roda 2</option>
                  <option value="Roda 3">Kendaraan Roda 3</option>
                  <option value="Roda 4+">Kendaraan Roda 4+</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputName">Nama Kendaraan</label>
                <input type="text" value="<?= $dta['nama_kendaraan']?>" id="nama_kendaraan" name="nama_kendaraan"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Nomor Kendaraan</label>
                <input type="text" value="<?= $dta['nomor_kendaraan']?>" id="nomor_kendaraan" name="nomor_kendaraan"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Kondisi Kendaraan</label>
                <select class="form-control select2" style="width: 100%;" name="kondisi_kendaraan" id="kondisi_kendaraan">
                  <option selected="selected" value="<?= $dta['kondisi_kendaraan']?>"><?= $dta['kondisi_kendaraan']?></option>
                  <option value="Baik">Baik</option>
                  <option value="Rusak">Rusak</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputName">Status Kendaraan</label>
                <select class="form-control select2" style="width: 100%;" name="status_kendaraan" id="status_kendaraan">
                  <option selected="selected" value="<?= $dta['status_kendaraan']?>"><?= $dta['status_kendaraan']?></option>
                  <option value="Aktif">Aktif</option>
                  <option value="Non Aktif">Non Aktif</option>
                </select>
              </div>

              <div class="form-group">
                    <label for="customFile">Foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_kendaraan" name="foto_kendaraan" onchange="readURL(this);" >
                      <label class="custom-file-label" for="foto_kendaraan">Choose file</label>
                    </div>
                  </div>
                  <br>
                  <img style="max-width:180px; max-height:180px;" id="blah" src="foto/<?= $dta['foto_kendaraan'] ?>" alt="your image" />

              <div class="col-12">
                <input type="hidden" name="foto_now" value="<?= $dta['foto_kendaraan'] ?>">
                <input type="hidden" value="<?= $dta['id_kendaraan'] ?>" name="id_kendaraan" id="id_kendaraan">
              <button type="submit" name="edit_kendaraan" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
              <a href="/pelaporan-sampah/kelurahan/admin/kendaraan/data.php" class="btn btn-secondary float-right" style="margin-top: 3% ;">Batal</a>
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