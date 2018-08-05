        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Transaksi pedagang</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?p=dashboard">Home</a></li>
                    <li class="breadcrumb-item">Transaksi pedagang</li>
                </ol>
            </div>    
        </div>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Riwayat Transaksi</h4>
                <h6 class="card-subtitle">Transaksi Customers - Pedagang </h6>
                    <div class="table-responsive">
                        <table class="table color-table inverse-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Pembeli</th>
                                    <th>Penjual</th>
                                    <th class="text-center">Tipe Transaksi</th>
                                    <th>Nominal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include "config/koneksi.php";
                                    $query="SELECT * FROM transaksi";
                                    $exe = mysqli_query($connect,$query);
                                    $no = 1;
                                    while($data=mysqli_fetch_array($exe)){
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo date('d-m-Y H:i', strtotime($data['waktu']));?></td>
                                    <td><?php echo $data['trans_from']; ?></td>
                                    <td><?php echo $data['trans_to']; ?></td>
                                    <td class="text-center">
                                        <?php
                                            switch ($data['trans_type']) {
                                                case 1:
                                                    echo '<h3><span class="badge badge-primary">Top up</span></h3>';
                                                    break;
                                                case 2:
                                                    echo '<h3><span class="badge badge-success">Beli</span></h3>';
                                                    break;
                                                case 3:
                                                    echo '<h3><span class="badge badge-info">Withdraw</span></h3>';
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                        ?>       
                                    </td>
                                    <td>Rp.<?php echo number_format($data['nominal'],0,',','.'); ?>,-</td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    Bulan
                    <select name="bulan">
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="12">November</option>
                    <option value="12">Desember</option>
                    </select>
                    Tahun
                    <select name="tahun">
                    <?php
                    $mulai= date('Y') - 50;
                    for($i = $mulai;$i<$mulai + 100;$i++){
                        $sel = $i == date('Y') ? ' selected="selected"' : '';
                        echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                    }
                    ?>
                    </select>



                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#">
                            Submit
                        </button>
                </div>
            </div>
        </div>
</div>