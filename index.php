<?php 
     session_start();
     // print_r($_SESSION);
     date_default_timezone_set('Asia/Makassar');

     if (!isset($_SESSION['admin']) && (!isset($_SESSION['user'])) ){

         echo "<script>alert('Silahkan Login terlebih dahulu');</script>";
         echo "<script>location='login.php';</script>";
     }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>POLITEKNIK LP3I | ABSENSI</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="assets/vendor/jquery/jquery.min.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?Page=home">
               <!--  <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-4"><img src="assets/img/lp3i.svg" width="50px">
                    <br>
                    <?=date('H:i')?>    
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php if ($_SESSION['admin']) {?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="?Page=jabatan">Data Jabatan</a>
                        <a class="collapse-item" href="?Page=karyawan">Data Karyawan</a>
                    </div>
                </div>
            </li>
        <?php }?>

        <?php if ($_SESSION['user']) {?>
            <li class="nav-item">
                <a class="nav-link" href="?Page=absensi">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Absen</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?Page=profil">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil</span>
                </a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="?Page=daftar-absensi">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Daftar Absensi</span>
                </a>
            </li> 

         <?php }?>

            <!-- Nav Item - Utilities Collapse Menu -->
            <?php if ($_SESSION['admin']) {?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Laporan Absensi</h6>
                        <a class="collapse-item" href="?Page=laporan">Daftar Laporan</a>
                        <a class="collapse-item" href="?Page=daftar-karyawan">Daftar Karyawan</a>
<!--                         <a class="collapse-item" href="utilities-border.html">Borders</a>
 -->                    </div>
                </div>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="?Page=daftar-user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span>
                </a>
            </li> 
             <?php }?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
              

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->

                        <!-- Nav Item - Messages -->
                  

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php 

                                        if (isset($_SESSION['admin'])) {
                                            echo $_SESSION['admin']['nama'];
                                        }else{
                                            echo $_SESSION['user']['nama'];
                                        }

                                     ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                  <?php if ($_SESSION['user']) {?>
                                <a class="dropdown-item" href="?Page=profil">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                            <?php } ?>
                              <!--   <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php
                    include 'koneksi.php';

                      if (isset($_GET['Page'])) {
                        if ($_GET['Page'] == "dashboard") {
                          include 'dashboard.php';
                        }elseif ($_GET['Page'] == "home") {
                          include 'view/home/home.php';
                        } elseif ($_GET['Page'] == "jabatan") {
                            include 'view/jabatan/jabatan.php';
                        }elseif ($_GET['Page'] == "hapus-jabatan") {
                            include 'view/jabatan/hapus.php';
                        }elseif ($_GET['Page'] == "ubah-jabatan") {
                            include 'view/jabatan/edit.php';
                        }elseif ($_GET['Page'] == "karyawan") {
                            include 'view/karyawan/karyawan.php';
                        }elseif ($_GET['Page'] == "form-karyawan") {
                            include 'view/karyawan/tambah.php';
                        }elseif ($_GET['Page'] == "detail-karyawan") {
                            include 'view/karyawan/detail.php';
                        }elseif ($_GET['Page'] == "hapus-karyawan") {
                            include 'view/karyawan/hapus.php';
                        }elseif ($_GET['Page'] == "absensi") {
                            include 'view/absensi/absensi.php';
                        }elseif ($_GET['Page'] == "daftar-absensi") {
                            include 'view/absensi/daftar.php';
                        }elseif ($_GET['Page'] == "profil") {
                            include 'view/karyawan/profil.php';
                        }elseif ($_GET['Page'] == "laporan") {
                            include 'view/absensi/laporan.php';
                        }elseif ($_GET['Page'] == "daftar-karyawan") {
                            include 'view/absensi/karyawan.php';
                        }elseif ($_GET['Page'] == "daftar-user") {
                            include 'view/user/user.php';
                        }elseif ($_GET['Page'] == "form-user") {
                            include 'view/user/tambah.php';
                        }elseif ($_GET['Page'] == "ubah-user") {
                            include 'view/user/ubah.php';
                        }elseif ($_GET['Page'] == "hapus-user") {
                            include 'view/user/hapus.php';
                        }
                    }
                      ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fawwaz Bayureksa 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" dibawah ini jika ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>