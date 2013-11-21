<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: FGD
 * Description: Login model class
 */










class Status_One extends CI_Model{



function __construct(){
		parent::__construct();
	}
	

public $country;
public $fname;
public $lname;
public $title;

}










class Search_Advance_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}
	


public $keyword;
public $data;
public $table="profile";



//  required data is below 


public $first_name;
public $last_name;
public $job_title;
public $country;
public $industry_company;







//----------------------


public function SearchByCountry(){


				// this will set the value of country , fname , lname and job title , industry will also be added soon

$this->country=$this->keyword;

$this->load->database();

$this->db->where('country', $this->keyword);


		// Run the query
		$this->data = $this->db->get($this->table);

		if($this->data->num_rows == 0)
		{
			
				//	echo "no data fetched";
		}
		else{


			//echo  $this->data->num_rows ;
		}





$this->load->model('page1_model');   // this is sign up model
$this->load->model('employed_model');


$s_u = new Page1_Model();
$e_m = new Employed_Model();

$array = array();



foreach ($this->data->result() as $row)
{
    


     if($row->status==1){


     	$status_one = new Status_One();	
     	$status_one->country = $this->keyword ;

     	$s_u->email=$row->email;
     	$received_name = $s_u->Get_Name();
		foreach ($received_name->result() as $name)
			{
     
     	$status_one->fname= $name->fname;
     	$status_one->lname=	$name->lname;

   			  }


   			  $e_m->email=$row->email;

   			  $received_title=$e_m->Get_Job_Title();

   			foreach ($received_title->result() as $title)
			{

				$status_one->title=$title->job_title;

   			  }



   			  	$array[]= $status_one;

     }   // if status == 1  ends here 



    
}  // form loop ends here 




return $array;






















}






	}