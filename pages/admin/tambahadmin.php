<div class="row page-titles">
            <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Register Admin</h3>
            </div>
            <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Home</a></li>
                        <li class="breadcrumb-item">Register Admin</li>
                    </ol>
            </div>
            
</div>
<div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-body">
                                <h4 class="card-title">Akun Admin</h4>
                                <div class="table-responsive">
                                    <table class="table color-table inverse-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID_USER</th>
                                                <th>USERNAME</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        include'config/koneksi.php'
                                        ;?>

                                            <?php
                                            $tampilkan = "SELECT * FROM user WHERE level='admin'";
                                        $sql = mysqli_query($connect,$tampilkan);
                                        $i=1;
                                        while($hasil = mysqli_fetch_array($sql))
                                                {
                                                        $i=$i+1;
                                                ?>  
                                                <tr>
                                                <td><?php echo $i-1; ?></td>
                                                <td><?php echo $hasil['id_user']; ?></td>
                                                <td><?php echo $hasil['username']; ?></td>
                                                
                                                
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        </div>
                    </div>
    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-body">
                        <form action="pages/admin/plusadmin.php" method="post">
                            <h3 class="box-title m-b-0">Form Registrasi</h3>
                            <p class="text-muted m-b-30 font-13"> Tambah Admin </p>
                            <div class="row">
                                <div class="col-lg-12 col-lg-12">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Name</label>
                                            <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Enter Username">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password"  class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
    </div>

</div>