<?php
date_default_timezone_set("Asia/Jakarta");
include "../../config/koneksi.php";
$nm = $_POST['nm'];
$topup = $_POST['saldocus'];


if($topup>1000000){
    echo "<script>window.alert('Saldo Melebihi Limit!')</script>";
    echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
}else{
// $cek = "SELECT s.saldo, u.username as uname FROM customer s join user u ON u.id_user = s.id_user where id_card='$nm'";
$cek = "SELECT * from customer WHERE id_card='$nm'";
$exec = mysqli_query($connect,$cek);
if($data=mysqli_fetch_array($exec)){
// query SQL untuk insert data
    $sisa=$data['saldo']+$topup;
    // $unm=$data['uname'];
    $query="UPDATE customer SET saldo='$sisa' where id_card='$nm'";
    $exe=mysqli_query($connect, $query);
    if($exe){

        $waktu = date('Y-m-d H:i:s');
        $ins = "INSERT INTO transaksi (trans_from,trans_to,trans_type,nominal, waktu) VALUES ('ADMIN','$nm','1','$topup','$waktu')";
        $ex3 = mysqli_query($connect,$ins) or die(mysqli_error($connect));
        if($ex3){
        // mengalihkan ke halaman index.php
            echo "<script>window.alert('Top Up BERHASIL!')</script>";
            echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
        }else{
        // mengalihkan ke halaman index.php
            echo "<script>window.alert('Top Up GAGAL!')</script>";
            echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
        }
    }
}

}
?> 

