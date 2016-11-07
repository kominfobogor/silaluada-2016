<?php
/**
 * Pesan Controller
 *
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

class Pesan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_global');
		$this->load->model('supermodel');
		$this->load->model('Perizinan_model');
		 if($this->session->userdata('getLoginAct')==FALSE) {
		 		echo"<script>alert('Anda belum login !');document.location.href='".site_url('login_daftar_member/index')."'</script>";
		 }
	}

	public function index(){
		$data['diterima'] = $this->Perizinan_model->get_pesan($this->session->userdata('member_id'), false);
		$data['get_user_name'] = function($id) {
			return $this->Perizinan_model->get_user_name($id);
		};
		$data['admin_bplh'] = $this->Perizinan_model->get_admin_bplh();
		$data['konten'] = "izin_lingkungan/pesan/index";
		$this->load->view('izin_lingkungan/template',$data);
	}

	public function kirim()
	{
		$data['terkirim'] = $this->Perizinan_model->get_pesan(false, $this->session->userdata('member_id'));
		$data['get_user_name'] = function($id) {
			return $this->Perizinan_model->get_user_name($id);
		};
		$data['admin_bplh'] = $this->Perizinan_model->get_admin_bplh();
		$data['konten'] = "izin_lingkungan/pesan/kirim";
		$this->load->view('izin_lingkungan/template',$data);
	}

	public function mengirim()
	{
		$post = $this->input->post();

		$data = [
			'pesan_dari_id'  => $this->session->userdata('member_id'),
			'pesan_untuk_id' => $post['pesan_untuk_id'],
			'pesan_tanggal'  => date('Y-m-d H:i:s'),
			'pesan_lampiran' => '',
			'pesan_text'	 => $post['pesan_text'],
			'pesan_status'	 => 0
		];

		$response = [
			'status' => 'error',
			'message' => 'Pesan gagal dikirim, silahkan periksa form isian'
		];


		if(($post['pesan_untuk_id'] != '') && ($post['pesan_text'] != ''))
		{
			$save = $this->Perizinan_model->pesan_simpan($data);
			
			if($save)
			{
				$response = [
					'status' => 'success',
					'message' => 'Pesan berhasil dikirim'
				];
			}
			else
			{
				$response = [
					'status' => 'error',
					'message' => 'Pesan gagal dikirim'
				];
			}
		}

		echo json_encode($response);
	}

	public function hapus($id, $redirect)
	{
		$hapus = $this->Perizinan_model->pesan_hapus($id);
		if($hapus) {
			$this->session->set_flashdata('delete', '<div class="alert alert-success">Pesan Berhasil dihapus</div>');
		}
		else
		{
			$this->session->set_flashdata('delete', '<div class="alert alert-danger">Pesan gagal dihapus</div>');
		}

		$replace_string = str_replace("__", "/", $redirect);

		echo '<script>';
			echo 'document.location="'.site_url($replace_string).'"';
		echo '</script>';
	}
}

?>