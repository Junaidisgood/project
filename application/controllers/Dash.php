<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

	public function index()
	{
		$this->load->view('dash/dash_home');
	}

	public function side1()
	{
		$this->load->view('dash/inc/side');
	}

}

/* End of file Dash.php */
/* Location: ./application/controllers/Dash.php */