<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['slider'] = $this->Common_model->get_slider_image();

	
		$this->load->view('pages/index', $data);
	}
	
	function login(){

		   $this->load->view('pages/login');
      
    }
	function about(){

		$this->load->view('pages/about');
   
    }

 	function event(){
		$data['events'] = $this->Common_model->get_events();

		$this->load->view('pages/events', $data);
	}
}
