<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-2">DATA CENTER</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()."tamu/view_tamu"; ?>" >
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>AKSES MASUK DC</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://123.64.193.99/inventorydc">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>INVENTORI DC / DRC</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()."administrator/users"; ?>" >
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>TAMBAH USER</span></a>
      </li>

           <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       
      </div>
    
    <!-- MONITORING SYSTEM Menu -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>DAILY CEK LIST</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="<?php echo base_url()."daily1/view_daily1"; ?>">SHIFT 1</a>
            <a class="collapse-item"  href="<?php echo base_url()."daily2/view_daily2"; ?>">SHIFT 2</a>
            <a class="collapse-item"  href="<?php echo base_url()."daily3/view_daily3"; ?>">SHIFT 3</a>
          </div>
        </div>
      </li>

      <!-- MONITORING SYSTEM Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>MONITORING SYSTEM</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="http://123.64.14.26:8090/Database.aspx">DATA GUARD ALL</a>
            <a class="collapse-item" href="http://123.64.14.26:8090/SMSGateway.aspx">SMS GATEWAY</a>
            <a class="collapse-item" href="http://123.64.18.97:9080/fdevmoni/index.jsp">ATM MONITORING</a>
            <a class="collapse-item" href="http://123.64.30.52:8080/dude/main.html?page=map_info&id=389866">THE DUDE NETWORK</a>
            <a class="collapse-item" href="http://123.64.30.52:8080/dude/main.html?page=map_info&id=42649036">THE DUDE SERVER</a>
            <a class="collapse-item" href="http://123.64.30.52:8081/overview.do?selectedTab=Home&selitem=dashboard.name.overview">OPMANAGER</a>
            <a class="collapse-item" href="https://123.64.206.22/vsphere-client/?csp#extensionId%3Dcom.vmware.hbr.client.site.monitor.incoming.replication.list%3Bcontext%3Dcom.vmware.core.model%253A%253AServerObjectRef~554cb42c-5d46-4d12-b416-269360b1d7ad%253AFolder%253Agroup-d1~core">REPLIKASI VMWARE</a>
            <a class="collapse-item" href="utilities-other.html">LIMIT MONITORING</a>
            <a class="collapse-item" href="utilities-other.html">LLL MONITORING</a>
          </div>
        </div>
      </li>

       <!-- DAILY BATCH Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>DAILY BATCH</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url()."rtgs/view_rtgs"; ?>">RTGS</a>
            <a class="collapse-item" href="<?php echo base_url()."skn/view_skn"; ?>">SKN</a>
            <a class="collapse-item" href="<?php echo base_url()."gaml/view_gaml"; ?>">GAML</a>
            <a class="collapse-item" href="<?php echo base_url()."jalin/view_jalin"; ?>">JALIN LINK SWITCHING</a>
            <a class="collapse-item" href="<?php echo base_url()."bersama/view_bersama"; ?>">ATM BERSAMA</a>
            <a class="collapse-item" href=" ">GCMS</a>
            <a class="collapse-item" href=" ">GCCM</a>
            <a class="collapse-item" href="<?php echo base_url()."sms/view_sms"; ?>">SMS GATEWAY</a>
            <a class="collapse-item" href="<?php echo base_url()."ej/view_ej"; ?>">EJOURNAL</a>
            <a class="collapse-item" href="<?php echo base_url()."cash/view_cash"; ?>">CASH REMAINING</a>
          </div>
        </div>
      </li>

        <!-- Laporan Menu -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-item" aria-expanded="true" aria-controls="collapse-item">
          <i class="fas fa-fw fa-print"></i>

          <span>REPORT</span>
        </a>
        <div id="collapse-item" class="collapse" aria-labelledby="headingitem" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <a class="collapse-item" href="utilities-color.html">Laporan Harian</a> -->
            <a class="collapse-item" href="<?php echo base_url()."report"; ?>">DC-DRC ROOM</a>
           <!--  <a class="collapse-item" href="<?php echo base_url()."laporan/view_laporan_gaml"; ?>">LAPORAN GAML</a> -->
            <!-- <a class="collapse-item" href="utilities-animation.html">Cetak</a> -->
          </div>
        </div>
      </li>

      
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/logout') ?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>LOG OUT</span></a>
      </li> -->
      <!-- Divider -->
      <hr class="sidebar-divider">

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