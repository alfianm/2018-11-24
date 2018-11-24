<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/template/back/dist') ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('username') ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <?php if($this->session->userdata('level')==='Admin'):?>
      <li>
        <a href="<?php echo base_url('admin/dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Data Pendaftar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/siswa') ?>"><i class="fa fa-circle-o"></i> Siswa</a></li>
          <li><a href="<?php echo base_url('admin/walisiswa') ?>"><i class="fa fa-circle-o"></i> Wali Siswa</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i> <span>Verifikasi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/b_verifikasi') ?>"><i class="fa fa-circle-o"></i> Belum Verifikasi</a></li>
          <li><a href="<?php echo base_url('admin/diterima') ?>"><i class="fa fa-circle-o"></i> Diterima</a></li>
          <li><a href="<?php echo base_url('admin/ditolak') ?>"><i class="fa fa-circle-o"></i> Ditolak</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('admin/pengumuman') ?>">
          <i class="fa fa-pie-chart"></i>
          <span>Pengumuman</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/pesan') ?>">
          <i class="fa fa-laptop"></i>
          <span>Pesan</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/user') ?>">
          <i class="fa fa-edit"></i> 
          <span>User</span>
        </a>
      </li>
      <?php elseif($this->session->userdata('level')==='Petugas'):?>
        <li>
          <a href="<?php echo base_url().'petugas/pengumuman' ?>">
            <i class="fa fa-dashboard"></i> <span>Verifikasi</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Belum Verifikasi</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Diterima</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Ditolak</a></li>
          </ul>
        </li>
        <?php endif;?>
  </section>
  <!-- /.sidebar -->
</aside>
