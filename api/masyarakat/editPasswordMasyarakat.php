<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_masyarakat = $_GET["id_masyarakat"];
 $password_lama = $_GET["password_lama"];
 $password_baru = $_GET["password_baru"];

$getMasyarakat = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE id_masyarakat = '$id_masyarakat'");
$data = mysqli_fetch_assoc($getMasyarakat);

if (password_verify($password_lama, $data["password_masyarakat"])) {
	$password = password_hash($password_baru, PASSWORD_DEFAULT);
    $query =  mysqli_query($conn, "UPDATE tb_masyarakat SET password_masyarakat = '$password' WHERE id_masyarakat = '$id_masyarakat'");
    if ($query){
        echo json_encode(array("kode" => 1, "pesan" => "Berhasil Mengubah Password"));
    } else {
        echo json_encode(array("kode" => 2, "pesan" => "Terjadi Kesalahan Saat Mengubah Password"));
    }
} else{
    echo json_encode(array("kode" => 0, "pesan" => "Password lama tidak sesuai"));
}
?>