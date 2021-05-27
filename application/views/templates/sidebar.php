  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>WAHYU AJI SETIAWAN.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Wahyu Aji Setiawan</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
          <?php echo form_open('jadwal/search') ?>
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
        <?php echo form_close() ?>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Tugas</span>
            </a>
        </li>
        <li class="body">
          <a href="#">
            <i class="fa fa-alert"></i> <span>fitu-fitur atau menu di sidebar </br>ini belum dapat difungsikan</span>
            </a>
        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>
