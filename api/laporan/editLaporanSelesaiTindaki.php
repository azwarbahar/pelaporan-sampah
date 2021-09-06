<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');

 $id_laporan = $_GET["id_laporan"];
 $petugas_id = $_GET["petugas_id"];
 $staus_laporan = $_GET["staus_laporan"];
 $foto_bukti_tindakan = $_GET["foto_bukti_tindakan"];
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
?>