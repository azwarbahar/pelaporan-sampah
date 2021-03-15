<?php

function plugins() { ?>
	<link rel="stylesheet" href="/reses-dprd/assets/plugins/bootstrap-more/css/bootstrap.min.css">
	<link rel="stylesheet" href="/reses-dprd/assets/dist/css2/components.css">
	<script src="/reses-dprd/assets/dist/jquery.min.js"></script>
	<script src="/reses-dprd/assets/dist/sweetalert/sweetalert.min.js"></script>
<?php }
require('../../koneksi.php');

// SUBMIT LAPORAN
if (isset($_POST['submit_laporan'])) {
	$id_anggota = $_POST['id_anggota'];
	$kegiatan = $_POST['kegiatan'];
	$skpd = $_POST['skpd'];
	$lokasi = $_POST['lokasi'];
	$nama_anggota = $_POST['nama_anggota'];
	$id_jadwal = $_POST['id_jadwal'];
	$status_laporan = "Pending";


    // TAMBAH DATA
	$query= "INSERT INTO tb_laporan VALUES (NULL, '$id_anggota',
												'$kegiatan',
												'$skpd',
												'$lokasi',
												'$nama_anggota',
												'$id_jadwal',
												'$status_laporan')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Laporan Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}


// UPDATE LAPORAN
if (isset($_POST['update_laporan'])) {
    $id_laporan = $_POST['id_laporan'];
    $kegiatan = $_POST['kegiatan'];
    $skpd = $_POST['skpd'];
    $lokasi = $_POST['lokasi'];
		$query = "UPDATE tb_laporan SET kegiatan = '$kegiatan', skpd = '$skpd', lokasi = '$lokasi' WHERE id_laporan = '$id_laporan'";

	// EDIT LAPORAN
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Laporan berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}

// UPDATE LAPORAN STATUS
if (isset($_POST['update_status_laporan'])){

	$id_laporan = $_POST['id_laporan'];
	$status_laporan = $_POST['status_laporan'];

	if ($status_laporan == "Pending"){
		$query = "UPDATE tb_laporan SET  status_laporan = 'Masuk' WHERE id_laporan = '$id_laporan'";
	} else if ($status_laporan == "Masuk"){
		$query = "UPDATE tb_laporan SET  status_laporan = 'Pending' WHERE id_laporan = '$id_laporan'";
	}

	// EDIT LAPORAN STATUS
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Laporan berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }

}


// HAPUS LAPORAN
if (isset($_GET['hapus_laporan'])) {
	$id_laporan = $_GET['id_laporan'];

	$query = "DELETE FROM tb_laporan WHERE id_laporan = '$id_laporan'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data Laporan berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'data.php';
				});
			});
		</script>
	<?php }
}

?>