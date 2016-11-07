<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $title ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li>Pengelolaan Lingkungan Hidup</li>
    <li class="active"><?php echo $title ?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php
    if($this->session->flashdata('success')) {
      echo '
      <div class="alert alert-success">'.$this->session->flashdata('success').'</div> 
      ';
    }
    if($this->session->flashdata('error')) {
      echo '
      <div class="alert alert-danger">'.$this->session->flashdata('error').'</div> 
      ';
    }
    ?>
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <!--
      <a href="<?php echo site_url('adm_sppl_baru/tambah')?>" class="btn btn-sm bg-light-blue"><i class="fa fa-plus"></i> Tambah</a>
      -->
    </div>
    <div class="box-body">
    <table class="datatables table-border table-striped" id="table-sppl">
        <thead>
          <tr>
              <td>
                  No.
              </td>
              <td>
                  Nomor SPPL
              </td>
              <td>
                  Tanggal
              </td>
              <td>
                  Jenis Kegiatan / Usaha  
              </td>
              <td>
                  Alamat Kegiatan Usaha 
              </td>
              <td>
                  Nama Pemilik/Pengelola  
              </td>
              <td>
                  Alamat Pemilik/Pengelola
              </td>
          </tr>
        </thead>
    </table>
      
    </div><!-- /.box-body -->
    <div class="box-footer">
    </div><!-- /.box-footer-->
  </div><!-- /.box -->

</section><!-- /.content -->

<link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables/media/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>asset_app/css/style.css">
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset_app/js/perizinan/list.js"></script>

<script>
    window.LIST_PERIZINAN.init();
</script>