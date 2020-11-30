<?php
require_once '../template/header/header.php';


$id_masyarakat = $_GET['id_masyarakat'];
$result = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE id_masyarakat = '$id_masyarakat'");
$dta = mysqli_fetch_assoc($result);


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
              <h3 class="card-title">Edit Data Masyarakat</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">NIK</label>
                <input type="text" value="<?= $dta['nik_masyarakat'] ?>" id="nik_masyarakat" name="nik_masyarakat"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Nama Lengkap</label>
                <input type="text" value="<?= $dta['nama_masyarakat'] ?>" id="nama_masyarakat" name="nama_masyarakat"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Alamat Lengkap</label>
                <input type="text" value="<?= $dta['alamat_masyarakat'] ?>" id="alamat_masyarakat" name="alamat_masyarakat"class="form-control">
              </div>

              <div class="form-group">
              <label for="inputName">Area</label>
                <select class="form-control select2" style="width: 100%;" name="area_masyarakat" id="area_masyarakat">
                  <!-- <option selected="selected" value="-">- Pilih -</option> -->
                  <?php
                    $area = mysqli_query($conn, "SELECT * FROM tb_area WHERE kelurahan_area = '$kelurahan_header'");
                    while($row=mysqli_fetch_assoc($area)) {
                      if ($dta['area_masyarakat'] == $row['id_area']) {
                        $selected = 'selected="selected"';
                      } else {
                        $selected = '';
                      }
                      echo "<option value='$row[id_area]' $selected>$row[nama_area]</option>";
                    }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label for="inputName">Telpon</label>
                <input type="number" value="<?= $dta['telpon_masyarakat'] ?>" id="telpon_masyarakat" name="telpon_masyarakat"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Usia</label>
                <input type="number" value="<?= $dta['usia_masyarakat'] ?>" id="usia_masyarakat" name="usia_masyarakat"class="form-control">
              </div>

              <div class="form-group">
              <label for="inputName">Kelurahan</label>
                <select class="form-control select2" style="width: 100%;" name="kelurahan_masyarakat" id="kelurahan_masyarakat">
                  <option selected="selected" value="<?= $dta['kelurahan_masyarakat'] ?>"><?= $dta['kelurahan_masyarakat'] ?></option>
                  <option value="Balang Baru">Balang Baru</option>
                  <option value="Barombong">Barombong</option>
                  <option value="Bongaya">Bongaya</option>
                  <option value="Bonto Duri">Bonto Duri</option>
                  <option value="Jongaya">Jongaya</option>
                  <option value="Maccini Sombala">Maccini Sombala</option>
                  <option value="Mangasa">Mangasa</option>
                  <option value="Mannuruki">Mannuruki</option>
                  <option value="Pa'baeng-Baeng">Pa'baeng-Baeng</option>
                  <option value="Parang Tambung">Parang Tambung</option>
                  <option value="Tanjung Merdeka">Tanjung Merdeka</option>
                </select>
              </div>

              <div class="form-group">
                    <label for="customFile">Foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_masyarakat" name="foto_masyarakat" onchange="readURL(this);" >
                      <label class="custom-file-label" for="foto_masyarakat">Choose file</label>
                    </div>
                  </div>
                  <br>
                  <img style="max-width:180px; max-height:180px;" id="blah" src="foto/<?php echo $dta['foto_masyarakat'] ?>" alt="your image" />

              <div class="col-12">
              <input type="hidden" name="id_masyarakat" value="<?= $dta['id_masyarakat'] ?>">
              <input type="hidden" name="foto_now" value="<?= $dta['foto_masyarakat'] ?>">
              <button type="submit" name="edit_masyarakat" id="edit_masyarakat" disabled="" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
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