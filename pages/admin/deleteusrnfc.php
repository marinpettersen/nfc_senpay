<?php
include "../../config/koneksi.php";
$id_ = $_GET['id'];
// query SQL untuk insert data
$query="DELETE FROM Customer WHERE id_customer='$id_'";
$exe=mysqli_query($connect, $query);
// mengalihkan ke halaman index.php
if($exe){
    // mengalihkan ke halaman index.php
    echo "<script>window.alert('DELETE BERHASIL!')</script>";
    echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
}else{
    echo "<script>window.alert('DELETE  GAGAL!')</script>";
    echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
}

?>