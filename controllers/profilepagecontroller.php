<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class ProfilepageController extends CI_Controller
    {

        /**
         *function to load profile page view
         *@param void
         *@return null
         */
        public function profilepageDisplay()
        {
            $this->load->view('profilepage');
        }
        /**
        *function to load model
        *@param void
        *@return null
        */
        public function updateValues()
        {
            // Ensuring post request.
            if ($this->input->post()) {
                $credentials= array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'phonenumber' => $this->input->post('phone_number'),
                    );
                
                $this->load->model('profilepagemodel');
                // Flag to check whether email exist.
                $emailExistFlag= $this->profilepagemodel->checkIfEmailExists($credentials['email']);
                // if email doesn,t exits, insertion performed
                if(empty($emailExistFlag)){
                    if($this->profilepagemodel->insertProfile($credentials)){
                        echo "New profile added.";
                        $this->load->view('profilepage');
                    }
                    else{
                        $this->load->view('profilepage');
                    }
                }
                // Else profile updated
                else{
                    if($this->profilepagemodel->updateProfile($credentials)){
                        echo "Values updated.";
                        $this->load->view('profilepage');
                    }
                    else{
                        $this->load->view('profilepage');
                    }
                }
            }
            // If not a post request, view is loaded.
            else{
                $this->load->view('profilepage');
            }
        }
    }
?>