<?php 
if (isset($_SESSION['level'])){ 
    $level=$_SESSION['level'];
    if ($level=='admin') {
?>
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img">
                <img src="assets/images/admin.png" alt="user" />

            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5><?php echo $username; ?></h5>

            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li>
                    <a href="?p=dashboard">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="?p=registernfc">
                        <i class="mdi mdi-nfc"></i>
                        <span class="hide-menu">Register NFC</span>
                    </a>
                </li>

                <li>
                    <a href="?p=pemegangnfc">
                        <i class="mdi mdi-account-box"></i>
                        <span class="hide-menu">Pemegang NFC</span>
                    </a>
                </li>

                <li>
                    <a href="?p=registerpedagang">
                        <i class="mdi mdi-account-multiple-plus"></i>
                        <span class="hide-menu">Register Pedagang</span>
                    </a>
                </li>

                <li>
                    <a href="?p=akunpedagang">
                        <i class="mdi mdi-clipboard-account"></i>
                        <span class="hide-menu">Akun Pedagang</span>
                    </a>
                </li>

                <li>
                    <a href="?p=rtransaksipedagang">
                        <i class="mdi mdi-file-chart"></i>
                        <span class="hide-menu">Riwayat Transaksi</span>
                    </a>
                    
                </li>

                <li>
                    <a href="?p=tambahadmin">
                        <i class="mdi mdi-account-settings-variant"></i>
                        <span class="hide-menu">Tambah Admin</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>


<?php 
} else if ($level=='seller'){
?>
    
    <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img">
                <img src="assets/images/seller.png" alt="user" />

            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5><?php echo $username; ?></h5>

            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li>
                    <a href="?p=viewprofileslr">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">View Profile</span>
                    </a>
                </li>

                <li>
                    <a href="?p=rtransaksislr">
                        <i class="mdi mdi-nfc"></i>
                        <span class="hide-menu">Riwayat Transaksi</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

<?php }else if ($level=='user'){ ?>
    <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img">
                <img src="assets/images/afro.png" alt="user" />

            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5><?php echo $username; ?></h5>

            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li>
                    <a href="?p=viewprofileusr">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">View Profile</span>
                    </a>
                </li>

                <li>
                    <a href="?p=rtransaksibuy">
                        <i class="mdi mdi-nfc"></i>
                        <span class="hide-menu">Riwayat Transaksi</span>
                    </a>
                </li>

                <li>
                    <a href="?p=formbuktitrans">
                        <i class="mdi mdi-upload"></i>
                        <span class="hide-menu">Top Up with Transfer</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<?php  
    } else {
        header('location:login.php');
    }
} else {
    header('location:login.php');
} 
?>