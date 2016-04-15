<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends MY_Model
{
    public function getstudentsbyid($teacherid,$courseid)
    {
    $this->db->select('*');
    $this->db->from('student');
    $this->db->where('vchTteacher_id',$teacherid);
    $this->db->where('vchCourse_Id',$courseid);
    $query = $this->db->get();
    $result = $query->result_array();

    return $result;
    }
	
}