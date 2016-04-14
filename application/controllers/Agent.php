<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		$this->load->library('Phpass','database');
		$this->load->library('Acl_auth');		
	    $this->load->helper(array('form', 'url'));
		
    }
	public function index()
	{

  

		$this->load->view('backend/viewagent');
	}
	public function addagent()
	{


	if(!empty($_POST))
	{

  $agentfirstname =$this->input->post('agentfirstname');
  $agentlastname = $this->input->post('agentlastname');
  $commissionPercentage = $this->input->post('commissionPercentage');
  $agentemail = $this->input->post('agentemail');
  $agentphone = $this->input->post('agentphone');
  $agentaddress = $this->input->post('agentaddress');
  $agentstatus = $this->input->post('agentstatus');
  $agentdata = array('vchFirstname'=>$agentfirstname,'vchLastname' => $agentlastname,'intCommission'=>$commissionPercentage,'vchEmail'=>$agentemail,'vchPhone'=>$agentphone,'vchAddress'=>$agentaddress,'enStatus'=>$agentstatus);
  if($this->db->insert('agent', $agentdata))
  {
  	echo '1'; die;
  }else{
  	echo '0'; die;
  }

	}

	 $this->load->view('backend/addagent');	
	}
	
	public function agentprofile()
	{
		$this->load->view('backend/agentprofile');		
	}
    
    public function getagentdata()
    {
   if(!empty($_POST))
   {

   $email = $_POST['email'];
   $this->db->select('*');
   $this->db->from('agent');
   $this->db->where('vchEmail',$email);
   $query = $this->db->get();
    
    if ( $query->num_rows() > 0 )
    {
        $row = $query->row_array();

        echo  '1'; 
    }else{

    	echo '0';
    }
       }
     }

        function ajax_view_panen()
{ 
      // $output = array(
         //       "aData" => array()
         //   );
        $this->db->select('*');
        $query=$this->db->get('agent');
 

       $dataarray =  $query->result();
       $newarray = array();
     foreach($dataarray as $key=>$val)
     {

       $newdata = $val;
       $newarray[] = (array)$newdata;
        
     }

     $data = $newarray ;
     
     

     //$data = array(
                         //   array('Name'=>'parvez', 'Empid'=>11, 'Salary'=>101),
                        //    array('Name'=>'alam', 'Empid'=>1, 'Salary'=>102),
                         //   array('Name'=>'phpflow', 'Empid'=>21, 'Salary'=>103)      
       //$output["aData"] = $query->result();
 // );

     

        $results = array(
        "sEcho" => 1,
        "iTotalRecords" => count($data),
        "iTotalDisplayRecords" => count($data),
          "aaData"=>$data);

      //echo "<pre>";
     // print_r(json_encode($output));
     echo json_encode($results);

}


}

   
 ?>