<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_petugas = $_POST["id_petugas"];
 $foto_petugas = $_POST["foto_petugas"];
 $path = "../../kelurahan/admin/petugas/foto/image_".time().".png";
 $finalPath = "image_".time().".png";

 $query = "UPDATE tb_pekerja SET foto_pekerja = '$finalPath' WHERE id_pekerja = '$id_petugas'";

 if (mysqli_query($conn, $query)) {
     file_put_contents( $path, base64_decode($foto_petugas) );
}

//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>