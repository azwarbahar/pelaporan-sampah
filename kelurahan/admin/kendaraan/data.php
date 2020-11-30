<?php
require_once '../template/header/header.php';
$kendaraan = mysqli_query($conn, "SELECT * FROM tb_kendaraan WHERE kelurahan_kendaraan = '$kelurahan_header'");
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
              <li class="breadcrumb-item active">Data Kendaraan</li>
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
                <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Kendaraan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Foto</th>
                    <th>Type</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Kondisi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; foreach($kendaraan as $dta) { ?>
                  <tr>
                    <td><?= $dta['kode_kendaraan'] ?></td>
                    <td style="text-align:center"><img src="foto/<?php echo $dta['foto_kendaraan'] ?>" alt="" border=3 height=60 width=60></img></td>
                    <td><?= $dta['type_kendaraan'] ?></td>
                    <td><?= $dta['nama_kendaraan'] ?></td>
                    <td><?= $dta['nomor_kendaraan'] ?></td>
                    <?php
                      if ($dta['kondisi_kendaraan'] == "Baik"){
                        echo "<td style='text-align:center'><span class='badge bg-success'>Baik</span></td>";
                      } else if ($dta['kondisi_kendaraan'] == "Rusak"){
                        echo "<td style='text-align:center'><span class='badge bg-danger'>Rusak</span></td>";
                      }
                    ?>
                    <td style="text-align:center">
                        <a href="edit.php?id_kendaraan=<?= $dta['id_kendaraan'] ?>" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger<?= $dta['id_kendaraan'] ?>" ><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>

      <!-- Modal Hapus -->
      <div class="modal fade" tabindex="-1" id="modal-danger<?= $dta['id_kendaraan'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data Kendaraan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin Menghapus Data Kendaraan</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="controller.php?hapus_kendaraan=true&id_kendaraan=<?= $dta['id_kendaraan'] ?>" type="button" class="btn btn-outline-light">Hapus</a>
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