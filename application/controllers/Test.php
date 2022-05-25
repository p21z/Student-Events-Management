<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function index()
	{
		helper(['form']);

		$rules= [
			'TheFile' => 'uploaded[theFile]'
		];

		if ($this->validate($rules))	{
			// ss
		} else {
			$data['validation'] = $this->validator;
		}

		$this->load->view('must/perfect_function');
		$this->load->view('must/header');
		$this->load->view('test5');
		$this->load->view('must/footer');
		

    }

	function get_data_test()
	{
		$idx['notif_id']=$this->uri->segment(3);
		return $idx;
	}
	
	function test_add()
	{
		$this->load->view('must/perfect_function');
		$this->load->view('must/header');
		$uri_info = $this->get_data_test();
		$this->load->view('test2', $uri_info);
		$this->load->view('must/footer');

    }

	// function test_add_proc()
	// {
	// 	$this->load->view('must/perfect_function');
	// 	$this->load->view('must/header');
	// 	$this->load->view('test3');
	// 	$this->load->view('must/footer');
	// }

	function test5()
    {
        // $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
		$this->load->view('must/header');
		$this->load->view('test5');
		$this->load->view('must/footer');
    }

    function test6()
    {
        // $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
		$this->load->view('must/header');
		$this->load->view('test6');
		$this->load->view('must/footer');
        // redirect('/profile') ;   
    }

}
