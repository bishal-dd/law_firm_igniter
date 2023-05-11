<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function index()
	{

	
		$this->load->view('admin/dashboard');
	}
	
	function add_events(){
		$this->load->view("admin/pages/addevents");
	}

}
