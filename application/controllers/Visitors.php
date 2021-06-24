<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitors extends CI_Controller {

	function all()
	{
        $this->visitors_session_unset();

        $this->session->set_userdata('nav_active', 'All');

		$this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);

		$this->load->view('must/header');
		$this->load->view('visitors/head', $url_info);
        $this->load->view('visitors/all', $url_info);
        $this->load->view('visitors/foot', $url_info);
		$this->load->view('must/footer');

    }

    function present()
	{
        $this->visitors_session_unset();

        $this->session->set_userdata('nav_active', 'Present');

		$this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);

		$this->load->view('must/header');
		$this->load->view('visitors/head', $url_info);
        $this->load->view('visitors/present', $url_info);
        $this->load->view('visitors/foot', $url_info);
		$this->load->view('must/footer');

    }

    function late()
	{
        $this->visitors_session_unset();

        $this->session->set_userdata('nav_active', 'Late');

		$this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);

		$this->load->view('must/header');
		$this->load->view('visitors/head', $url_info);
        $this->load->view('visitors/late', $url_info);
        $this->load->view('visitors/foot', $url_info);
		$this->load->view('must/footer');

    }

    function absent()
	{
        $this->visitors_session_unset();

        $this->session->set_userdata('nav_active', 'Absent');

		$this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);

		$this->load->view('must/header');
		$this->load->view('visitors/head', $url_info);
        $this->load->view('visitors/absent', $url_info);
        $this->load->view('visitors/foot', $url_info);
		$this->load->view('must/footer');

    }

    

    function visitors_session()
    {
        $user_data = array(
            

            'url_id' => $this->input->post('url_id'),
            'url_id_2' => $this->input->post('url_id_2'),
            'event_id' => $this->input->post('event_id'),
            'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'contact' => $this->input->post('contact'),
			'email' => $this->input->post('email'),
            'company' => $this->input->post('company'),
            'statusxx' => $this->input->post('statusxx')

        );

        $this->session->set_userdata($user_data);
    }

    function visitors_session_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("event_id");
        $this->session->unset_userdata("firstname");
        $this->session->unset_userdata("lastname");
        $this->session->unset_userdata("contact");
        $this->session->unset_userdata("email");       
        $this->session->unset_userdata("company");
        $this->session->unset_userdata("statusxx");

    }

    function visitors_add()
	{
		$this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);

		$this->load->view('must/header');
		$this->load->view('visitors/visitors_add', $url_info);
		$this->load->view('must/footer');

        $this->form_validation->set_rules('firstname','first name','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->visitors_session();
            redirect('/visitors/visitors_add_proc');
        }

    }

    function visitors_add_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('visitors/visitors_add_proc');
		redirect('/visitors/all/'.$this->session->userdata("event_id"));
    }

    function visitors_edit()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('visitors/visitors_edit', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('firstname','first name','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->visitors_session();
            redirect('/visitors/visitors_edit_proc');
        }
    }

    function visitors_edit_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('visitors/visitors_edit_proc');
		redirect('/visitors/all/'.$this->session->userdata("event_id"));
    }

    function visitors_status()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('visitors/visitors_status', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('statusxx','statusxx','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->visitors_session();
            redirect('/visitors/visitors_status_proc');
        }
    }

    function visitors_status_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('visitors/visitors_status_proc');
		redirect('/visitors/all/'.$this->session->userdata("event_id"));
    }

    function visitors_delete()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('visitors/visitors_delete', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->visitors_session();
            redirect('/visitors/visitors_delete_proc');
        }
    }

    function visitors_delete_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('visitors/visitors_delete_proc');
		redirect('/visitors/all/'.$this->session->userdata("url_id_2"));
    }

    

}