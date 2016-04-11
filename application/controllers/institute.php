<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute extends CI_Controller {
	
		function __construct() {
        parent::__construct();
		$this->load->library('Phpass');
		$this->load->library('Acl_auth');
		$this->load->helper('form');
			
    }
		public function index()
	{
		$this->load->view('backend/addinstitute');
	}
	
}
?>