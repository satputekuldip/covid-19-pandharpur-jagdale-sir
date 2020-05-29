<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute_quarantine extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
		$this->load->view('Institute_quarantine');
        $this->load->view('footer');
	}
}
