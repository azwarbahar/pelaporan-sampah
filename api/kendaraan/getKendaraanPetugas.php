<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$id_kendaraan = $_GET["id_kendaraan"];
$query = "SELECT * FROM tb_kendaraan WHERE id_kendaraan = '$id_kendaraan'";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => "1", "result_kendaraan" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>