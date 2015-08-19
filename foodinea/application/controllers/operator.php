<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {


	function __construct(){
		parent::__construct();

	}
	
	public function index()
	{
		
		$this->load->view('plantillas/header');
	
		$this->load->view('plantillas/footer');
	}
}
