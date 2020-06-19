<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilecandidate extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('inc/header');	
		$this->load->view('Profilecandidate');
		$this->load->view('inc/footer');
		
	}
}
