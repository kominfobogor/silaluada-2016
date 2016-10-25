<?php
/**
 * Perizinan Model
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

class Perizinan_model extends CI_Model 
{
	private $upload_syarat;
	private $direktori_member;
	private $sppl;

	public function __construct()
	{
		$this->upload_syarat = 'upload_syarat';
		$this->direktori_member = 'direktori_member';
		$this->sppl = 'sppl';
		parent::__construct();
	}

	public function check_exists_data_upload_syarat($permohonan_id, $persyaratan_id)
	{
		$sql = $this->db;

		$sql->where('permohonan_id', $permohonan_id);
		$sql->where('persyaratan_id', $persyaratan_id);
		$sql->from($this->upload_syarat);

		$get = $sql->get();

		$result = $get->row();

		return $result;
	}

	public function get_dokumen_name($dokumen_id)
	{
		$sql = $this->db;

		$sql->where('dokumen_id', $dokumen_id);
		$sql->from($this->direktori_member);

		$get = $sql->get();

		$result = $get->row();

		return $result;
	}

	public function upload_syarat_save($data)
	{
		$sql = $this->db;

		return $sql->insert($this->upload_syarat, $data);
	}

	public function upload_syarat_update($permohonan_id, $persyaratan_id, $dokumen_id)
	{
		$sql = $this->db;

		$sql->where('permohonan_id', $permohonan_id);
		$sql->where('persyaratan_id', $persyaratan_id);

		return $sql->update($this->upload_syarat, array(
			'dokumen_id' => $dokumen_id
		));
	}

	public function change_status_to($table, $permohonan_id, $status)
	{
		$sql_amdal = $this->db;
		$sql_amdal->select('*');
		$sql_amdal->from($table);
		$sql_amdal->where('permohonan_id', $permohonan_id);

		$get_amdal = $sql_amdal->get();
		$resul_amdal = $get_amdal->row();

		if($resul_amdal) {

			$data = [
				'status_perizinan' => $status
			];
			$this->db->where('permohonan_id', $permohonan_id);
			$this->db->update($table, $data);

			return TRUE;
		}

		return FALSE;
	}

	public function get_sppl_publish()
	{
		$sql = $this->db;
		$sql->select('sppl.*, pemohon.nama_pemohon, pemohon.alamat_pemohon');
		$sql->from('sppl');
		$sql->join('pemohon', 'sppl.pemohon_id = pemohon.pemohon_id');
		$sql->where('sppl.status_perizinan', 3);

		$get = $sql->get();

		return $get->result();
	}

	public function get_sppl_lampau_publish()
	{
		$sql = $this->db;
		$sql->select('*');
		$sql->from('sppl_lampau');
		$sql->where('nama_kegiatan !=', '');

		$get = $sql->get();

		return $get->result();
	}

	public function get_uklupl_publish()
	{
		$sql = $this->db;
		$sql->select('ukl_upl.*, pemohon.nama_pemohon, pemohon.alamat_pemohon');
		$sql->from('ukl_upl');
		$sql->join('pemohon', 'ukl_upl.pemohon_id = pemohon.pemohon_id');
		$sql->where('ukl_upl.status_perizinan', 3);

		$get = $sql->get();

		return $get->result();
	}

	public function get_uklupl_lampau_publish()
	{
		$sql = $this->db;
		$sql->select('*');
		$sql->from('ukl_upl_lampau');
		$sql->where('nama_kegiatan !=', '');
		$sql->where('alamat_kegiatan !=', '');

		$get = $sql->get();

		return $get->result();
	}

	public function get_amdal_publish()
	{
		$sql = $this->db;
		$sql->select('amdal.*, pemohon.nama_pemohon, pemohon.alamat_pemohon');
		$sql->from('amdal');
		$sql->join('pemohon', 'amdal.pemohon_id = pemohon.pemohon_id');
		$sql->where('amdal.status_perizinan', 3);

		$get = $sql->get();

		return $get->result();
	}

	public function get_amdal_lampau_publish()
	{
		$sql = $this->db;
		$sql->select('*');
		$sql->from('amdal_lampau');
		$sql->where('nama_kegiatan !=', '');

		$get = $sql->get();

		return $get->result();
	}

	public function get_limbah_cair()
	{
		$sql = $this->db;
		$sql->select('*');
		$sql->from('izin_lc');
		$sql->order_by('tgl_terbitizin', 'desc');

		$get = $sql->get();

		return $get->result();
	}

}
?>