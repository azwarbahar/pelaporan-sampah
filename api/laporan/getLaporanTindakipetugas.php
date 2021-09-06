<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$kelurahan_laporan = $_GET["kelurahan_laporan"];
$area_laporan = $_GET["area_laporan"];
$staus_laporan = $_GET["staus_laporan"];
$petugas_id = $_GET["petugas_id"];

$query = "SELECT * FROM tb_laporan WHERE kelurahan_laporan = '$kelurahan_laporan' AND petugas_id = '$petugas_id' 
                                    AND staus_laporan = 'Proccess'  ORDER BY id_laporan DESC";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => "1", "result_laporan_berjalan" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>