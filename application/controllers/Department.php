<?php
class Department extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Department_Model");
		$this->load->library("form_validation");
	}


	public function index(){
		$data=$this->Department_Model->All();
		$this->load->view("admin/pages/department/add",['data'=>$data]);



	}

	public function create(){
		$data=array("name"=>$this->input->post("name"),"details"=>$this->input->post("desc"),"status"=>$this->input->post("status"));
		$check=$this->Department_Model->checkDepartment($data);
		if(!$check){
           $create=$this->Department_Model->create($data);
           if($create){
           $this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Department Created Succesfully</div>');
               redirect('department');
           }
           else{
           $this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('department');
           }
		}
	}

	public function list(){
		$data=$this->Department_Model->All();
		$this->load->view("admin/pages/department/list",['data'=>$data]);

	}

		public function status($id){
		$check=$this->Department_Model->status($id);

		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Department Status Updated  Succesfully</div>');
               redirect('department/list');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('department/list');
		}
	}

	public function edit($id){
		$data=$this->Department_Model->edit($id);
		
		$this->load->view("admin/pages/department/edit",['data'=>$data]);
	}


	public function update(){
		$data=array(
             "id"=>$this->input->post("id"),
             "name"=>$this->input->post("name"),
             
             "details"=>$this->input->post("desc")
         );
		$check=$this->Department_Model->update($data);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Department  Updated  Succesfully</div>');
               redirect('department/list');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('department/list');
		}
	}

	public function delete($id){
		$check=$this->Department_Model->delete($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Department    Deleted  Succesfully</div>');
               redirect('department/list');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('department/list');
		}

	}
}


?>