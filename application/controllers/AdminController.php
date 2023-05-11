<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function index()
	{
		$data['events'] = $this->common_model->get_events();

		$this->load->view('admin/dashboard', $data);
	}
	
	function add_events(){

		$image = $_FILES['image']['name'];
		

		$file_directory = "uploads/events/";
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
		if($image != ""){
			move_uploaded_file($_FILES["image"]["tmp_name"], $file_directory . $image);
		}
	
		$current_date = date('Y-m-d'); // generates a string representing the current date in the format YYYY-MM-DD

		$data = array('Name' => $this->input->post('name'),
		'Description' => $this->input->post('description'),
			'Image' => $file_directory . $image,
				'Date'=> $current_date);

	

		$this->common_model->add_events_model($data);
		redirect('admincontroller/load_add_events');

	}

	function add_slider(){

	}

	function load_add_events(){

		$this->load->view("admin/pages/addevents");
	}

	
}
