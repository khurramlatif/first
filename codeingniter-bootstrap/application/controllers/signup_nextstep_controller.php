<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Signup_Nextstep_Controller extends CI_Controller{




public function Process(){


$this->load->model('profile_model');
$this->load->helper('url');

/*

$this->load->Library('form_validation');

if(!$this->form_validation->run()){

					$this->load->view('sign_up_nextstep');
			}
*/

echo "reached safely" ."<br>";

				$country = $this->input->post('countryCode');

				$postal_code = $this->input->post('postalCode');

				

				

				
				if($this->input->post('status-chooser')==1){


					echo  " 1 is choosed <br>" ;

					if($country=='pk'){

						$country = "Pakistan";
					}

					$this->load->model('employed_model');
					$this->load->model('employed_unemploy_model');

					$newProfile = new Profile_Model();
					$newEmployed= new Employed_Model();
					$newUnEmployed= new Employed_Unemploy_Model();


					$status=1;
					$job_title = $this->input->post('job-title-1');

					$self_employ = $this->input->post('selfEmployed');

					if($self_employ==true){

						$self_employ=1;
					}else
					{
						$self_employ=0;
					}


					$company = $this->input->post('company-name-1');



					$newProfile->email= $this->session->userdata('email');
					$newProfile->country= $country;
					$newProfile->postal_code= $postal_code;
					$newProfile->status= $status;

					

					$newEmployed->email= $this->session->userdata('email');
					$newEmployed->job_title=$job_title;
					$newEmployed->self_employ=$self_employ;
					$newEmployed->status= $status;



					$newUnEmployed->email= $this->session->userdata('email');
					$newUnEmployed->self_employ=$self_employ;
					$newUnEmployed->company=$company;




					$newProfile->insert();
					$newEmployed->insert();
					$newUnEmployed->insert();


					echo 'all data inserted successfully';




					

						redirect('signup_steptwo_controller');





				}


				if($this->input->post('status-chooser')==2){


					echo  " 2 is choosed" . "<br>";


					echo $this->input->post('workCompanyTitle') ."<br>";

					echo $this->input->post('selfEmployed') ."<br>";

					echo $this->input->post('companyName') ."<br>";

					echo $this->input->post('start-year') ."<br>";

					echo $this->input->post('end-year') ."<br>";



				}

				if($this->input->post('status-chooser')==3){


					echo  " 3 is choosed <br>";

					echo $this->input->post('schoolText') ."<br>";

					echo $this->input->post('start-date-3') ."<br>";

					echo $this->input->post('end-date-3') ."<br>";


				}




}




	public function index(){


	$this->load->Library('form_validation');





echo $this->session->userdata('session_id') . "<br>";

echo $this->session->userdata('fname') . "<br>";

echo $this->session->userdata('email') . "<br>";

if(!$this->form_validation->run()){

					$this->load->view('sign_up_nextstep');
			}
			else{



					http_redirect('google.com');




			}



			



	}



}