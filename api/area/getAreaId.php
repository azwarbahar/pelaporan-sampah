<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$id_area = $_GET["id_area"];
$kelurahan = $_GET["kelurahan"];
$query = "SELECT * FROM tb_area WHERE id_area = '$id_area' AND kelurahan_area = '$kelurahan' ";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => 1, "result_area" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>