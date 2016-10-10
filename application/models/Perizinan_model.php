<?php
/**
 * Perizinan Model
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

class Perizinan_model extends CI_Model 
{
	private $upload_syarat;
	private $direktori_member;

	public function __construct()
	{
		$this->upload_syarat = 'upload_syarat';
		$this->direktori_member = 'direktori_member';
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

}
?>