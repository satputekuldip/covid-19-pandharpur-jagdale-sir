<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_quarantine extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
		$this->load->view('Home_quarantine');
        $this->load->view('footer');
	}
}
