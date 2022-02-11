<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation'); 
	}
    /**
     * index function
     * display customer form
     *
     * @return html form
     */
    // th
	public function index()
    { 
        
        $this->security->get_csrf_token_name(); // initial CSRF name
        $this->security->get_csrf_hash(); // get CSRF Token generate
        
        $this->load->view('home'); // render
    }
        
}
