<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Templates/header');
		$this->load->view('about');
		$this->load->view('count');
		$this->load->view('services');
		$this->load->view('team');

		$this->load->view('faq');
		$this->load->view('contact');

		$this->load->view('Templates/footer');
	}
}