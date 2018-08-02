<?php
include "../../config/koneksi.php";
$id_            = $_GET['id'];
$nama           = $_POST['nama'];
$nim            = $_POST['nim'];
$telp           = $_POST['telpon'];


if($id_==''||$nama==''||$nim==''||$nim=='0'||$telp=='0'){
    echo "<script>window.alert('Form Tidak Boleh Kosong!!!! !')</script>";
    echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
}else{
// query SQL untuk insert data
$query="UPDATE customer SET nama='$nama', nim='$nim', telp='$telp', status='1' where id_customer='$id_'";
$exe=mysqli_query($connect, $query);
if($exe){
    // mengalihkan ke halaman index.php
    echo "<script>window.alert('UPDATE BERHASIL!')</script>";
    echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
}else{
    echo "<script>window.alert('UPDATE GAGAL!')</script>";
    echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
}
}

?>