<?php

class Swiftmailer extends CI_Controller {
    public function __construct()
    {

        parent::__construct();
        
        $this->load->helper('email');
    }
    
    public function index()
    {
        $subj = 'Contoh aja brads';
        $text = '<p>
            <b>Nama </b>: Hikmahtiar
        </p>';
        $send_email = send_email_swiftmailer('hikmahtiar.cool@gmail.com', $subj, $text);
    
        if($send_email)
        {
            echo ' yes';
        }
        else
        {
            echo ' noe';
        }
    }
}
?>