<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Fazool_model extends CI_Model{



function __construct(){
		parent::__construct();
	}

public $name;
public $pass;
public $table="users";




public function insert(){

	$this->load->database();

	$data = array('fname'=>$this->name, 'lname'=>'don' , 'username'=>$this->name , 'password' => $this->pass);

$this->db->insert($this->table, $data);

echo " inserted successfully ";

}


}