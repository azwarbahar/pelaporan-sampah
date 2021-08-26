<?php
require_once '../template/header/header.php';
$berita = mysqli_query($conn, "SELECT * FROM tb_berita");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../">Home</a></li>
              <li class="breadcrumb-item active">Data Berita</li>
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
                <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Berita</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">

                <?php
                 $i = 1; foreach($berita as $dta) {
                  if( strlen( $dta['isi_berita'] ) > 90 ) {
                    $dta['isi_berita'] = substr( $dta['isi_berita'], 0, 90 ) . '...';
                  }
                ?>

                  <div class="col-md-6 col-lg-3">
                    <div class="card m-b-30">
                        <img class="card-img-top img-fluid" style=" max-height: 220px; min-height: 220px;" src="foto/<?= $dta['foto_berita'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $dta['judul_berita'] ?></b></h5><br>
                            <span class="text-muted" style="font-size: 16px; font-style: italic;">Penulis : <?= $dta['penulis_berita'] ?></span>
                            <p class="card-text"><?= $dta['isi_berita'] ?></p>
                            <span class="text-muted float-right" style="font-size: 18px;"><?= date(' d F Y', strtotime($dta['created_at'])) ?></span>
                                <td class="project-actions text-right">
                                  <!-- <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye"></i></a> -->
                                  <a class="btn btn-info btn-sm" href="edit.php?id_berita=<?= $dta['id_berita'] ?>"><i class="fas fa-pencil-alt"></i></a>
                                  <a class="btn btn-danger btn-sm" href="#"  data-toggle="modal" data-target="#modal-danger<?= $dta['id_berita'] ?>"><i class="fas fa-trash"></i></a>
                                </td>
                        </div>
                    </div>
                  </div>

      <!-- Modal Hapus -->
      <div class="modal fade" tabindex="-1" id="modal-danger<?= $dta['id_berita'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data Berita</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin Menghapus Data Berita</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="controller.php?hapus_berita=true&id_berita=<?= $dta['id_berita'] ?>" type="button" class="btn btn-outline-light">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  <?php $i = $i + 1; } ?>
                </div>
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