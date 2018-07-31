<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php?p=dashboard">Home</a>
            </li>
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </div>

</div>
<div class="page-wrapper" style="margin-left: 0;height: auto">
    <div class="container-fluid">
        <div class="row">
                    <!-- Column -->
                    <?php

                        include "./config/koneksi.php";

                        $query = "SELECT * FROM customer WHERE status='1'";
                        $sql = mysqli_query($connect, $query);

                        $total_customer = mysqli_num_rows($sql);
                    ?>
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card card-inverse card-info">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><?php echo number_format($total_customer, 0, ',','.');?></h1>
                                <h6 class="text-white">Total User</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <?php

                        $query = "SELECT * FROM seller";
                        $sql = mysqli_query($connect, $query);

                        $total_seller = mysqli_num_rows($sql);
                    ?>
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card card-primary card-inverse">
                            <div class="box text-center">
                                <h1 class="font-light text-white"><?php echo number_format($total_seller, 0, ',','.');?></h1>
                                <h6 class="text-white">Total Pedagang</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <?php
                        $query = "SELECT * FROM transaksi";
                        $sql = mysqli_query($connect, $query);

                        $total_trans = mysqli_num_rows($sql);
                    ?>
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h1 class="font-light text-white"><?php echo number_format($total_trans, 0, ',','.');?></h1>
                                <h6 class="text-white">Total Transaksi</h6>
                            </div>
                        </div>
                    </div>
        </div>

        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Transaksi 7 hari terakhir</h4>
                        <div class="ct-sm-line-chart" style="height: 400px;">
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
    </div>
</div>

<style>
    .ct-horizontal{
        font-size:10px;
    }
</style>