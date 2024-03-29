<div class="row page-titles">
            <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Akun Pedagang</h3>
            </div>
            <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Home</a></li>
                        <li class="breadcrumb-item">Akun Pedagang</li>
                    </ol>
            </div>
            
</div>
<div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-body">
                                <h4 class="card-title">Pemegang Alat</h4>
                                <h6 class="card-subtitle">Akun Pedagang </h6>
                                <div class="table-responsive">
                                    <table id="myTable" class="table color-table inverse-table">
                                        <thead>
                                            <tr>
                                                <th style="background-color:#007bff">No.</th>
                                                <th style="background-color:#007bff">id seller</th>
                                                <th style="background-color:#007bff">id_user</th>
                                                <th style="background-color:#007bff">kode seller</th>
                                                <th style="background-color:#007bff">Username</th>
                                                <th style="background-color:#007bff">Alamat</th>
                                                <th style="background-color:#007bff">No.Telp</th>
                                                <th style="background-color:#007bff">saldo</th>
                                                <th style="background-color:#007bff" class"text-nowrap"> Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include'config/koneksi.php';
                                            $tampilkan = "SELECT * FROM seller";
                                            $sql = mysqli_query($connect,$tampilkan);
                                            $i=1;
                                            while($hasil = mysqli_fetch_array($sql))
                                                {
                                                    $i=$i+1;
                                                    $id_sell=$hasil['id_seller'];
                                                ?>  
                                                <tr>
                                                <td><?php echo $i-1; ?></td>
                                                <td><?php echo $hasil['id_seller']; ?></td>
                                                <td><?php echo $hasil['id_user']; ?></td>
                                                <td><?php echo $hasil['kode_seller']; ?></td>
                                                <td><?php echo $hasil['nama']; ?></td>
                                                <td><?php echo $hasil['alamat']; ?></td>
                                                <td><?php echo $hasil['telp']; ?></td>
                                                <td><?php echo $hasil['saldo']; ?></td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="modal" data-target="#dagang<?php echo $i; ?>" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="pages/admin/p_del_dagang.php?id=<?php echo $id_sell; ?>&id2=<?php echo $hasil['id_user']; ?>" role="button"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                        <div id="dagang<?php echo $i; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="#edit"></button>
                                        <h4 class="modal-title">Edit Data </h4>
                                    </div>
                                    <div class="modal-body">

                                        <form role="form" method="POST" action="pages/admin/p_edit_dagang.php?id=<?php echo $id_sell; ?>">
                                            <div class="form-group">
                                                <label>nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Seller" required>
                                                <label>No. KTP</label>
                                                <input type="text" class="form-control" name="ktp" id="ktp" placeholder="No. KTP" required>
                                                <label>telpon</label>
                                                <input type="tel" class="form-control" name="telpon" id="telpon" placeholder="" required>
                                                <label>alamat</label>
                                                <input type="text" class="form-control" name="addr" id="addr" placeholder=""required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info" name="edit">Save</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        </div>
                    </div>
</div>