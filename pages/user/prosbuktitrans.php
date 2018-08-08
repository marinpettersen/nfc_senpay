<?php
include "../../config/koneksi.php";
session_start();
if (isset($_POST)==true){
    $id=$_GET['id'];
    $ket=$_POST['ket'];
    $notrans=$_POST['notrans'];
    $tgltrans=$_POST['tgltrans'];
    $jumtrans=$_POST['jumtrans'];
    $uploadOk = 1;
    $namafile = time().'_'.basename($_FILES ["upload"]["name"]);

    $targetdir = "../../uploads/";
    $targetFilePath = $targetdir . $namafile;

    $ekstensiFile = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $ekstensiOk = array('jpg','jpeg','png');

    if(in_array($ekstensiFile, $ekstensiOk)){
        if(move_uploaded_file($_FILES["upload"]["tmp_name"], $targetFilePath)){
            $sql = "INSERT INTO transfer_rek (upload,keterangan,no_transaksi,tgl_transfer,jmlh_transfer,id_user) 
            VALUES ('".$targetFilePath."','".$ket."','".$notrans."','".$tgltrans."','".$jumtrans."','".$_SESSION['id_user']."')";
            $execute = mysqli_query($connect,$sql);
            if ($execute) {
                
                echo "<script>window.alert('Berhasil')</script>";
                echo "<script>window.location='../../index.php?p=formbuktitrans'</script>";
                $uploadOk = 1;
            }else {
                echo "gagal insert data";
                $uploadOk = 0;
            }
        }else{
            echo 'gagal upload foto';
            $uploadOk = 0;

        }
    }else{
        echo 'your file not match with our rule';
        $uploadOk = 0;
    }
    if ($_FILES["upload"]["size"] > 100000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
}
?>