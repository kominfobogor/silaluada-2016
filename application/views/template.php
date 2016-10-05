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
		<?php $this->load->view($konten) ?>			
	</div>	
	<!-- end of konten utama -->		



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

