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
                    <h4 class="m-b-0 text-white">Data Kartu</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover color-table inverse-table" style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>No. Kartu</th>
                                <th width="5%">Register</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "./config/koneksi.php";

                                $query = "SELECT * FROM customer WHERE status='0'";
                                $sql = mysqli_query($connect, $query);

                                $no = 1;
                                while ($data = mysqli_fetch_array($sql, MYSQLI_BOTH)) {
                                
                            ?> 
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $data['id_card'];?></td>
                                    <td class="text-center"><a href="?p=reg_nfc&card=<?php echo $data['id_card'];?>" class="btn btn-primary"><i class="fa fa-plus"></i></a></td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>