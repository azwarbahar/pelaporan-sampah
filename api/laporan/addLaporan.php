<?php
 require_once '../../koneksi.php';
    $keterangan_laporan = $_POST['keterangan_laporan'];
    $foto_laporan = $_POST['foto_laporan'];
    $latitude_laporan = $_POST['latitude_laporan'];
    $longitude_laporan = $_POST['longitude_laporan'];
    $alamat_laporan = $_POST['alamat_laporan'];
    $nik_laporan = $_POST['nik_laporan'];
    $kelurahan_laporan = $_POST['kelurahan_laporan'];
    $area_laporan = $_POST['area_laporan'];
    $masyarakat_id = $_POST['masyarakat_id'];
    $staus_laporan = "New";

    // $callPetugas = mysqli_query($conn, "SELECT * FROM tb_pekerja WHERE kelurahan_pekerja = '$kelurahan_laporan' AND area_pekerja = '$area_laporan' AND status_pekerja = 'Aktif'");
    // $petugasData = mysqli_fetch_assoc($callPetugas);
    // $petugas_id = $petugasData['id_pekerja'];
    $petugas_id = "-";
    $query = "INSERT INTO tb_laporan values(null,'$keterangan_laporan',
                                            '$foto_laporan',
                                            '$latitude_laporan',
                                            '$longitude_laporan',
                                            '$alamat_laporan',
                                            '$nik_laporan',
                                            '$kelurahan_laporan',
                                            '$area_laporan',
                                            '$petugas_id',
                                            '$masyarakat_id',
                                            '$staus_laporan',
                                            null,
                                            null)";

        if ( mysqli_query($conn, $query) ){

            if ($foto_laporan == null) {

                $finalPath = "../../assets/dist/img/laporan/img_default.png";
                $result["kode"] = "1";
                $result["pesan"] = "Success";

                echo json_encode($result);
                mysqli_close($conn);

            } else {

                $id = mysqli_insert_id($conn);
                $path = "../../assets/dist/img/laporan/image_".time().".png";
                $finalPath = "image_".time().".png";

                $insert_picture = "UPDATE tb_laporan SET foto_laporan='$finalPath' WHERE id_laporan='$id' ";

                if (mysqli_query($conn, $insert_picture)) {

                    if ( file_put_contents( $path, base64_decode($foto_laporan) ) ) {

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