<?php
date_default_timezone_set("Asia/Jakarta");
include "../../config/koneksi.php";
$kd = $_POST['kd'];
$tarik = $_POST['saldo'];


$cek = "SELECT s.saldo, u.username as uname FROM seller s join user u ON u.id_user = s.id_user where kode_seller='$kd'";
$exec = mysqli_query($connect,$cek);
if($data=mysqli_fetch_array($exec)){
// query SQL untuk insert data
if($data['saldo']==0){
    echo "<script>window.alert('Saldo Anda Tidak Ada!')</script>";
    echo "<script>window.location='../../index.php?p=akunpedagang'</script>";
}else{
    $sisa=$data['saldo']-$tarik;
    $unm=$data['uname'];
    $query="UPDATE seller SET saldo='$sisa' where kode_seller='$kd'";
    $exe=mysqli_query($connect, $query);
        if($exe){
        $waktu = date('Y-m-d H:i:s');
        $ins = "INSERT INTO transaksi (trans_from,trans_to,trans_type,nominal, waktu) VALUES ('ADMIN','$unm','3','$tarik','$waktu')";
        $ex3 = mysqli_query($connect,$ins);
        if($ex3){
        // mengalihkan ke halaman index.php
            echo "<script>window.alert('WithDraw BERHASIL!')</script>";
            echo "<script>window.location='../../index.php?p=akunpedagang'</script>";
        }else{
        // mengalihkan ke halaman index.php
            echo "<script>window.alert('WithDraw GAGAL!')</script>";
            echo "<script>window.location='../../index.php?p=akunpedagang'</script>";
        }
    }
}
}


?> 

