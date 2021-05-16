<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_masyarakat = $_GET["id_masyarakat"];
 $isi = $_GET["isi"];

 $query = "UPDATE tb_masyarakat SET pembayaran_masyarakat = '$isi' WHERE id_masyarakat = '$id_masyarakat'";
//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>