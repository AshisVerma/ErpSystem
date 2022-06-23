<?php
class Staff extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("Staff_Model");
		$this->load->helper("url");
		$this->load->model("Role_Model");
		$this->load->model("Department_Model");

	}


	public function index(){
		$data=$this->Role_Model->All();
		$department=$this->Department_Model->All();
		$this->load->view("admin/pages/staff/add",['role'=>$data,'department'=>$department]);
	}

	public function create(){
		$file=$_FILES['image'];
		$filename=$file['name'];
		$signature=$_FILES['signature'];
		$signature_filename=$signature['name'];
		$data=array(
			 "role"=>$this->input->post("role"),
             "name"=>$this->input->post("name"),
             "password"=>password_hash($this->input->post("password"), PASSWORD_DEFAULT),
             "email"=>$this->input->post("email"),
             "phone"=>$this->input->post("phone"),
             "department"=>$this->input->post("department"),
          
             "dob"=>date("Y-m-d",strtotime($this->input->post("dob"))),
             "current_address"=>$this->input->post("current-address"),
             "permanet_address"=>$this->input->post("permanent-adddress"),
             "opening_balance"=>$this->input->post("open-balance"),
             "image"=>$filename,
             "application_leave"=>$this->input->post("leave"),
             "signature"=>$signature_filename,
             "bank_name"=>$this->input->post("bank-name"),
             "bank_branch_name"=>$this->input->post("branch-name"),
             "account_name"=>$this->input->post("account-name"),
             "account_number"=>$this->input->post("account-number"),
             "date_of_joining"=>date("Y-m-d",strtotime($this->input->post("date-of-join"))),
             "salary"=>$this->input->post("salary"),
             "employee_type"=>$this->input->post("emp-type"),
             "provision_time"=>$this->input->post("provision-month"),
             "notes"=>$this->input->post("desc")
         );
		 $check=$this->Staff_Model->checkStaffExist($data);
		 if(!$check){
           $check=$this->Staff_Model->create($data);
           if($check){
           	move_uploaded_file($file['tmp_name'], "./upload/staff/image/".$filename);
           	move_uploaded_file($signature['tmp_name'], "./upload/staff/image/".$signature_filename);

           	$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Staff Created Succesfully</div>');
           	return redirect("/staff");
           }
           else{
           	    	$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again</div>');
           	return redirect("/staff");
           }
		 }
		 else{
		 		$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Email Already exist</div>');
           	return redirect("/staff");

		 }
	}



	public function role(){
		$data=array(
			"name"=>$this->input->post("name"),
			"status"=>$this->input->post("status"),
		);

		$check=$this->Role_Model->checkRole($data);
		if(!$check){
           $check=$this->Role_Model->create($data);
           if($check){
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Role Created Succesfully</div>');
               	return redirect("/staff");
           }
           else{
           		$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again</div>');
           	return redirect("/staff");

           }
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> This Role is already created</div>');
           	return redirect("/staff");

		}
	}


	public function department(){
		$data=array(
           "name"=>$this->input->post("name"),
           "status"=>$this->input->post("status"),
           "details"=>$this->input->post("notes"),
		);

		$check=$this->Department_Model->checkDepartment($data);
		if(!$check){
			$check=$this->Department_Model->create($data);
			if($check){
				$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Department Created Succesfully</div>');
               	return redirect("/staff");

			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again</div>');
           	return redirect("/staff");

			}
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>Department name  is already created</div>');
           	return redirect("/staff");
		}


	}



	public function list(){
		$data=$this->Staff_Model->All();
		if(!empty($data)){
			$this->load->view("admin/pages/staff/list",['data'=>$data]);
		}
	}
}


?>

