<?php
 require_once '../../koneksi.php';

$query = "SELECT * FROM tb_berita ORDER BY id_berita DESC";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "berita" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>