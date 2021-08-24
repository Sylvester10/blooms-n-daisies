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



class Applicants extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('applicant_model');
	}



	public function index() {
		$inner_page_title = 'All Applicants (' . $this->applicant_model->count_applicants() . ')'; 
		$this->admin_header('All Applicants', $inner_page_title);
		$applicants = $this->applicant_model->get_all_applicants();
		$data['applicants'] = $applicants;
		$this->load->view('admin/applicants/all_applicants', $data);
        $this->admin_footer();
	}

	
	public function view_applicant($id) {
		//check staff exists
		$this->check_data_exists($id, 'id', 'applicants', 'applicants/view_applicant');
		$applicant = $this->applicant_model->get_applicant_details($id);
		$page_title = 'Application Form: '  . $applicant->fullname;
		$this->admin_header($page_title, $page_title);
		$applicant = $this->applicant_model->get_applicant_details($id);
		$data['y'] = $applicant;
		$this->load->view('admin/applicants/view_applicant', $data);
        $this->admin_footer();
	}			
	
	
	public function delete_applicant($id) { 
		$this->applicant_model->delete_applicant($id);
		$this->session->set_flashdata('status_msg', 'Applicant deleted successfully.');
		redirect($this->agent->referrer());
	}





}
