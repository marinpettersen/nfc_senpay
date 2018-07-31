<?php
    
    include "./config/koneksi.php";
    
    if(!isset($_GET['card'])){
?>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
<?php 
    }else{

        $card = $_GET['card'];

        $query = "SELECT * FROM customer WHERE id_card='$card'";
        $sql = mysqli_query($connect, $query);

        $data_card = mysqli_fetch_array($sql, MYSQLI_ASSOC);

        if($data_card['status']==1){
            echo "<script>
                    function goBack() {
                        window.history.back();
                    }
                </script>";
        }
    }
?>

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Register NFC</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php?p=dashboard">Home</a>
            </li>
            <li class="breadcrumb-item">register nfc</li>
        </ol>
    </div>
    
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> FORM REGISTER</h4>
                </div>
                <div class="card-body">
                    <form action="pages/admin/proses_reg.php" method="post">
                        <div class="form-body">
                            <h3 class="card-title"> REGISTRASI NFC </h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">CARD ID</label>
                                        <input type="text" name="card_id" class="form-control" placeholder="CARD ID" value="<?php echo $_GET['card'];?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">USERNAME</label>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="username" autocomplete="false">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">PASSWORD</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="password">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">FULL NAME</label>
                                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Full Name">
                                        <small class="form-control-feedback"> </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> NIM </label>
                                        <input type="text" id="nim" class="form-control" name="nim" placeholder="nim">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">NO.Telp</label>
                                        <input type="text" id="notelp" name="notelp" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->

                            <!--/span-->

                            <!--/span-->
                        </div>
                        <!--/row-->
                        <h3 class="box-title m-t-40">Address</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"> Alamat </label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="id_cust" value="<?php echo $data_card['id_customer'];?>">

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>