<?php
/**
 * member Controller
 * 
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

class Member extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('email');
		$this->load->model('m_global');
		$this->load->model('supermodel');
    }

    public function verify($pass = '', $nik = '')
    {
    	$ket = '';

    	if($pass == "" || $nik == "")
    	{
    		$ket = 'denied';
    	}
    	else
    	{
			$verify = $this->supermodel->queryManual('
				SELECT * FROM member WHERE password = "'.$pass.'" AND nik_member = "'.$nik.'"
			');

			if($verify->num_rows() > 0)
			{
				$row = $verify->row();
				if($row->status_member > 0)
				{
					echo '<script>document.location="'.site_url('login_daftar_member').'";</script>';
				}
				else
				{

					$data = array(
						'status_member' => 1
					);

					$this->db->where('password', $pass);
					$this->db->where('nik_member', $nik);
					$this->db->update('member', $data);
					$this->load->view('izin_lingkungan/verifikasi_email');
				}
			}
			else
			{
				$ket = 'denied';
			}
    		
    	}

    	echo $ket;

    }
    
}
?>