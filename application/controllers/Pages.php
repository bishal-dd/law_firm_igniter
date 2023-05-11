<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		

	
		$this->load->view('pages/index');
	}
	
	function login(){

		   $this->load->view('pages/login');
      
    }
	function about(){

		$this->load->view('pages/about');
   
    }

 	function event(){
		$data['events'] = $this->common_model->get_events();

		$this->load->view('pages/events', $data);
	}
}
