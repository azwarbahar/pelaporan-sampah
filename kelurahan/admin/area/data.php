<?php
require_once '../template/header/header.php';
$area = mysqli_query($conn, "SELECT * FROM tb_area WHERE kelurahan_area = '$kelurahan_header'");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Area Kerja</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item active">Data Area Kerja</li>
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
              <button data-toggle="modal" data-target="#modal-xl" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Area Kerja</button>
                <!-- <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Area Kerja</a> -->
              <div class="col-12">
                  <a href="print-area-kerja.php" target="_blank" class="btn btn-info float-right"><i class="fas fa-print"></i> Print</a>
                  </div>
              </div>

              <!-- Modal Tambah AREA -->
              <div class="modal fade" id="modal-xl">
                <div class="modal-dialog modal-xl">
                  <form method="POST" action="controller.php" enctype="multipart/form-data">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Area Kerja</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="form-group">
                          <label>Area Kerja</label>
                          <textarea class="form-control" name="nama_area" rows="3" placeholder="Contoh : Jl Melati - Jl Mawar - Jl Rose"></textarea>
                        </div>

                      </div>
                      <div class="modal-footer justify-content-between">
                        <input type="hidden" name="kelurahan_area" value="<?= $kelurahan_header ?>">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" name="submit_area" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </form>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th style="width: fit-content;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; foreach($area as $dta) { ?>
                  <tr>
                    <td style="text-align:center"><?= $i ?></td>
                    <td><?= $dta['nama_area'] ?></td>
                    <td style="text-align:center">
                        <a href="#" type="button" data-toggle="modal" data-target="#modal-xl<?= $dta['id_area'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger<?= $dta['id_area'] ?>" ><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>


              <!-- Modal Tambah AREA2 -->
              <div class="modal fade" id="modal-xl<?= $dta['id_area'] ?>">
                <div class="modal-dialog modal-xl">
                  <form method="POST" action="controller.php" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Area Kerja</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <div class="form-group">
                        <label>Area Kerja</label>
                        <textarea class="form-control" name="nama_area" rows="3" placeholder="Contoh : Jl Melati - Jl Mawar - Jl Rose"><?= $dta['nama_area'] ?></textarea>
                      </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                      <input type="hidden" name="id_area" id="id_area" value="<?= $dta['id_area'] ?>">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                      <button type="submit" name="edit_area" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                  </form>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

      <!-- Modal Hapus -->
      <div class="modal fade" tabindex="-1" id="modal-danger<?= $dta['id_area'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data Area Kerja</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin Menghapus Data Area Kerja</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="controller.php?hapus_area=true&id_area=<?= $dta['id_area'] ?>" type="button" class="btn btn-outline-light">Hapus</a>
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