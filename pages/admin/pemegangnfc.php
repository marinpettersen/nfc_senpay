<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Pemegang NFC</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php?p=dashboard">Home</a>
            </li>
            <li class="breadcrumb-item">Pemegang NFC</li>
        </ol>
    </div>

</div>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pemegang NFC</h4>
                <h6 class="card-subtitle">Akun yang terdaftar</h6>
                <div class="table-responsive">
                    <table class="table color-table inverse-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>id_tag</th>
                                <th>username</th>
                                <th>nim</th>
                                <th>NO. Telp</th>
                                <th>Saldo</td>
                                    <th style="display: none;">Status</th>
                                    <th class "text-nowrap"> Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        include'config/koneksi.php'
                                        ;?>

                            <?php
                            $tampilkan = "SELECT * FROM customer WHERE status='1'";
                            $sql = mysqli_query($connect,$tampilkan);
                            $i=1;
                            while($hasil = mysqli_fetch_array($sql))
                            {
                                $i=$i+1;
                                $id_cust=$hasil['id_customer'];
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $i-1; ?>
                                    </td>
                                    <td>
                                        <?php echo $hasil['id_card']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hasil['nama']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hasil['nim']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hasil['telp']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hasil['saldo']; ?>
                                    </td>
                                    <td style="display:none;">
                                        <?php echo $hasil['status']; ?>
                                    </td>
                                    <td class="text-nowrap">
                                        <a data-toggle="modal" data-target="#edit<?php echo $i; ?>" data-original-title="Edit">
                                            <i class="fa fa-pencil text-inverse m-r-10"></i>
                                        </a>
                                        <a href="pages/admin/deleteusrnfc.php?id=<?php echo $id_cust; ?>" role="button">
                                            <i class="fa fa-close text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                        <div id="edit<?php echo $i; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="#edit"></button>
                                        <h4 class="modal-title">Edit Data </h4>
                                    </div>
                                    <div class="modal-body">

                                        <form role="form" method="POST" action="pages/admin/editusrnfc.php?id=<?php echo $id_cust; ?>">
                                            <div class="form-group">
                                                <label>nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" required>
                                                <label>nim</label>
                                                <input type="text" class="form-control" name="nim" id="nim" placeholder="nim" required>
                                                <label>telpon</label>
                                                <input type="tel" class="form-control" name="telpon" id="telpon" placeholder="" required>
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
                </div>
            </div>
            
            </table>
            
        </div>
    </div>
</div>
</div>
</div>
