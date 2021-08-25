<?php
include'koneksi.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Perpustakaan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIPUS<sup>v.1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-box-open"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Master</h6>
                        <a class="collapse-item" href="index.php?p=anggota">Data Anggota</a>
                        <a class="collapse-item" href="index.php?p=buku">Data Buku</a>
                    </div>
                </div>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 Archieve
             </div>
 
             <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                     aria-expanded="true" aria-controls="collapseTwo">
                     <i class="fas fa-box-open"></i>
                     <span>Transaksi</span>
                 </a>
                 <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">Data Transaksi</h6>
                         <a class="collapse-item" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
                         <a class="collapse-item" href="index.php?p=transaksi-pengembalian">Transaksi Pengembalian</a>
                     </div>
                 </div>
             </li>           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Others
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=transaksi-peminjaman">
                    <i class="fas fa-file"></i>
                    <span>Laporan Transaksi</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

        </ul>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid"><br>
                    <h1>Hi, <?php echo$_SESSION['sesi']; ?>!</h1>
                    <!-- Content Row -->
                    <div class="row">

                    <!-- Content Row -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">SISTEM INFORMASI PERPUSTAKAAN UMUM</h4>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>SIPUS (Sistem Informasi Perpustakaan) adalah sebuah website yang dapat difungsikan untuk mempermudah pengelolaan informasi yang secara pesat 
                                        menggantikan sistem konvensional menjadi digital dalam mengelola informasi Perpustakaan Umum.</p>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">PENJELASAN MENU</h4>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                    </div>
                                    <p>Menu <b>MASTER DATA</b>, berisikan 2 sub menu diantaranya : </p> 
                                            <ol>
                                                <li>DATA ANGGOTA, berisikan data dan informasi keanggotaan perpustakaan</li>
                                                <li>DATA BUKU, berisikan data dan informasi koleksi buku perpustakaan</li>
                                            </ol>
                                    <hr class="sidebar-divider">
                                    <p>Menu <b>ARCHIEVE</b> berisikan 2 sub menu diantaranya : <p>
                                        <ol>
                                            <li>TRANSAKSI PEMINJAMAN, berisikan data dan informasi detail peminjaman buku perpustakaan</li>
                                            <li>TRANSAKSI PENGEMBALIAN, berisikan data dan informasi detail pengembalian buku perpustakaan</li>
                                        </ol>
                                    <hr class="sidebar-divider">
                                    <p>Menu <b>LAPORAN TRANSAKSI</b>, berisikan laporan transaksi perpustakaan<p>
                                    <hr class="sidebar-divider">
                                    <p>Menu <b>LOGOUT</b>, tombol untuk keluar dari halaman SIPUS<p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Informasi Perpustakaan 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
<?php
    $pages_dir='pages';
    if(!empty($_GET['p'])){
        $pages=scandir($pages_dir,0);
        unset($pages[0],$pages[1]);
        $p=$_GET['p'];
        if(in_array($p.'.php',$pages)){
            include($pages_dir.'/'.$p.'.php');
        }else{
            echo'Halaman Tidak Ditemukan';
        }
    }else{
        include($pages_dir.'/beranda.php');
    }
?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>