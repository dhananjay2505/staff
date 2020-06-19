<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/*the function for registration page show with validation*/

	public function index()
	{
	$this->load->view('inc/header');	
	$this->load->view('profile');
	$this->load->view('inc/footer');
		
	}
		
}
?>
