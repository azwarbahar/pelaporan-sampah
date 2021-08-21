<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

$kelurahan = $_GET["kelurahan"];
 // total Berat
 $result= mysqli_query($conn,"SELECT SUM(berat_sampah) AS total_berat FROM tb_laporan_petugas WHERE kelurahan = '$kelurahan' ");
 $row = mysqli_fetch_assoc($result)

 if ($result) { 
     echo json_encode(array(
                                "kode" => "1",
                                "total_berat_kelurahan" => $$row['total_berat'],
     ));       
 } else {
    echo json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
 }
?>