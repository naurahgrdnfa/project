f<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

  <div class="slimscroll-menu">

    <!--- Sidemenu -->
    <div id="sidebar-menu">

      <ul class="metismenu" id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
          <a href="<?php echo base_url('Dashboard') ?>">
            <i class="fe-pocket"></i>
            <span> Dashboard </span>
          </a>
        </li>
          <?php  if ($this->session->role_id == 1 ||$this->session->role_id == 6) {
           ?>
        <li>
          <a href="<?php echo base_url('Dashboard/data') ?>">
            <i class="fe-users"></i>
            <span>Data Pengguna</span>
            <span class="menu-arrow"></span>
          </a>
          <?php } ?>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

  </div>
  <!-- Sidebar -left -->

</div>
