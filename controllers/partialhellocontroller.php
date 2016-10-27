<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partialhellocontroller extends CI_Controller {

	/**
	 *function to load view of hello.php in partial directory
	 *@param void
	 *@return null
	 */
	public function partialHello()
	{
		$this->load->view('partial/hello');
	}
}
?>