<?php
defined('BASEPATH') or exit('Direct access to script not allowed');


class Applicant_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}






 	public function get_all_applicants() {	
		return $this->db->get_where('applicants')->result();
    }
    

	public function get_applicant_details($id)	{ 
		return $this->db->get_where('applicants', array('id' => $id))->row();
	}


	public function count_applicants() { //count all jobs
		return $this->db->get_where('applicants')->num_rows();
	}
	

	public function delete_applicant($id) {
		return $this->db->delete('applicants', array('id' => $id));
    }
	
	












}