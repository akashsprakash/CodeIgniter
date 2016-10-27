<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegistrationModel extends CI_Model {

    /**
     *function to load model from user table
     *@param void
     *@return user details
     */
    public function getRegistration($datas)
    {
        $data= $this->db->insert('registration',$datas);
        return $data;
    }
}
?>