<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prints extends CI_Controller {

	function cash_req()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		$this->load->view('prints/head');
		$this->load->view('prints/cash_req', $url_info);
		// $this->load->view('must/footer');

    }

	function catering()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		$this->load->view('prints/head');
		$this->load->view('prints/catering', $url_info);
		// $this->load->view('must/footer');

    }

	function function_room()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		$this->load->view('prints/head');
		$this->load->view('prints/function_room', $url_info);
		// $this->load->view('must/footer');

    }

	function incampus()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		$this->load->view('prints/head');
		$this->load->view('prints/incampus', $url_info);
		// $this->load->view('must/footer');

    }

	function travel_permit()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		$this->load->view('prints/head');
		$this->load->view('prints/travel_permit', $url_info);
		// $this->load->view('must/footer');

    }

	function trip_ticket()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		$this->load->view('prints/head');
		$this->load->view('prints/trip_ticket', $url_info);
		// $this->load->view('must/footer');

    }

	function student_list()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		// $this->load->view('prints/head');
		$this->load->view('prints/student_list', $url_info);
		// $this->load->view('must/footer');

    }

	function quorum()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		// $this->load->view('prints/head');
		$this->load->view('prints/quorum', $url_info);
		// $this->load->view('must/footer');

    }

	function responses()
	{
		$url_info['url_id']=$this->uri->segment(3);
		$this->load->view('must/perfect_function');
		// $this->load->view('must/header');
		// $this->load->view('prints/head');
		$this->load->view('prints/responses', $url_info);
		// $this->load->view('must/footer');

    }

	

}
