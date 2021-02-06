<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RSDH Cianjur</title>
  <link rel="icon" href="img/favicon11.ico">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">RSDH Cianjur<sup></sup></div>
      </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item ">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file"></i>
          <span>DATA MOD</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="formmod.php">Input laporan MOD</a>
            <a class="collapse-item" href="#">Rekap laporan MOD</a>
            <a class="collapse-item" href="#">Jadwal MOD</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Kunjungan Pasien</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="ralan.php">Rawat Jalan</a>
            <a class="collapse-item" href="ranap.php">Rawat Inap</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Pasien</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Data Pasien IGD</a>
            <a class="collapse-item" href="#">Data Pasien Poliklinik</a>
            <a class="collapse-item" href="#">Data Pasien Ranap</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="grafikranap.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Grafik Kunjungan Ranap</span></a>
      </li>

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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Pemberitahuan
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                
               
                <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan semua</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Pesan
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
             
                <a class="dropdown-item text-center small text-gray-500" href="#">Semua pesan</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="img/favicon11.ico">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Log Aktivitas
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

<!-- -----------------------------------------BAGEAN SUHU------------------------------------------------ -->
<div class="container-fluid">
  </br>
    <div class="alert alert-success" role="alert">
      Jumlah Pasien Rawat Inap
    </div>

  <form>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien NS 1 Covid</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien NS 2 Utama</label>
        <input type="text" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien NS 3 Utama</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Perina Sehat</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Perina Sakit</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien VK</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Camelia</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Adenium</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Amarilis</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputdata">Pasiewn Gardenia</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Jasmin</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien HCU</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputdata">Pasiewn ICU</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien OK</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien IGD</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

<div class="alert alert-success" role="alert">
  Jumlah Pasien Per Jenis Bayar
</div>

<form>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Umum</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien BPJS</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Asuransi</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

<div class="alert alert-success" role="alert">
Jumlah Pasien Rawat Jalan
</div>

<form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputdata">Jumlah Pasien Pagi</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-6">
        <label for="inputdata">Jumlah Pasien Siang</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

            
<div class="alert alert-success" role="alert">
  Jumlah Pasein NS1 Isolasi
</div>

<form>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputdata">Total Pasien</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Suspect</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-4">
        <label for="inputdata">Pasien Terkonfirmasi</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

<div class="alert alert-success" role="alert">
  Jumlah Pasien Skincare
</div>

<form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputdata">Jumlah Prodact</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-6">
        <label for="inputdata">Jumlah Treatment</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

              
    <div class="alert alert-success" role="alert">Data Pasien Meninggal</div>
    <form>
    <div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="alert alert-success" role="alert">Ketertiban Karyawan</div>
    <form>
    <div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="alert alert-success" role="alert">Oncall & Lemburan</div>
    <form>
    <div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
        
    <div class="alert alert-success" role="alert">Total DPJP</div>
        <div class="form-group row">

            <label for="inputdata" class="col-sm-2 col-form-label">dr. FUTIHA, SP.OG</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>
            
            <label for="inputdata" class="col-sm-2 col-form-label">dr. HERA HERMAWAN, SP.OG</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>
            
            <label for="inputdata" class="col-sm-2 col-form-label">dr. SUKARDY P, Sp.OG</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. WULAN. Sp.Og</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. MASRIN, SP.PD</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. TOTON, SP.PD</br>.</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. RANDY, SP.B</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. LILI, Sp.B</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. BAMBANG, Sp. Bm</br>.</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. THOMAS ANGGARA, Sp.B</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. ABDURRACHMAN ERMAN, SP.A</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>

            <label for="inputdata" class="col-sm-2 col-form-label">dr. HEKA  MAYASARI, Sp.A</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="inputdata">
            </div>
        
        </div>

                 
<div class="alert alert-success" role="alert">Tindakan Operasi</div>
<form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputdata">Tindakan OK</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-6">
        <label for="inputdata">Tindakan VK</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

<div class="alert alert-success" role="alert">Rencana Tindakan</div>
<form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputdata">Tindakan OK</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-6">
        <label for="inputdata">Tindakan VK</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>

<div class="alert alert-success" role="alert">Pemakaian Oxigen</div>
<form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputdata">Pemakaian (Bar)</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
      <div class="form-group col-md-6">
        <label for="inputdata">Sisa (Bar)</label>
        <input type="number" class="form-control" id="inputdata" placeholder="0">
      </div>
    </div>
   
<div class="form-group" >
  <div class="form-check"></div>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>

</form>
</div>

<!-- -----------------------------------------BAGEAN SUHU------------------------------------------------ -->
       
<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
  <div class="copyright text-center my-auto">
  <span>Copyright &copy; RSDH Cianjur 2020</span>
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
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Keluar" jika anda melakukan proses ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
          <a class="btn btn-primary" href="login.html">Keluar</a>
        </div>
      </div>
    </div>
  </div>

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
