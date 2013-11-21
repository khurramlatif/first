<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Profile_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	


public $email;
public $country;
public $postal_code;
public $status;

public $table="profile";



public function insert(){

	$this->load->database();

$data = array('email'=>$this->email, 'country'=>$this->country , 'postal_code'=>$this->postal_code , 'status' => $this->status);

$this->db->insert($this->table, $data);

echo " inserted successfully ";

} 









}