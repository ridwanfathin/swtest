<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets"?>/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a>SWTest</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVIGATION</li>
        <li <?php 
              $active = $this->uri->segment(2);
              if(empty($active)){ ?>
                class="active"
              <?php } ?>>
          <a href="<?php echo base_url()."index.php/user" ?>">
            <i class="fa fa-dashboard"></i> <span>Hasil</span>
          </a>
        </li>
        <li <?php 
              if($active == "main"){ ?>
                class="active"
              <?php } ?>>
          <a href="<?php echo base_url()."index.php/user/main" ?>">
            <i class="fa fa-files-o"></i> <span>Rank Utama</span>
          </a>
        </li>
        <li <?php 
              if($active == "measured"){ ?>
                class="active"
              <?php } ?>>
          <a href="<?php echo base_url()."index.php/user/measured" ?>">
            <i class="fa fa-th"></i> <span>Rank Terukur</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->