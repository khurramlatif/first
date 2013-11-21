<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login_Controller extends CI_Controller{


	public function index(){




		$this->load->Library('form_validation');
		$this->load->library('session');



		$this->form_validation->set_rules(
array( array(
		'field' => 'email' ,
		'label' => 'First Name must be provided' ,
		'rules' => 'required',
	),
	array(
		'field' => 'password' ,
		'label' => 'last name must be provided ' ,
		'rules' => 'required',
	),


	)
			);





//  loading of page starts from here above is just prepration for validation

				if(!$this->form_validation->run()){

					$this->load->view('login');         
			}
			else{

				$this->load->model('linked_signin');

				$fm= new Linked_Signin();

				$fm->email= $this->input->post('email');
				$fm->password= $this->input->post('password');
				



				if($fm->validate()){


					//echo "Signed in successfully ";

					redirect('l_home_controller');




				}

				else{

					echo "There are sign In errors";
				}

				//$this->load->view('signup1');
				//$this->load->view('test');

				 //redirect('signup1_controller');
				
			}



			

	}   // function index ends here //



}