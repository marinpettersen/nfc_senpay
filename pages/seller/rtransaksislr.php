<div class="row page-titles">
            <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Riwayat Transaksi</h3>
            </div>
            <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?p=viewprofileslr">Home</a></li>
                        <li class="breadcrumb-item">Riwayat Transaksi</li>
                    </ol>
            </div>
            
</div>
<div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-body">
                                <h4 class="card-title">Riwayat Transaksi</h4>
                                <h6 class="card-subtitle">Transaksi Pedagang</h6>
                                <div class="table-responsive">
                        <table class="table color-table inverse-table">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>ID Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Customer</th>
                                    <th>Tipe Transaksi</th>
                                    <th>Nominal</th>
                                </tr>
                            </thead>
                            <?php
                            ?>
                            <tbody>
                                <?php
                                    include "config/koneksi.php";
                                    $query="SELECT * FROM transaksi where trans_to='$username'";
                                    $exe = mysqli_query($connect,$query);
                                    $no = 1;
                                    while($data=mysqli_fetch_array($exe)){
                                ?>
                                
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $data['id_transaksi']; ?></td>
                                    <td><?php echo date('d-m-Y H:i', strtotime($data['waktu']));?></td>
                                    <td><?php echo $data['trans_from']; ?></td>
                                    <td><?php 
                                    $tipe=$data['trans_type'];
                                    if($tipe==1){
                                        echo 'top up';
                                    }elseif($tipe==2){
                                        echo 'penjualan';
                                    }elseif($tipe==3){
                                        echo 'withdraw';
                                    }else{
                                        echo 'jenis transaksi ini ilegal';
                                    }
                                    ?></td>
                                    <td><?php echo $data['nominal']; ?></td>
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