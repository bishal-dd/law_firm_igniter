<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$result = $this->slider_model->get_slider();

	
		$this->load->view('pages/index');
	}
	
	function login(){

		   $this->load->view('pages/login');
      
    }
	function about(){

		$this->load->view('pages/about');
   
 }
}
