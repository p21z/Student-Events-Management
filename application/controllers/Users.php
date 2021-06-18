<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function index()
	{
        if ($this->session->userdata('access')!== "Dean")
        {
            redirect('/home');
        }
        $this->users_session_unset();
		$this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('users/users_manage');
        $this->load->view('must/footer');
	}

    function users_session()
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
            'statusxx' => $this->input->post('statusxx')

            
        );

        $this->session->set_userdata($user_data);
    }

    function users_session_2()
    {
        $user_data = array(
            'year_level' => $this->input->post('year_level'),
            'program' => $this->input->post('program'),
            'section' => $this->input->post('section')
        );

        $this->session->set_userdata($user_data);
    }

    function users_session_3()
    {
        $user_data = array(
            'url_id' => $this->input->post('url_id'),
            'old_pass' => $this->input->post('old_pass'),
            'new_pass_1' => $this->input->post('new_pass_1'),
            'new_pass_2' => $this->input->post('new_pass_2')

        );

        $this->session->set_userdata($user_data);
    }

    function users_session_unset()
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

        $this->session->unset_userdata("old_pass");
        $this->session->unset_userdata("new_pass_1");
        $this->session->unset_userdata("new_pass_2");
    }

    function users_add()
	{
		$this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('users/users_add');
        $this->load->view('must/footer');

        $this->form_validation->set_rules('username','Username','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->users_session();
            if ($this->session->userdata("user_type")==="Officer" or $this->session->userdata("user_type")==="Student")
            {
                redirect('/users/users_add_2');
            } else
            {
                redirect('/users/users_add_proc');
            }
            
        }
	}

    function users_add_2()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('users/users_add_2');
        $this->load->view('must/footer');

        $this->form_validation->set_rules('year_level','Year Level','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->users_session_2();
            redirect('/users/users_add_proc');
        }
    }

    function users_add_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('users/users_add_proc');
        $this->users_session_unset();
		redirect('/users');
    }

    function users_edit()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('users/users_edit', $url_info);
        $this->load->view('must/footer');
        $this->session->unset_userdata("err_msg1");

        $this->form_validation->set_rules('username','Username','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->users_session();
            if ($this->session->userdata("user_type")==="Officer" or $this->session->userdata("user_type")==="Student")
            {
                redirect('/users/users_edit_2');
            } else
            {
                redirect('/users/users_edit_proc');
            }
        }
    }

    function users_edit_2()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('users/users_edit_2');
        $this->load->view('must/footer');

        $this->form_validation->set_rules('year_level','Year Level','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->users_session_2();
            redirect('/users/users_edit_proc');
        }
    }

    function users_edit_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('users/users_edit_proc');
        $this->users_session_unset();
		redirect('/users');
    }

    function users_delete()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('users/users_delete', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->users_session();
            redirect('/users/users_delete_proc');
        }
    }
    
    function users_delete_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('users/users_delete_proc');
        $this->users_session_unset();
		redirect('/users');
    }

    function change_password()
	{
        $url_info['url_id'] = $this->uri->segment(3);
        $this->users_session_unset();
		$this->load->view('must/perfect_function');
		$this->load->view('must/header');
		$this->load->view('users/change_password', $url_info);
		$this->load->view('must/footer');

        $this->form_validation->set_rules('old_pass','Old Password','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->users_session_3();
            redirect('/users/change_password_auth');
            
        }
		
    }

    function change_password_auth()
    {
        
        $this->load->view('must/perfect_function');
        $this->load->view('users/change_password_auth');
        // $this->profile_session_unset();
		// redirect('/home');
    }

    function change_picture()
    {
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
		$this->load->view('must/header');
		$this->load->view('users/change_picture', $url_info);
		$this->load->view('must/footer');
    }

    function change_profile_proc()
    {
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
		$this->load->view('must/header');
		$this->load->view('users/change_profile_proc', $url_info);
		$this->load->view('must/footer');
        // redirect('/profile') ;   
    }
}
