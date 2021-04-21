<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function index()
	{
		$this->load->view('pasien/index');
	}

}
