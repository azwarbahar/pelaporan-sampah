<?php
require '../template/header/header.php';

$id_masyarakat = $_GET['id_masyarakat'];
$result = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE id_masyarakat = '$id_masyarakat'");
$dta = mysqli_fetch_assoc($result);

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
                            <div class="card-body table-responsive p-0" style="height: 500px;">
                              <table class="table table-head-fixed text-nowrap">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
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
                      <h3 class="card-title">Data Keluhan</h3>
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
                              <h3 class="card-title">List Keluhan</h3>

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
                            <div class="card-body table-responsive p-0" style="height: 500px;">
                              <table class="table table-head-fixed text-nowrap">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
                                  <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor </td>
                                  </tr>
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