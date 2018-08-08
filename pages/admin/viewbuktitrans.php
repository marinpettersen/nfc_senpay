<div class="row page-titles">
            <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Bukti Transfer</h3>
            </div>
            <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?p=viewbuktitrans">Home</a></li>
                        <li class="breadcrumb-item">View Bukti Transfer</li>
                    </ol>
            </div>
            
</div>
<div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-body">
                                <h4 class="card-title">Data Bukti Transfer</h4>
                                <h6 class="card-subtitle">Top up dari transfer</h6>
                                <div class="table-responsive">
                        <table class="table color-table inverse-table">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Nama</th>
                                    <th>Foto Bukti Transfer</th>
                                    <th>Keterangan</th>
                                    <th>No. Transaksi</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    include "config/koneksi.php";
                                    $qq = "SELECT * FROM transfer_rek";
                                    $exe = mysqli_query($connect,$qq);
                                    $no = 1;
                                    while($data=mysqli_fetch_array($exe)){
                                ?>
                                
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>s</td>
                                    <td><img src="uploads/<?php echo $data['upload']; ?>" alt="img"></td>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    <td><?php echo $data['no_transaksi']; ?></td>
                                    <td><?php echo date('d-m-Y ', strtotime($data['tgl_transfer']));?></td>
                                    <td><?php echo $data['jmlh_transfer']; ?></td>
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
</div>