<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');






class Search_Advance_Controller extends CI_Controller{




	public function index(){



		if($this->session->userdata('validated')==true){

		$this->load->view('search_advance');

}

else{



	echo "<h1> Sorry the page not found </h1>";
}



}



public function process_form(){


	//echo "working";


$this->load->model('search_advance_model');


$s_m= new Search_Advance_Model();

$s_m->keyword=$this->input->post('countryCode');



if($s_m->keyword=='pk'){

	$s_m->keyword="Pakistan";
}



 $array = $s_m->SearchByCountry();



// echo "-----------------------------------";
// print_r($array);
// $s_o = $array[0];
// echo $s_o->title;



$data_part13['header3_item'][] = $array;

$this->load->view('search_advance' , $data_part13);


}























}


?>