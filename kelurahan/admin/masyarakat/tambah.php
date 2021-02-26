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
            <h1 class="m-0 text-dark">Data Masyarakat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/">Home</a></li>
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/masyarakat/data.php">Data Masyarakat</a></li>
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
              <h3 class="card-title">Tambah Masyarakat</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">NIK</label>
                <input type="text" id="nik_masyarakat" name="nik_masyarakat"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Nama Lengkap</label>
                <input type="text" id="nama_masyarakat" name="nama_masyarakat"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Alamat Lengkap</label>
                <input type="text" id="alamat_masyarakat" name="alamat_masyarakat"class="form-control">
              </div>

              <div class="form-group">
              <label for="inputName">Area</label>
                <select class="form-control select2" style="width: 100%;" name="area_masyarakat" id="area_masyarakat">
                  <option selected="selected" value="-">- Pilih -</option>
                  <?php
                    $area = mysqli_query($conn, "SELECT * FROM tb_area WHERE kelurahan_area = '$kelurahan_header'");
                    foreach($area as $dta_area){
                      echo "<option value='$dta_area[id_area]'>$dta_area[nama_area]</option>";
                    }
                  ?>
                </select>
              </div>

              <div class="form-group">
              <label for="inputName">Kelurahan</label>
                <select class="form-control select2" style="width: 100%;" name="kelurahan_masyarakat" id="kelurahan_masyarakat">
                  <option selected="selected" value="-">- Pilih -</option>
                  <option value="Balang Baru">Balang Baru</option>
                  <option value="Barombong">Barombong</option>
                  <option value="Bongaya">Bongaya</option>
                  <option value="Bonto Duri">Bonto Duri</option>
                  <option value="Jongaya">Jongaya</option>
                  <option value="Maccini Sombala">Maccini Sombala</option>
                  <option value="Mangasa">Mangasa</option>
                  <option value="Mannuruki">Mannuruki</option>
                  <option value="Pabaeng-Baeng">Pabaeng-Baeng</option>
                  <option value="Parang Tambung">Parang Tambung</option>
                  <option value="Tanjung Merdeka">Tanjung Merdeka</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputName">Telpon</label>
                <input type="number" id="telpon_masyarakat" name="telpon_masyarakat"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Usia</label>
                <input type="number" id="usia_masyarakat" name="usia_masyarakat"class="form-control">
              </div>

              <div class="form-group">
                    <label for="customFile">Foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_masyarakat" name="foto_masyarakat" onchange="readURL(this);" >
                      <label class="custom-file-label" for="foto_masyarakat">Choose file</label>
                    </div>
                  </div>
                  <br>
                  <img style="max-width:180px; max-height:180px;" id="blah" src="/pelaporan-sampah/assets/dist/img/default-150x150.png" alt="your image" />

              <div class="col-12">
              <button type="submit" name="submit_masyarakat" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
              <a href="/pelaporan-sampah/kelurahan/admin/masyarakat/data.php" class="btn btn-secondary float-right" style="margin-top: 3% ;">Batal</a>
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