<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Logout_Controller extends CI_Controller{


	public function index(){



		$this->session->sess_destroy();

		$this->load->view('logout_page');


		



	}



}




