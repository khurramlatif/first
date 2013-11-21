<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: FGD
 * Description: Login model class
 */
class Employed_Model extends CI_Model{


	function __construct(){
		parent::__construct();
	}
	




public $email;
public $status_text;
public $share_with;

public $table="posted_status";





public function insert(){

	$this->load->database();

$data = array('email'=>$this->email, 'status_text'=>$this->status_text , 'share_with'=>$this->share_with );

$this->db->insert($this->table, $data);




	}












}