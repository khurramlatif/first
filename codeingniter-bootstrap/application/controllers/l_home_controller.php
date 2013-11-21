<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class L_Home_Controller extends CI_Controller{




	public function index(){



		if($this->session->userdata('validated')==true){

		$this->load->view('l_home');





}

else{



	echo "<h1> Sorry the page not found </h1>";
}



}




//----------------------- inserting status starts from here --------------//





public function process_status (){


	echo "Don was here";

	$p_satus=$this->input->post('postText');

	echo $p_satus;


	$file_name=$this->input->post('file_name');

	echo $file_name;
}




}


?>