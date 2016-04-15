<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendence extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
	function __construct() {
        parent::__construct();
		$this->load->library('Phpass','session');
		$this->load->library('Acl_auth');		
	    $this->load->helper(array('form', 'url'));
	    $this->load->model('Student_model');	  
		
		$usertype = '';
    }
	public function index()
	{
 
		$this->load->view('backend/attendence');
	}
	public function getstudents($usertype,$teacherid,$courseid)
	{
		$this->load->library('pagination');
       
		if(!empty($teacherid) && !empty($courseid))
		{
   
	$data['studentdata'] = $this->Student_model->getstudentsbyid($teacherid,$courseid);
	 $this->load->view('backend/getstudents',$data);
		}else{

			die;
		}
   


	}
	
	
}
