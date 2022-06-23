<?php
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
class Role extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Role_Model");
		$this->load->library("form_validation");
	}


	public function index(){
		$data=$this->Role_Model->All();
		$this->load->view("admin/pages/role/add",['data'=>$data]);
	}


	public function create(){
		$data=array(
			"name"=>$this->input->post("name"),
		);
		$check=$this->Role_Model->checkRole($data);
		if(!$check){
			$check=$this->Role_Model->create($data);
			if($check){
				$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i>Role Created Successfully</div>');
             redirect('role');
			}

		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>Role already exist </div>');
             redirect('role');
		}
	}

	function status($id){
		$check=$this->Role_Model->change_Status($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i>Role Status Updated Successfully</div>');
             redirect('role');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>Whoops! something is wrong </div>');
             redirect('role');

		}
	}


	public function email(){


  $mj = new \Mailjet\Client('e8427114af8cbb0020f04d8185d042b6','a7366d647fe6073d73bec8c23b12ecb6',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "ashish.verma@nbgspl.com",
          'Name' => "Ashish"
        ],
        'To' => [
          [
            'Email' => "kamlesh.bisth@nbgspl.com",
            'Name' => "Hi kamlesh"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "Email Send By Ashish verma",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  echo $response->success();

	}
}

?>