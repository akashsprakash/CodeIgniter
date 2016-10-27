<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HelloController extends CI_Controller {

	/**
	 *function to load view of hello.php
	 *@param void
	 *@return null
	 */
	public function helloWorld()
	{
		$this->load->view('hello');
	}
}
?>