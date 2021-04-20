<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function index()
	{
        $this->load->view('must/perfect_function');
		$this->load->view('login/login');

	}

    function get_data_login()
	{
        $data['username'] = $this->input->post('username', TRUE);
        $data['password'] = $this->input->post('password', TRUE);
        // $data['url_1'] = $this->uri->segment(3);
        // $data['url_2'] = $this->uri->segment(4);
        return $data;

	}

    function login_proc()
    {
        $this->load->view('must/perfect_function');
        $user_info = $this->get_data_login();
        // $this->load->view('login/display', $user_info);
        $this->load->view('login/login_proc', $user_info);
    }

    function entrance_question()
    {
        $this->load->view('login/question');
    }

    function get_data_human_or_not()
    {
        $data['var1'] = $this->input->post('var1', TRUE);
        $data['var2'] = $this->input->post('var2', TRUE);
        $data['opera'] = $this->input->post('opera', TRUE);
        $data['checker'] = $this->input->post('checker', TRUE);
        $data['answer'] = $this->input->post('answer', TRUE);
        return $data;
    }

    function human_or_not()
    {
        $user_info = $this->get_data_human_or_not();
        $this->load->view('login/answer', $user_info);
    }

    
}
