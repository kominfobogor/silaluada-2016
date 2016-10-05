<!DOCTYPE html>
<html>
<title>BPLH Kota Bogor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo base_url('assets/css/image/kotabogor.png') ?>">
<!--
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue-grey.css">
-->
<link href="<?php echo base_url()?>assets/css/w3.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/w3-theme-blue-grey.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/cldr.css" rel="stylesheet" type="text/css" />

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>


    <link href="<?php echo base_url('asset/css/metro-bootstrap.css')?>" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.css')?>" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="<?php echo base_url('asset/css/style.css')?>" rel="stylesheet">
     <link href="<?php echo base_url('asset/css/nivo-slider.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/default/default.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('asset/js/jquery-1.10.2.js')?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery/jquery.widget.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/metro.min.js')?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/js/fancybox/jquery.fancybox.css?v=2.1.5')?>" media="screen" />
    <script type="text/javascript" src="<?php echo base_url('asset/js/fancybox/jquery.fancybox.js?v=2.1.5')?>"></script>
<body>

<div class="w3-container w3-content w3-light-grey w3-card-4"><br>
	<div class="w3-container w3-content w3-white">
	<!-- Slider -->
		<div class="w3-section w3-content w3-round w3-white" style="padding-top:10px;padding-bottom:15px;">

			<img class="mySlides w3-animate-left" src="<?php echo base_url()?>assets/css/image/1.jpg" style="width:100%">
			<img class="mySlides w3-animate-left" src="<?php echo base_url()?>assets/css/image/2.jpg" style="width:100%">

		</div>
	<!-- MENU ATAS -->
    
        <div class="w3-section w3-content">
            
            <?php echo menu_now(); ?>
        
        </div>
		
	</div>
<div class="w3-row w3-white">
	<!-- left column -->
	<div class="w3-container w3-twothird w3-content w3-white">
	    <!-- SAMBUTAN -->
	    <div class="w3-card-2 w3-round w3-white">
			<div class="w3-container w3-padding">
				<?php
				if($sambutan) {
					foreach ($sambutan->result() as $s) {
				?>
					<div class="w3-container">
						<h2 class="w3-xlarge"><?php echo $s->title ?></h2>
						<div class="w3-content w3-justify" >
						<?php echo $s->body; ?>
						</div>
					</div>
				<?php
					}
				}
				?>	
			  </div>
		</div><br>	
		<!-- BERITA -->
		<div class="w3-card-2 w3-white w3-round">
			<div class="w3-container w3-padding">
			<h3>Terbaru</h3>
				<div class="w3-row">
					<?php
					if ($terbaru) {
						foreach ($terbaru->result() as $row) {
					?>
					<div class="w3-content w3-third w3-white w3-padding">
						<a href="<?php echo linked($row->post_id, $row->title) ?>"></a>
						<img src="<?php echo get_image($row->body, $row->image) ?>" alt="<?php echo $row->title ?>">
					</div>
					<div class="w3-content w3-twothird w3-white">
						<h4><a href="<?php echo linked($row->post_id, $row->title) ?>"><?php echo $row->title ?></a></h4>
						<small><i class="fa fa-calendar"></i> <?php echo convert_tanggal($row->date_publish) ?> </small>
						<small class="margin-x-10"><i class="fa fa-eye"></i> Views : <?php echo $row->view ?></small>
						<small><i class="fa fa-user"></i> By <a><?php echo $row->user_name ?></a></small>
						<br><p>
						<?php echo strip_tags(substr($row->body, 0,350))?>.. </p>
					</div>
						<?php
							}
						}
						?>
						<h4><a href="<?php echo site_url('kategori/kode/'.$row->category_id) ?>" class="more">Berita sebelumnya <i class="fa fa-angle-right"></i></a></h4>	  
				</div>				
			</div>
		</div><br>
	    <!-- GALERI -->
	    <div class="w3-card-2 w3-round w3-white">
			<div class="w3-container w3-padding">
				<h3>Galeri</h3>
					<?php
					if ($galeri) {
						foreach ($galeri->result() as $g) {
					?>
						<img src="<?php echo base_url('uploads/galeri/thumb/'.$g->image)?>">
					<?php
						}
					}
					?>				
			  </div>
				<div class="text-right"><br>
					<a href="<?php echo base_url('/index.php/galeri'); ?>" style="margin-right:10px;">Selengkapnya</a>
				</div>				  
		</div><br>		
	</div>
	
	
	<!-- end of left column -->

	<!-- right column -->
	<div class="w3-container w3-third w3-content w3-white">
		<!-- KALENDER -->
		<div class="w3-card-2 w3-round w3-white">
			<div class="w3-container">
			<h4>Kalender</h4>
				<div class="metro">
				<div id="kalender" class="calendar small"></div>
				</div>
					<script type="text/javascript">
					$(function() {
						$("#kalender").calendar({
							click:false,
							getDates:false,
							weekStart:0
						});
					});
					</script>
			</div>
			<br>			
		</div>
		<br>
		<!--BANNER -->
		<div class="w3-card-2 w3-round w3-white">
			  <div class="w3-container">
				<h4>Banner</h4>
						<?php
						if($banner) {
							foreach ($banner->result() as $b) {
							echo "<p><a href='".$b->link."' target='_blank'><img src='".base_url('uploads/banner/'.$b->banner_file)."' alt='".$b->title."' width='100%'/></a></p>";
							}
						}
						?>	
			  </div>
			  <br>
		</div><br>
		<!--- LAIN LAIN -->
		<div class="w3-card-2 w3-round w3-white">
			  <div class="w3-container">
				<h3>Kontak Kami</h3>
					<?php echo $embed_map ?>
					<p>Alamat : <?php echo $alamat ?><br>
					Telp. <?php echo $no_telp ?><br>
					Email : <?php echo $mail_site ?><br>
					</p>
					Sosial Media :<br/>
					Facebook (<?php echo $fb_site ?>)<br/>
					Twitter (<?php echo $twitter_site ?>)
			  </div>
			  <br>
		</div>	
		
	<!-- end of right column -->
	</diV>
</div>
	<div class="w3-container w3-content w3-black w3-center">
		CopyRight &copy; <?php echo date('Y'); ?> <?php echo $name_site; ?> Kota Bogor
	</div>

</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5500);
}
</script>
</body>
</html>

