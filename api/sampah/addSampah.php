<?php
 require_once '../../koneksi.php';
    $jumlah_sampah = $_POST['jumlah_sampah'];
    $satuan_sampah = $_POST['satuan_sampah'];
    $kelurahan_sampah = $_POST['kelurahan_sampah'];
    $petugas_id = $_POST['petugas_id'];
    $tanggal_sekarang = $_POST['tanggal_sekarang'];

    $query = "INSERT INTO tb_sampah values(null,'$jumlah_sampah',
                                            '$satuan_sampah',
                                            '$kelurahan_sampah',
                                            '$petugas_id',
                                            null,
                                            '$tanggal_sekarang')";

        if ( mysqli_query($conn, $query) ){

            $result["kode"] = "1";
            $result["pesan"] = "Success";

            echo json_encode($result);
            mysqli_close($conn);

        }
        else {
            $response["kode"] = "0";
            $response["pesan"] = "Error! ".mysqli_error($conn);
            echo json_encode($response);

            mysqli_close($conn);
        }

?>