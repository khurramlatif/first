<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fazool extends CI_Controller {


	public function index(){


		$this->load->Library('form_validation');

		$this->form_validation->set_rules(
array( array(
		'field' => 'inp_name' ,
		'label' => 'Name was here' ,
		'rules' => 'required',
	),
	array(
		'field' => 'inp_pass' ,
		'label' => 'Password must be provided ' ,
		'rules' => 'required',
	),

	)
			);


		$this->form_validation->set_error_delimiters("<div class='abc' >" , '</div>');

		if(!$this->form_validation->run()){
		$this->load->view('fazool_view');
			}
			else{

				$this->load->model('fazool_model');

				$fm= new Fazool_model();

				$fm->name= $this->input->post('inp_name');
				$fm->pass= $this->input->post('inp_pass');

				echo "name is " . $fm->name  . "<br>";
				echo "pass is " . $fm->pass . "<br>";

				$fm->insert();

				echo "inserted to database ";
				//$this->load->view('test');
				
			}
	}



	public function farhan(){


		echo "New fuction";
	}
}



?>