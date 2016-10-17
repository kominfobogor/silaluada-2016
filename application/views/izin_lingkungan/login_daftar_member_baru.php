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

	  <div  style="bg-color:#A0A0A0;">
	  	<div class="container">
				
		            <form class="form-login" method="POST" action="<?php echo site_url('login_daftar_member/login')?>">
		        <h2 class="form-login-heading" valign="center">
		        <img src="<?php echo base_url()?>assets/css/image/kotabogor.png" height="42" width="42">    BPLH Kota Bogor
		        </h2>
					
		        <div class="login-wrap">
		          
		        		<?php echo $this->session->flashdata('login'); ?>
			      <table class="table">
			          <tr>
			            <td><label>Email</label></td>
			            <td>:</td>
			            <td><input type="text" placeholder="Email" name="email" class="form-control"></td>
			          </tr>
			          <tr>
			            <td><label>Password</label></td>
			            <td>:</td>
			            <td><input type="password" placeholder="Password" name="password" class="form-control"></td>
			          </tr>
			          <tr>
			            <td colspan="3" style="text-align: center;padding-top: 30px;">
			            	<input type="submit" value="Login" name="login" class="btn btn-theme btn-block">
			                <br>
			                <medium>atau <a data-toggle="modal" data-target="#myModal">Mendaftar</a></medium>
			            </td>
			          </tr>
			      </table> 
					
		
		        </div>
						</form>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Lupa Password</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Masukkan email anda</p>
		                          <input type="text" name="email_reset" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                        <button class="btn btn-theme btn-block" type="submit" value="kirim" name="button"><i class="fa " ></i> Kirim Permintaan</button>
								<button data-dismiss="modal" class="btn btn-default btn-block" type="submit" value=""><i class="fa" ></i> Cancel</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
				  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                      <div class="modal-body">
								  <form method="POST" action="<?php echo site_url('login_daftar_member/daftar')?>" enctype="multipart/form-data">
							      <!-- Modal content-->
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title"><b>Daftar Pengguna Baru</b></h4>
							        </div>
							        <div class="modal-body">
							         
							  <!-- DAFTAR -->
							        
							          <div>
							            <table border="0" class="table">
							              <tr>
							                <td><label>Nama Lengkap</label></td>
							                <td>:</td>
							                <td><input type="text" placeholder="Nama Lengkap" name="nama" class="form-control"></td>
							              </tr>
							              <tr>
							                <td><label>Alamat</label></td>
							                <td>:</td>
							                <td><textarea placeholder="Alamat" name="alamat" class="form-control"></textarea></td>
							              </tr>
							              <tr>
							                <td><label>NIK</label></td>
							                <td>:</td>
							                <td><input type="number" placeholder="NIK" name="nik" class="form-control"></td>
							              </tr>
							              <tr>
							                <td><label>Email</label></td>
							                <td>:</td>
							                <td><input type="text" placeholder="Email" name="email" class="form-control"></td>
							              </tr>
							              <tr>
							                <td><label>Password</label></td>
							                <td>:</td>
							                <td><input type="password" placeholder="password" name="password" class="form-control"><span>*ket : password isi bebas, dan harap diingat !</span></td>
							              </tr>
							              <tr>
							                <td><label>Image KTP</label></td>
							                <td>:</td>
							                <td><input type="file" placeholder="Image KTP" name="image_ktp" class="form-control"></td>
							              </tr>
							            </table>
							          </div>
							        
							  <!-- END DAFTAR -->

							        </div>
							        <div class="modal-footer">
							          <button type="submit" class="btn btn-theme" name="daftar">Daftar</button>
							        </div>
							      </div>
							      </form> 
		                  </div>
		          </div>
		
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
        //$.backstretch("<?php echo base_url()?>assets/dashgum/assets/img/", {speed: 500});
    </script>


  </body>
</html>