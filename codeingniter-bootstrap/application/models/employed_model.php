<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: FGD
 * Description: Login model class
 */
class Employed_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	


public $email;
public $status;
public $job_title;
public $self_employ;

public $table="employed";



public function insert(){

	$this->load->database();

$data = array('email'=>$this->email, 'status'=>$this->status , 'job_title'=>$this->job_title , 'self_employ' => $this->self_employ);

$this->db->insert($this->table, $data);




	}





	public function Get_Job_Title(){



	$this->db->select('job_title');
	$this->db->where('email', $this->email);
	$query = $this->db->get($this->table);



	return $query;

}






}