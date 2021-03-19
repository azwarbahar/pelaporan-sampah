<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $kelurahan_pekerja = $_GET["kelurahan_pekerja"];
 $area_pekerja = $_GET["area_pekerja"];

$query = "SELECT * FROM tb_masyarakat WHERE area_masyarakat = '$area_pekerja' AND kelurahan_masyarakat = '$kelurahan_pekerja'
                                            AND status_masyarakat = 'Aktif' AND pembayaran_masyarakat = 'Sudah'
                                            AND status_marker = 'Belum' ";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "masyarakat_marker" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>