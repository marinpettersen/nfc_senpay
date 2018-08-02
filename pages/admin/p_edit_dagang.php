<?php
include "../../config/koneksi.php";
$id_            = $_GET['id'];
$nama           = $_POST['nama'];
$ktp            = $_POST['ktp'];
$telp           = $_POST['telpon'];
$add            = $_POST['addr'];


// query SQL untuk insert data
$query="UPDATE seller SET nama='$nama', noktp='$ktp', telp='$telp', alamat='$add' where id_seller='$id_'";
$exe=mysqli_query($connect, $query);
if($exe){
    // mengalihkan ke halaman index.php
    echo "<script>window.alert('UPDATE BERHASIL!')</script>";
    echo "<script>window.location='../../index.php?p=akunpedagang'</script>";
}else{
    echo "<script>window.alert('UPDATE GAGAL!')</script>";
    echo "<script>window.location='../../index.php?p=akunpedagang'</script>";
}


?>