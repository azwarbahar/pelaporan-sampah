<?php
require_once '../template/header/header.php';
$masyarakat = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE kelurahan_masyarakat = '$kelurahan_header'");
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
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item active">Data Masyarakat</li>
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
                <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Masyarakat</a>
                <div class="col-12">
                  <a href="print-masyarakat.php" target="_blank" class="btn btn-info float-right"><i class="fas fa-print"></i> Print</a>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Telpon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; foreach($masyarakat as $dta) { ?>
                  <tr>
                    <td style="text-align:center"><?= $i ?></td>
                    <td><?= $dta['nik_masyarakat'] ?></td>
                    <td><?= $dta['nama_masyarakat'] ?></td>
                    <td><?= $dta['telpon_masyarakat'] ?></td>
                    <td><?= $dta['alamat_masyarakat'] ?></td>
                    <?php
                      if ($dta['status_masyarakat'] == "Aktif"){
                        echo "<td style='text-align:center'><span class='badge bg-success'>Aktif</span></td>";
                      } else if ($dta['status_masyarakat'] == "Non Aktif"){
                        echo "<td style='text-align:center'><span class='badge bg-danger'>Non Aktif</span></td>";
                      }
                    ?>
                    <td style="text-align:center">
                        <a href="detail.php?id_masyarakat=<?= $dta['id_masyarakat'] ?>" type="button" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
                        <a href="edit.php?id_masyarakat=<?= $dta['id_masyarakat'] ?>" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger<?= $dta['id_masyarakat'] ?>" ><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>

      <!-- Modal Hapus -->
      <div class="modal fade" tabindex="-1" id="modal-danger<?= $dta['id_masyarakat'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data Masyarakat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin Menghapus Data Masyarakat</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="controller.php?hapus_masyarakat=true&id_masyarakat=<?= $dta['id_masyarakat'] ?>" type="button" class="btn btn-outline-light">Hapus</a>
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