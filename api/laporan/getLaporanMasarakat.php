<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$masyarakat_id = $_GET["masyarakat_id"];
$query = "SELECT * FROM tb_laporan WHERE masyarakat_id = '$masyarakat_id'";


 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => "1", "result_laporan_masyarakat" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>