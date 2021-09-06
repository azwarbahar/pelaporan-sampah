<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_laporan = $_GET["id_laporan"];
 $petugas_id = $_GET["petugas_id"];
 $staus_laporan = $_GET["staus_laporan"];
 $foto_bukti_tindakan = $_GET["foto_bukti_tindakan"];

    if ($foto_bukti_tindakan == null) {
        $result["kode"] = "2";
        $result["pesan"] = "Foto tidak terkirim";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $id = mysqli_insert_id($conn);
        $path = "../../assets/dist/img/laporan/bukti_tindakan/image_".time().".png";
        $finalPath = "image_".time().".png";
        $insert_picture = "UPDATE tb_laporan SET petugas_id = '$petugas_id',
                                        staus_laporan = '$staus_laporan',
                                        foto_tindakan_laporan = '$finalPath',
                                        update_at = null WHERE id_laporan = '$id_laporan'";

        if (mysqli_query($conn, $insert_picture)) {

            if ( file_put_contents( $path, base64_decode($foto_bukti_tindakan) ) ) {

                $result["kode"] = "1";
                $result["pesan"] = "Success!";

                echo json_encode($result);
                mysqli_close($conn);

            } else {

                $response["kode"] = "0";
                $response["pesan"] = "Error! ".mysqli_error($conn);
                echo json_encode($response);

                mysqli_close($conn);
            }

        }
    }





 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>