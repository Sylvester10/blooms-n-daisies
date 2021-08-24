<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/* ===== Documentation ===== 
Name: Home
Role: Controller
Description: Controls access to testimonial pages and functions in super admin panel
Model: Testimonial_model
Author: Sylvester Esso Nmakwe
Date Created: 6th February, 2020
*/



class Form extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('form_model');
	}


	public function index()
	{	
		$this->web_header('Admission Form');
		$this->load->view('form');
		$this->footer();
	}


	/* ===== Contact Us ===== */
	public function form_ajax() { 
		$this->form_validation->set_rules('surname', 'Surname', 'trim|required');
		$this->form_validation->set_rules('first_name', 'First name', 'trim|required');
		$this->form_validation->set_rules('other_name', 'Other name', 'trim|required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
		$this->form_validation->set_rules('pob', 'Place of Birth', 'trim|required');
		$this->form_validation->set_rules('age', 'Age', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('state', 'State of Origin', 'trim|required');
		$this->form_validation->set_rules('country', 'Nationality', 'trim|required');
		$this->form_validation->set_rules('class', 'Class', 'trim|required');
		$this->form_validation->set_rules('parents_name', 'Parents Name', 'trim|required');
		$this->form_validation->set_rules('phone_number', 'Phone number', 'trim|is_natural|required');
		$this->form_validation->set_rules('other_number', 'Alternative number', 'trim|is_natural|required');
		$this->form_validation->set_rules('address', 'Address', 'trim');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
		$this->form_validation->set_rules('c_name', 'Contact Name', 'trim|required');
		$this->form_validation->set_rules('c_number', 'Contact  number', 'trim|is_natural|required');
		$this->form_validation->set_rules('aut_name', 'Authorised Name', 'trim|required');
		$this->form_validation->set_rules('aut_number', 'Authorised Number', 'trim|is_natural|required');
		$this->form_validation->set_rules('aut_address', 'Authorised Address', 'trim|required');
		$this->form_validation->set_rules('aut_name2', 'Authorised Name', 'trim|required');
		$this->form_validation->set_rules('aut_number2', 'Authorised Number', 'trim|is_natural|required');
		$this->form_validation->set_rules('aut_address2', 'Authorised Address', 'trim|required');
		$this->form_validation->set_rules('health', 'Health', 'trim');

		if ($this->form_validation->run())  {	
			$this->form_model->admission_form(); //insert the data into db
			echo 1;
		} else { 
			echo validation_errors();
		}
	}


	public function all_forms() {
		$inner_page_title = 'All Forms (' . $this->form_model->count_form() . ')'; 
		$this->admin_header('All Forms', $inner_page_title);
		$all_forms = $this->form_model->get_form_details();
		$data['all_forms'] = $all_forms;
		$this->load->view('admin/admission/all_forms', $data);
        $this->admin_footer();
	}
	

	public function edit_form($id) { 
		$forms = $this->form_model->get_form_by_id($id);
		$inner_page_title = 'Edit Form: ' . $forms->surname . ' ' . $forms->first_name;
		$this->admin_header('Edit Form', $inner_page_title);
		$y = $this->form_model->get_form_by_id($id);
		$data['y'] = $y;
		$this->load->view('admin/admission/edit_form', $data);
        $this->admin_footer();
	}


	public function edit_form_ajax($id) { 
		$this->form_validation->set_rules('surname', 'Surname', 'trim|required');
		$this->form_validation->set_rules('first_name', 'First name', 'trim|required');
		$this->form_validation->set_rules('other_name', 'Other name', 'trim|required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
		$this->form_validation->set_rules('pob', 'Place of Birth', 'trim|required');
		$this->form_validation->set_rules('age', 'Age', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('state', 'State of Origin', 'trim|required');
		$this->form_validation->set_rules('country', 'Nationality', 'trim|required');
		$this->form_validation->set_rules('class', 'Class', 'trim|required');
		$this->form_validation->set_rules('parents_name', 'Parents Name', 'trim|required');
		$this->form_validation->set_rules('phone_number', 'Phone number', 'trim|is_natural|required');
		$this->form_validation->set_rules('other_number', 'Alternative number', 'trim|is_natural|required');
		$this->form_validation->set_rules('address', 'Address', 'trim');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
		$this->form_validation->set_rules('c_name', 'Contact Name', 'trim|required');
		$this->form_validation->set_rules('c_number', 'Contact  number', 'trim|is_natural|required');
		$this->form_validation->set_rules('aut_name', 'Authorised Name', 'trim|required');
		$this->form_validation->set_rules('aut_number', 'Authorised Number', 'trim|is_natural|required');
		$this->form_validation->set_rules('aut_address', 'Authorised Address', 'trim|required');
		$this->form_validation->set_rules('aut_name2', 'Authorised Name', 'trim|required');
		$this->form_validation->set_rules('aut_number2', 'Authorised Number', 'trim|is_natural|required');
		$this->form_validation->set_rules('aut_address2', 'Authorised Address', 'trim|required');
		$this->form_validation->set_rules('health', 'Health', 'trim');



		if ($this->form_validation->run())  {	
			
			$this->form_model->edit_form($id); //insert the data into db
			$this->session->set_flashdata('status_msg', "Form updated successfully.");
			redirect('form/edit_form/'.$id);
			
		} else { 
			echo validation_errors();
		}
	}
	
	public function admission_form($id) {
		//check staff exists
		$this->check_data_exists($id, 'id', 'admission', 'form/admission_form');
		$forms = $this->form_model->get_form_by_id($id);
		$page_title = 'Admission Form: '  . $forms->surname . ' ' . $forms->first_name;
		$this->admin_header($page_title, $page_title);
		$data['y'] = $forms;
		$this->load->view('admin/admission/view_form', $data);
        $this->admin_footer();
	}			
	
	
	public function delete_form($id) { 
		$this->form_model->delete_form($id);
		$this->session->set_flashdata('status_msg', 'form deleted successfully.');
		redirect($this->agent->referrer());
	}





}
