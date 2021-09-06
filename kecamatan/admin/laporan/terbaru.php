<?php
require '../template/header/header.php';
$laporan = mysqli_query($conn, "SELECT * FROM tb_laporan WHERE staus_laporan = 'New'");
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
            <h1 class="m-0 text-dark">Laporan Terbaru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item active">Laporan Terbaru</li>
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
              <h4 style="text-align: center;"><b>DAFTAR LAPORAN TERBARU DARI MASYARAKAT</b></h4>
              <h4 style="text-align: center;"><b>MENGGUNAKAN APLIKASI MTR TAMALATE</b></h4>
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
                    <th>NIK</th>
                    <th>Kelurahan</th>
                    <th>Tanggal</th>
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
                    <td><a href="../masyarakat/detail.php?id_masyarakat=<?= $dta['masyarakat_id'] ?>"> <?= $dta['nik_laporan'] ?></a></td>
                    <?php
                      // $area = mysqli_query($conn, "SELECT * FROM tb_area WHERE id_area = '$dta[area_laporan]'");
                      // $dta_area = mysqli_fetch_assoc($area);
                    ?>
                    <td><?= $dta['kelurahan_laporan'] ?></td>
                    <td><?= $dta['created_at'] ?></td>
                    <td><?= $dta['keterangan_laporan'] ?></td>
                    <?php
                      if ($dta['staus_laporan']=="Done"){
                        echo " <td><span class='badge bg-success'>Selesai</span></td>";
                      } else if ($dta['staus_laporan']=="Cancel"){
                        echo " <td><span class='badge bg-danger'>Batal</span></td>";
                      } else if ($dta['staus_laporan']=="Proccess") {
                        echo " <td><span class='badge bg-secondary'>Proses</span></td>";
                      } else {
                        echo " <td><span class='badge bg-info'>Terbaru</span></td>";
                      }
                    ?>
                    <td style="text-align:center">
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-detail-laporan<?= $dta['id_laporan'] ?>"><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>

                                  <!-- MODAL DETAIL LAPORAN -->
                                  <div class="modal fade" id="modal-detail-laporan<?= $dta['id_laporan'] ?>">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Detail Laporan</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col-12">
                                              <h4>
                                                <small class="float-right">Date: <?= $dta['created_at'] ?></small>
                                              </h4>
                                            </div>
                                            <!-- /.col -->
                                          </div>
                                          <div class="row invoice-info">
                                            <div class="col-sm-4 invoice-col">
                                              <strong>NIK : </strong> <?= $dta['nik_laporan'] ?> <tab> <a href="../masyarakat/detail.php?id_masyarakat=<?= $dta['masyarakat_id'] ?>" style="margin-left: 20px;">    detail    </a> <br><br>
                                              <?php
                                                $masyarakat_laporan = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE id_masyarakat = '$dta[masyarakat_id]'");
                                                $dta_masyarakat_laporan = mysqli_fetch_assoc($masyarakat_laporan);
                                              ?>
                                              <strong>NAMA : </strong> <?= $dta_masyarakat_laporan['nama_masyarakat'] ?> <br><br>
                                              <strong>ALAMAT : </strong> <?= $dta['alamat_laporan'] ?> <br><br>
                                              <?php
                                              if ($dta['staus_laporan']=="Done"){
                                                echo " <strong>STATUS : </strong> <span class='badge bg-success'>Selesai</span> <br><br>
                                                <strong>Bukti Tindakan : </strong> 
                                                <a href='../../../assets/dist/img/laporan/bukti_tindakan/".$dta['foto_tindakan_laporan']."' data-toggle='lightbox' data-title='Nama : Gambar Bukti Tindakan' data-gallery='gallery'>
                                                  <img src='../../../assets/dist/img/laporan/bukti_tindakan/".$dta['foto_tindakan_laporan']."' border=3 height=60 width=60 class='img-fluid mb-2' alt='red sample'/>
                                                </a>
                                                <br><br>
                                                ";
                                              } else if ($dta['staus_laporan']=="Cancel"){
                                                echo " <strong>STATUS : </strong> <span class='badge bg-danger'>Batal</span> <br><br>";
                                              } else if ($dta['staus_laporan']=="Proccess") {
                                                echo " <strong>STATUS : </strong> <span class='badge bg-secondary'>Proses</span> <br><br>";
                                              } else {
                                                  echo " <strong>STATUS : </strong> <span class='badge bg-info'>Terbaru</span> <br><br>";
                                              }

                                              ?>
                                            </div>
                                          </div>
                                          <?php
                                          if ($dta['petugas_id'] != "-"){
                                          ?>
                                          <hr>
                                            <div class="callout callout-info">
                                                <h5>Petugas Terlapor</h5>
                                                <?php
                                                    $petugas_laporan = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$dta[petugas_id]'");
                                                    $dta_petugas_laporan = mysqli_fetch_assoc($petugas_laporan);
                                                ?>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img class="profile-user-img img-fluid img-circle" src="../petugas/foto/<?=$dta_petugas_laporan['foto_pekerja'] ?>" alt="User profile picture">
                                                    </div>
                                                    <div class="col-9" style=" margin-top: auto; margin-bottom: auto;">
                                                        <h6 style="margin-top: 15px;" > <strong> <?=$dta_petugas_laporan['nama_pekerja'] ?></strong> <br> <?=$dta_petugas_laporan['telpon_pekerja'] ?></h6>
                                                    </div>
                                                    <div class="col-1" style=" margin-top: auto; margin-bottom: auto;">
                                                        <a href="../petugas/detail.php?id_pekerja=<?= $dta['petugas_id'] ?>" type="button" class="btn btn-default">Lihat</a>
                                                    </div>
                                                </div>
                                            </div>
                                          <?php
                                          }
                                          ?>
                                          <hr>
                                          <div class="alert alert-danger alert-dismissible">
                                            <h5><i class="icon fas fa-info"></i> Keterangan</h5>
                                            <?= $dta['keterangan_laporan'] ?>
                                          </div>
                                          <hr>
                                          <h6><strong>Foto Laporan</strong></h6>
                                          <br>
                                          <div>
                                            <a href="../../../assets/dist/img/laporan/<?=$dta['foto_laporan'] ?>" target="_blank">
                                              <img style="max-width: 700px; max-height: 700px;" border="2" align="center"  src="../../../assets/dist/img/laporan/<?=$dta['foto_laporan'] ?>"/>
                                            </a>
                                          </div>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                <div class="col-12" style="margin-left: 20px;" >
                <a href="data.php" type="button" class="btn btn-primary">&nbsp Lihat Semua</a>
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