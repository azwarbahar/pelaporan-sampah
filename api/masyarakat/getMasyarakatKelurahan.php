<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $kelurahan_pekerja = $_GET["kelurahan_pekerja"];

$query = "SELECT * FROM tb_masyarakat WHERE kelurahan_masyarakat = '$kelurahan_pekerja' AND status_masyarakat = 'Aktif'";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "masyarakat_data" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>