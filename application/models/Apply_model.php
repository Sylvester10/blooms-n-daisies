<?php
defined('BASEPATH') or exit('Direct access to script not allowed');


class Apply_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}


	

	public function insert_application_to_db() { 

		$fullname = ucwords($this->input->post('fullname', TRUE)); 
		$email = ucwords($this->input->post('email', TRUE)); 
		$number = ucwords($this->input->post('number', TRUE)); 
		$c_address = ucwords($this->input->post('c_address', TRUE)); 
		$p_address = ucwords($this->input->post('p_address', TRUE)); 
		$age = ucwords($this->input->post('age', TRUE)); 
		$gender = ucwords($this->input->post('gender', TRUE)); 
		$country = ucwords($this->input->post('country', TRUE)); 
		$state = ucwords($this->input->post('state', TRUE)); 
		$religion = ucwords($this->input->post('religion', TRUE)); 
		$volunteer = ucwords($this->input->post('volunteer', TRUE)); 
		$job_title = ucwords($this->input->post('job_title', TRUE)); 
		$marriage = ucwords($this->input->post('marriage', TRUE)); 
		$qualification = ucwords($this->input->post('qualification', TRUE)); 
		$experience = ucwords($this->input->post('experience', TRUE)); 
		$team = ucwords($this->input->post('team', TRUE)); 
		$career = ucwords($this->input->post('career', TRUE)); 
		$teach = ucwords($this->input->post('teach', TRUE)); 
		$learn = ucwords($this->input->post('learn', TRUE)); 
		$manage = ucwords($this->input->post('manage', TRUE)); 
		$people_skill = ucwords($this->input->post('people_skill', TRUE)); 
		$treat = ucwords($this->input->post('treat', TRUE)); 
		$handwriting = ucwords($this->input->post('handwriting', TRUE)); 
		$information = ucwords($this->input->post('information', TRUE)); 
		$books = ucwords($this->input->post('books', TRUE)); 
		$invest = ucwords($this->input->post('invest', TRUE)); 
		$commitments = ucwords($this->input->post('commitments', TRUE)); 
		$edu_body = ucwords($this->input->post('edu_body', TRUE)); 
		$role_model = ucwords($this->input->post('role_model', TRUE)); 
		$years = ucwords($this->input->post('years', TRUE)); 
		$dream = ucwords($this->input->post('dream', TRUE)); 
		$core_value = ucwords($this->input->post('core_value', TRUE)); 
		$skills = ucwords($this->input->post('skills', TRUE)); 
		$teaching = ucwords($this->input->post('teaching', TRUE)); 
		$preffered_age = ucwords($this->input->post('preffered_age', TRUE)); 
		$salary = ucwords($this->input->post('salary', TRUE)); 
		$socials = ucwords($this->input->post('socials', TRUE)); 
		$data = array (
			'fullname' => $fullname,
			'email' => $email,
			'number' => $number,
			'c_address' => $c_address,
			'p_address' => $p_address,
			'age' => $age,
			'gender' => $gender,
			'country' => $country,
			'state' => $state,
			'religion' => $religion,
			'volunteer'  => $volunteer,
			'job_title'  => $job_title,
			'marriage' => $marriage,
			'qualification' => $qualification,
			'experience' => $experience,
			'team' => $team,
			'career' => $career,
			'teach' => $teach,
			'learn' => $learn,
			'manage' => $manage,
			'people_skill' => $people_skill,
			'treat' => $treat,
			'handwriting' => $handwriting,
			'information' => $information,
			'books' => $books,
			'invest' => $invest,
			'commitments' => $commitments,
			'edu_body' => $edu_body,
			'role_model' => $role_model,
			'years' => $years,
			'dream' => $dream,
			'core_value' => $core_value,
			'skills' => $skills,
			'teaching' => $teaching,
			'preffered_age' => $preffered_age,
			'salary' => $salary,
			'socials' => $socials,
		);
		$this->db->insert('applicants', $data);
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