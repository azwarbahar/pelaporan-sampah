<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_masyarakat = $_GET["id_masyarakat"];
 $alamat_masyarakat = $_GET["alamat_masyarakat"];
 $latitude_masyarakat = $_GET["latitude_masyarakat"];
 $longitude_masyarakat = $_GET["longitude_masyarakat"];

 $query = "UPDATE tb_masyarakat SET alamat_masyarakat = '$alamat_masyarakat',
                                    latitude_masyarakat = '$latitude_masyarakat',
							        longitude_masyarakat = '$longitude_masyarakat' WHERE id_masyarakat = '$id_masyarakat'";
//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>