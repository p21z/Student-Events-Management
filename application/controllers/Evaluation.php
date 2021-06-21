<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation extends CI_Controller {

	function eval_session()
	{
		$eval_data = array(
            'url_id' => $this->input->post('url_id'),
            'url_id_2' => $this->input->post('url_id_2'),
			'event_id' => $this->input->post('event_id'),
			'user_id' => $this->input->post('user_id'),
            'title' => $this->input->post('title'),
            'datexx' => $this->input->post('datexx'),
            'venue' => $this->input->post('venue'),
            'ans1' => $this->input->post('ans1'),
            'ans2' => $this->input->post('ans2'),
            'ans3' => $this->input->post('ans3'),
            'ans4' => $this->input->post('ans4'),
            'ans5' => $this->input->post('ans5'),
            'ans6' => $this->input->post('ans6'),
            'ans7' => $this->input->post('ans7'),
            'ans8' => $this->input->post('ans8')
        );

        $this->session->set_userdata($eval_data);
	}

	function eval_session_unset()
	{
		$this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("event_id");
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata("title");
		$this->session->unset_userdata("datexx");
		$this->session->unset_userdata("venue");
		$this->session->unset_userdata("ans1");
		$this->session->unset_userdata("ans2");
		$this->session->unset_userdata("ans3");
		$this->session->unset_userdata("ans4");
		$this->session->unset_userdata("ans5");
		$this->session->unset_userdata("ans6");
		$this->session->unset_userdata("ans7");
		$this->session->unset_userdata("ans8");
	}

	function view_evaluation()
	{
		$this->eval_session_unset();
		$this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);

		
		
		$this->load->view('must/header');
		$this->load->view('evaluation/view_evaluation', $url_info);
		$this->load->view('must/footer');
    }

	function add_evaluation()
	{
		
		$this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);

		
		
		$this->load->view('must/header');
		$this->load->view('evaluation/add_evaluation', $url_info);
		$this->load->view('must/footer');

		$this->form_validation->set_rules('ans1', 'ans1', 'required');
        if ($this->form_validation->run() == TRUE)
        {
			
			$this->eval_session();
            redirect('/evaluation/add_evaluation_proc');
        }
    }

	function add_evaluation_proc()
	{
		
		print_r($_SESSION);
		$this->load->view('must/perfect_function');
		$this->load->view('evaluation/add_evaluation_proc');
		// $this->events_session_unset();
		// redirect('/organizations_view/pending_events/'.$this->session->userdata("org_id"));
	}

}
