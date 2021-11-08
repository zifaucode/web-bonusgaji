<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">

      <center> <img src="<?= base_url('gambar/user.png') ?>" height="85px" width="85px" class="img-circle" alt="User Image">
        <br>


        <a href="#"> <?= session()->get('nama_dosen') ?></a><br>
        <a href="#"><i class="fa fa-circle text-success"></i> ADMIN</a>
      </center>

    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">



      <!-- ======================================MENU ADMIN========================================================== -->




      <li class="header">MENU ADMIN</li>

      <li><a href="<?= base_url() ?>/User"><i class="fa fa-users"></i> <span>Pegawai</span></a></li>
      <li><a href="<?= base_url() ?>/Bonus"><i class="fa fa-dollar"></i> <span>Buat Bonus</span></a></li>
      <li><a href="<?= base_url() ?>/Databonus"><i class="fa fa-handshake-o"></i> <span>Data Bonus</span></a></li>
      <li><a href="<?= base_url() ?>/auth/logoutadm"><i class="fa fa-power-off"></i> <span>Keluar</span></a></li>



    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- ======================================================================================================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">