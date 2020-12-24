<?php

function plugins() { ?>
	<link rel="stylesheet" href="/pelaporan-sampah/assets/plugins/bootstrap-more/css/bootstrap.min.css">
	<link rel="stylesheet" href="/pelaporan-sampah/assets/dist/css2/components.css">
	<script src="/pelaporan-sampah/assets/dist/jquery.min.js"></script>
	<script src="/pelaporan-sampah/assets/dist/sweetalert/sweetalert.min.js"></script>
<?php }
require('../../../koneksi.php');

// SUBMIT ADMIN
if (isset($_POST['submit_admin'])) {
	$nama_admin = $_POST['nama_admin'];
	$username = $_POST['username'];
	$password = password_hash($username, PASSWORD_DEFAULT);
	$status_admin = "Aktif";

	// SET FOTO
	$foto = $_FILES['foto_admin']['name'];
	$ext = pathinfo($foto, PATHINFO_EXTENSION);
	$nama_foto = "image_".time().".".$ext;
    $file_tmp = $_FILES['foto_admin']['tmp_name'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_akun_kecamatan VALUES (NULL, '$nama_admin', '$username', '$password', '$nama_foto', '$status_admin')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Admin kecamatan Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// UPDATE ADMIN
if (isset($_POST['edit_admin'])) {
	$id_admin = $_POST['id_admin'];
	$nama_admin = $_POST['nama_admin'];

    // SET FOTO
	if ($_FILES['foto_admin']['name'] != '') {
		$foto = $_FILES['foto_admin']['name'];
		$ext = pathinfo($foto, PATHINFO_EXTENSION);
		$nama_foto = "image_".time().".".$ext;
		$file_tmp = $_FILES['foto_admin']['tmp_name'];
		// HAPUS OLD FOTO
		$target = "foto/".$_POST['foto_now'];
		if (file_exists($target) && $_POST['foto_now'] != 'default.png') unlink($target);
		// UPLOAD NEW FOTO
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
	} else {
		$nama_foto = $_POST['foto_now'];
	}
		$query = "UPDATE tb_akun_kecamatan SET nama_akun_kecamatan = '$nama_admin', foto_akun_kecamatan = '$nama_foto' WHERE id_akun_kecamatan = '$id_admin'";
		mysqli_query($conn, $query);
	// EDIT PARTAI
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Admin kecamatan berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// HAPUS ADMIN
if (isset($_GET['hapus_admin'])) {
	$id_admin = $_GET['id_admin'];

	$query = "DELETE FROM tb_akun_kecamatan WHERE id_akun_kecamatan = '$id_admin'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data Admin kecamatan berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}

?>