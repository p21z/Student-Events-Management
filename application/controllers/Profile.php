<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function profile_session()
    {
        $user_data = array(
            'url_id' => $this->input->post('url_id'),

            'user_id' => $this->input->post('user_id'),
            'username' => $this->input->post('username'),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
            'contact_no' => $this->input->post('contact_no'),
            'user_type' => $this->input->post('user_type'),
            'gender' => $this->input->post('gender'),
            'year_level' => $this->input->post('year_level'),
            'program' => $this->input->post('program'),
            'archive' => $this->input->post('archive'),
            'statusxx' => $this->input->post('statusxx'),
            'section' => $this->input->post('section')
        );

        $this->session->set_userdata($user_data);
    }

    function profile_session_unset()
    {
        $this->session->unset_userdata("url_id");
    
        $this->session->unset_userdata("user_id");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("password");
        $this->session->unset_userdata("firstname");
        $this->session->unset_userdata("lastname");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("contact_no");
        $this->session->unset_userdata("gender");
        $this->session->unset_userdata("user_type");
        
        $this->session->unset_userdata("year_level");
        $this->session->unset_userdata("program");
        $this->session->unset_userdata("section");
    
        $this->session->unset_userdata("archive");
        $this->session->unset_userdata("statusxx");
    }

	function index()
	{
		$this->load->view('must/perfect_function');
		$this->load->view('must/header');
		$this->load->view('profile/profile_manage');
		$this->load->view('must/footer');

        $this->form_validation->set_rules('username','Username','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->profile_session();
            redirect('/profile/profile_edit_proc');
            
        }
		
    }

    function profile_edit_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('profile/profile_edit_proc');
        $this->profile_session_unset();
		redirect('/home');
    }

}
