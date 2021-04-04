<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_masyarakat = $_POST["id_masyarakat"];
 $nama_masyarakat = $_POST["nama_masyarakat"];
 $alamat_masyarakat = $_POST["alamat_masyarakat"];
 $telpon_masyarakat = $_POST["telpon_masyarakat"];
 $usia_masyarakat = $_POST["usia_masyarakat"];

 $query = "UPDATE tb_masyarakat SET nama_masyarakat = '$nama_masyarakat',
                                    alamat_masyarakat = '$alamat_masyarakat',
                                    telpon_masyarakat = '$telpon_masyarakat',
							        usia_masyarakat = '$usia_masyarakat' WHERE id_masyarakat = '$id_masyarakat'";
//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>