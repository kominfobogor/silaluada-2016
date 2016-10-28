<?php
/**
* Author Rizki Maulana
* 04 Agustus 2016
*/
class Adm_perizinan_member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_global');
		$this->load->model('supermodel');
		if($this->session->userdata('getLoginAct')==FALSE) {
			$this->session->set_flashdata('error', 'Tidak ada akses untuk ini!!!');
			redirect('loginweb');
		}
	}

	function index()
	{
		$data['title'] = "Data Member ";
		$data['konten'] = 'admin/perizinan/member/index';
		$data['sql'] = $this->supermodel->queryManual('SELECT * from member');

		$this->load->vars($data);
		$this->load->view('admin/template');
	}

	function hapus($member_id) {
		$where = array('member_id' => $member_id);
		$jalan = $this->supermodel->deleteData('member',$where,$field="");
		if ($jalan){
			echo"<script>alert('Berhasil menghapus data...'); document.location.href='".site_url('Adm_perizinan_member')."'</script>";
		}
	}	
}
?>