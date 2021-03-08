<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$id_masyarakat = $_GET["id_masyarakat"];
$query = "SELECT * FROM tb_masyarakat WHERE id_masyarakat = '$id_masyarakat'";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => "1", "result_masyarakat" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>