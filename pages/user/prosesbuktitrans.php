<?php
include "../../config/koneksi.php";
$id=$_GET['id'];
$namefile = $_FILES['file']['upload'];
$ket=$_POST['ket'];
$notrans=$_POST['notrans'];
$tgltrans=$_POST['tgltrans'];
$jumtrans=$_POST['jumtrans'];



$query = "INSERT INTO transfer_rek (id_transfer,upload,keterangan,no_transaksi,tgl_transfer,jmlh_transfer,id_user) values ('$namefile','$ket','$notrans','$jumtrans','$tgltrans','$id')";
$exe = mysqli_query($connect, $query)or die(mysqli_error());

// echo "<script>window.alert('REGISTRASI BERHASIL')</script>";
// echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
?>