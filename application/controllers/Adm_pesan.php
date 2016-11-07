<?php
/**
 * Pesan Controller
 *
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

class Adm_pesan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_global');
		$this->load->model('supermodel');
		$this->load->model('Perizinan_model');
		if($this->session->userdata('getLoginAct')==FALSE) {
			$this->session->set_flashdata('error', 'Tidak ada akses untuk ini!!!');
			redirect('loginweb');
		}
	}

	public function index()
	{
		$data['diterima'] = $this->Perizinan_model->get_pesan($this->session->userdata('userid'), false);
		$data['get_member_name'] = function($id) {
			return $this->Perizinan_model->get_member_name($id);
		};
		$data['member'] = $this->Perizinan_model->get_member_aktif();
		$data['title'] = 'Perpesanan';
		$data['konten'] = 'admin/pesan/index';
		$this->load->view('admin/template', $data);
	}

	public function kirim()
	{
		$data['terkirim'] = $this->Perizinan_model->get_pesan(false, $this->session->userdata('userid'));
		$data['get_member_name'] = function($id) {
			return $this->Perizinan_model->get_member_name($id);
		};
		$data['member'] = $this->Perizinan_model->get_member_aktif();
		$data['title'] = 'Perpesanan';
		$data['konten'] = 'admin/pesan/kirim';
		$this->load->view('admin/template', $data);
	}

	public function mengirim()
	{
		$post = $this->input->post();

		$data = [
			'pesan_dari_id'  => $this->session->userdata('userid'),
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

	public function reset_notif()
	{
		$id = 0;
		if($this->session->userdata('userid')) 
		{
			$id = $this->session->userdata('userid');
		}

		if($this->session->userdata('member_id')) 
		{
			$id =$this->session->userdata('member_id');
		}
		$this->Perizinan_model->reset_notif_pesan($id);
		echo true;
	}
}

?>