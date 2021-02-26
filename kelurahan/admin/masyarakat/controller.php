<?php

function plugins() { ?>
	<link rel="stylesheet" href="/pelaporan-sampah/assets/plugins/bootstrap-more/css/bootstrap.min.css">
	<link rel="stylesheet" href="/pelaporan-sampah/assets/dist/css2/components.css">
	<script src="/pelaporan-sampah/assets/dist/jquery.min.js"></script>
	<script src="/pelaporan-sampah/assets/dist/sweetalert/sweetalert.min.js"></script>
<?php }
require('../../../koneksi.php');

// SUBMIT MASYARAKAT
if (isset($_POST['submit_masyarakat'])) {
	$nik_masyarakat = $_POST['nik_masyarakat'];
	$nama_masyarakat = $_POST['nama_masyarakat'];
	$alamat_masyarakat = $_POST['alamat_masyarakat'];
	$area_masyarakat = $_POST['area_masyarakat'];
	$telpon_masyarakat = $_POST['telpon_masyarakat'];
	$usia_masyarakat = $_POST['usia_masyarakat'];
	$kelurahan_masyarakat = $_POST['kelurahan_masyarakat'];
	$password = password_hash($nik_masyarakat, PASSWORD_DEFAULT);
	$status_masyarakat = "Aktif";

	// SET FOTO
	$foto = $_FILES['foto_masyarakat']['name'];
	$ext = pathinfo($foto, PATHINFO_EXTENSION);
	$nama_foto = "image_".time().".".$ext;
    $file_tmp = $_FILES['foto_masyarakat']['tmp_name'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_masyarakat VALUES (NULL, '$nik_masyarakat',
													'$nama_masyarakat',
													'$alamat_masyarakat',
													'$area_masyarakat',
													'$telpon_masyarakat',
													'$usia_masyarakat',
													'$kelurahan_masyarakat',
													'-',
													'-',
													'$password',
													'$nama_foto',
													'$status_masyarakat',
													'Sudah',
													'-')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Masyarakat Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// UPDATE MASYARAKAT
if (isset($_POST['edit_masyarakat'])) {
	$id_masyarakat = $_POST['id_masyarakat'];
	$nik_masyarakat = $_POST['nik_masyarakat'];
	$nama_masyarakat = $_POST['nama_masyarakat'];
	$alamat_masyarakat = $_POST['alamat_masyarakat'];
	$area_masyarakat = $_POST['area_masyarakat'];
	$telpon_masyarakat = $_POST['telpon_masyarakat'];
	$usia_masyarakat = $_POST['usia_masyarakat'];
	$kelurahan_masyarakat = $_POST['kelurahan_masyarakat'];
	// $password = password_hash($nik_masyarakat, PASSWORD_DEFAULT);
	// $status_masyarakat = "Aktif";

    // SET FOTO
	if ($_FILES['foto_masyarakat']['name'] != '') {
		$foto = $_FILES['foto_masyarakat']['name'];
		$ext = pathinfo($foto, PATHINFO_EXTENSION);
		$nama_foto = "image_".time().".".$ext;
		$file_tmp = $_FILES['foto_masyarakat']['tmp_name'];
		// HAPUS OLD FOTO
		$target = "foto/".$_POST['foto_now'];
		if (file_exists($target) && $_POST['foto_now'] != 'default.png') unlink($target);
		// UPLOAD NEW FOTO
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
	} else {
		$nama_foto = $_POST['foto_now'];
	}
		$query = "UPDATE tb_masyarakat SET nik_masyarakat = '$nik_masyarakat',
											nama_masyarakat = '$nama_masyarakat',
											alamat_masyarakat = '$alamat_masyarakat',
											area_masyarakat = '$area_masyarakat',
											telpon_masyarakat = '$telpon_masyarakat',
											usia_masyarakat = '$usia_masyarakat',
											kelurahan_masyarakat = '$kelurahan_masyarakat',
											foto_masyarakat = '$nama_foto' WHERE id_masyarakat = '$id_masyarakat'";
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
if (isset($_GET['hapus_masyarakat'])) {
	$id_masyarakat = $_GET['id_masyarakat'];

	$query = "DELETE FROM tb_masyarakat WHERE id_masyarakat = '$id_masyarakat'";
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