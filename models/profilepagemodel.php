<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProfilepageModel extends CI_Model {

    /**
     *function to check whether email exists. 
     *@param 1, email from updateValues()
     *@return 1, boolean flag on email found
     */
    public function checkIfEmailExists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('userprofile');
        $email= $query->num_rows();
        if (empty($email)) {
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    /**
     *function to insert new profile. 
     *@param 1, credentilas from updateValues()
     *@return 1, boolean flag on insertion performed.
     */
    public function insertProfile($credentials)
    {
        $query= $this->db->insert('userprofile',$credentials);
        return $query;
    }


    /**
     *function to update table 
     *@param 1, user details from updateValues()
     *@return 1, update boolean flag
     */
    public function updateProfile($credentials)
    {
        $this->db->where('email', $credentials["email"]);
        $result= $this->db->update('userprofile',$credentials);
        return $result;
    }
}
?>