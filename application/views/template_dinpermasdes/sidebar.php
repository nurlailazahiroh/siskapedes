<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" href="#">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets') ?>/img/purbalingga.png">
                </div>
                <div class="sidebar-brand-text">SISKAPEDES</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dinpermasdes/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dinpermasdes/data_perangkat') ?>">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                    <span>Data Perangkat Desa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dinpermasdes/data_kecamatan') ?>">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                    <span>Data Kecamatan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dinpermasdes/data_desa') ?>">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                    <span>Data Desa</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dinpermasdes/ganti_password') ?>">
                    <i class="fas fa-fw fa-lock"></i>
                    <span>Ubah Password</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('login/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

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

                    <h4 class="font-weight-bold mb-0">Dinpermasdes</h4>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama_perangkat') ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url('photo/') . $this->session->userdata('photo') ?>">
                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->