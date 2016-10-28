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
    }
    
    public function index()
    {
    }
    
}
?>