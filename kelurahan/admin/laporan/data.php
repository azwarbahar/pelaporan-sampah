<?php
require '../template/header/header.php';
$laporan = mysqli_query($conn, "SELECT * FROM tb_laporan WHERE kelurahan_laporan ='$get_data_akun[kelurahan_akun_kelurahan]'");
// $dta_jadwal = mysqli_fetch_assoc($jadwal);
// $aspirasi = mysqli_query($conn, "SELECT * FROM tb_aspirasi WHERE status_aspirasi='Approve' AND id_jadwal='$dta_jadwal[id_jadwal]'");

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/reses-dprd/anggota-dpr/">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
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
              <h4 style="text-align: center;"><b>DAFTAR LAPORAN YANG TELAH DILAPORKAN</b></h4>
              <h4 style="text-align: center;"><b>OLEH MASYARAKAT MENGGUNAKAN APLIKASI MTR TAMALATE</b></h4>
                <!-- <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Laporan</a> -->
                <!-- <div class="col-3">
                    <div class="form-group">
                      <label for="inputName">Jadwal</label>
                      <select class="form-control select2" style="width: 100%;" name="jadwal_laporan" id="jadwal_laporan">
                      <option selected="selected" value="-">- Jadwal -</option>
                      <?php
                        // $jadwal = mysqli_query($conn, "SELECT * FROM tb_jadwal");
                        // // $dta_jadwal = mysqli_fetch_assoc($jadwal);
                        // foreach($jadwal as $dta){
                        //   echo "<option  value='$dta[id_jadwal]'>$dta[nama_jadwal]</option>";
                        // }
                      ?>
                      </select>
                    </div>
                  </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NIK</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody id="table-approve">
                  <?php
                   $i = 1; foreach($laporan as $dta) {
                    ?>
                  <tr>
                  <td style="text-align: center;"><?= $i ?></td>
                    <td><?= $dta['foto_laporan'] ?></td>
                    <td><?= $dta['nik_laporan'] ?></td>
                    <td><?= $dta['keterangan_laporan'] ?></td>
                    <td><?= $dta['staus_laporan'] ?></td>
                    <td style="text-align:center">
                        <a href="detail.php?id_masyarakat=<?= $dta['id_masyarakat'] ?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i></a>
                    </td>
                    <?php
                      // $get_id_anggota1 = $dta['id_anggota'];
                      // $anggota = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE id_anggota = $get_id_anggota1");
                      // while($row_anggota=mysqli_fetch_assoc($anggota)) {
                      //   echo " <td>$row_anggota[nama_anggota]</td>";
                      //   $get_id_fraksi = $row_anggota['id_fraksi'];
                      //   $fraksi = mysqli_query($conn, "SELECT * FROM tb_fraksi WHERE id_fraksi = $get_id_fraksi");
                      //   while($row_fraksi=mysqli_fetch_assoc($fraksi)) {
                      //     $get_id_partai = $row_fraksi['id_partai'];
                      //     $partai = mysqli_query($conn, "SELECT * FROM tb_partai WHERE id_partai = $get_id_partai");
                      //     while($row_partai=mysqli_fetch_assoc($partai)) {
                      //       echo " <td>$row_partai[nama_partai]</td>";
                      //     }
                      //   }
                      //   $get_id_dapil = $row_anggota['id_dapil'];
                      //   $dapil = mysqli_query($conn, "SELECT * FROM tb_dapil WHERE id_dapil = $get_id_dapil");
                      //   while($row_dapil=mysqli_fetch_assoc($dapil)) {
                      //     echo " <td style='text-align: center;'>$row_dapil[nama_dapil]</td>";
                      //   }
                      // }
                    ?>
                  </tr>

      <!-- Modal Hapus -->
      <div class="modal fade" tabindex="-1" id="modal-danger<?= $dta['id_laporan'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Laporan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin Menghapus Laporan</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="controller.php?hapus_laporan=true&id_laporan=<?= $dta['id_laporan'] ?>" type="button" class="btn btn-outline-light">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  <?php 
                  $i = $i + 1; } 
                  ?>
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->
                <div class="col-12">
                  <a href="laporan-print.php" target="_blank" class="btn btn-primary" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Cetak Print/PDF
                  </a>
                </div>

              <br>
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