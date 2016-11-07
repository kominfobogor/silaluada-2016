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

	public function count_pengaduan()
	{
		$link = $this->config->item('webservice_pengaduan');

		$content = file_get_contents($link);

		$response = [
			'limit' => $this->config->item('limit_pengaduan'),
			'total' => count(json_decode($content)) 
		];

		echo json_encode($response);
	}

	public function list_pengaduan($offset=0)
	{
		$limit = $this->config->item('limit_pengaduan'); 
		$link = $this->config->item('webservice_pengaduan').'&limit='.$limit;

		if($offset != 0) {
			$link .= '&offset='.$offset;
		}

		$content = file_get_contents($link);

		echo $content;
	}
}
?>