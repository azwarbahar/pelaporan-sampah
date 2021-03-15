<?php

require('../../koneksi.php');

//get lokasi
if(isset($_POST['req'])){
    if($_POST['req']=='getdata'){
        $idjadwal = $_POST['idjadwal'];
        // $data=[];
        $data = '';
        $query = mysqli_query($conn, "SELECT * FROM tb_aspirasi WHERE id_jadwal='$idjadwal' AND status_aspirasi ='Approve'");
           $nomor = 1;
           foreach ($query as $dta){
            $get_id_anggota1 = $dta['id_anggota'];
            $anggota = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE id_anggota = $get_id_anggota1");
            $agt = mysqli_fetch_assoc($anggota);

            // fraksi
            $get_id_fraksi = $agt['id_fraksi'];
            $fraksi = mysqli_query($conn, "SELECT * FROM tb_fraksi WHERE id_fraksi = $get_id_fraksi");
            $frsi = mysqli_fetch_assoc($fraksi);
            // partai
            $get_id_partai = $frsi['id_partai'];
            $partai = mysqli_query($conn, "SELECT * FROM tb_partai WHERE id_partai = $get_id_partai");
            $prti = mysqli_fetch_assoc($partai);

            //dapil
            $get_id_dapil = $agt['id_dapil'];
            $dapil = mysqli_query($conn, "SELECT * FROM tb_dapil WHERE id_dapil = $get_id_dapil");
            $dpl = mysqli_fetch_assoc($dapil);
                $data .= '
                                <tr>
                                    <td style="text-align:center">'.$nomor.'</td>
                                    <td>'.$dta['kegiatan'].'</td>
                                    <td>'.$dta['skpd'].'</td>
                                    <td>'.$dta['lokasi'].'</td>
                                    <td>'.$agt['nama_anggota'].'</td>
                                    <td>'.$prti['nama_partai'].'</td>
                                    <td>'.$dpl['nama_dapil'].'</td>
                                </tr>';
                                $nomor = $nomor + 1;
            }
            if($data){
                echo $data;
            } else{
                echo '<tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr>';
            }
    }



}
?>