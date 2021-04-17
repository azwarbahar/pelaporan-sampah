<?php
require '../template/header/header.php';

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
          <!-- <a href="data.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a> -->
          <h1 class="m-0 text-dark">Data Masyarakat</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/">Home</a></li>
            <li class="breadcrumb-item"><a href="/pelaporan-sampah/kelurahan/admin/layout/profile-dpr/data.php">Data Masyarakat</a></li>
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
                        <img class="img-fluid" src="foto/<?= $dta['foto_masyarakat'] ?>" style="max-width: 280px; max-height: 350px; min-width: 280px; min-height: 350px;" alt="User profile picture">
                      </div>
                      <br>
                      <h4 class="text-center"><?= $dta['nama_masyarakat'] ?></h4>
                      <p class="text-muted text-center"><?= $dta['nik_masyarakat'] ?></p>
                      <ul class="list-group list-group-unbordered mb-3"></ul>

                      <a href="edit.php?id_masyarakat=<?= $dta['id_masyarakat'] ?>" class="btn btn-danger btn-block"><b>Edit Profile</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>

                  <!-- About Me Box -->
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Data Masyarakat</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                      <p class="text-muted">
                        <?= $dta['alamat_masyarakat'] ?>
                      </p>
                      <hr>

                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Kelurahan</strong>
                      <p class="text-muted">
                        <?= $dta['kelurahan_masyarakat'] ?>
                      </p>
                      <?php
                      $result1 = mysqli_query($conn, "SELECT * FROM tb_area WHERE id_area = '$dta[area_masyarakat]'");
                      $dta1 = mysqli_fetch_assoc($result1);
                      ?>
                      <p class="text-muted"><b>Area :</b> <?= $dta1['nama_area'] ?></p>
                      <hr>

                      <strong><i class="fas fa-phone mr-1"></i> Telpon</strong>
                      <p class="text-muted"><?= $dta['telpon_masyarakat'] ?></p>
                      <hr>

                      <strong><i class="fas fa-circle mr-1"></i> Usia</strong>
                      <p class="text-muted"><?= $dta['telpon_masyarakat'] ?></p>
                      <hr>

                      <strong><i class="fas fa-circle mr-1"></i>Status Akun</strong>
                      <p class="text-muted">
                      <?php
                        if ($dta['status_masyarakat'] == "Aktif"){
                          echo "<span class='badge bg-success'>Aktif</span>";
                        } else if ($dta['status_masyarakat'] == "Non Aktif"){
                          echo "<span class='badge bg-danger'>Non Aktif</span>";
                        }
                      ?>
                      </p>
                      <hr>

                      <strong><i class="fas fa-circle mr-1"></i> Pembayaran</strong>
                      <p class="text-muted">
                      <?php
                        if ($dta['pembayaran_masyarakat'] == "Sudah"){
                          echo "<span class='badge bg-success'>Sudah</span>";
                        } else if ($dta['pembayaran_masyarakat'] == "Belum"){
                          echo "<span class='badge bg-danger'>Belum</span>";
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
                      <h3 class="card-title">Data Laporan</h3>
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
                              <h3 class="card-title">List Laporan</h3>

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
                                   $laporan = mysqli_query($conn, "SELECT * FROM tb_laporan WHERE masyarakat_id = '$dta[id_masyarakat]'");
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
                                              <strong>NIK : </strong> <?= $dta_laporan['nik_laporan'] ?> <br><br>
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
                                            <div class="row">
                                              <div class="col-2">
                                                  <img class="profile-user-img img-fluid img-circle" src="foto/<?= $dta['foto_masyarakat'] ?>" alt="User profile picture">
                                              </div>
                                              <div class="col-9" style=" margin-top: auto; margin-bottom: auto;">
                                                <h6 style="margin-top: 15px;" > <strong> Muhammad Azwar Bahar</strong> <br> 0987667890</h6>
                                              </div>
                                              <div class="col-1" style=" margin-top: auto; margin-bottom: auto;">
                                                <button type="button" class="btn btn-default">Lihat</button>
                                              </div>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="alert alert-danger alert-dismissible">
                                            <h5><i class="icon fas fa-info"></i> Keterangan</h5>
                                            <?= $dta_laporan['keterangan_laporan'] ?>
                                          </div>
                                          <hr>
                                          <h6><strong>Bukti Foto</strong></h6>
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

                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Titik Lokasi</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                    <div id="googleMap" style="width:1100px;height:500px;"></div>
                    </div>
                    <!-- /.nav-tabs-custom -->
                  </div>
                  <!-- /.col -->
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
<?php
require '../template/footer/footer.php';
?>