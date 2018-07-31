<?php
$anu = "SELECT u.id_user, u.username, c.* FROM user u JOIN seller c ON c.id_user = u.id_user where u.username='$username'";
$exeanu = mysqli_query($connect,$anu);
$data = mysqli_fetch_assoc($exeanu);

?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">View Profile</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php?p=viewprofileslr">Home</a>
            </li>
            <li class="breadcrumb-item">View Profile</li>
        </ol>
    </div>

</div>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">View Profile</h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal" role="form">
                    <div class="form-body">
                        <h3 class="box-title">Info Akun</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">USERNAME:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['username']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">FULLNAME:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['nama']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">NO TELP:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['telp']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">NO KTP:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['noktp']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <h3 class="box-title">Address</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">ALAMAT:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['alamat']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--/row-->
                        
                    </div>
                    <!-- <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-info">
                                            <i class="fa fa-pencil"></i> Edit</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>