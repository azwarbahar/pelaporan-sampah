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
            <h1 class="m-0 text-dark">Data Petugas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/">Home</a></li>
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/petugas/data.php">Data Petugas</a></li>
              <li class="breadcrumb-item active">Tambah Koordinator</li>
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
              <h3 class="card-title">Tambah Koordinator Petugas</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">

              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">NIK</label>
                  <input type="text" id="nik_pekerja" name="nik_pekerja"class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputName">Nama Lengkap</label>
                  <input type="text" id="nama_pekerja" name="nama_pekerja"class="form-control">
                </div>

                <div class="form-group">
                <label for="inputName">Jenis Kelamin</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_kelamin_pekerja" id="jenis_kelamin_pekerja">
                    <option selected="selected" value="-">- Pilih -</option>
                    <option value="Laki - laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="inputName">Usia</label>
                  <input type="number" id="usia_pekerja" name="usia_pekerja"class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputName">Alamat Lengkap</label>
                  <input type="text" id="alamat_pekerja" name="alamat_pekerja"class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputName">Telpon</label>
                  <input type="number" id="telpon_pekerja" name="telpon_pekerja"class="form-control">
                </div>

                <!-- <div class="form-group">
                <label for="inputName">Area Kerja</label>
                  <select class="form-control select2" style="width: 100%;" name="area_pekerja" id="area_pekerja">
                    <option selected="selected" value="-">- Pilih -</option>
                    <?php
                      // $area = mysqli_query($conn, "SELECT * FROM tb_area WHERE kelurahan_area = '$kelurahan_header'");
                      // foreach($area as $dta_area){
                      //   echo "<option value='$dta_area[id_area]'>$dta_area[nama_area]</option>";
                      // }
                    ?>
                  </select>
                </div> -->

                <!-- <div class="form-group">
                <label for="inputName">Kendaraan Pekerja</label>
                  <select class="form-control select2" style="width: 100%;" name="kendaraan_pekerja" id="kendaraan_pekerja">
                    <option selected="selected" value="-">- Pilih -</option>
                    <?php
                      // $kenderaan = mysqli_query($conn, "SELECT * FROM tb_kendaraan WHERE kelurahan_kendaraan = '$kelurahan_header' AND kondisi_kendaraan='Baik' AND status_kendaraan='Aktif'");
                      // foreach($kenderaan as $dta_kendaraan){
                      //   echo "<option value='$dta_kendaraan[id_kendaraan]'>$dta_kendaraan[kode_kendaraan] - $dta_kendaraan[nama_kendaraan]</option>";
                      // }
                    ?>
                  </select>
                </div> -->

                <div class="form-group">
                      <label for="customFile">Foto</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto_pekerja" name="foto_pekerja" onchange="readURL(this);" >
                        <label class="custom-file-label" for="foto_pekerja">Choose file</label>
                      </div>
                    </div>
                    <br>
                    <img style="max-width:180px; max-height:180px;" id="blah" src="/pelaporan-sampah/assets/dist/img/default-150x150.png" alt="your image" />

                <div class="col-12">
                  <input type="hidden" value="<?= $kelurahan_header ?>" name="kelurahan_pekerja">
                <button type="submit" name="submit_koordinator" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
                <a href="/pelaporan-sampah/kelurahan/admin/petugas/data.php" class="btn btn-secondary float-right" style="margin-top: 3% ;">Batal</a>
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