<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Author Alfiar Wiguna
* Date 13 June 2016
* Namefile perizinan.php
*/
class Perizinan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('supermodel');
		$this->load->model('m_global');
		$this->load->helper(array('captcha','url'));
		$this->load->helper('email');
		
	}

	function index()
	{
		switch ($this->input->post('button'))	{
			case "login":
					$this->form_validation->set_rules('user_name','Username','required');
					$this->form_validation->set_rules('pass','Password','required');
					$this->form_validation->set_message('required', 'Username Dan/Atau Password tidak boleh kosong!');
					if($this->form_validation->run()===TRUE) 
					{
						if($this->input->post('security_codea') == $this->input->post('security_code_veria'))	
						{
							$user = $this->input->post('user_name');
							$pass = md5($this->input->post('pass'));
							$login = $this->supermodel->getData('member',array('email'=>$user,'password'=>$pass,'status_member'=>1));
							$login2 = $this->supermodel->getData('user',array('username'=>$user,'password'=>$pass,'level'=>0));
								if($login->num_rows()==1) {
									$login = $login->row_array();
									$sess['getLoginAct'] 	= "01n2s0129n1kz012klla";
									$sess['name'] 			= $login['username'];
									$sess['id']				= $login['pemohon_id'];
									// $sess['userid'] = $login['user_id'];
									// $sess['userlvl'] = $login['level'];
									$this->session->set_userdata($sess);
									redirect('perizinan/dashboard/user');
								}
								elseif($login2->num_rows()==1) 
								{
									$login2 = $login2->row_array();
									$sess['getLoginAct'] 	= "01n2s0129n1kz012klla";
									$sess['name'] 			= $login2['username'];
									// $sess['userid'] = $login['user_id'];
									// $sess['userlvl'] = $login['level'];
									$this->session->set_userdata($sess);
									//$this->m_global->activities('Login administrator');
									redirect('perizinan/dashboard/admin');
								}	
								else
								{
									$pars['style'] = 'login';
									$pars['cek'] = "none;";
									$pars['jx'] = rand(1,50);
									//meregisterkan angka tersebut ke session
									$pars['kx'] = rand(1,35);
									$pars['yx'] = $pars['jx'] + $pars['kx'];
									$pars['cekout'] = "none;";
									$pars['x'] = rand(1,50);
									//meregisterkan angka tersebut ke session
									$pars['y'] = rand(1,45);
									$pars['z'] = $pars['x'] + $pars['y'];
									$this->load->view('perizinan/index',$pars);
								}
						}else{
							$pars['cekout'] = ";";
							$pars['style'] = '';
							$pars['x'] = rand(1,50);
							//meregisterkan angka tersebut ke session
							$pars['y'] = rand(1,45);
							$pars['cek'] = "none;";
							$pars['jx'] = rand(1,50);
							//meregisterkan angka tersebut ke session
							$pars['kx'] = rand(1,35);
							$pars['yx'] = $pars['jx'] + $pars['kx'];
							$pars['z'] = $pars['x'] + $pars['y'];
							$this->load->view('perizinan/index',$pars);
						}		
					} else {
						$this->captcha();	
					}
			break;
			case "daftar": //kominfo@kotabogor.go.id
					
					$this->form_validation->set_rules('user','Username','required');
					$this->form_validation->set_rules('full_name','Nama Lengakap','required');
					$this->form_validation->set_rules('password','Password','required');
					$this->form_validation->set_rules('security_code','Kode Keamanan','required');
					$this->form_validation->set_rules('email','E-mail','required|VALID_EMAIL');
					$this->form_validation->set_message('required', '%s harus diisi tidak boleh kosong!');
					$this->form_validation->set_message('VALID_EMAIL', 'Format Email yang anda masukkan tidak sesuai');
						if($this->form_validation->run()===TRUE) {
							if ($this->input->post('security_code') == $this->input->post('security_code_veri'))
							{
								//data masukan
								$security 	= date("YmdHis");
								$name		= $this->input->post('full_name');
								$masukan['username'] = $this->input->post('user');
								$masukan['nama_pemohon'] = $this->input->post('full_name');
								$masukan['password'] = md5($this->input->post('password'));
								$masukan['email'] 	 = $this->input->post('email');
								$masukan['status']	 = 0;
								$masukan['security'] = $security;
								//insert database
								$this->supermodel->insertData('member',$masukan);
								$this->load->library('email');
								$config = array();
								$config['charset'] = 'utf-8';
								$config['protocol']= "smtp";
								$config['mailtype']= "html";
								$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
								$config['smtp_port']= "465";
								$config['smtp_timeout']= "400";
								$config['priority']= "1";
								$config['smtp_user']= "add.wiguna00@gmail.com"; // email pengirim pesan aktivasi
								$config['smtp_pass']= "05041994"; // password email
								$config['crlf']="\r\n"; 
								$config['newline']="\r\n"; 
								$config['wordwrap'] = TRUE;
								
									$this->email->initialize($config);
									//konfigurasi pengiriman
									$this->email->from($config['smtp_user']);
									$this->email->to($this->input->post('email'));
									$this->email->subject("Aktifasi User Perizinan BPLH");
									$this->email->message(
									 "
										 <html><body>
											 <table style='padding:10px;border:1px ridge  #F8F8F8;'>
												<tr style='background-color: lightblue;margin:10px;border-right:1px ridge  #F8F8F8 ;border-left:1px ridge  #F8F8F8 ;border-top:1px ridge  #F8F8F8 ;'>
													<td colspan='3' align='center'>
													<br>
													<img src='http://bplh.kotabogor.go.id/assets/css/image/kotabogor.png' height='42' width='42'/><br>
													<h2  style='color:black;'>Pemerintah Kota Bogor</h2><br>
													<br><br>
													<p><h1>Terima Kasih telah melakukan registrasi</h1></p>
													<br><br>
													Anda menerima email ini karena anda telah mendaftar sebagai pemohon izin di website http://bplh.kotabogor.go.id/ .
													<br><br>
													Hai, ".ucwords($name)." anda sudah terdaftar sebagai user di sistem perizinan online kami,<br>
													Tetapi anda masih belum bisa login menggunakan user anda, untuk mengaktifkan user anda silahkan klik tautan di bawah ini :<br><br>
													".base_url("index.php/perizinan/verification/$security")."
													<br><br><br>
													<p>Salam Hangat,</p>
													<br><br
													<p>Tim Programmer Kominfo Kota Bogor</p>
													</td>
												</tr>
											 </table>
										 </body></html>
									"
									);
									$this->email->send();
								
								$this->captcha();
							}
							else
							{
								$this->gagal_daftar();
							}
						}
						else
						{
							$this->gagal_daftar();		
						}
			break;
			case "kirim":
								//echo $this->input->post('email_reset');
								//data masukan
								// $security 	= date("YmdHis");
								// $name		= $this->input->post('user');
								// $masukan['username'] = $this->input->post('user');
								// $masukan['nama_pemohon'] = $this->input->post('full_name');
								// $masukan['password'] = md5($this->input->post('password'));
								// $masukan['email'] 	 = $this->input->post('email');
								// $masukan['status']	 = 0;
								// $masukan['security'] = $security;
								// insert database
								// $this->supermodel->updateData('pemohon',$masukan);
								
								$reset = $this->supermodel->getData('pemohon',array('email'=>$this->input->post('email_reset')));
								$hasil = $reset->row_array();
								$kode  = $hasil['security'];
								$name  = $hasil['nama_pemohon'];
								$this->load->library('email');
								$config = array();
								$config['charset'] = 'utf-8';
								$config['protocol']= "smtp";
								$config['mailtype']= "html";
								$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
								$config['smtp_port']= "465";
								$config['smtp_timeout']= "400";
								$config['priority']= "1";
								$config['smtp_user']= "add.wiguna00@gmail.com"; // email pengirim pesan aktivasi
								$config['smtp_pass']= "05041994"; // password email
								$config['crlf']="\r\n"; 
								$config['newline']="\r\n"; 
								$config['wordwrap'] = TRUE;
								
									$this->email->initialize($config);
									//konfigurasi pengiriman
									$this->email->from($config['smtp_user']);
									$this->email->to($this->input->post('email_reset'));
									$this->email->subject("Reset Password User Perizinan BPLH");
									$this->email->message(
									 "
										 <html><body>
											 <table style='padding:15px;border:1px ridge  #F8F8F8;'>
												<tr style='background-color: lightblue;padding:15px;margin:15px;border-right:1px ridge  #F8F8F8 ;border-left:1px ridge  #F8F8F8 ;border-top:1px ridge  #F8F8F8 ;'>
													<td colspan='3' align='center'>
													<br>
													<img src='http://bplh.kotabogor.go.id/assets/css/image/kotabogor.png' height='42' width='42'/><br>
													<h2  style='color:black;'>Pemerintah Kota Bogor</h2><br>
													<br><br>
													<p><h1>".$kode."</h1></p>
													<br><br>
													Hai, ".ucwords($name).", gunakan kode keamanan diatas untuk mereset password anda.<br><br>
													<br><br><br>
													<p>Salam Hangat,</p>
													<br><br
													<p>Tim Programmer Kominfo Kota Bogor</p>
													</td>
												</tr>
											 </table>
										 </body></html>
									"
									);
									$this->email->send();
								$pars['isi']	= "";	
								$pars['rest']	= "none;";
								$this->load->view('perizinan/reset_password',$pars);
			break;
			case "reset":
					$this->form_validation->set_rules('kode','Kode Keamanan','required');
					$this->form_validation->set_rules('retype','Password Baru','required');
					$this->form_validation->set_rules('pass','Password Baru','required');
					$this->form_validation->set_message('required', '%s harus diisi tidak boleh kosong!');
						if($this->form_validation->run()===TRUE) {
							if($this->input->post('pass') == $this->input->post('retype')){
								$reset = $this->supermodel->getData('pemohon',array('security'=>$this->input->post('kode')));
								if($reset->num_rows()==1) {
								$masukan['password'] 		= md5($this->input->post('pass'));
								//insert database
								$this->supermodel->updateData('pemohon',$masukan,'security',$this->input->post('kode'));
								$pars['style'] = 'ganti';
								$this->load->view('perizinan/index',$pars);
								}else{
								$pars['isi']	= "Data User tidak ditemukan tolong cek email anda untuk mendapat kode keamanan";
								$pars['rest']	= "";
								$this->load->view('perizinan/reset_password',$pars);
								}
							}else{	
							$pars['isi']	= "Isi Password dan Pengulangan Password tidak sama";
							$pars['rest']	= "";
							$this->load->view('perizinan/reset_password',$pars);
							}
						}else{
					$pars['isi']	= "";	
					$pars['rest']	= "none;";
					$this->load->view('perizinan/reset_password',$pars);
					}
			break;
			default:
					$this->captcha();	
			break;
		}
	}
	
	function verification(){
		$secure = $this->uri->segment(3);
		$aktivasi = $this->supermodel->getData('pemohon',array('security'=>$secure));
		if($aktivasi->num_rows()==1) {
			$perbaharui['status']	 = 1;
			//insert database
			$this->supermodel->updateData('pemohon',$perbaharui,'security',$secure);
		}else{
			$this->load->view('error_404');
		}
		$pars['style'] = 'verifikasi';
		//redirect('perizinan',$pars);
		$this->load->view('perizinan/index',$pars);
	}
	
	function captcha()
	{
					$this->load->helper('captcha');
					if ($this->input->post('button') == "login")
					{
						$pars['style'] = 'login';
					} 
					elseif  ($this->input->post('button') == "daftar")
					{
						$pars['style'] = 'daftar';
					}
					else
					{
						$pars['style'] = '';
					}
					
					$pars['cek'] = "none;";
					$pars['jx'] = rand(1,50);
					//meregisterkan angka tersebut ke session
					$pars['kx'] = rand(1,35);
					$pars['yx'] = $pars['jx'] + $pars['kx'];
					$pars['cekout'] = "none;";
					$pars['x'] = rand(1,50);
					//meregisterkan angka tersebut ke session
					$pars['y'] = rand(1,45);
					$pars['z'] = $pars['x'] + $pars['y'];
					//mencetak ke halaman
					//echo "".$yx." + ".$kx." = ?";
					// $vals = array(
						// 'img_path'	 => './captcha/',
						// 'img_url'	 => base_url().'captcha/',
						// 'img_width'	 => '200',
						// 'img_height' => 30,
						// 'border' => 0, 
						// 'expiration' => 7200
					// );
		 
					//create captcha image
					// $cap = create_captcha($vals);
		 
					//store image html code in a variable
					// $pars['image'] = $cap['image'];
		 
					//store the captcha word in a session
					// $this->session->set_userdata('mycaptcha', $cap['word']);
					$this->load->view('perizinan/index',$pars);
	}
	function gagal_daftar()
	{
					$pars['style'] = 'gagal';
					$pars['cek'] = ';';
					$pars['cekout'] = 'none;';
					$pars['jx'] = rand(1,50);
					//meregisterkan angka tersebut ke session
					$pars['kx'] = rand(1,35);
					$pars['yx'] = $pars['jx'] + $pars['kx'];
					$pars['x'] = rand(1,35);
					//meregisterkan angka tersebut ke session
					$pars['y'] = rand(1,15);
					$pars['z'] = $pars['x'] + $pars['y'];
					// $vals = array(
						// 'img_path'	 => './captcha/',
						// 'img_url'	 => base_url().'captcha/',
						// 'img_width'	 => '200',
						// 'img_height' => 30,
						// 'border' => 0, 
						// 'expiration' => 7200
					// );
		 
					// // create captcha image
					// $cap = create_captcha($vals);
		 
					// // store image html code in a variable
					// $word = $cap['image'];
					// echo $word;
		 
					// // store the captcha word in a session
					// $this->session->set_userdata('mycaptcha', $cap['word']);
					$this->load->view('perizinan/index',$pars);
	}
	
	function dashboard($type)
	{
		switch ($type)
		{
			case "admin":
				if($this->session->userdata('getLoginAct')==FALSE) 
				{
				$this->session->set_flashdata('error', 'Anda harus login dahulu');
				redirect('perizinan');
				}else{
				$this->load->view('perizinan/admin/index');
				}
			break;
			case "user":
				if($this->session->userdata('getLoginAct')==FALSE) 
				{
				$this->session->set_flashdata('error', 'Anda harus login dahulu');
				redirect('perizinan');
				}else{
				$data['list_izin']  = $this->supermodel->queryManual("SELECT * FROM detail INNER JOIN pemohon ON detail.pemohon_id = pemohon.pemohon_id INNER JOIN jenis_izin ON detail.jenis_id = jenis_izin.jenis_id WHERE detail.pemohon_id = ".$this->session->userdata('id'));
				$jumlah  = $this->supermodel->queryManual("SELECT * FROM detail INNER JOIN pemohon ON detail.pemohon_id = pemohon.pemohon_id INNER JOIN jenis_izin ON detail.jenis_id = jenis_izin.jenis_id WHERE detail.pemohon_id = ".$this->session->userdata('id'));
				$data['total'] 		= $jumlah->num_rows();
									//$this->m_global->activities('Login administrator');
				$this->load->vars($data);	
				$this->load->view('perizinan/member/index');
				}
			break;
		}		
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect('perizinan');
	}
				
				
}

/* End of file loginweb.php */
/* Location: ./application/controllers/loginweb.php */