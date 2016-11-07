<?php
/**
 * Pengaduan Controller
 *
 * @author  Hikmahtiar <hikmahtiar.cool@gmail.com> 
 */

class Pengaduan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('supermodel');
		$this->config->load('pengaduan');
	}

	public function index()
	{
		$data['name_site'] = 'BPLH';
        $data['konten'] = 'pengaduan';
		$data['banner'] = $this->supermodel->getData('banner',array('status'=>1));
		$data['slide'] = $this->supermodel->getData('slide',array('status'=>1));

        $this->load->view('template', $data);
	}

	public function list_pengaduan()
	{
		$link = $this->config->item('webservice_pengaduan');

		$content = file_get_contents($link);

		echo $content;
	}
}
?>