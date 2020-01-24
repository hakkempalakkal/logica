
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {

public function listjobdata()
{
$this->db->select('*');
$this->db->from('jm_job');
$query = $this->db->get();
$result = $query->result();
return $result;

}
}