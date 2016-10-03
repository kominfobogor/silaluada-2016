<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login Perizinan Online BPLH Kota Bogor</title>
	
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

	  <div id="login-page" style="bg-color:#A0A0A0;">
	  	<div class="container">
					<?php 
					$attributes = array('target'=>'_top', 'class'=>'form-login');
					echo form_open(base_url().'index.php/perizinan', $attributes);
					?>
				
		        <h2 class="form-login-heading" valign="center"><img src="<?php echo base_url()?>assets/css/image/kotabogor.png" height="42" width="42">    BPLH Kota Bogor   <?//=date("YmdHis")?></h2>
		        <div class="login-wrap">
		            <input type="password" name="pass" class="form-control" placeholder="Ketikkan Password Baru Anda" autocomplete="off" autofocus >
					<span class="field"><?="<font color=\"#FF0000\">".form_error('pass')."</font>";?></span>
		            <br>
		            <input type="password" name="retype" class="form-control" placeholder="Ketikkan Ulang Password Baru Anda" autocomplete="off" >
					<span class="field"><?="<font color=\"#FF0000\">".form_error('retype')."</font>";?></span>
					<br>
		            <input type="text" name="kode" class="form-control" placeholder="Ketik Kode Keamanan Anda" autocomplete="off" >
					<span class="field"><?="<font color=\"#FF0000\">".form_error('kode')."</font>";?></span>
					
					<?php 
						echo "<span style=".$rest." class='field'><font color='#FF0000'>".$isi."</font></span>";
					?>
						
					
					
					<label class="checkbox">
		                <span class="pull-right">
		                    
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" type="submit" value="reset" name="button"><i class="fa" ></i> Ubah Password</button>
		            
		            
		           <!--<div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>-->
		            
		
		        </div>
		
		          <!-- Modal -->
		          
		          <!-- modal -->
				  
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/dashgum/assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/dashgum/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/dashgum/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url()?>assets/dashgum/assets/img/", {speed: 500});
    </script>


  </body>
</html>
