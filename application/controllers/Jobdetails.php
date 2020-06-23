<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobdetails extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('inc/header');	
		$this->load->view('Jobdetails');
		$this->load->view('inc/footer');
		
	}
}
