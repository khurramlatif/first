<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Contr_test extends CI_Controller{


	public function index(){




		$this->load->Library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules(
array( array(
		'field' => 'first_name' ,
		'label' => 'First Name must be provided' ,
		'rules' => 'required',
	),
	array(
		'field' => 'last_name' ,
		'label' => 'last name must be provided ' ,
		'rules' => 'required',
	),
		array(
		'field' => 'email' ,
		'label' => 'email must be provided ' ,
		'rules' => 'required',
	),
		array(
		'field' => 'password' ,
		'label' => 'Password must be provided ' ,
		'rules' => 'required',
	),

	)
			);





//  loading of page starts from here above is just prepration for validation

				if(!$this->form_validation->run()){

					$this->load->view('test');
			}
			else{

				$this->load->model('page1_model');

				$fm= new Page1_Model();

				$fm->first_name= $this->input->post('first_name');
				$fm->last_name= $this->input->post('last_name');
				$fm->email= $this->input->post('email');
				$fm->password= $this->input->post('password');



				$fm->insert();

				$newdata = array(
                   'fname'  => $fm->first_name,
                   'email'     => $fm->email,
                   'statuss' => TRUE
               );

				$this->session->set_userdata($newdata);

				//$this->load->view('signup1');
				//$this->load->view('test');

				 redirect('signup_nextstep_controller');
				
			}



			

	}   // function index ends here //



}