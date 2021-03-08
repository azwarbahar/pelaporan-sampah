<?php
 require_once '../../koneksi.php';
 header('Content-type: application/json');
 $nik_masyarakat = $_GET["nik_masyarakat"];
 $password_masyarakat = $_GET["password_masyarakat"];
 $ray = array();
 $query = "SELECT * FROM tb_masyarakat WHERE nik_masyarakat='$nik_masyarakat'";
 $sql = mysqli_query($conn, $query);
 $row_pass = mysqli_fetch_assoc($sql);
 if ($row_pass){
    if (password_verify($password_masyarakat, $row_pass["password_masyarakat"])) {
        $ray=$row_pass;
        echo json_encode(array("kode" => 1, "auth_masayarkat" => $ray));
    } else{
        echo json_encode(array("kode" => 2, "pesan" => "Password tidak sesuai"));
    }
 } else {
    echo json_encode(array("kode" => 0, "pesan" => "Username tidak ditemukan"));
 }
?>