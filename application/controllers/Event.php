<?php

class Event extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->helper("url");
		$this->load->model("Event_Model");
		$this->load->model("Role_Model");


	}

	public function index(){
       $data=$this->Event_Model->All();
       $role=$this->Role_Model->All();
       $this->load->view("admin/pages/event/add",['data'=>$data,'role'=>$role]);
	}

	public function create(){
		print_r($_POST);
	}
}


?>