<?php
include "../../config/koneksi.php";
$id_ = $_GET['id'];
$id2_ = $_GET['id2'];
// query SQL untuk insert data
$query="DELETE FROM Customer WHERE id_customer='$id_'";
$exe=mysqli_query($connect, $query);
// mengalihkan ke halaman index.php
if($exe){
    $query2="DELETE FROM user WHERE id_user='$id2_'";
    $exe2=mysqli_query($connect, $query2);
    if($exe2){
    // mengalihkan ke halaman index.php
    echo "<script>window.alert('DELETE BERHASIL!')</script>";
    echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
    }else{
        echo "<script>window.alert('DELETE  GAGAL!')</script>";
        echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
    }
}else{
    echo "<script>window.alert('DELETE  GAGAL!!')</script>";
    echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
}

?>