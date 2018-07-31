<?php
include "../../config/koneksi.php";

$uname=$_POST['username'];
$fnm=$_POST['fname'];
$pass=$_POST['password'];
$kdslr=$_POST['kodeslr'];
$noktp=$_POST['noktp'];
$tlp=$_POST['notelp'];
$add=$_POST['alamat'];

$query = "INSERT INTO user (username,password,level) values ('$uname','$pass','seller')";
$exe = mysqli_query($connect, $query);
if($exe){
$look = "SELECT * FROM user where username='$uname'";
$exe2 = mysqli_query($connect,$look);
        if ($arr=mysqli_fetch_array($exe2)){
            $id = $arr['id_user'];
            $query2 = "INSERT INTO seller (id_user,kode_seller,noktp,nama,alamat,telp) VALUES ('$id','$kdslr','$noktp','$fnm','$add','$tlp')";
            $exe3 = mysqli_query($connect,$query2);
        }
}
echo "<script>window.alert('REGISTRASI BERHASIL')</script>";
echo "<script>window.location='../../index.php?p=akunpedagang'</script>"; 
?>