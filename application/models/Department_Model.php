<?php
class Department_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function All(){
		$query=$this->db->select()
		->from("department")
		->get();
		return $query->result_array();
	}

function checkDepartment($data){
		 $this->db->where('name',$data['name']);
     $this->db->from('department');
     $query= $this->db->get();
     if($query->num_rows() > 0){
      return true;
      }else{
         return false;
         }

	}


	function create($data){
		$check=$this->db->insert("department",$data);
		if($check){
			return true;
		}
		else{
			return false;
		}
	}


	function status($id){
		$query=$this->db->get_where("department",array("id"=>$id));
		$data=$query->result_array();
		
		if($data[0]['status']==1){
			$this->db->where("id",$id);
			$check=$this->db->update("department",['status'=>0]);
			if($check){
				return true;
			}
			else{
				return false;
			}

		}
		else{
			$this->db->where("id",$id);
			$check=$this->db->update("department",['status'=>1]);
			if($check){
				return true;
			}
			else{
				return false;
			}
		}

	}

function edit($id){
	$this->db->where("id",$id);
	$query=$this->db->get("department");
	$data=$query->result_array();
	return $data;

}


function update($data){
	$this->db->where("id",$data['id']);
	$check=$this->db->update("department",$data);
	if($check){
		return true;
	}
	else{
		return false;
	}
}

function delete($id){
	$this->db->where("id",$id);
	$check=$this->db->delete("department");
	if($check){
		return true;
	}
	else{
		return false;
	}
}
}


?>