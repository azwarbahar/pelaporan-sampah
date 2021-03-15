<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');
 $nik_petugas = $_GET["nik_petugas"];
 $password_petugas = $_GET["password_petugas"];
 $ray = array();
 $query = "SELECT * FROM tb_pekerja WHERE nik_pekerja='$nik_petugas'";
 $sql = mysqli_query($conn, $query);
 $row_pass = mysqli_fetch_assoc($sql);
 if ($row_pass){
    if (password_verify($password_petugas, $row_pass["password"])) {
        $ray=$row_pass;
        echo json_encode(array("kode" => "1", "result_petugas" => $ray));
    } else{
        echo json_encode(array("kode" => "2", "pesan" => "Password tidak sesuai"));
    }
 } else {
    echo json_encode(array("kode" => "0", "pesan" => "Username tidak ditemukan"));
 }
?>