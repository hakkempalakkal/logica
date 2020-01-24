<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('usermanagement/User_model');
		$this->load->model('usermanagement/Login_model');
		$this->load->model('usermanagement/Permission_model');
		$this->load->library(array('form_validation','session','upload'));
		$this->load->helper(array('url','html','form'));
		$this->load->library('pagination');
         $this->load->database(); 
		 $this->load->library('session');
		 $this->load->helper('url');
        $this->load->model('masters/Client_model');
	}

	
	public function index()
	{
		 $user_id=	$this->session->userdata('user_id');
	
		// var_dump($user_image);
		//  die();
		
		$data['value'] = $this->Client_model->list();
		$res = $this->Permission_model->userdetails($user_id);
		$result['roles']=$this->Login_model->userdetails($user_id);

		$user_image['values']=$res[0]->user_image;
			// var_dump($res);
			// die();
			
			$result['permission']=$this->Login_model->select_all_menu($user_id);	
		$this->load->view('includes/header',$user_image);
		$this->load->view('includes/navigation',$result,$user_image);
		$this->load->view('masters/client',$data);
		 $this->load->view('includes/footer');
	}
	public function create()
	{
		$user_id=	$this->session->userdata('user_id');
		$res = $this->Permission_model->userdetails($user_id);
		$user_image['values']=$res[0]->user_image;
		$result['roles']=$this->Login_model->userdetails($user_id);
		$result['permission']=$this->Login_model->select_all_menu($user_id);
		
		$data['code']=$this->Client_model->selectcode();
		$this->load->view('includes/header',$user_image);
		$this->load->view('includes/navigation',$result,$user_image);
		$this->load->view('masters/create_client',$data);
		$this->load->view('includes/footer');	
	}
	public function store()
	{
		$postdata=$this->input->post('postData');
		$result= $this->Client_model->add($postdata);
		echo 'success';
		
	}
	public function edit()
	{
		$user_id=	$this->session->userdata('user_id');
		$res = $this->Permission_model->userdetails($user_id);
		$user_image['values']=$res[0]->user_image;
		$result['roles']=$this->Login_model->userdetails($user_id);
		$id=$_REQUEST['id'];
		$result['permission']=$this->Login_model->select_all_menu($user_id);
		$data['value'] = $this->Client_model->edit($id);
		$this->load->view('includes/header',$user_image);
		$this->load->view('includes/navigation',$result,$user_image);
		$this->load->view('masters/edit_client',$data);
		$this->load->view('includes/footer');	
	}
	public function update()
	{	
	
		$postdata=$this->input->post('postData');
		
		$data=$postdata["postData1"];
		$id=$postdata["id"];
		$result= $this->Client_model->update($id,$data);
		echo 'success';
		
	}
	//update status
	public function enable_status($id)
	
	{
		$result = $this->Client_model->enable_status($id);

		redirect('client');
	}
	public function disable_status($id)
	
	{
		$result = $this->Client_model->disable_status($id);
		redirect('clientk');
		
	}
	public function checkclient()
	
	{
		$mail = $_POST['client_email'];
		$result=$this->Client_model->checkclientmodel($mail);
		echo $result;	
	}
}
