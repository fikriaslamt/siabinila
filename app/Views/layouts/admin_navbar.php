<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin')?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets/logo_unila.png')?>" width="40"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == '' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('admin')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Mahasiswa
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'data_mahasiswa' ? 'active'  : ''?><?= \Config\Services::request()->uri->getSegment(2) == 'data_lulusan' ? 'active'  : ''?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Mahasiswa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('Admin/data_mahasiswa')?>">Data Mahasiswa</a>
                        <a class="collapse-item" href="<?= base_url('Admin/data_lulusan')?>">Data Lulusan</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Skripsi
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'data_skripsi' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('Admin/data_skripsi')?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Skripsi</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'data_pengajuan_judul' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('Admin/data_pengajuan_judul')?>">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Pengajuan Judul</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'data_pengajuan_usul' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('Admin/data_pengajuan_usul')?>">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Pengajuan Seminar Usul</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'data_pengajuan_hasil' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('Admin/data_pengajuan_hasil')?>">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Pengajuan Seminar Hasil</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'data_pengajuan_kompre' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('Admin/data_pengajuan_kompre')?>">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Pengajuan Ujian Skripsi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Heading -->
            <div class="sidebar-heading">
                Dosen dan Akun
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'data_dosen' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('Admin/data_dosen')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Dosen</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'form_Add_akun_dosen' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('Admin/form_Add_akun_dosen')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tambah Akun Dosen</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= \Config\Services::request()->uri->getSegment(2) == 'request_akun' ? 'active'  : '' ?>">
                <a class="nav-link" href="<?= base_url('Admin/request_akun')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengajuan Akun</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="sbadmin/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

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

        <!-- Topbar Search
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form> -->

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                    <img class="img-profile rounded-circle"
                        src="<?= base_url('sbadmin/img/undraw_profile.svg')?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    
                    <!-- <div class="dropdown-divider"></div> -->
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
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i>Generate Report</a>
</div>