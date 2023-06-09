<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	
	public function index()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}
		
	

		$data['events'] = $this->Common_model->get_events();

		$this->load->view('admin/dashboard', $data);
	}
	
	function add_events(){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

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

	

		$this->Common_model->add_events_model($data);
		redirect('AdminController/load_add_events');

	}

	function add_slider(){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$image = $_FILES['image']['name'];
		

		$file_directory = "uploads/slider/";
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
		if($image != ""){
			move_uploaded_file($_FILES["image"]["tmp_name"], $file_directory . $image);
		}

		$current_date = date('Y-m-d');
		$data = array(
			'Image' => $file_directory . $image,
				'Date'=> $current_date);

		$this->Common_model->add_silder_image($data);
		redirect('AdminController/load_add_events');

	}

	function add_admin(){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$current_date = date('Y-m-d'); // generates a string representing the current date in the format YYYY-MM-DD

		$data = array('Name' => $this->input->post('name'),
		'Email' => $this->input->post('email'),
		'Phone' => $this->input->post('phone'),
		'Password' => hash('sha256', 'Admin@1234')
			);

	

		$this->Common_model->add_admin_model($data);
		redirect('AdminController/load_add_admin');

	}

	function delete_event($id){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$event = $this->Common_model->edit_page_event($id);
		$image_path = $event->Image;
	

		echo $image_path;

		// Delete the image files from the /uploads/events folder
		
		    $path = $image_path;
			unlink($path);

		$this->Common_model->delete_event($id);
		redirect('AdminController/index');
		
		
	}

	function delete_slider($id){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$this->Common_model->delete_slider($id);
		redirect("AdminController/load_silder_images");
	}

	function delete_user($id){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

	
	

		$this->Common_model->delete_user($id);
		redirect("AdminController/load_add_admin");
	}

	function edit_page_event($id){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$row = $this->Common_model->edit_page_event($id);
		$this->load->view('admin/pages/editevents', ['event' => $row]);

		
	}

	function edit_events($id){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$image = $_FILES['image']['name'];
		

		$file_directory = "uploads/events/";
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }

		if($image != ""){
			move_uploaded_file($_FILES["image"]["tmp_name"], $file_directory . $image);
			$data = array('Name' => $this->input->post('name'),
		'Description' => $this->input->post('description'),
			'Image' => $file_directory . $image,
				);
		}
		else{
			$data = array('Name' => $this->input->post('name'),
		'Description' => $this->input->post('description'),
			
				);

		}

		

		$this->Common_model->edit_events($id, $data);
		redirect('AdminController/index');


	}

	function edit_admin($id){
		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		
		
			$data = array('Name' => $this->input->post('name'),
						  'Email' => $this->input->post('email'),
						   'Phone' => $this->input->post('phone')
						  );

	

		

		$this->Common_model->edit_user($id, $data);
		redirect('AdminController/load_add_admin');
	}

	

	

	function load_edit_users($id){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$result['users'] = $this->Common_model->get_edit_user($id);
		$this->load->view("admin/pages/edituser", $result);
	}



	function load_add_events(){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$this->load->view("admin/pages/addevents");
	}

	function load_add_admin(){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$result['users'] = $this->Common_model->get_admin();


		$this->load->view("admin/pages/adduser", $result);
	}

	function load_silder_images(){

		if(!$this->session->userdata('logged_in')){
			redirect('Pages/login');
		}

		$result['events'] = $this->Common_model->get_slider_image();

		$this->load->view("admin/pages/showslider", $result);
	}

}
