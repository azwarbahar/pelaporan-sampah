<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');
 $nik = $_GET["nik"];
 $password = $_GET["password"];
 $ray = array();
 $query_masyarakat = "SELECT * FROM tb_masyarakat WHERE nik_masyarakat='$nik'";
 $sql_masyarakat = mysqli_query($conn, $query_masyarakat);
 $row_pass_masyarakat = mysqli_fetch_assoc($sql_masyarakat);
 if ($row_pass_masyarakat){
    if (password_verify($password, $row_pass_masyarakat["password_masyarakat"])) {
        $ray=$row_pass_masyarakat;
        echo json_encode(array("kode" => "1", "role" => "Masyarakat", "auth_masayarkat" => $ray));
    } else{
        echo json_encode(array("kode" => "2", "pesan" => "Password tidak sesuai"));
    }
 } else {
    $query_pekerja = "SELECT * FROM tb_pekerja WHERE nik_pekerja='$nik'";
    $sql_pekerja = mysqli_query($conn, $query_pekerja);
    $row_pass_pekerja = mysqli_fetch_assoc($sql_pekerja);
    if ($row_pass_pekerja){
        if (password_verify($password, $row_pass_pekerja["password"])) {
            $ray=$row_pass_pekerja;
            echo json_encode(array("kode" => "1", "role" => "Petugas", "auth_petugas" => $ray));
        } else{
            echo json_encode(array("kode" => "2", "pesan" => "Password tidak sesuai"));
        }
    } else {
        echo json_encode(array("kode" => "0", "pesan" => "Username tidak ditemukan"));
    }
 }
?>