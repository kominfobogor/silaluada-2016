<!DOCTYPE HTML>
<html>
	
	<head>
    <meta charset="UTF-8">
    <title>Perizinan Lingkungan</title>
     <link rel="icon" href="<?php echo base_url('assets/css/image/kotabogor.png') ?>">
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	    <!-- Bootstrap 3.3.2 -->
	    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	    <!-- Font Awesome Icons -->
	    <link href="<?php echo base_url()?>assets/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	    <!-- DATA TABLES -->
	    <link href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
	    <link href="<?php echo base_url()?>assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
	    <!-- Theme style -->
	    <link href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	    <link href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	    <link href="<?php echo base_url()?>assets/css/admin.css" rel="stylesheet" type="text/css" />

	    <script src="<?php echo base_url()?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>


		<!-- Map -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gmaps/css/style.css"/>
	    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gmaps/css/jquery-position-picker.css"/>
		<script src="<?php echo base_url()?>assets/gmaps/js/OpenLayers.js"></script>
	   	<script src="<?php echo base_url()?>assets/gmaps/js/jquery-position-picker.debug.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
<body class="skin-red">
    <div class="wrapper">
      
      <header class="main-header">
      <!-- Logo -->
        <a href="#" class="logo" style="padding-top:0.7%;"><?php echo "<img src='".base_url('uploads/logo.png')."' class='img-responsive pull-left' style='width:100%;'/>"; ?></a>
        <!-- Header Navbar: style can be found in header.less -->
          
        <nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php
					$id = $this->session->userdata('member_id');
					$sql = $this->supermodel->queryManual("select * from member WHERE member_id = '".$id."'");
						if($sql->num_rows()>0) {
							foreach ($sql->result() as $r) { ?>
                  <span class="hidden-xs"><?php echo $r->nama_member; ?></span>
                  <?php }} ?>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets/dist/img/avatar.png')?>" class="img-circle" alt="User Image" />
                    <?php
					$id = $this->session->userdata('member_id');
					$sql = $this->supermodel->queryManual("select * from member WHERE member_id = '".$id."'");
						if($sql->num_rows()>0) {
							foreach ($sql->result() as $r) { ?>
                  <p><?php echo $r->nama_member; ?></p>
                  <?php }} ?>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Ubah Akun</a>
                    </div> -->
                    <div class="pull-right">
                      <a href="<?php echo site_url('login_daftar_member/logout');?>" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('assets/dist/img/avatar.png')?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                  <p>&bull;<?php echo $this->session->userdata('nama'); ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>
            <li class="active treeview">
              <a href="<?php echo site_url('dashboard_member');?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i> <span>Data </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('pemohon');?>"><i class="fa fa-circle-o"></i>Pemohon</a></li>
                <li><a href="<?php echo site_url('perusahaan');?>"><i class="fa fa-circle-o"></i>Perusahaan</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="<?php echo site_url('dokumen_member/index/'.md5(0));?>">
                <i class="fa fa-file-text"></i> <span>Dokumen Member</span></i>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
						<?php $this->load->view($konten) ; ?>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->


<!-- jQuery 2.1.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js" type="text/javascript"></script>


    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
      });

      $(function () {
        $("#example2").dataTable();
      });

      $(function () {
        $("#example3").dataTable();
      });
    </script>
  </body>
</html>