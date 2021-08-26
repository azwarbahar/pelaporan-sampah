<?php

function plugins() { ?>
	<link rel="stylesheet" href="../../../assets/plugins/bootstrap-more/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../assets/dist/css2/components.css">
	<script src="../../../assets/dist/jquery.min.js"></script>
	<script src="../../../assets/dist/sweetalert/sweetalert.min.js"></script>
<?php }
require('../../../koneksi.php');

// SUBMIT KENDARAAN
if (isset($_POST['submit_kendaraan'])) {
	$kode_kendaraan = $_POST['kode_kendaraan'];
	$type_kendaraan = $_POST['type_kendaraan'];
	$nama_kendaraan = $_POST['nama_kendaraan'];
	$nomor_kendaraan = $_POST['nomor_kendaraan'];
	$kondisi_kendaraan = $_POST['kondisi_kendaraan'];
	$kelurahan_kendaraan = $_POST['kelurahan_kendaraan'];
	$status_kendaraan = $_POST['status_kendaraan'];

	// SET FOTO
	$foto = $_FILES['foto_kendaraan']['name'];
	$ext = pathinfo($foto, PATHINFO_EXTENSION);
	$nama_foto = "image_".time().".".$ext;
    $file_tmp = $_FILES['foto_kendaraan']['tmp_name'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_kendaraan VALUES (NULL, '$kode_kendaraan', '$nama_kendaraan', '$type_kendaraan', '$nomor_kendaraan','$kondisi_kendaraan', '$kelurahan_kendaraan', '$status_kendaraan','$nama_foto')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Kendaraan Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// UPDATE MASYARAKAT
if (isset($_POST['edit_kendaraan'])) {
	$id_kendaraan = $_POST['id_kendaraan'];
	$type_kendaraan = $_POST['type_kendaraan'];
	$nama_kendaraan = $_POST['nama_kendaraan'];
	$nomor_kendaraan = $_POST['nomor_kendaraan'];
	$kondisi_kendaraan = $_POST['kondisi_kendaraan'];
	$status_kendaraan = $_POST['status_kendaraan'];

    // SET FOTO
	if ($_FILES['foto_kendaraan']['name'] != '') {
		$foto = $_FILES['foto_kendaraan']['name'];
		$ext = pathinfo($foto, PATHINFO_EXTENSION);
		$nama_foto = "image_".time().".".$ext;
		$file_tmp = $_FILES['foto_kendaraan']['tmp_name'];
		// HAPUS OLD FOTO
		$target = "foto/".$_POST['foto_now'];
		if (file_exists($target) && $_POST['foto_now'] != 'default.png') unlink($target);
		// UPLOAD NEW FOTO
		move_uploaded_file($file_tmp, 'foto/'.$nama_foto);
	} else {
		$nama_foto = $_POST['foto_now'];
	}
		$query = "UPDATE tb_kendaraan SET type_kendaraan = '$type_kendaraan',
											nama_kendaraan = '$nama_kendaraan',
											nomor_kendaraan = '$nomor_kendaraan',
											kondisi_kendaraan = '$kondisi_kendaraan',
											status_kendaraan = '$status_kendaraan',
											foto_kendaraan = '$nama_foto' WHERE id_kendaraan = '$id_kendaraan'";
		mysqli_query($conn, $query);
	// EDIT PARTAI
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Kendaraan berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// HAPUS ADMIN
if (isset($_GET['hapus_kendaraan'])) {
	$id_kendaraan = $_GET['id_kendaraan'];

	$query = "DELETE FROM tb_kendaraan WHERE id_kendaraan = '$id_kendaraan'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data Kendaraan berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}

?>