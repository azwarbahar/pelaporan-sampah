<?php

function plugins() { ?>
	<link rel="stylesheet" href="../../../assets/plugins/bootstrap-more/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../assets/dist/css2/components.css">
	<script src="../../../assets/dist/jquery.min.js"></script>
	<script src="../../../assets/dist/sweetalert/sweetalert.min.js"></script>
<?php }
require('../../../koneksi.php');

// SUBMIT MASYARAKAT
if (isset($_POST['submit_edukasi'])) {
	$judul_edukasi = $_POST['judul_edukasi'];

	// SET FOTO
	$foto = $_FILES['foto_edukasi']['name'];
	$ext = pathinfo($foto, PATHINFO_EXTENSION);
	$nama_foto = "image_".time().".".$ext;
    $file_tmp = $_FILES['foto_edukasi']['tmp_name'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_edukasi VALUES (NULL, '$judul_edukasi', '$nama_foto')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Berhasil tambah Konten Edukasi!',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// UPDATE MASYARAKAT
if (isset($_POST['edit_edukasi'])) {
	$id_edukasi = $_POST['id_edukasi'];
	$nik_edukasi = $_POST['nik_edukasi'];
	$nama_edukasi = $_POST['nama_edukasi'];
	$alamat_edukasi = $_POST['alamat_edukasi'];
	$area_edukasi = $_POST['area_edukasi'];
	$telpon_edukasi = $_POST['telpon_edukasi'];
	$usia_edukasi = $_POST['usia_edukasi'];
	$kelurahan_edukasi = $_POST['kelurahan_edukasi'];
	// $password = password_hash($nik_edukasi, PASSWORD_DEFAULT);
	// $status_edukasi = "Aktif";

    // SET FOTO
	if ($_FILES['foto_edukasi']['name'] != '') {
		$foto = $_FILES['foto_edukasi']['name'];
		$ext = pathinfo($foto, PATHINFO_EXTENSION);
		$nama_foto = "image_".time().".".$ext;
		$file_tmp = $_FILES['foto_edukasi']['tmp_name'];
		// HAPUS OLD FOTO
		$target = "foto/".$_POST['foto_now'];
		if (file_exists($target) && $_POST['foto_now'] != 'default.png') unlink($target);
		// UPLOAD NEW FOTO
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
	} else {
		$nama_foto = $_POST['foto_now'];
	}
		$query = "UPDATE tb_edukasi SET nik_edukasi = '$nik_edukasi',
											nama_edukasi = '$nama_edukasi',
											alamat_edukasi = '$alamat_edukasi',
											area_edukasi = '$area_edukasi',
											telpon_edukasi = '$telpon_edukasi',
											usia_edukasi = '$usia_edukasi',
											kelurahan_edukasi = '$kelurahan_edukasi',
											foto_edukasi = '$nama_foto' WHERE id_edukasi = '$id_edukasi'";
		mysqli_query($conn, $query);
	// EDIT PARTAI
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Masyarakat berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// HAPUS ADMIN
if (isset($_GET['hapus_edukasi'])) {
	$id_edukasi = $_GET['id_edukasi'];

	$query = "DELETE FROM tb_edukasi WHERE id_edukasi = '$id_edukasi'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data Masyarakat berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}

?>