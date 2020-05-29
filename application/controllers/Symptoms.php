<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Symptoms extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('Symptoms');
		$this->load->view('footer');
	}
}
