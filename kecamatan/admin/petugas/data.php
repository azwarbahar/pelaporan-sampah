<?php
require_once '../template/header/header.php';
$pekerja = mysqli_query($conn, "SELECT * FROM tb_pekerja");
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
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kecamatan/admin/">Home</a></li>
              <li class="breadcrumb-item active">Data Petugas</li>
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
                <!-- <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Petugas</a> -->
                <!-- <a href="tambah-koordinator.php" type="button" class="btn btn-info"><i class="fa fa-plus-square"></i>&nbsp Tambah Koordinator</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Foto</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Telpon</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; foreach($pekerja as $dta) { ?>
                  <tr>
                    <td style="text-align:center"><img src="../../../kelurahan/admin/petugas/foto/<?php echo $dta['foto_pekerja'] ?>" alt="" border=3 height=60 width=60></img></td>
                    <td style="font-size: small;"><?= $dta['nik_pekerja'] ?></td>
                    <td style="font-size: small;"><?= $dta['nama_pekerja'] ?></td>
                    <td style="font-size: small;"><?= $dta['telpon_pekerja'] ?></td>
                    <td style="font-size: small;"><?= $dta['role_pekerja'] ?></td>
                    <?php
                      if ($dta['status_pekerja'] == "Aktif"){
                        echo "<td style=' font-size: small; text-align:center'><span class='badge bg-success'>Aktif</span></td>";
                      } else if ($dta['status_pekerja'] == "Non Aktif"){
                        echo "<td style=' font-size: small; text-align:center'><span class='badge bg-danger'>Non Aktif</span></td>";
                      }
                    ?>
                    <td style="text-align:center; width: 20px;">
                      <a class="btn btn-info btn-sm" href="edit.php?id_pekerja=<?= $dta['id_pekerja'] ?>"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>

      <!-- Modal Hapus -->
      <div class="modal fade" tabindex="-1" id="modal-danger<?= $dta['id_pekerja'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data Petugas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin Menghapus Data Petugas</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="controller.php?hapus_pekerja=true&id_pekerja=<?= $dta['id_pekerja'] ?>" type="button" class="btn btn-outline-light">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      <!-- Modal Reset Password -->
      <div class="modal fade" tabindex="-1" id="modal-warning<?= $dta['id_pekerja'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Reset Password Petugas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin Reset Password Petugas</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="controller.php?reset_password_pekerja=true&id_pekerja=<?= $dta['id_pekerja'] ?>&nik_pekerja=<?= $dta['nik_pekerja'] ?>" type="button" class="btn btn-outline-light">Reset</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- Modal NON Aktif -->
      <div class="modal fade" tabindex="-1" id="modal-default<?= $dta['id_pekerja'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
            <?php
              $status_modal= "";
                if ($dta['status_pekerja'] == "Aktif"){
                  $status_modal = "Non Aktif";
                  } else if ($dta['status_pekerja'] == "Non Aktif"){
                  $status_modal = "Aktif";
                }
            ?>
              <h4 class="modal-title"><?= $status_modal ?>kan Petugas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin <?= $status_modal ?>kan Petugas</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <a href="controller.php?update_status_pekerja=true&id_pekerja=<?= $dta['id_pekerja'] ?>&status_pekerja_ubah=<?= $status_modal ?>" type="button" class="btn btn-primary">OK</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  <?php $i = $i + 1; } ?>
                  </tbody>

                </table>
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