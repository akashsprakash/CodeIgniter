<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Greeting extends CI_Model {

	/**
	 *function to load model from user table
	 *@param void
	 *@return user details
	 */
	public function getMessage()
	{
		
		$data= $this->db->get('users');
		// returns objects from table users of database
		return $data->result();
		// result() converts the passed object to array and array of resluts is returned
	}
}
?>