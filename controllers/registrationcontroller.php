<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegistrationController extends CI_Controller {

	/**
	 *function to load view of registration
	 *@param void
	 *@return null
	 */
	public function registrationMessage()
	{
		$this->load->view('registration');
	}

	/**
	 *function to insert values into database
	 *@param void
	 *@return null
	 */
	public function insertValues()
	{
		$datas= array(
			'username' => $this->input->post('fullname'),
			'password' => password_hash($this->input->post('login_password'), PASSWORD_BCRYPT)
			);
		$this->load->model('registrationmodel');
		if($this->registrationmodel->getRegistration($datas))
		{
			echo "Values inserted";
		}
		else
		{
			$this->load->view('registration');
		}
	}
}
?>