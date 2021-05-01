<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$petugas_id = $_GET["petugas_id"];
$tanggal = $_GET["tanggal"];

$query = "SELECT * FROM tb_sampah WHERE petugas_id = '$petugas_id' AND tanggal_manual = '$tanggal'";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => "1", "result_data" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>