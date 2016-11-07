<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Perizinan Lingkungan</title>
<link rel="icon" href="<?php echo base_url('assets/css/image/kotabogor.png') ?>">

<!-- Bootstrap 3.3.2 -->
<link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="<?php echo base_url() ?>assets/perizinan/css/styles.css" rel="stylesheet">

<script src="<?php echo base_url()?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/jquery-form/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>assets/dashgum/assets/js/jquery-ui-1.9.2.custom.min.js"></script>

<script src="<?php echo base_url() ?>assets/perizinan/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url('assets/plugins/toastr/toastr.min.css'); ?>" type="text/css">
<script type="text/javascript" src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>

  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/chosen/chosen.css" type="text/css">
  <script src="<?php echo base_url(); ?>bower_components/chosen/chosen.jquery.js"></script>


<!-- Datatable -->
<link href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/perizinan/css/datepicker3.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url() ?>assets/perizinan/js/lumino.glyphs.js"></script>

<!-- Fontawesome -->
<link href="<?php echo base_url()?>assets/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Map -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gmaps/css/style.css"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gmaps/css/jquery-position-picker.css"/>
    <script src="<?php echo base_url()?>assets/gmaps/js/OpenLayers.js"></script>
      <script src="<?php echo base_url()?>assets/gmaps/js/jquery-position-picker.debug.js"></script>

    <script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript">
      CI = {
          baseUrl: "<?php echo base_url(); ?>",
          siteUrl: "<?php echo site_url(); ?>"
      }
    </script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url('dashboard_member'); ?>">APLIKASI<span> Perizinan </span>Lingkungan</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
            <?php echo $this->session->userdata('nama'); ?>    

             <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu"><!-- 
              <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
              <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
              <li><a href="<?php echo site_url('login_daftar_member/logout');?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
            </ul>
          </li>
        </ul>

        <ul class="user-menu notification-message">
          
        </ul>


      </div>
              
    </div><!-- /.container-fluid -->
  </nav>
    
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
      <li><a href="<?php echo site_url('dashboard_member');?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li class="parent">
        <a href="#stroked-chevron-down">
          <span data-toggle="collapse" href="#sub-item-1">
          <svg class="glyph stroked clipboard with paper pull-left"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
          <svg class="glyph stroked pull-right"><use xlink:href="#stroked-chevron-down"></use></svg></span> Data 
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li>
            <a class="" href="<?php echo site_url('pemohon');?>">
              <svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"/></svg> Pemohon
            </a>
          </li>
          <li>
            <a class="" href="<?php echo site_url('perusahaan');?>">
              <svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"/></svg> Perusahaan
            </a>
          </li>
        </ul>
      </li>
      <li><a href="<?php echo site_url('dokumen_member/index/'.md5(0));?>"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"></use></svg> Dokumen Member</a></li>

      <li><a href="<?php echo site_url('pesan');?>"><i class="fa fa-inbox fa-1x"></i> &nbsp;&nbsp;&nbsp; Perpesanan</a></li>
      
    </ul>

  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
    <?php $this->load->view($konten) ; ?>
  </div>  <!--/.main-->


  <script src="<?php echo base_url() ?>assets/perizinan/js/chart.min.js"></script>
  <!--<script src="<?php echo base_url() ?>assets/perizinan/js/chart-data.js"></script>-->
  <script src="<?php echo base_url() ?>assets/perizinan/js/easypiechart.js"></script>
  <!--<script src="<?php echo base_url() ?>assets/perizinan/js/easypiechart-data.js"></script>-->
  <script src="<?php echo base_url() ?>assets/perizinan/js/bootstrap-datepicker.js"></script>


  <!-- DATA TABES SCRIPT -->

    <script src="<?php echo base_url()?>assets/dist/js/app.min.js" type="text/javascript"></script>
 

  <script type="text/javascript">
      
      function createNotification() {
          $.post("<?php echo site_url('dashboard_member/notification') ?>",{}, function(notifikasi){
                  $(".notification-message").html(notifikasi);
          });
      }

      createNotification();

      setInterval(function() {
          createNotification();
      }, 10000);

      $(function () {
        $("#example1").dataTable();
      });

      $(function () {
        $("#example2").dataTable();
      });

      $(function () {
        $("#example3").dataTable();
      });

      $(function () {
        $("#example4").dataTable();
      });

       $(function () {
        $("#example5").dataTable();
      });

        $(function () {
        $("#example6").dataTable();
      });
    </script>

</body>

</html>
