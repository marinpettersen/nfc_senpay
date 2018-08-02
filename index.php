<?php
ob_start();
session_start();
if ( !isset($_SESSION['username']) ) {
    header('location:login.php'); 
}
else { 
    $username = $_SESSION['username']; 
}
if(isset($_SESSION['id_user'])){
    $id = $_SESSION['id_user'];
}
if(isset($_SESSION['id_seller'])){
    $id_seller = $_SESSION['id_seller'];
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
if(isset($_SESSION['level'])){
    $level_user = $_SESSION['level'];
}

if (isset($_GET['p'])) {
    $p = $_GET['p'];
}else{
    $p = '';
}
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/nfcfavicon.png">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php include 'config/koneksi.php';?>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/nfcsticker.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/nfcsticker.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                        <!-- dark Logo text -->
                        <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->    
                        <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                        <?php
                        if($level_user=='admin'){
                        ?>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
                            Withdraw
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal2">
                            TOP UP</button>
                        <?php
                        }elseif($level_user=='user'){
                                $blc = "SELECT saldo FROM customer where id_user='$id'";
                                $exe = mysqli_query($connect,$blc);
                                $data = mysqli_fetch_assoc($exe);
                        
                        ?>
                        
                        
                            <a class="nav-link text-muted waves-effect waves-dark" href="#"> <i class="mdi mdi-wallet"></i> My Balance : <?php echo $data['saldo']; ?></a></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                        <?php 
                        }else{
                            $blc = "SELECT saldo FROM seller where id_user='$id'";
                            $exe = mysqli_query($connect,$blc);
                            $data = mysqli_fetch_assoc($exe);
                        ?>
                            <a class="nav-link text-muted waves-effect waves-dark" href="#"> <i class="mdi mdi-wallet"></i> My Balance : <?php echo $data['saldo']; ?></a></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                        <?php 
                        }
                        ?>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-settings"></i> Settings</a></i>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include "leftsidebarmenu.php";?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <?php 
                if ($level_user == 'admin') {
                    if ($p == 'dashboard' || $p == '') {
                        include "pages/admin/dashboard.php";
                    }else if($p == 'registernfc' ) {
                        include "pages/admin/list_kartu.php";
                    }else if($p == 'pemegangnfc')  {
                        include "pages/admin/pemegangnfc.php";
                    }elseif ($p == 'registerpedagang' ) {
                        include "pages/admin/registerpedagang.php";
                    }elseif ($p == 'akunpedagang' ) {
                        include "pages/admin/akunpedagang.php";
                    }elseif ($p == 'rtransaksipembeli' ) {
                        include "pages/admin/rtransaksipembeli.php";
                    }elseif ($p == 'rtransaksipedagang' ) {
                        include "pages/admin/rtransaksipedagang.php";
                    }elseif ($p == 'tambahadmin' ){
                        include "pages/admin/tambahadmin.php";
                    }elseif ($p == 'reg_nfc' ){
                        include "pages/admin/registernfc.php";
                    }else{
                        header('location:page_404.php');
                    }



                }else if ($level_user == 'seller') {
                    if ($p == 'viewprofileslr' || $p == '') {
                        include "pages/seller/viewprofileslr.php";
                    }else if($p == 'rtransaksislr' || $p == '') {
                        include "pages/seller/rtransaksislr.php";
                    }else{
                        header("location:page_404.php");
                    }

                }elseif ($level_user == 'user') {
                    if ($p == 'viewprofileusr' || $p == '') {
                        include "pages/user/viewprofileusr.php";
                    }else if($p == 'rtransaksibuy' || $p == '') {
                        include "pages/user/rtransaksibuy.php";
                    }else{
                        header("location:page_404.php");
                    }
                }


                ?>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" align="left">Withdraw Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="pages/proses/wd_seller.php">
                    <div class="form-group">
                        <label>Kode Seller</label>
                        <!-- <input type="text" class="form-control" name="kd" id="kd" placeholder="Kode Penjual" require autocomplete="kodeslr"> -->
                        <select name="kd" class="form-control" required>
                            <option value="" selected disabled> Pilih Pedagang </option>
                            <?php
                            
                              $query = "SELECT * FROM seller ORDER BY nama ASC";
                                $sql = mysqli_query($connect, $query) or die(mysqli_error($connect));

                                while($data_seller = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
                            ?>
                                <option value="<?php echo $data_seller['kode_seller'];?>"><?php echo $data_seller['nama'];?></option>
                            <?php } ?>
                        </select>
                        <label>Jumlah Penarikan</label>
                        <input type="number" class="form-control" name="saldo" id="saldo" placeholder="Rp. 0,">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Continue</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" align="left">TOP UP</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" autocomplete="on" action="pages/proses/topupsaldo.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <!--<input type="text" class="form-control" name="nm" id="nm" placeholder="Nama" require autocomplete="nama"> -->
                        <select name="nm" class="form-control" required>
                            <option value="" selected disabled> Pilih Customer </option>
                            <?php
                            
                              $query = "SELECT * FROM customer WHERE status='1' ORDER BY nama ASC";
                                $sql = mysqli_query($connect, $query) or die(mysqli_error($connect));

                                while($data_customer = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
                            ?>
                                <option value="<?php echo $data_customer['id_card'];?>"><?php echo $data_customer['nama'];?></option>
                            <?php } ?>
                        </select>
                        <label>TOP UP SALDO</label>
                        <input type="number" class="form-control" name="saldocus" id="saldocus" placeholder="Rp. 0,">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Continue</button>
                </form>
            </div>
        </div>
    </div>
</div>
            <footer class="footer"> © 2018 GINS </footer>
            <!-- ============================================================== -->
            
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--morris JavaScript -->
    <script src="assets/plugins/raphael/raphael-min.js"></script>
    
    <!-- Chart JS -->

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>

    <?php

        $query = "SELECT DATE(waktu) as waktu, COUNT(*) total_transaksi FROM transaksi
                    WHERE DATE(waktu) > (NOW() - INTERVAL 7 DAY)
                    GROUP BY DATE(waktu)
                    ORDER BY waktu ASC";
        $sql = mysqli_query($connect, $query);

        $label = "";
        $series = "";

        while ($data_chart = mysqli_fetch_assoc($sql)) {
            $label .= "'".date('d-m-Y', strtotime($data_chart['waktu']))."'".",";
            $series .= $data_chart['total_transaksi'].",";
        }
    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            new Chartist.Line('.ct-sm-line-chart', {
            labels: [<?php echo rtrim($label,',');?>],
            series: [
                [<?php echo rtrim($series,",");?>]
            ]
            }, {
            fullWidth: true,
            chartPadding: {
                right: 40
            }
            });
        });
</script>
    
</body>

</html>