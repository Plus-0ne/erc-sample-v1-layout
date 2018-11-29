<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	public function index()
	{
		$this->load->view('elevate-guest/main-page.php');
	}
        public function main()
	{
		$this->load->view('elevate-guest/main-page.php');
	}
}
	