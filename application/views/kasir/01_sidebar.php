<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mb-4" href="<?= base_url("kasir/Home"); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-home fa-2x"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AK</sup></div>
    </a>




    <!-- Heading -->
    <div class="sidebar-heading mt-4">
        Transaksi
    </div>
    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Tables -->
    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url("kasir/Cdo/input_do"); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>DO Masuk</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url("kasir/Cdo/ambil_do_pilihcust"); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>DO Keluar</span></a>
    </li>





    <!-- Heading -->
    <div class="sidebar-heading mt-4">
        LAPORAN
    </div>
    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Tables -->
    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url("kasir/Clap/trx_open_DO"); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan Pembukaan DO</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item ">
        <a class="nav-link" href="<?= base_url("kasir/Cdo/lap_sisa_do"); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan Sisa DO</span></a>
    </li> -->


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#lap_keluar"
            aria-expanded="true" aria-controls="lap_keluar">
            <i class="fas fa-fw fa-cog"></i>
            <span>Laporan Sisa DO</span>
        </a>
        <div id="lap_keluar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= base_url("kasir/Clap/lap_sisa_DO_allBar"); ?>">Semua Barang</a>
                <a class="collapse-item" href="<?= base_url("kasir/Claporan/lap_out_rumah_per_perum_form"); ?>">Per nota</a>
                <!-- <a class="collapse-item" href="cards.html">Pengeluaran Umum</a> -->
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Tables -->
    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url("Auth/logout"); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->