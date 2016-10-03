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
					<div class="alert alert-success alert-dismissable" style="display:<?php if ($style != "verifikasi") { echo "none;"; } else { echo ""; 
					header('Refresh: 2; URL='.base_url().'index.php/perizinan');
					}?>;">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Terima Kasih</strong> <br>Akun anda telah aktif
					</div>  
					<div class="alert alert-danger alert-dismissable" style="display:<?php if ($style != "gagal") { echo "none;"; } else { echo ""; }?>;">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error</strong> <br>Data yang anda masukkan kurang lengkap atau ada kesalahan pengisian
					</div>  
					<div class="alert alert-info alert-dismissable" style="display:<?php if ($style != "daftar") { echo "none;"; } else { echo ""; }?>;">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Terima Kasih Anda Telah Terdaftar</strong> <br>Silahkan cek e-mail anda untuk aktivasi akun
					</div>  
					<div class="alert alert-info alert-dismissable" style="display:<?php if ($style != "ganti") { echo "none;"; } else { echo ""; }?>;">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Berhasil</strong> <br>Password anda telah berhasil di ubah
					</div>  
		        <div class="login-wrap">
		            <input type="text" name="user_name" class="form-control" placeholder="User Name" autocomplete="off" autofocus >
		            <br>
		            <input type="password" name="pass" class="form-control" placeholder="Password" >
					<br><p style="border: 1px solid lightgrey;background-color:lightgrey;max-width:100px;padding:10px;"><b><?php echo "".$x." + ".$y." = ?";?></b></p>
									 <input type="text" name="security_codea" placeholder="Ketikkan Hasil Penjumlahan Diatas" class="form-control placeholder-no-fix">
									  <span class="field" style="display:<?=$cekout?>"><?="<font color=\"#FF0000\">Kode Keamanan yang anda masukkan salah</font>";?></span>
									  <p style="display:none;">Security Code : <input type="text" style="display:none;" name="security_code_veria" value="<?php echo $z;?>"></p>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal2"> Lupa Password?</a>
		                </span>
		            </label>
					
					<div class="alert alert-danger" style="display:<?php if ($style != "login") { echo "none;"; } else { echo ""; }?>;"><b>Login Gagal!!</b> Kombinasi Username Dan Password yang anda masukkan salah</div>
					<div class="alert alert-danger" style="display:<?php if (!$this->session->flashdata('error')) { echo "none;"; } else { echo ""; }?>;"><b>Maaf!!</b> <?php if(!$this->session->flashdata('error')) {}else{  echo $this->session->flashdata('error'); } ?></div>
					
		            <button class="btn btn-theme btn-block" type="submit" value="login" name="button"><i class="fa fa-lock" ></i> Login</button>
		            <hr>
		            
		           <!--<div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>-->
		            <div class="registration">
		                Belum Memiliki Akun?<br/>
						<!--<a class="" href="<?php //echo base_url().'index.php/perizinan/sign_up' ?>">-->
						<a data-toggle="modal" href="#myModal">
		                    Buat Akun Disini
		                </a>
		            </div>
		
		        </div>
		
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
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Daftar Pengguna Baru</h4>
		                      </div>
		                      <div class="modal-body">
								  <p>Nama Lengkap</p>
		                          <input type="text" name="full_name" placeholder="Nama Lengkap" autocomplete="off" class="form-control placeholder-no-fix" value=<?=set_value('full_name');?>>
								  <span class="field"><?="<font color=\"#FF0000\">".form_error('full_name')."</font>";?></span>
								  <br><p>Username</p>
		                          <input type="text" name="user" placeholder="Username" autocomplete="off" class="form-control placeholder-no-fix" value=<?=set_value('user');?>>
								  <span class="field"><?="<font color=\"#FF0000\">".form_error('user')."</font>";?></span>
								  <br><p>Password</p>
		                          <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
								  <span class="field"><?="<font color=\"#FF0000\">".form_error('password')."</font>";?></span>
		                          <br><p>Email</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" value=<?=set_value('email');?>>
								  <span class="field"><?="<font color=\"#FF0000\">".form_error('email')."</font>";?></span>
								  <br><p style="border: 1px solid lightgrey;background-color:lightgrey;max-width:100px;padding:10px;"><b><?php echo "".$jx." + ".$kx." = ?";?></b></p>
									  <p>Kode Keamanan </p> <input type="text" name="security_code" placeholder="Ketikkan Hasil Penjumlahan Diatas" class="form-control placeholder-no-fix">
									  <span class="field" style="display:<?=$cek?>"><?="<font color=\"#FF0000\">Kode Keamanan yang anda masukkan salah</font>";?></span>
									  <p style="display:none;">Security Code : <input type="text" style="display:none;" name="security_code_veri" value="<?php echo $yx;?>"></p>
		                      </div>
		                      <div class="modal-footer">
								<button class="btn btn-theme btn-block" type="submit" value="daftar" name="button"><i class="fa " ></i> Daftar</button>
								<button data-dismiss="modal" class="btn btn-default btn-block" type="submit" value=""><i class="fa" ></i> Cancel</button>
		                      </div>
		                  </div>
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
        $.backstretch("<?php echo base_url()?>assets/dashgum/assets/img/", {speed: 500});
    </script>


  </body>
</html>
