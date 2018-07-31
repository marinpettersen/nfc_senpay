<?php
include "../../config/koneksi.php";

$uname=$_POST['username'];
$pass=$_POST['password'];


$query = "INSERT INTO user (username,password,level) values ('$uname','$pass','admin')";
$sql=mysqli_query($connect, $query);


echo "<script>window.alert('REGISTRASI BERHASIL')</script>";
echo "<script>window.location='../../index.php?p=tambahadmin'</script>";
?>