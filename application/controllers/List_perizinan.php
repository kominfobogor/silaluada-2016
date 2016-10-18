<?php
/**
 * List Perizinan Controller
 *
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */
class List_perizinan extends CI_Controller {
    
    public function index()
    {
        $data['name_site'] = 'List Perizinan';
        $data['konten'] = 'izin_lingkungan/list_perizinan';
        $this->load->view('template', $data);
    }
    
}

?>