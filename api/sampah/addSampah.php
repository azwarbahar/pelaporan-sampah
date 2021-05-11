<?php
 require_once '../../koneksi.php';
    $kelurahan = $_POST['kelurahan'];
    $id_koordinator = $_POST['id_koordinator'];
    $id_petugas = $_POST['id_petugas'];
    $berat_sampah = $_POST['berat_sampah'];
    $foto_bukti = $_POST['foto_bukti'];
    $latitude_sampah = $_POST['latitude_sampah'];
    $longitude_sampah = $_POST['longitude_sampah'];
    $alamat_sampah = $_POST['alamat_sampah'];
    $keterangan = $_POST['keterangan'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO tb_laporan_petugas values(null,'$kelurahan',
                                            '$id_koordinator',
                                            '$id_petugas',
                                            '$berat_sampah',
                                            '$foto_bukti',
                                            '$latitude_sampah',
                                            '$longitude_sampah',
                                            '$alamat_sampah',
                                            '$keterangan',
                                            '$tanggal',
                                            null,
                                            null)";

        if ( mysqli_query($conn, $query) ){

            if ($foto_bukti == null) {

                $finalPath = "../../assets/dist/img/lapor_petugas/img_default.png";
                $result["kode"] = "1";
                $result["pesan"] = "Success";

                echo json_encode($result);
                mysqli_close($conn);
            } else {

                $id = mysqli_insert_id($conn);
                $path = "../../assets/dist/img/lapor_petugas/image_".time().".png";
                $finalPath = "image_".time().".png";

                $insert_picture = "UPDATE tb_laporan_petugas SET foto_bukti='$finalPath' WHERE id_laporan_petugas='$id' ";

                if (mysqli_query($conn, $insert_picture)) {

                    if ( file_put_contents( $path, base64_decode($foto_bukti) ) ) {

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

        }
        else {
            $response["kode"] = "0";
            $response["pesan"] = "Error! ".mysqli_error($conn);
            echo json_encode($response);

            mysqli_close($conn);
        }

?>