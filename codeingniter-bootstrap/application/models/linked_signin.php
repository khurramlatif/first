<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Linked_Signin extends CI_Model{
	function __construct(){
		parent::__construct();
	}


public $email;
public $password;
public $table="signup";



	public function validate(){




		$this->load->library('session');

		
		// grab user input
		$email_l = $this->security->xss_clean($this->email);
		$password_l = $this->security->xss_clean($this->password);
		
		// Prep the query
		$this->db->where('email', $email_l);
		$this->db->where('password', $password_l);
		
		// Run the query
		$query = $this->db->get($this->table);
		// Let's check if there are any results
		if($query->num_rows == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
					'fname' => $row->fname,
					'lname' => $row->lname,
					'email' => $row->email,
					'validated' => true
					);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}







}

?>