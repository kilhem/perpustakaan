<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>administrator">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">SMPN 2 TASIKMALAYA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>administrator">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
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
                    <i class="fas fa-fw fa-file"></i>
                    <span>Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo active_menu('anggota')?>" href="<?php echo base_url()?>anggota">Anggota</a>
                        <a class="collapse-item <?php echo active_menu('petugas')?>" href="<?php echo base_url()?>petugas">Petugas</a>
                        <a class="collapse-item <?php echo active_menu('buku')?>" href="<?php echo base_url()?>buku">Buku</a>
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Transaksi
            </div>
          <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo active_menu('peminjaman')?>"  href="<?php echo base_url()?>peminjaman">Peminjaman</a>
                        
                    </div>

                </div>
            </li>

            <!-- Heading -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Charts -->
            <div class="sidebar-heading">
                Laporan
            </div>
            <li class="nav-item <?php echo active_menu('laporan')?>">
                <a class="nav-link "  href="<?php echo base_url()?>laporan">
                    <i class="fas fa-fw fa-file-pdf"></i>
                    <span>Laporan</span></a>
            </li>
             <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Profile
            </div>
            <li class="nav-item <?php if($this->uri->segment(1)=="profile"){echo "active";}?>">
                <a class="nav-link" href="<?php echo base_url()?>profile">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1)=="editprofile"){echo "active";}?>">
                <a class="nav-link " href="<?php echo base_url()?>editprofile">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profile</span></a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1)=="ubahpassword"){echo "active";}?>">
                <a class="nav-link" href="<?php echo base_url()?>ubahpassword">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Ubah Password</span></a>
            </li>


            <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block"> 
          <div class="sidebar-heading">
                Logout
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('auth/logout')?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>