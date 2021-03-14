<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_masyarakat = $_POST["id_masyarakat"];
 $foto_masyarakat = $_POST["foto_masyarakat"];
 $path = "../../kelurahan/admin/masyarakat/foto/image_".time().".png";
 $finalPath = "image_".time().".png";

 $query = "UPDATE tb_masyarakat SET foto_masyarakat = '$finalPath' WHERE id_masyarakat = '$id_masyarakat'";

 if (mysqli_query($conn, $query)) {
     file_put_contents( $path, base64_decode($foto_masyarakat) );
}

//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>