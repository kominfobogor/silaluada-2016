<?php
/**
* Author Rizki Maulana
* @author Hikmahtiar <hikmahtiar.cool@gmail.com>
* 04 Agustus 2016
*/
class Adm_perizinan_amdal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_global');
		$this->load->helper('email');
		$this->load->model('supermodel');
		$this->load->model('Perizinan_model');

		if($this->session->userdata('getLoginAct')==FALSE) {
			$this->session->set_flashdata('error', 'Tidak ada akses untuk ini!!!');
			redirect('loginweb');
		}
	}

	function index()
	{
		$data['title'] = "Data AMDAL";
		$data['konten'] = 'admin/perizinan/pendaftaran/amdal/index_lama';
		$data['status_perizinan'] = $this->Perizinan_model->status_perizinan();

		$data['check_upload_syarat'] = function($permohonan_id, $persyaratan_id) {
			return $this->Perizinan_model->check_exists_data_upload_syarat($permohonan_id, $persyaratan_id);
		};

		$data['nama_dokumen'] = function($dokumen_id) {
			$dokumen = $this->Perizinan_model->get_dokumen_name($dokumen_id);
			if($dokumen) {
				return '<a href="'.base_url().'dokumen_member/view_dok/'.$dokumen->file.'" target="_blank">'.$dokumen->file_name.'</a>';
			}

			return 'belum tersedia';
		};

		$data['amdal'] = $this->supermodel->queryManual('SELECT * 
from member, pemohon, perusahaan, jenisizin, amdal
where 
amdal.member_id=member.member_id and 
amdal.pemohon_id=pemohon.pemohon_id and 
amdal.perusahaan_id=perusahaan.perusahaan_id and 
amdal.jenisizin_id=jenisizin.jenisizin_id and 
amdal.status_perizinan < 2');

		$this->load->vars($data);
		$this->load->view('admin/template');
		
		
	}

	function tambah()
	{
		//$this->form_validation->set_rules('nama','Nama','required');
		//$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('nama_perusahaan','Nama Perusahaan','required');
		//$this->form_validation->set_rules('alamat','Alamat','required');
		//$this->form_validation->set_rules('alamat_perusahaan','Alamat Perusahaan','required');
		if($this->form_validation->run()===TRUE) {
			$in['nama'] = $this->input->post('nama');
			$in['jabatan'] = $this->input->post('jabatan');
			$in['alamat'] = $this->input->post('alamat');
			$in['no_telp'] = $this->input->post('no_telp');
			$in['nama_perusahaan'] = $this->input->post('nama_perusahaan');
			$in['alamat_perusahaan'] = $this->input->post('alamat_perusahaan');
			$in['no_telp_perusahaan'] = $this->input->post('no_telp_perusahaan');
			$in['jenis_sifat'] = $this->input->post('jenis_usaha');
			$in['kapasitas_produksi'] = $this->input->post('kapasitas_produksi');
			$in['luas_lahan'] = $this->input->post('luas_lahan');
			$in['kondisi_lahan'] = $this->input->post('kondisi_lahan');
			$in['tanggal'] = $this->input->post('tanggal');
			
			$this->supermodel->insertData('sppl_lama',$in);
			$this->session->set_flashdata('success', 'Penyimpanan data sukses');
			$this->m_global->activities('Menyimpan data SPPL '.$in['nama_perusahaan']);
			redirect('adm_sppl/tambah');
		}
		$data['title'] = "Tambah Data SPPL";
		$data['konten'] = 'admin/perizinan/sppl/tambah_lama';
		$this->load->vars($data);
		$this->load->view('admin/template');
	}

	function edit($id=null)
	{
		//$this->form_validation->set_rules('nama','Nama','required');
		//$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('nama_perusahaan','Nama Perusahaan','required');
		//$this->form_validation->set_rules('alamat','Alamat','required');
		//$this->form_validation->set_rules('alamat_perusahaan','Alamat Perusahaan','required');
		if($this->form_validation->run()===TRUE) {
			$id = $this->input->post('id');
			$in['nama'] = $this->input->post('nama');
			$in['jabatan'] = $this->input->post('jabatan');
			$in['alamat'] = $this->input->post('alamat');
			$in['no_telp'] = $this->input->post('no_telp');
			$in['nama_perusahaan'] = $this->input->post('nama_perusahaan');
			$in['alamat_perusahaan'] = $this->input->post('alamat_perusahaan');
			$in['no_telp_perusahaan'] = $this->input->post('no_telp_perusahaan');
			$in['jenis_sifat'] = $this->input->post('jenis_usaha');
			$in['kapasitas_produksi'] = $this->input->post('kapasitas_produksi');
			$in['luas_lahan'] = $this->input->post('luas_lahan');
			$in['kondisi_lahan'] = $this->input->post('kondisi_lahan');
			$in['tanggal'] = $this->input->post('tanggal');
			$in['status'] = "$this->input->post('status')";
			$this->supermodel->updateData('sppl_lama',$in,'sppl_lama_id',$id);
			$this->session->set_flashdata('success', 'Perubahan data sukses');
			$this->m_global->activities('Merubah data SPPL '.$in['nama_perusahaan']);
			redirect('adm_sppl/edit/'.$id);
		}
		$data['title'] = "Edit Data SPPL";
		$data['konten'] = 'admin/perizinan/sppl/edit_lama';
		$data['kecamatan'] = $this->supermodel->getData('kecamatan');
		$data['item'] = $this->supermodel->getData('sppl_lama',array('sppl_lama_id'=>$id))->row_array();
		$this->load->vars($data);
		$this->load->view('admin/template');
	}

	function approve($id=null)
	{
		if($id=null)
		{
			$this->session->set_flashdata('Error','Tidak Berhasil Menghapus Data');
			redirect('adm_sppl/index');
		}
		else
		{
			$aye = $this->supermodel->getData('sppl_lama')->row_array();
			$in['status'] = '1';
			$dltuser = $this->supermodel->updateData('sppl_lama',$in,'sppl_lama_id',$aye['sppl_lama_id']);
			$this->session->set_flashdata('success', 'Status Permohonan Telah Dirubah');
			redirect('adm_sppl/index');
		}
	}

	public function ubah_status()
	{
		$post = $this->input->post();

		$no_izin = $post['no_izin'];
		$no_reg = $post['no_reg'];
		$permohonan_id = $post['permohonan_id'];
		$nama_izin = $post['nama_izin'];
		$status_perizinan = $post['status_perizinan'];
		$tgl_terbit = date('Y-m-d');
		$email = $post['email'];

		$html1 = '<p>
			Anda telah melengkapi persyaratan Perizinan yang diajukan. <br>
			Silahkan datang ke Kantor BPLH dengan membawa dokumen asli yang disyaratkan secepatnya.

		</p>';

		$html2 = '<p>
			Izin lingkungan yang anda ajukan telah selesai diproses. <br>
			<b>No. Izin : </b>'.$no_izin.' <br>
			<b>Nama Izin :</b> '.$nama_izin.' <br>
			<b>Tanggal Terbit :</b> '.$tgl_terbit.'.
			
		</p>';

		$update_status = $this->Perizinan_model->ubah_status_perizinan('amdal', $post);

		if($update_status)
		{
			if($status_perizinan == 1) {

				$send = send_email_swiftmailer($email, 'Proses Penerbitan Izin', $html1);

				if($send)
				{
					$response = array(
						'close' => true,
						'status' => 'success',
						'message' => 'Perizinan berhasil diupdate'
					);
					echo json_encode($response);
				}
				else
				{
					$response = array(
						'close' => true,
						'status' => 'warning',
						'message' => 'Perizinan berhasil diupdate, namun gagal untuk mengirim email kepada member. Silahkan cek koneksi internet anda'
					);
					echo json_encode($response);
				}

			}

			if($status_perizinan == 0)
			{
				$response = array(
						'close' => true,
						'status' => 'success',
						'message' => 'Perizinan berhasil diupdate'
					);
					echo json_encode($response);
			}

			if($status_perizinan == 2)
			{
				$send = send_email_swiftmailer($email, 'Penerbitan Izin dan Publikasi Web', $html2);

				if($send)
				{
					$response = array(
						'close' => true,
						'status' => 'success',
						'message' => 'Perizinan berhasil diupdate'
					);
					echo json_encode($response);
				}
				else
				{
					$response = array(
						'close' => true,
						'status' => 'warning',
						'message' => 'Perizinan berhasil diupdate, namun gagal untuk mengirim email kepada member. Silahkan cek koneksi internet anda'
					);
					echo json_encode($response);
				}
			}
		} else {
			$response = array(
				'close' => true,
				'status' => 'danger',
				'message' => 'Perizinan gagal diupdate'
			);
			echo json_encode($response);
		}
	}
}
?>