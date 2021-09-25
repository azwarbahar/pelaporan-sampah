<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_petugas = $_POST["id_petugas"];
 $nama_petugas = $_POST["nama_petugas"];
 $alamat_petugas = $_POST["alamat_petugas"];
 $telpon_petugas = $_POST["telpon_petugas"];
 $usia_petugas = $_POST["usia_petugas"];

 $query = "UPDATE tb_pekerja SET nama_pekerja = '$nama_petugas',
                                    alamat_pekerja = '$alamat_petugas',
                                    usia_pekerja = '$usia_petugas',
							        telpon_pekerja = '$telpon_petugas' WHERE id_pekerja  = '$id_petugas'";

//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>"1", 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => "2", 'pesan' => 'Proses gagal'));
?>