<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Page1_Model extends CI_Model{



function __construct(){
		parent::__construct();
	}

public $first_name;
public $last_name;
public $email;
public $password;


public $table="signup";




public function insert(){

	$this->load->database();

	$data = array('fname'=>$this->first_name, 'lname'=>$this->last_name , 'email'=>$this->email , 'password' => $this->password);

$this->db->insert($this->table, $data);

echo " inserted successfully ";

} 







public function Get_Name(){



	$this->db->select('fname, lname');
	$this->db->where('email', $this->email);
	$query = $this->db->get($this->table);



	return $query;

}














}