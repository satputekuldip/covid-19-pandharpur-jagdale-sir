<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TakeHomeAttendance extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('TakeHomeAttendance');
		$this->load->view('footer');
	}

}
