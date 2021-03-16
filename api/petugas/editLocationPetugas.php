<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_petugas = $_POST["id_petugas"];
 $alamat_petugas = $_POST["alamat_petugas"];
 $latitude_petugas = $_POST["latitude_petugas"];
 $longitude_petugas = $_POST["longitude_petugas"];

 $query = "UPDATE tb_pekerja SET alamat_pekerja = '$alamat_petugas',
                                    latitude_pekerja = '$alamat_petugas',
							        longitude_pekerja = '$longitude_petugas' WHERE id_pekerja = '$id_petugas'";
//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>