<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_petugas = $_GET["id_petugas"];
 $password_lama = $_GET["password_lama"];
 $password_baru = $_GET["password_baru"];

$getpetugas = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE id_pekerja = '$id_petugas'");
$data = mysqli_fetch_assoc($getpetugas);

if (password_verify($password_lama, $data["password"])) {
	$password = password_hash($password_baru, PASSWORD_DEFAULT);
    $query =  mysqli_query($conn, "UPDATE tb_pekerja SET password = '$password' WHERE id_pekerja  = '$id_petugas'");
    if ($query){
        echo json_encode(array("kode" => 1, "pesan" => "Berhasil Mengubah Password"));
    } else {
        echo json_encode(array("kode" => 2, "pesan" => "Terjadi Kesalahan Saat Mengubah Password"));
    }
} else{
    echo json_encode(array("kode" => 0, "pesan" => "Password lama tidak sesuai"));
}
?>