<?php
require_once '../template/header/header.php';


$id_admin = $_GET['id_admin'];
$result = mysqli_query($conn, "SELECT * FROM tb_akun_kelurahan WHERE id_akun_kelurahan = '$id_admin'");
$dta = mysqli_fetch_assoc($result);


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item"><a href="../user/data.php">User Admin</a></li>
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
              <h3 class="card-title">Edit User Admin</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Lengkap</label>
                <input type="text" value="<?= $dta['nama_akun_kelurahan'] ?>" id="nama_admin" name="nama_admin"class="form-control">
              </div>


              <div class="form-group">
                <label for="inputName">Username</label>
                <input type="text" value="<?= $dta['username_akun_kelurahan'] ?>" disabled id="username" name="username"class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Kelurahan</label>
              <div class="col-4">
                <select class="form-control select2" style="width: 100%;" name="kelurahan" id="kelurahan">
                  <option selected="selected" value="<?= $dta['kelurahan_akun_kelurahan'] ?>"><?= $dta['kelurahan_akun_kelurahan'] ?></option>
                  <option value="Balang Baru">Balang Baru</option>
                  <option value="Barombong">Barombong</option>
                  <option value="Bongaya">Bongaya</option>
                  <option value="Bonto Duri">Bonto Duri</option>
                  <option value="Jongaya">Jongaya</option>
                  <option value="Maccini Sombala">Maccini Sombala</option>
                  <option value="Mangasa">Mangasa</option>
                  <option value="Manuruki">Manuruki</option>
                  <option value="Pabaeng-Baeng">Pa'baeng-Baeng</option>
                  <option value="Parang Tambung">Parang Tambung</option>
                  <option value="Tanjung Merdeka">Tanjung Merdeka</option>
                </select>
              </div>
              </div>

              <div class="form-group">
                    <label for="customFile">Foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_admin" name="foto_admin" onchange="readURL(this);" >
                      <label class="custom-file-label" for="foto_admin">Choose file</label>
                    </div>
                  </div>
                  <br>
                  <img style="max-width:180px; max-height:180px;" id="blah" src="foto/<?php echo $dta['foto_akun_kelurahan'] ?>" alt="your image" />

              <div class="col-12">
              <input type="hidden" name="id_admin" value="<?= $dta['id_akun_kelurahan'] ?>">
              <input type="hidden" name="foto_now" value="<?= $dta['foto_akun_kelurahan'] ?>">
              <button type="submit" name="edit_admin" id="edit_admin" disabled="" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan</button>
              <a href="../user/data.php" class="btn btn-secondary float-right" style="margin-top: 3% ;">Batal</a>
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