<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$id_laporan = $_GET["id_laporan"];
$query = "SELECT * FROM tb_laporan WHERE id_laporan = '$id_laporan'";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => "1", "result_laporan" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>