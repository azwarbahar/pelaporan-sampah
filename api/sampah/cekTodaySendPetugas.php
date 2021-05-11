<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$id_petugas = $_GET["id_petugas"];
$tanggal = $_GET["tanggal"];

$query = "SELECT * FROM tb_laporan_petugas WHERE id_petugas = '$id_petugas' AND tanggal = '$tanggal'";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => "1", "result_data" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>