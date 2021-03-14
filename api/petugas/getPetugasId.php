<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$id_petugas = $_GET["id_petugas"];
$query = "SELECT * FROM tb_pekerja WHERE id_pekerja = '$id_petugas'";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => "1", "result_petugas" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>