<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Verifikasi Perizinan Online BPLH Kota Bogor</title>
	
	<link rel="icon" href="<?php echo base_url()?>assets/css/image/kotabogor.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/dashgum/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/dashgum/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/dashgum/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/dashgum/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div  style="bg-color:#A0A0A0;">
	  	<div class="container">
				
		            <form class="form-login" method="POST" action="<?php echo site_url('login_daftar_member/login')?>">
		        <h2 class="form-login-heading" valign="center">
		        <img src="<?php echo base_url()?>assets/css/image/kotabogor.png" height="42" width="42">    
		        <span style="color: #333;">
	        	BPLH Kota Bogor
	        	</span>
		        </h2>
					
		        <div class="login-wrap">
		          
		        	<div class="alert alert-success">
		        		
		        		Terima kasih telah memverifikasi data anda. <br>
		        		Silahkan login 
		        		<a href="<?php echo site_url('login_daftar_member'); ?>">
		        			disini
		        		</a>

		        	</div>
					
		
		        </div>
							        
					
	  	</div>
	  </div>

	<link href="<?php echo base_url(); ?>bower_components/toastr/toastr.min.css" rel="stylesheet">

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/dashgum/assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/dashgum/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bower_components/jquery-form/jquery.form.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bower_components/toastr/toastr.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>asset_app/js/perizinan/member.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/dashgum/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch(
        	[
        		"<?php echo base_url()?>assets/dashgum/assets/img/login-bg.jpg", 
        	],
        	{speed: 500}
        );

        window.MEMBER.handleRegister('#frm-register');
    </script>


  </body>
</html>