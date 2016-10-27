<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GreetingController extends CI_Controller {

	/**
	 *function to load view of welcomepage in greetings
	 *@param void
	 *@return null
	 */
	public function greetingMessage()
	{
		$this->load->model('greeting');
		// creates a model greeting
		$user['result'] = $this->greeting->getMessage();
		// saves the return value as array
		$this->load->view('greetings/welcomepage',$user);
		// loads view from controller
	}
}
?>