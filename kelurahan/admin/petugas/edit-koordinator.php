<?php
require_once '../template/header/header.php';


$id_pekerja = $_GET['id_pekerja'];
$result = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$id_pekerja'");
$dta = mysqli_fetch_assoc($result);


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
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Data Koordinator Petugas</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">

              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">NIK</label>
                  <input type="text" id="nik_pekerja" value="<?= $dta['nik_pekerja'] ?>" name="nik_pekerja"class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputName">Nama Lengkap</label>
                  <input type="text" id="nama_pekerja" value="<?= $dta['nama_pekerja'] ?>" name="nama_pekerja"class="form-control">
                </div>

                <div class="form-group">
                <label for="inputName">Jenis Kelamin</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_kelamin_pekerja" id="jenis_kelamin_pekerja">
                    <option selected="selected" value="<?= $dta['jenis_kelamin_pekerja'] ?>"><?= $dta['jenis_kelamin_pekerja'] ?></option>
                    <option value="Laki - laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="inputName">Usia</label>
                  <input type="number" id="usia_pekerja" value="<?= $dta['usia_pekerja'] ?>" name="usia_pekerja"class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputName">Alamat Lengkap</label>
                  <input type="text" id="alamat_pekerja" value="<?= $dta['alamat_pekerja'] ?>" name="alamat_pekerja"class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputName">Telpon</label>
                  <input type="number" id="telpon_pekerja" value="<?= $dta['telpon_pekerja']?>" name="telpon_pekerja" class="form-control">
                </div>

                <!-- <div class="form-group">
                <label for="inputName">Area Kerja</label>
                  <select class="form-control select2" style="width: 100%;" name="area_pekerja" id="area_pekerja">
                    <option selected="selected" value="-">- Pilih -</option>
                    <?php
                      // $area = mysqli_query($conn, "SELECT * FROM tb_area WHERE kelurahan_area = '$kelurahan_header'");
                      // while($row=mysqli_fetch_assoc($area)) {
                      // if ($dta['area_pekerja'] == $row['id_area']) {
                      //   $selected = 'selected="selected"';
                      // } else {
                      //   $selected = '';
                      // }
                      // echo "<option value='$row[id_area]' $selected>$row[nama_area]</option>";
                      // }
                    ?>
                  </select>
                </div> -->

                <!-- <div class="form-group">
                <label for="inputName">Kendaraan Pekerja</label>
                  <select class="form-control select2" style="width: 100%;" name="kendaraan_pekerja" id="kendaraan_pekerja">
                    <?php
                      // $kenderaan = mysqli_query($conn, "SELECT * FROM tb_kendaraan WHERE kelurahan_kendaraan = '$kelurahan_header' AND kondisi_kendaraan='Baik' AND status_kendaraan='Aktif'");

                      //   foreach($kenderaan as $row1){
                      //     if ($dta['kendaraan_pekerja'] == $row1['id_kendaraan']) {
                      //       $selected = 'selected="selected"';
                      //     } else {
                      //       $selected = '';
                      //     }
                      //     echo "<option value='$row1[id_kendaraan]' $selected>$row1[kode_kendaraan] - $row1[nama_kendaraan]</option>";
                      //   }

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
                    <img style="max-width:180px; max-height:180px;" id="blah" src="foto/<?php echo $dta['foto_pekerja'] ?>" alt="your image" />

              <div class="col-12">
              <input type="hidden" name="id_pekerja" value="<?= $dta['id_pekerja'] ?>">
              <input type="hidden" name="foto_now" value="<?= $dta['foto_pekerja'] ?>">
              <button type="submit" name="edit_koordinator" id="edit_pekerja" disabled="" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	$('form')
		.each(function(){
			$(this).data('serialized', $(this).serialize())
		})
        .on('change input', function(){
            $(this)
                .find('input:submit, button:submit')
                    .attr('disabled', $(this).serialize() == $(this).data('serialized'))
            ;
         })
		.find('input:submit, button:submit')
			.attr('disabled', true)
	;
</script>


<?php
require '../template/footer/footer.php';
?>