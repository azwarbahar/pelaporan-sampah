<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$petugas_id = $_GET["petugas_id"];
$query = "SELECT * FROM tb_laporan WHERE petugas_id = '$petugas_id' ORDER BY id_laporan DESC";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => "1", "result_laporan_petugas" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>