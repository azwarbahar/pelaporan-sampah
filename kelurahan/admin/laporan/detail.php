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
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item"><a href="../laporan/data.php">Laporan</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-5">
              <!-- <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3> -->
              <div class="col-12">
                <h5>Foto Bukti Laporan</h>
                <img src="../../../assets/dist/img/prod-1.jpg" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-7">
              <!-- ./row -->
              <div class="row">
                <div class="col-12">
                  <h4>Data</h4>
                </div>
              </div>
              <!-- ./row -->
              <div class="row">
                <div class="col-12 col-sm-12">
                  <div class="card card-danger card-tabs">
                    <div class="card-header p-0 pt-1">
                      <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Laporan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Masyarakat</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Petugas</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                          <div class="alert alert-warning alert-dismissible">
                            <h5> <strong>Keterangan</strong></h5>
                              Warning alert preview. This alert is dismissable.
                          </div><br>
                          <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong><i class="fas fa-map-pin mr-1"></i> Area</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong><i class="fas fa-calendar mr-1"></i> Tanggal</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong>Status</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                          <div class="row">
                            <img src="../../../assets/dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                            <div class="col-12">
                              <a href="../masyarakat/detail.php?id_masyarakat=<?= $dta['masyarakat_id'] ?>"><h5>Hildayanti</h5></a> 
                            </div>
                          </div><br>
                          <strong><i class="fas fa-address-card mr-1"></i> NIK</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong><i class="fas fa-phone-square mr-1"></i> Telpon</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong>Status Pembayaran</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>


                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                        <div class="row">
                            <img src="../../../assets/dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                            <div class="col-12">
                              <a href="../petugas/detail.php?id_masyarakat=<?= $dta['masyarakat_id'] ?>"><h5>Hildayanti</h5></a> 
                            </div>
                          </div><br>
                          <strong><i class="fas fa-address-card mr-1"></i> NIK</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong><i class="fas fa-map-marker-alt mr-1"></i>Kendaraan</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong><i class="fas fa-phone-square mr-1"></i> Telpon</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                          <strong>Status</strong>
                          <p class="text-muted">Malibu, California</p>
                          <hr>
                      </div>
                      </div>
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col -->
          </div>
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