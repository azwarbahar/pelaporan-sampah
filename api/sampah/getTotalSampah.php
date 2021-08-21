<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 // total Berat
 $berat_sampah= mysqli_query($conn,"SELECT SUM(berat_sampah) AS total_berat FROM tb_laporan_petugas");
 $row_berat_sampah = mysqli_fetch_assoc($berat_sampah);

 if ($berat_sampah) { 
     echo json_encode(array(
                                "kode" => "1",
                                "total_berat" => $row_berat_sampah['total_berat'],
     ));       
 } else {
    echo json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
 }
?>