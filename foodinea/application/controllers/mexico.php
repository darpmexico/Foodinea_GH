<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mexico extends CI_Controller {


	function __construct(){
		parent::__construct();

	}
	
	public function index()
	{
		
		$this->load->view('plantillas/header');
		$this->load->view('pais/mexico');
		$this->load->view('plantillas/footer');
	}
}
