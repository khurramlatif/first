
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: FGD
 * Description: Login model class
 */
class Employed_Unemploy_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	



public $email;
public $self_employ;
public $company;

public $table="emp_not_employ";



public function insert(){

	$this->load->database();

$data = array('email'=>$this->email, 'self_employ'=>$this->self_employ , 'company'=>$this->company );

$this->db->insert($this->table, $data);




	}






}