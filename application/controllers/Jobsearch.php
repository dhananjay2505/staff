<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobsearch extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('inc/header');	
		$this->load->view('job_search');
		$this->load->view('inc/footer');
		
	}
}
