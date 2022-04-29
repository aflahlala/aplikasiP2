<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APLIKASI P2 | Superadmin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/dist')?>/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/summernote/summernote-bs4.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins')?>/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/dist')?>/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url('assets/template/back/dist')?>/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="Dashboard1" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="Dashboard1" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="Dashboard1" class="brand-link">
        <img src="<?php echo base_url('assets/template/back/dist')?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">APLIKASI P2 UYE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url('assets/template/back/dist')?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">MAS MODHEEENN</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Akun
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Superadmin/Tambah_Akun" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Akun</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Buat Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Dashboard1" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penindakan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Dashboard2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Laporan Penindakan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">LPTP</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="No_LPTP">Nomor LPTP</label>
                <input type="text" id="No_LPTP" class="form-control" value="LPTP- /WBC.12/2022">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Surat Perintah Nomor</label>
                    <input type="text" id="No_PRIN" class="form-control" value="PRIN- /WBC.12/2022">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tanggal PRIN</label>
                    <input type="date" id="Tgl_PRIN" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="Locus">Locus</label>
                <input type="text" id="Locus" class="form-control">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Tempus</label>
                    <input type="date" id="Tempus" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Jam</label>
                    <input type="time" id="Jam" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="Uraian_Penindakan">Kategori dan Uraian Penindakan</label>
                <textarea id="Uraian_Penindakan" class="form-control" rows="4"></textarea>
              </div>
              <h5>A. Sarana Pengangkut</h5>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Jenis</label>
                    <input type="text" id="Sarana_Jenis" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nomor Peti Kemas</label>
                    <input type="text" id="Sarana_NoPetiKemas" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>No.Pol/Voy/Flight</label>
                    <input type="text" id="Sarana_NoPol" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Ukuran</label>
                    <input type="text" id="Sarana_Ukuran" class="form-control">
                  </div>
                </div>
              </div>
              <h5>B. Barang</h5>
              <div class="form-group">
                <label for="inputBarang">Komoditi/Jenis</label>
                <select id="inputBarang" class="form-control custom-select">
                  <option selected disabled>Pilih Jenis</option>
                  <option>BKC HT</option>
                  <option>BKC MMEA</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Barang_Jumlah">Jumlah</label>
                <textarea id="Barang_Jumlah" class="form-control" rows="4"></textarea>
              </div>
              <h5>C. Bangunan / Tempat</h5>
              <div class="form-group">
                <label for="Bangunan_Alamat">Alamat</label>
                <textarea id="Bangunan_Alamat" class="form-control" rows="4"></textarea>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>No Reg Bangunan/ NPPBKC/ dll</label>
                    <input type="text" id="Bangunan_NoReg" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Pemilik/ Yang Menguasai</label>
                    <input type="text" id="Bangunan_Pemilik" class="form-control">
                  </div>
                </div>
              </div>
              <h5>D. Orang</h5>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" id="Orang_Nama" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Orang_JenisKelamin">Jenis Kelamin</label>
                    <select id="Orang_JenisKelamin" class="form-control custom-select">
                      <option selected disabled>Pilih Jenis Kelamin</option>
                      <option>Pria</option>
                      <option>Wanita</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" id="Orang_Alamat" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" id="Orang_Lahir" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Identitas</label>
                    <input type="text" id="Orang_Identitas" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <input type="text" id="Orang_Kwn" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>SB Penindakan</label>
                    <input type="text" id="No_SBP" class="form-control" value="SBP- /WBC.12/2022">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tanggal SBP</label>
                    <input type="date" id="Tgl_SBP" class="form-control">
                  </div>
                </div>
              </div>
              <h5>Diberikan Kepada :</h5>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" id="Kepada_Nama" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" id="Kepada_Alamat" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Identitas</label>
                    <input type="text" id="Kepada_Identitas" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Selaku</label>
                    <input type="text" id="Kepada_Selaku" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="HalYangTerjadi">Hal Yang Terjadi</label>
                <textarea id="HalYangTerjadi" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="Alasan">Alasan Tidak Dilakukan Penindakan</label>
                <textarea id="Alasan" class="form-control" rows="4"></textarea>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">LPHP</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="JenisPelanggaran_LP">Jenis Pelanggaran</label>
                <select id="JenisPelanggaran_LP" class="form-control custom-select">
                  <option selected disabled>Pilih Jenis</option>
                  <option>Cukai</option>
                  <option>Pabean</option>
                  <option>Narkotika atau Barang Larangan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="UraianModus_LP">Uraian Modus</label>
                <textarea id="UraianModus_LP" class="form-control" rows="4"></textarea>
              </div>
              <h5>Diduga dilakukan Oleh :</h5>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" id="Orang_Nama_LP" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Orang_JenisKelamin_LP">Jenis Kelamin</label>
                    <select id="Orang_JenisKelamin_LP" class="form-control custom-select">
                      <option selected disabled>Pilih Jenis Kelamin</option>
                      <option>Pria</option>
                      <option>Wanita</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" id="Orang_Alamat_LP" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" id="Orang_Lahir_LP" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nomor Identitas</label>
                    <input type="text" id="Orang_Identitas_LP" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="DokumenSurat">Dokumen/Surat Terkait</label>
                <textarea id="DokumenSurat" class="form-control" rows="4"></textarea>
              </div>
            </div>
          </div>

          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Penanggung Jawab</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <h5>Pejabat Yang Melaksanakan Penindakan,</h5>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="inputKabid">Kabid P2</label>
                    <select id="inputKabid" class="form-control custom-select">
                      <option selected disabled>Pilih Nama</option>
                      <option>User1</option>
                      <option>User2</option>
                      <option>User3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP_Kabid">NIP Kabid P2</label>
                  <input type="number" id="NIP_Kabid" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="inputSeksi">Kepala Seksi Penindakan I</label>
                    <select id="inputSeksi" class="form-control custom-select">
                      <option selected disabled>Pilih Nama</option>
                      <option>User1</option>
                      <option>User2</option>
                      <option>User3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP_SeksiSatu">NIP Seksi Penindakan I</label>
                  <input type="number" id="NIP_Seksi" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="inputPelaksana_Satu">Pelaksana Satu</label>
                    <select id="inputPelaksana_Satu" class="form-control custom-select">
                      <option selected disabled>Pilih Nama</option>
                      <option>User1</option>
                      <option>User2</option>
                      <option>User3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP_PenSatu">NIP Pelaksana Satu</label>
                  <input type="number" id="NIP_PenSatu" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="inputPelaksana_Dua">Pelaksana Dua</label>
                    <select id="inputPelaksana_Dua" class="form-control custom-select">
                      <option selected disabled>Pilih Nama</option>
                      <option>User1</option>
                      <option>User2</option>
                      <option>User3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP_PenDua">NIP Pelaksana Dua</label>
                  <input type="number" id="NIP_PenDua" class="form-control">
                </div>
              </div>
            </div>
          </div>


          <!-- /.card -->

          <div class="row">
            <div class="col-md-6">
              <a href="#" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Create new Porject" class="btn btn-success float-right">
            </div>
          </div>

        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/template/back/plugins')?>/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/template/back/plugins')?>/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/back/dist')?>/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/template/back/dist')?>/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/template/back/dist')?>/js/pages/dashboard.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url('assets/template/back/plugins')?>/bs-stepper/js/bs-stepper.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>
