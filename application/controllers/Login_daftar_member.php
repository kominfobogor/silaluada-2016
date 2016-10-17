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
				$sess['getLoginAct'] = "01n2s0129n1kz012klla";
				$sess['member_id'] = $login['member_id'];
				$sess['email'] = $login['email'];
				$sess['nama'] = $login['nama_member'];
				$this->session->set_userdata($sess);
				// $this->m_global->activities('Login administrator');
				echo"<script>alert('Login Berhasil...!');</script>";
				redirect('dashboard_member');
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
		$password = md5($this->input->post('password'));
		$image_ktp = $this->input->post('image_ktp');
		$daftar_post = $this->input->post('daftar');

		if($nama == "" && $nik == "" && $email == "") {
       		echo "<script>alert('Silahkan cek form pendaftaran');document.location.href='index'</script>";			
		}

		$file = $_FILES['image_ktp']['name'];

		if ($daftar_post == ""){
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

	}
}
?>