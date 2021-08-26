<?php

function plugins() { ?>
	<link rel="stylesheet" href="../../../assets/plugins/bootstrap-more/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../assets/dist/css2/components.css">
	<script src="../../../assets/dist/jquery.min.js"></script>
	<script src="../../../assets/dist/sweetalert/sweetalert.min.js"></script>
<?php }
require('../../../koneksi.php');

// SUBMIT AREA
if (isset($_POST['submit_area'])) {
	$nama_area = $_POST['nama_area'];
	$kelurahan_area = $_POST['kelurahan_area'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_area VALUES (NULL, '$nama_area', '$kelurahan_area')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Area Kerja Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// UPDATE AREA
if (isset($_POST['edit_area'])) {
	$id_area = $_POST['id_area'];
	$nama_area = $_POST['nama_area'];

	$query = "UPDATE tb_area SET nama_area = '$nama_area' WHERE id_area = '$id_area'";
		mysqli_query($conn, $query);
	// EDIT PARTAI
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Area Kerja berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// HAPUS AREA
if (isset($_GET['hapus_area'])) {
	$id_area = $_GET['id_area'];

	$query = "DELETE FROM tb_area WHERE id_area = '$id_area'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data Area Kerja berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}

?>