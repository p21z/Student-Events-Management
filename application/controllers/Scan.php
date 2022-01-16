<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scan extends CI_Controller {

	function Scanner()
	{
		$this->load->view('must/perfect_function');

		$url_info['url_id'] = $this->uri->segment(3);

		$this->load->view('scan/head');
		$this->load->view('scan/scan_view', $url_info);
		$this->load->view('must/footer');

    }

	function Scanned_student()
	{
		// $this->attendee_session_unset();
        $this->session->unset_userdata("nav_active");

        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);
		$url_info['url_id_2'] = $this->uri->segment(4);

        $this->load->view('must/header');

        $this->load->view('attendance/head', $url_info);
        $this->load->view('attendance/scanned_attendance', $url_info);
        $this->load->view('attendance/foot', $url_info);

        $this->load->view('must/footer');

    }

	// scan_add_proc
	
}