<?php
/**
* Author M.Febriansyah
*/

class Login_daftar_member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_global');
		$this->load->model('supermodel');
		$this->load->helper('email');
	}

	function index()
	{
		$this->load->view('izin_lingkungan/login_daftar_member_baru');
	}


	function login()
	{
	 //echo $this->input->post('username')." ".md5($this->input->post('password'));
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()===TRUE) {
			$email = $this->input->post('email');
			$pass = md5($this->input->post('password'));
			//echo $email." ".$pass;
			$login = $this->supermodel->queryManual('SELECT * FROM member WHERE email = "'.$email.'" AND password = "'.$pass.'"');
			if($login->num_rows()==1) {
				$login = $login->row_array();

				if($login['status_member'] == 0)
				{
					$this->session->set_flashdata('login', '<div class="alert alert-danger">Akun anda belum aktif, silahkan cek email untuk verifikasi user anda.</div>');
					$this->index();
				}
				else
				{
					$sess['getLoginAct'] = "01n2s0129n1kz012klla";
					$sess['member_id'] = $login['member_id'];
					$sess['email'] = $login['email'];
					$sess['nama'] = $login['nama_member'];
					$this->session->set_userdata($sess);
					// $this->m_global->activities('Login administrator');
					echo"<script>alert('Login Berhasil...!');</script>";
					
					echo "<script>document.location.href='".site_url('dashboard_member')."';</script>";
				}
				//redirect('dashboard_member');
			} else {
				
				$this->session->set_flashdata('login', '<div class="alert alert-danger">Email atau password anda masih salah</div>');

				$this->index();

			}
		} else {
			$this->session->set_flashdata('login', '<div class="alert alert-danger">Silahkan diisi email dan passwordnya</div>');
			$this->index();
		}
	}


	public function logout(){
		$this->session->sess_destroy();
		echo "<script>alert('Logout Berhasil');document.location.href='".site_url('login_daftar_member')."';</script>";	
	}


	/**
	 * Register Member
	 * @fix by Hikmahtiar <hikmahtiar.cool@gmail.com>
	 */
	public function daftar()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nik = $this->input->post('nik');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$password = md5($pass);
		$image_ktp = $this->input->post('image_ktp');
		$daftar_post = $this->input->post('daftar');

		$html = '<p>
			Terima kasih anda telah melakukan pendaftaran pada fasilitas perizinan online BPLH Kota Bogor. <br>
			Untuk keamanan, 
			Anda harus melakukan verfiikasi email dengan meng-klik link dibawah ini. <br>
			

			<a href="'.site_url('member/verify/'.$password.'/'.$nik).'">
				Verifikasi Email
			</a>
		</p>';

		if($nama == "" || $nik == "" || $email == "" || $pass == "") {
			$response = array(
				'status' => 'error',
				'message' => 'Silahkan cek form isian data anda.'
			);
			echo json_encode($response);
       		//echo "<script>alert('Silahkan cek form pendaftaran');document.location.href='index'</script>";			
		}
		else
		{
			$file = isset($_FILES['image_ktp']['name']) ? $_FILES['image_ktp']['name'] : '';
			$data = array('nama_member' => $nama,
				'alamat_member' => $alamat,
				'nik_member' => $nik,
				'email' => $email,
				'password' => $password,
				'image_ktp' => $image_ktp,
				'status_member' => '0'
			);

			$query = $this->db->query("select * from member where email = '$email'");
			$row = $query->row();
			if (!empty($row)){
        		$response = array(
					'status' => 'warning',
					'message' => 'Email ini telah digunakan.'
				);
				echo json_encode($response);
			}else{

				if($file != "") {
					$rand = rand(0, 999999);
					$explode	= explode('.',$file);
					$ext	= $explode[count($explode)-1];
					$name = date("Ymd").$rand.'.'.$ext;
					$unggah = $this->supermodel->unggah_gambar('perizinan/image_ktp','image_ktp',$name);

					if($unggah == false) {
						$response = array(
							'status' => 'error',
							'message' => 'Upload Image KTP gagal, silahkan coba kembali.'
						);
						echo json_encode($response);
					}else{

						$data['image_ktp'] = $name;
						$jalan = $this->supermodel->insertData('member',$data);
						$send = send_email_swiftmailer($data['email'], 'Verifikasi Pendaftaran Pengguna Baru', $html);

						if($send)
						{
							if ($jalan){
								$response = array(
									'close' => true,
									'status' => 'success',
									'message' => 'Data berhasil dikirim, silakan cek kotak masuk atau spam email anda untuk melakukan verifikasi.'
								);
								echo json_encode($response);
							}
						}
						else
						{
							$response = array(
								'close' => true,
								'status' => 'warning',
								'message' => 'Data anda berhasil dikirim, namun kami gagal untuk mengirim link verifikasi. Silahkan cek koneksi internet anda'
							);
							echo json_encode($response);
						}	
					}
				} else {
					$data['image_ktp'] = '';
					$send = send_email_swiftmailer($data['email'], 'Verifikasi Pendaftaran Pengguna Baru', $html);

					$jalan = $this->supermodel->insertData('member',$data);
					if($send)
					{
						$response = array(
								'close' => true,
								'status' => 'success',
								'message' => 'Data berhasil dikirim, silakan cek kotak masuk atau spam email anda untuk melakukan verifikasi.'
							);
						echo json_encode($response);
					}
					else
					{
						$response = array(
								'status' => 'warning',
								'close' => true,
								'message' => 'Data anda berhasil dikirim, namun kami gagal untuk mengirim link verifikasi. Silahkan cek koneksi internet anda.'
							);
						echo json_encode($response);
					}
					
				}

			}

			//echo json_encode($data);
		}


		/*if ($daftar_post == ""){
			$data = array('nama_member' => $nama,
						 'alamat_member' => $alamat,
						 'nik_member' => $nik,
						 'email' => $email,
						 'password' => $password,
						 'image_ktp' => $image_ktp,
						 'status_member' => '0'
						 );
				$query = $this->db->query("select * from member where email = '$email'");
				$row = $query->row();
					if (!empty($row)){
		        		echo "<script>alert('Email sudah dipakai');document.location.href='index'</script>";
					}else{

						if($file != "") {
							$rand = rand(0, 999999);
							$explode	= explode('.',$file);
							$ext	= $explode[count($explode)-1];
							$name = date("Ymd").$rand.'.'.$ext;
							$unggah = $this->supermodel->unggah_gambar('perizinan/image_ktp','image_ktp',$name);
							if($unggah == false) {
								echo "<script>alert('Upload gagal!');document.location.href='index'</script>";
							}else{
								$data['image_ktp'] = $name;
								$jalan = $this->supermodel->insertData('member',$data);
								if ($jalan){
								//$this->supermodel->insertData('persyaratan_izin',array('email'=>$email,'status'=>"0"));
								echo"<script>alert('Data berhasil dikirim, silakan cek kotak masuk atau spam email anda untuk melakukan verifikasi');document.location.href='index'</script>";
									
								}	
							}
						} else {
								$data['image_ktp'] = '';
								$jalan = $this->supermodel->insertData('member',$data);
							echo"<script>alert('Registrasi berhasil');document.location.href='index'</script>";
						}
						
					}
		}
		*/
	}
}
?>