<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_laporan = $_GET["id_laporan"];
 $petugas_id = $_GET["petugas_id"];
 $staus_laporan = $_GET["staus_laporan"];

 $query = "UPDATE tb_laporan SET petugas_id = '$petugas_id',
                                 staus_laporan = '$staus_laporan',
                                 update_at = null WHERE id_laporan = '$id_laporan'";
//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>