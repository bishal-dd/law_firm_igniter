<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function index()
	{

		$this->load->view('admin/dashboard');
	}
	
	function add_events(){

		$data = array('Name' => $this->input->post('name'),
						'Description' => $this->input->post('description'));

		$this->events_model->add_events_model($data);

	}

	function load_add_events(){

		$this->load->view("admin/pages/addevents");
	}
}
