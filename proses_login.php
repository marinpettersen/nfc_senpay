<?php

include "config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['pass']);

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
$query = mysqli_query($connect,$sql);
$result = mysqli_num_rows($query);

if($result>0){
  
  $data = mysqli_fetch_array($query,MYSQLI_BOTH);
  
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['level'] = $data['level'];
  $_SESSION['id_user'] = $data['id_user'];
  $_SESSION['id_seller'] = $data['id_seller'];
  //echo $_SESSION['type'];
  
  mysqli_close();
  if($_SESSION['level']=='user'){
  header("location:index.php?p=viewprofileusr");
  }elseif($_SESSION['level']=='seller'){
  header("location:index.php?p=viewprofileslr");
  }elseif($_SESSION['level']=='admin'){
  header("location:index.php?p=dashboard");
  }
}else{
  
  //echo "login salah";
  header("location:login.php");
}
?>