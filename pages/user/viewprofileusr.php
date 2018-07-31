<?php
$anu="SELECT u.id_user, u.username, c.* FROM user u JOIN customer c ON c.id_user = u.id_user where u.username='$username'";
$exeanu = mysqli_query($connect,$anu);
$data=mysqli_fetch_assoc($exeanu);

?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">View Profile</h3>
        
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php?p=viewprofileusr">Home</a>
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
                                    <label class="control-label text-right col-md-3">Nama:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['nama']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nim:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['nim']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">ID Card:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['id_card']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Telpon:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> <?php echo $data['telp']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            
                        </div>
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
                        <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Category:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> Category1 </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Membership:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> Free </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div> -->
                        <!--/row-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>