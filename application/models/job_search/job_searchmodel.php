<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_searchmodel extends CI_Model {



    public function listjobdata()
    {
    // $this->db->where('JobId',$id);
    $this->db->select('*');
    $this->db->from('jm_job');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
    
    }

 

}