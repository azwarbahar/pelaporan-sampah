<?php
require '../template/header/header.php';

$id_pekerja = $_GET['id_pekerja'];
$result = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$id_pekerja'");
$dta = mysqli_fetch_assoc($result);

$laporan_petugas = mysqli_query($conn, "SELECT * FROM tb_laporan_petugas WHERE id_petugas ='$id_pekerja' ORDER BY id_laporan_petugas DESC ");
// $partai = mysqli_query($conn, "SELECT * FROM tb_partai WHERE id_partai = '$dta[id_partai]'");
// $dta_partai = mysqli_fetch_assoc($partai);

// $dapil = mysqli_query($conn, "SELECT * FROM tb_dapil WHERE id_dapil = '$dta[id_dapil]'");
// $dta_dapil = mysqli_fetch_assoc($dapil);

// $komisi = mysqli_query($conn, "SELECT * FROM tb_komisi WHERE id_komisi = '$dta[id_komisi]'");
// $dta_komisi = mysqli_fetch_assoc($komisi);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <a href="data.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
          <h1 class="m-0 text-dark">Data Petugas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../">Home</a></li>
            <li class="breadcrumb-item"><a href="../petugas/data.php">Data Petugas</a></li>
            <li class="breadcrumb-item active">Detail</li>
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
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Profil</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="img-fluid" src="foto/<?= $dta['foto_pekerja'] ?>" style="max-width: 280px; max-height: 350px; min-width: 280px; min-height: 350px;" alt="User profile picture">
                      </div>
                      <br>
                      <h4 class="text-center"><?= $dta['nama_pekerja'] ?></h4>
                      <p class="text-muted text-center"><?= $dta['nik_pekerja'] ?></p>
                      <ul class="list-group list-group-unbordered mb-3"></ul>

                      <a href="edit.php?id_pekerja=<?= $dta['id_pekerja'] ?>" class="btn btn-danger btn-block"><b>Edit Profile</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>

                  <!-- About Me Box -->
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Data Petugas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                      <p class="text-muted">
                        <?= $dta['alamat_pekerja'] ?>
                      </p>
                      <hr>

                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Kelurahan</strong>
                      <p class="text-muted">
                        <?= $dta['kelurahan_pekerja'] ?>
                      </p>
                      <hr>

                      <strong><i class="fas fa-phone mr-1"></i> Telpon</strong>
                      <p class="text-muted"><?= $dta['telpon_pekerja'] ?></p>
                      <hr>

                      <strong><i class="fas fa-circle mr-1"></i> Usia</strong>
                      <p class="text-muted"><?= $dta['usia_pekerja'] ?></p>
                      <hr>

                      <strong><i class="fas fa-circle mr-1"></i>Status Akun</strong>
                      <p class="text-muted">
                      <?php
                        if ($dta['status_pekerja'] == "Aktif"){
                          echo "<span class='badge bg-success'>Aktif</span>";
                        } else if ($dta['status_pekerja'] == "Non Aktif"){
                          echo "<span class='badge bg-danger'>Non Aktif</span>";
                        }
                      ?>
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>

                <div class="col-md-8">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Data Terlapor</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">

                      <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">List Laporan Mas</h3>

                              <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                  <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="max-height: 500px; height: fit-content;">
                              <table class="table table-head-fixed text-nowrap">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Waktu</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                   $i = 1;
                                   $laporan = mysqli_query($conn, "SELECT * FROM tb_laporan WHERE petugas_id = '$dta[id_pekerja]'");
                                   foreach($laporan as $dta_laporan) {
                                  ?>
                                  <tr>
                                    <td style="text-align:center"><?= $i ?></td>
                                    <td><?= $dta_laporan['keterangan_laporan'] ?></td>
                                    <?php
                                      if ($dta_laporan['staus_laporan'] == "Done"){
                                        echo "<td style='text-align:center'><span class='badge bg-success'>Selesai</span></td>";
                                      } else if ($dta_laporan['staus_laporan'] == "Proccess"){
                                        echo "<td style='text-align:center'><span class='badge bg-secondary'>Proses</span></td>";
                                      } else if ($dta_laporan['staus_laporan'] == "Cancel"){
                                        echo "<td style='text-align:center'><span class='badge bg-danger'>Batal</span></td>";
                                      }
                                    ?>
                                    <td><?= $dta_laporan['created_at'] ?></td>
                                    <td style="text-align:center">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-detail-laporan<?= $dta_laporan['id_laporan'] ?>"><i class="fa fa-eye"></i></button>
                                    </td>
                                  </tr>

                                  <!-- MODAL DETAIL LAPORAN -->
                                  <div class="modal fade" id="modal-detail-laporan<?= $dta_laporan['id_laporan'] ?>">
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
                                                <small class="float-right">Date: <?= $dta_laporan['created_at'] ?></small>
                                              </h4>
                                            </div>
                                            <!-- /.col -->
                                          </div>
                                          <div class="row invoice-info">
                                            <div class="col-sm-4 invoice-col">
                                              <strong>NIK : </strong> <?= $dta_laporan['nik_laporan'] ?> <tab> <a href="../masyarakat/detail.php?id_masyarakat=<?= $dta_laporan['masyarakat_id'] ?>" style="margin-left: 20px;">    detail    </a> <br><br>
                                              <?php
                                                $masyarakat_laporan = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE id_masyarakat = '$dta_laporan[masyarakat_id]'");
                                                $dta_masyarakat_laporan = mysqli_fetch_assoc($masyarakat_laporan);
                                              ?>
                                              <strong>NAMA : </strong> <?= $dta_masyarakat_laporan['nama_masyarakat'] ?> <br><br>
                                              <strong>ALAMAT : </strong> <?= $dta_laporan['alamat_laporan'] ?> <br><br>
                                              <?php
                                              if ($dta_laporan['staus_laporan']=="Done"){
                                                echo " <strong>STATUS : </strong> <span class='badge bg-success'>Selesai</span> <br><br>";
                                              } else if ($dta_laporan['staus_laporan']=="Cancel"){
                                                echo " <strong>STATUS : </strong> <span class='badge bg-danger'>Batal</span> <br><br>";
                                              } else {
                                                echo " <strong>STATUS : </strong> <span class='badge bg-secondary'>Proses</span> <br><br>";
                                              }

                                              ?>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="callout callout-info">
                                            <h5>Petugas Terlapor</h5>
                                              <?php
                                                $petugas_laporan = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$dta_laporan[petugas_id]'");
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
                                                <a href="../petugas/detail.php?id_pekerja=<?= $dta_laporan['petugas_id'] ?>" type="button" class="btn btn-default">Lihat</a>
                                              </div>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="alert alert-danger alert-dismissible">
                                            <h5><i class="icon fas fa-info"></i> Keterangan</h5>
                                            <?= $dta_laporan['keterangan_laporan'] ?>
                                          </div>
                                          <hr>
                                          <h6><strong>Foto Laporan</strong></h6>
                                          <br>
                                          <div>
                                            <a href="../../../assets/dist/img/laporan/<?=$dta_laporan['foto_laporan'] ?>" target="_blank">
                                              <img style="max-width: 700px; max-height: 700px;" border="2" align="center"  src="../../../assets/dist/img/laporan/<?=$dta_laporan['foto_laporan'] ?>"/>
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


                                <?php $i = $i + 1; } ?>
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                  </div>
                  <!-- /.col -->


                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Laporan Harian</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                          <th>No</th>
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
                        <?php
                            $petugas = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$dta[id_petugas]' ");
                            $dta_petugas = mysqli_fetch_assoc($petugas);
                        ?>
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
                    <!-- /.nav-tabs-custom -->
                  </div>

                </div>

              </div>


            </div>

          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->


</div>
<!-- /.content-wrapper -->


<?php
require '../template/footer/footer.php';
?>