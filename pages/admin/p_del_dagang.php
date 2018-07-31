<?php
include "../../config/koneksi.php";
$id_ = $_GET['id'];
// query SQL untuk insert data
$query="DELETE FROM seller WHERE id_seller='$id_'";
$exe=mysqli_query($connect, $query);
// mengalihkan ke halaman index.php
if($exe){
    // mengalihkan ke halaman index.php
    echo "<script>window.alert('DELETE BERHASIL!')</script>";
    echo "<script>window.location='../../index.php?p=akunpedagang'</script>";
}else{
    echo "<script>window.alert('DELETE GAGAL!')</script>";
    echo "<script>window.location='../../index.php?p=akunpedagang'</script>";
}

?>