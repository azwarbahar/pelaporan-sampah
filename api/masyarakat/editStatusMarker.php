<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_masyarakat = $_GET["id_masyarakat"];

 $query = "UPDATE tb_masyarakat SET status_marker = 'Sudah' WHERE id_masyarakat = '$id_masyarakat'";
//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>