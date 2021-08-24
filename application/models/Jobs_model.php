<?php
defined('BASEPATH') or exit('Direct access to script not allowed');


class Jobs_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}






 	public function get_all_jobs() {	
		return $this->db->get_where('jobs')->result();
    }
    

	public function get_job_details($id)	{ 
		return $this->db->get_where('jobs', array('id' => $id))->row();
	}


	public function count_jobs() { //count all jobs
		return $this->db->get_where('jobs')->num_rows();
	}
	

	public function insert_job_to_db() { 
		$company_name = ucwords($this->input->post('company_name', TRUE)); 
		$job_title = ucwords($this->input->post('job_title', TRUE)); 
		$slug = get_slug($job_title);
		$work_type = $this->input->post('work_type', TRUE);
		$industry = $this->input->post('industry', TRUE); 
		$location = $this->input->post('location', TRUE);
		$phone = $this->input->post('phone', TRUE); 
		$email = strtolower($this->input->post('email', TRUE)); 
		$job_description = ucfirst($this->input->post('job_description', TRUE));
		$job_requirement = ucfirst($this->input->post('job_requirement', TRUE)); 
		$educational_requirement = ucfirst($this->input->post('educational_requirement', TRUE));
		$experience = $this->input->post('experience', TRUE);
		$salary = $this->input->post('salary', TRUE);
		$sex = $this->input->post('sex', TRUE); 
		$qualification = $this->input->post('qualification', TRUE);
		$data = array (
			'company_name' => $company_name,
			'job_title' => $job_title,
			'slug' => $slug,
			'work_type' => $work_type,
			'industry' => $industry,
			'location' => $location,
			'phone' => $phone,
			'email' => $email,
			'job_description' => $job_description,
			'job_requirement' => $job_requirement,
			'educational_requirement' => $educational_requirement,
			'experience' => $experience,
			'salary' => $salary,
			'sex' => $sex,
			'qualification' => $qualification,
		);
		$this->db->insert('jobs', $data);
	}
	
	
    public function get_jobs($limit, $offset) {		
		$this->db->limit($limit, $offset); //limit to be used as per_page, offset to be used as pagination segment
		$this->db->order_by("date_added", "DESC"); //order by date DESC i.e. latest Jobs first
		$query = $this->db->get_where('jobs');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
            return false;
    }




	public function get_recent_jobs($limit) { //recent Jobs
		$this->db->order_by('date_added', 'DESC');
		$this->db->limit($limit); 
		return $this->db->get_where('jobs')->result();
	}



	public function search($key) {
		$this->db->like('job_title', $key);
		$industry = $this->input->post('industry');
		$location = $this->input->post('location');
		if (strlen($industry)) {
			$this->db->where('industry', $industry);
		}
		if (strlen($location)) {
			$this->db->where('location', $location);
		}
		$query = $this->db->get('jobs');
		return $query->result();
	}











}