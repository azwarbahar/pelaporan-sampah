<?php
require '../template/header/header.php';
$laporan_petugas = mysqli_query($conn, "SELECT * FROM tb_laporan_petugas WHERE kelurahan ='$get_data_akun[kelurahan_akun_kelurahan]' ORDER BY id_laporan_petugas DESC");
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
            <h1 class="m-0 text-dark">Laporan Petugas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/">Home</a></li>
              <li class="breadcrumb-item active">Laporan Petugas</li>
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
              <!-- <div class="card-header"> -->
              <!-- <h4 style="text-align: center;"><b>DAFTAR LAPORAN DARI MASYARAKAT</b></h4> -->
              <!-- <h4 style="text-align: center;"><b>MENGGUNAKAN APLIKASI MTR TAMALATE</b></h4> -->
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
              <!-- </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Petugas</th>
                    <th>Kendaraan</th>
                    <th>Tanggal</th>
                    <th>Berat Sampah</th>
                    <th>Foto</th>
                  </tr>
                  </thead>
                  <tbody id="table-approve">
                  <?php
                   $i = 1; foreach($laporan_petugas as $dta) {
                    ?>
                  <tr>
                  <td style="text-align: center;"><?= $i ?></td>
                  <td>
                  <?php
                      $petugas = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$dta[id_petugas]' ");
                      $dta_petugas = mysqli_fetch_assoc($petugas);
                  ?>
                    <img src="../petugas/foto/<?= $dta_petugas['foto_pekerja'] ?>"  alt="Product 1" class="img-circle img-size-50 mr-2">
                      <?= $dta_petugas['nama_pekerja'] ?>
                  </td>
                    <?php
                      $kendaraan = mysqli_query($conn, "SELECT * FROM tb_kendaraan WHERE id_kendaraan = '$dta_petugas[kendaraan_pekerja]'");
                      $dta_kendaraan = mysqli_fetch_assoc($kendaraan);
                      if ($dta_kendaraan != null){
                        echo " <td style='font-size: small;  text-align:center'> <a href='#'>  $dta_kendaraan[nomor_kendaraan] - $dta_kendaraan[nama_kendaraan]</a></td>";
                      } else{
                        echo "
                        <td style='font-size: small;  text-align:center'> - </td>";
                      }

                    ?>
                    <td><?= $dta['crated_at'] ?></td>
                    <td style="text-align: center"><?= $dta['berat_sampah'] ?> Kg</td>
                    <td style="text-align: center">
                      <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-detail-laporan"><i class="fa fa-eye"></i></button> -->

                        <a href="../../../assets/dist/img/lapor_petugas/<?= $dta['foto_bukti'] ?>" data-toggle="lightbox" data-title="Nama : <?= $dta_petugas['nama_pekerja'] ?>" data-gallery="gallery">
                        <img src="../../../assets/dist/img/lapor_petugas/<?= $dta['foto_bukti'] ?>" border=3 height=60 width=60 class="img-fluid mb-2" alt="red sample"/>
                        </a>
                    </td>
                  </tr>

                  <?php
                  $i = $i + 1; }
                  ?>
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->
                <!-- <div class="col-12">
                  <a href="laporan-print.php" target="_blank" class="btn btn-primary" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Cetak Print/PDF
                  </a>
                </div> -->

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