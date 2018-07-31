<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Register Pedagang</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php?p=dashboard">Home</a>
            </li>
            <li class="breadcrumb-item">register pedagang</li>
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
                    <form action="pages/admin/proslr.php" method="post">
                        <div class="form-body">
                            <h3 class="card-title"> REGISTRASI PEDAGANG </h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">USERNAME</label>
                                        <input type="text" name="username" id="usernamee" class="form-control" placeholder="username">
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

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">FULL NAME</label>
                                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Kode Seller </label>
                                        <input type="text" name="kodeslr" id="kodeslr" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">NO.Telp</label>
                                        <input type="text" name="notelp" id="notelp" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> No.KTP </label>
                                        <input type="text" name="noktp" id="noktp" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <!--/span-->

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
                                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
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