<?php
include "../../config/koneksi.php";

$uname=$_POST['username'];
$fnm=$_POST['fname'];
$pass=md5($_POST['password']);
$nim=$_POST['nim'];
$tlp=$_POST['notelp'];
$add=$_POST['alamat'];
$id_cust = $_POST['id_cust'];


$query = "INSERT INTO user (username,password,level) values ('$uname','$pass','user')";
$exe = mysqli_query($connect, $query);
if($exe){
$look = "SELECT * FROM user where username='$uname'";
$exe2 = mysqli_query($connect,$look);
        if ($arr=mysqli_fetch_array($exe2)){
            $id = $arr['id_user'];
            // $query2 = "INSERT INTO customer (id_user,nim,nama,alamat,telp,status) VALUES ('$id','$nim','$fnm','$add','$tlp',0)";
            
            $query2 = "UPDATE customer SET id_user='$id', nim='$nim', nama='$fnm', alamat='$add', telp='$tlp', status='1' WHERE id_customer='$id_cust'";
            $exe3 = mysqli_query($connect,$query2);
        }
}
echo "<script>window.alert('REGISTRASI BERHASIL')</script>";
echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
?>