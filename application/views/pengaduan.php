<div class="w3-container" style="padding: 10px 10px 20px 10px;">
  <h3>Data Aspirasi warga pada BPLH Kota Bogor</h3>
  <br />

  <div class="w3-container w3-twothird w3-white w3-padding">

      <div class="loader">
          <img src="<?php echo base_url(); ?>asset_app/images/loader.gif"> Harap tunggu....
      </div>

      <div class="response_content">
      </div>

</div>


<div class="w3-content w3-third w3-white w3-padding">
    <!-- KALENDER -->
    <div class="w3-card-2 w3-round w3-white">
      <div class="w3-container">
      
        <h4 class="widget-title"><i class="fa fa-arrow-circle-o-right widget-title-icon"></i> banner</h4>
        <?php
        if($banner) {
          foreach ($banner->result() as $b) {
          echo "<p><a href='".$b->link."' target='_blank'><img src='".base_url('uploads/banner/'.$b->banner_file)."' alt='".$b->title."' width='100%'/></a></p>";
          }
        }
        ?>
      </div>
    </div>
  </div>

<link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables/media/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>asset_app/css/style.css">
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset_app/js/perizinan/pengaduan.js"></script>

<script>
    window.PENGADUAN.handleListPengaduan("<?php echo site_url('pengaduan/list_pengaduan'); ?>", '.response_content');
</script>