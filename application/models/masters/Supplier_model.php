<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {


public function add($data)
{
    $this->db->where('code', $data['code']);
    $query = $this->db->get('mst_supplier');
    $count_row = $query->num_rows();
    if ($count_row > 0) {
       return "data already exist";
    } else {
       
        $this->db->insert('mst_supplier',$data);
        return "success";
    }
}
public function list()
{

$this->db->select('*');
$this->db->from('mst_supplier');
$query = $this->db->get();
$result = $query->result();
return $result;

}
public function selectcode()
{

  $this->db->select_max('code');
$this->db->from('mst_supplier');
$query = $this->db->get();
$result = $query->result();
if($result==NULL)
{
  $result=1;
}
return $result;

}
public function edit($id)
{
    $this->db->where('id', $id);
    $query = $this->db->get('mst_supplier');
    $result = $query->result();
return $result;
}
public function update($id,$data)
{

    $this->db->where('id',$id);
        $this->db->update('mst_supplier',$data);
        
        return "success";
    
} 
//change status
public function enable_status($id)
{
     
  
  $this->db->where('id', $id);
  $this->db->set('IsActive',1);
  if($this->db->update('mst_supplier'))
  {
    return 1;
  }else{
    return 0;
  }
}
public function disable_status($id)
{
     
  
  $this->db->where('id', $id);
  $this->db->set('IsActive',0);
  if($this->db->update('mst_supplier'))
  {
    return 1;
  }else{
    return 0;
  }
}

}