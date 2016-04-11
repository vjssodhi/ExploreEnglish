<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


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
		$this->load->library('Phpass');
		$this->load->library('Acl_auth');		
	    $this->load->helper(array('form', 'url'));
		
    }
	public function index()
	{
		$this->load->view('backend/index');
	}
	public function dashboard()
	{	
    if($this->session->userdata('logged_in'))
    {
    $identity = $_SESSION['user_email'];
	$this->load->model('user_model');
   $userdata = $this->user_model->get_user($identity);
   
   if(!empty($userdata->vchImage)){
	   $_SESSION['userimage'] =  $userdata->vchImage;
   }else{
	   $_SESSION['userimage'] = 'default.jpg';   
   }
   
	$this->load->view('backend/dashboard');
    }else{
	  redirect('admin/index');
        }
	}
	
	public function do_upload()
	{			 
	if(!empty($_POST))
	{
	 
	$filename =  $_FILES['userfile']['name'];
    $fileexplode = explode('.',$filename);

    $newfilename = $fileexplode[0].uniqid().'.jpg';
	
	//$uploadpath = APPPATH.'userpics\\';
	$uploadpath = FCPATH.'assets/userpics/';
	
	$config['upload_path'] = $uploadpath;
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1800';
    $config['max_width'] = '1800';
    $config['max_height'] = '1800';
    $config['file_name'] = $newfilename;
		
    $this->load->library('upload', $config);
	
	if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            redirect('admin/index'); 
         }			
         else { 
           $datapic = array('upload_data' => $this->upload->data()); 
            			
	$user_name = $this->input->post('reg_username');
    $user_password = $this->input->post('reg_password');
    $user_email = $this->input->post('reg_email');
	$usertype = $this->input->post('reg_agent');
	$created_at = date('Y-m-d H:i:s');
	
	$data = array('vchUsername' => $user_name,'password' => $user_password,'email'=> $user_email,'vchUsertype' => $usertype,'dateCreated_at'=>$created_at,'vchImage'=> $newfilename);
	$success = $this->acl_auth->register( $data );
	redirect('admin/dashboard');
	         }	
	 
	}	 
	}
	public function login()
	{
	 if(!empty($_POST))
	  {
	$user = $this->input->post('loginemail');
	$password  = $this->input->post('loginpassword');
	$remember = TRUE;
	$success = $this->acl_auth->login( $user, $password,$remember);
	if($success){redirect('admin/dashboard');}else{redirect('admin/index');}
	
	 }
		
	}
	
	public function logout()
	{
		$success = $this->acl_auth->logout();
		redirect('admin/index');
		
	}
	
	public function resetpassword()
	{
	 if(!empty($_POST))
	 {	
    $email = $this->input->post('reset_email');
	$this->acl_auth->send_password_reset($email);
	 }	
	 
	}
	public function enrollstudent()
	{
	$this->load->view('backend/enrollstudent');	
		
	}
}
