<?php

function plugins() { ?>
	<link rel="stylesheet" href="/pelaporan-sampah/assets/plugins/bootstrap-more/css/bootstrap.min.css">
	<link rel="stylesheet" href="/pelaporan-sampah/assets/dist/css2/components.css">
	<script src="/pelaporan-sampah/assets/dist/jquery.min.js"></script>
	<script src="/pelaporan-sampah/assets/dist/sweetalert/sweetalert.min.js"></script>
<?php }
require('../../../koneksi.php');

// SUBMIT BERITA
if (isset($_POST['submit_berita'])) {
	$judul_berita = $_POST['judul_berita'];
	$isi_berita = $_POST['isi_berita'];
	$penulis_berita = $_POST['penulis_berita'];
	date_default_timezone_set("Asia/Makassar");
	$date = date('Y-m-d H-i-s');

	// SET FOTO
	$foto = $_FILES['foto_berita']['name'];
	$ext = pathinfo($foto, PATHINFO_EXTENSION);
	$nama_foto = "image_".time().".".$ext;
    $file_tmp = $_FILES['foto_berita']['tmp_name'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_berita VALUES (NULL, '$judul_berita', '$isi_berita', '$nama_foto', '$penulis_berita', '$date', '')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Berita Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// UPDATE BERITA
if (isset($_POST['edit_berita'])) {
	$id_berita = $_POST['id_berita'];
	$judul_berita = $_POST['judul_berita'];
	$isi_berita = $_POST['isi_berita'];
	$penulis_berita = $_POST['penulis_berita'];

    // SET FOTO
	if ($_FILES['foto_berita']['name'] != '') {
		$foto = $_FILES['foto_berita']['name'];
		$ext = pathinfo($foto, PATHINFO_EXTENSION);
		$nama_foto = "image_".time().".".$ext;
		$file_tmp = $_FILES['foto_berita']['tmp_name'];
		// HAPUS OLD FOTO
		$target = "foto/".$_POST['foto_now'];
		if (file_exists($target) && $_POST['foto_now'] != 'default.png') unlink($target);
		// UPLOAD NEW FOTO
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
	} else {
		$nama_foto = $_POST['foto_now'];
	}
		$query = "UPDATE tb_berita SET judul_berita = '$judul_berita',
											isi_berita = '$isi_berita',
											foto_berita = '$nama_foto',
											penulis_berita = '$penulis_berita'WHERE id_berita = '$id_berita'";
		mysqli_query($conn, $query);
	// EDIT PARTAI
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Berita berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// HAPUS ADMIN
if (isset($_GET['hapus_berita'])) {
	$id_berita = $_GET['id_berita'];

	$query = "DELETE FROM tb_berita WHERE id_berita = '$id_berita'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data Berita berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}

?>