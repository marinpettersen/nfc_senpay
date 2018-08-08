<?php
include "../../config/koneksi.php";
$id=$_GET['id'];
$ket=$_POST['ket'];
$notrans=$_POST['notrans'];
$tgltrans=$_POST['tgltrans'];
$jumtrans=$_POST['jumtrans'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 100000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG files are allowed.";
    $uploadOk = 0;
}


$query = "INSERT INTO transfer_rek (id_transfer,keterangan,no_transaksi,tgl_transfer,jmlh_transfer,id_user) values (.'$ket','$notrans','$jumtrans','$tgltrans','$id')";
$exe = mysqli_query($connect, $query)or die(mysqli_error());

// echo "<script>window.alert('REGISTRASI BERHASIL')</script>";
// echo "<script>window.location='../../index.php?p=pemegangnfc'</script>";
?>