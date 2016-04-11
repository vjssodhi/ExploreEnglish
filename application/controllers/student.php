<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		$this->load->library('Phpass');
		$this->load->library('Acl_auth');		
	    $this->load->helper(array('form', 'url'));
		
    }
	public function index()
	{
		$this->load->view('backend/enrollstudent');
	}
	public function viewstudent()
	{
	   $this->load->view('backend/viewstudent');	
	}
} ?>