<?php
class Event_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function All(){
		$query=$this->db->select()
		->from("event")
		->get();
		return $query->result_array();
	}

function checkEventTitle($data){
		 $this->db->where('title',$data['title']);
     $this->db->from('event');
     $query= $this->db->get();
     if($query->num_rows() > 0){
      return true;
      }else{
         return false;
         }

	}


	function create($data){
		$check=$this->db->insert("event",$data);
		if($check){
			return true;
		}
		else{
			return false;
		}
	}


	function status($id){
		$query=$this->db->get_where("event",array("id"=>$id));
		$data=$query->result_array();
		
		if($data[0]['status']==1){
			$this->db->where("id",$id);
			$check=$this->db->update("event",['status'=>0]);
			if($check){
				return true;
			}
			else{
				return false;
			}

		}
		else{
			$this->db->where("id",$id);
			$check=$this->db->update("event",['status'=>1]);
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
	$query=$this->db->get("event");
	$data=$query->result_array();
	return $data;

}


function update($data){
	$this->db->where("id",$data['id']);
	$check=$this->db->update("event",$data);
	if($check){
		return true;
	}
	else{
		return false;
	}
}

function delete($id){
	$this->db->where("id",$id);
	$check=$this->db->delete("event");
	if($check){
		return true;
	}
	else{
		return false;
	}
}
}


?>