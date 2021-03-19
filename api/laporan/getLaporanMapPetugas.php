<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$kelurahan_laporan = $_GET["kelurahan_laporan"];
$area_laporan = $_GET["area_laporan"];
$staus_laporan = $_GET["staus_laporan"];

$query = "SELECT * FROM tb_laporan WHERE kelurahan_laporan = '$kelurahan_laporan' AND area_laporan = '$area_laporan'
                                    AND staus_laporan = '$staus_laporan' ORDER BY id_laporan DESC";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => "1", "result_marker_laporan" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>