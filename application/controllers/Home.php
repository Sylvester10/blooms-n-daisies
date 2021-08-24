<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('message_model');
		$this->load->model('blog_model');
		$this->load->model('newsletter_model');
		$this->load->model('events_model');
		$this->load->model('jobs_model');
		$this->load->model('apply_model');
		$this->load->model('gallery_model');
		$this->load->model('testimonial_model');
	}





	public function index()
	{
		$this->home_header('Home');		
		$data['captcha_code'] = mt_rand(111111, 999999);
		$data['blog_news'] = $this->blog_model->get_recent_published_blog(5);
		$data['testimony'] = $this->testimonial_model->get_recent_published_testimonials(10);
		$this->load->view('homepage',$data);
		$this->footer();
	}



	public function contact_us_ajax() { 
		//form validation rules and file upload config
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		$this->form_validation->set_rules('captcha_code', 'Captcha Code', 'trim');
		$this->form_validation->set_rules('c_captcha_code', 'Captcha Code', 'trim|required|matches[captcha_code]',
			array(
				'required' => 'Captcha is required. Reload the page if you cannot see any code.',
				'matches' => 'Invalid captcha code'
			)
		);
		if ($this->form_validation->run())  {	
			$this->message_model->contact_us(); //insert the data into db
			echo 1;
		} else { 
			echo validation_errors();
		}
	}


	/* ====== Blog ====== */
	public function blog() {
		$this->web_header('Blog');	
		//config for pagination
        $config = array();
		$per_page = 2;  //number of items to be displayed per page
        $uri_segment = 3;  //pagination segment id
		$config["base_url"] = base_url('home/blog');
        $config["total_rows"] = $this->blog_model->count_published_blog();
        $config["per_page"] = $per_page;
		$config["uri_segment"] = $uri_segment;
		$config['cur_tag_open'] = '<a class="pagination-active-page" href="#!">';	//disable click event of current link
        $config['cur_tag_close'] = '</a>';
        $config['first_link'] = 'First';
        $config['next_link'] = '&raquo;';	// >>
        $config['prev_link'] = '&laquo;';	// <<
		$config['last_link'] = 'Last';
		$config['display_pages'] = TRUE; //show pagination link digits
		$config['num_links'] = 3; //number of digit links

		//initize config using the pagination library
        $this->pagination->initialize($config);

		$page = $this->uri->segment($uri_segment) ? $this->uri->segment($uri_segment) : 0;
		$data["blog"] = $this->blog_model->get_published_blog($per_page, $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links); //explode the links 1 2 3 4 into distinct items for styling.
		$data['total_records'] = $this->blog_model->count_published_blog();
		$this->load->view('blog/blog', $data);
		$this->web_footer();
	}


	public function single_blog($post_id) {
		//check blog exists
		$this->check_data_exists($post_id, 'id', 'blog', 'home/blog');
		//$this->check_data_exists($slug, 'slug', 'blog', 'home/blog');
		$this->blog_model->check_blog_is_published($post_id);
		$this->web_header('Blog Post');	
		$blog_details = $this->blog_model->get_blog_details($post_id);
		$total_comments = $this->blog_model->count_post_comments($post_id);
		
		//config for pagination
        $config = array();
		$per_page = 100;  //number of items to be displayed per page
        $uri_segment = 5;  //pagination segment id
		$config["base_url"] = base_url('home/single_blog/'.$post_id);
        $config["total_rows"] = $total_comments;
        $config["per_page"] = $per_page;
		$config["uri_segment"] = $uri_segment;
		$config['cur_tag_open'] = '<a class="pagination-active-page" href="#!">';	//disable click event of current link
        $config['cur_tag_close'] = '</a>';
        $config['first_link'] = 'First';
        $config['next_link'] = '&raquo;';	// >>
        $config['prev_link'] = '&laquo;';	// <<
		$config['last_link'] = 'Last';
		$config['display_pages'] = TRUE; //show pagination link digits
		$config['num_links'] = 3; //number of digit links

		//initize config using the pagination library
        $this->pagination->initialize($config);

		$page = $this->uri->segment($uri_segment) ? $this->uri->segment($uri_segment) : 0;
		$data["comments"] = $this->blog_model->get_comments_by_post_id($post_id, $per_page, $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links); //explode the links 1 2 3 4 into distinct items for styling.
		$data['total_comments'] = $total_comments;
		$data['y'] = $blog_details;
		$data['post_id'] = $post_id;
		$this->load->view('blog/blog_post', $data);
		$this->web_footer();
	}


	public function create_comment_ajax($post_id) {
		//check blog exists
		$this->check_data_exists($post_id, 'id', 'blog', 'home/blog');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('comment', 'Comment', 'trim|required');
		$this->form_validation->set_rules('captcha_code', 'Captcha Code', 'trim');
		$this->form_validation->set_rules('c_captcha_code', 'Captcha Code', 'trim|required|matches[captcha_code]',
			array(
				'required' => 'Captcha is required. Reload the page if you cannot see any code.',
				'matches' => 'Invalid captcha code'
			)
		);
		if ($this->form_validation->run()) {
			$this->blog_model->create_comment($post_id);
			echo 1;
	    } else {	
			echo validation_errors();
		}
	}



	public function about()
	{
		$this->web_header('About Us');
		$data['staff'] = $this->common_model->get_activated_staff();
		$this->load->view('about', $data);
		$this->footer();
	}


	public function admission()
	{
		$this->web_header('Admissions');
		$this->load->view('admission');
		$this->web_footer();
	}

	public function policy()
	{
		$this->web_header('Our Policy');
		$this->load->view('policy');
		$this->web_footer();
	}

	//Events
	public function events() {
		$this->web_header('Events');	
		//config for pagination
        $config = array();
		$per_page = 3;  //number of items to be displayed per page
        $uri_segment = 3;  //pagination segment id
		$config["base_url"] = base_url('home/events');
        $config["total_rows"] = $this->events_model->count_published_events();
        $config["per_page"] = $per_page;
		$config["uri_segment"] = $uri_segment;
		$config['cur_tag_open'] = '<a class="pagination-active-page" href="#!">';	//disable click event of current link
        $config['cur_tag_close'] = '</a>';
        $config['first_link'] = 'First';
        $config['next_link'] = '&raquo;';	// >>
        $config['prev_link'] = '&laquo;';	// <<
		$config['last_link'] = 'Last';
		$config['display_pages'] = TRUE; //show pagination link digits
		$config['num_links'] = 3; //number of digit links

		//initize config using the pagination library
        $this->pagination->initialize($config);

		$page = $this->uri->segment($uri_segment) ? $this->uri->segment($uri_segment) : 0;
		$data["events"] = $this->events_model->get_published_events_list($per_page, $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links); //explode the links 1 2 3 4 into distinct items for styling.
		$data['total_records'] = $this->events_model->count_published_events();
		$this->load->view('publications/events/all_events', $data);
		$this->web_footer();
	}


	public function single_event($event_id)
	{	
		//check news exists
		$this->check_data_exists($event_id, 'id', 'events', 'home/events');
		$this->web_header('Event Details');
		$event_details = $this->events_model->get_event_details($event_id);
		$data['y'] = $event_details;
		$this->load->view('publications/events/single_event', $data);
		$this->web_footer();
	}


	public function gallery() {
		$this->web_header('Our Gallery');
		//config for pagination
        $config = array();
		$per_page = 12;  //number of items to be displayed per page
        $uri_segment = 3;  //pagination segment id
		$config["base_url"] = base_url('home/gallery');
        $config["total_rows"] = $this->gallery_model->count_published_photos();
        $config["per_page"] = $per_page;
		$config["uri_segment"] = $uri_segment;
		$config['cur_tag_open'] = '<a class="pagination-active-page" href="#!">';	//disable click event of current link
        $config['cur_tag_close'] = '</a>';
        $config['first_link'] = 'First';
        $config['next_link'] = '&raquo;';	// >>
        $config['prev_link'] = '&laquo;';	// <<
		$config['last_link'] = 'Last';
		$config['display_pages'] = TRUE; //show pagination link digits
		$config['num_links'] = 3; //number of digit links

		//initize config using the pagination library
        $this->pagination->initialize($config);

		$page = $this->uri->segment($uri_segment) ? $this->uri->segment($uri_segment) : 0;
		$data["photos"] = $this->gallery_model->get_published_photos($per_page, $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links); //explode the links 1 2 3 4 into distinct items for styling.
		$data['total_records'] = $this->gallery_model->count_published_photos();
		$this->load->view('gallery/photos', $data);
		$this->web_footer();
	}

	public function newsletter()
	{
		$this->web_header('Newsletters');
		$this->load->view('newsletter');
		$this->web_footer();
	}

	//Careers
	public function jobs()
	{	
		$this->web_header('Vacancies');
		//config for pagination
        $config = array();
		$per_page = 2;  //number of items to be displayed per page
        $uri_segment = 3;  //pagination segment id
		$config["base_url"] = base_url('home/jobs');
        $config["total_rows"] = $this->jobs_model->count_jobs();
        $config["per_page"] = $per_page;
		$config["uri_segment"] = $uri_segment;
		$config['cur_tag_open'] = '<a class="pagination-active-page" href="#!">';	//disable click event of current link
        $config['cur_tag_close'] = '</a>';
        $config['first_link'] = 'First';
        $config['next_link'] = '&raquo;';	// >>
        $config['prev_link'] = '&laquo;';	// <<
		$config['last_link'] = 'Last';
		$config['display_pages'] = TRUE; //show pagination link digits
		$config['num_links'] = 3; //number of digit links

		//initize config using the pagination library
        $this->pagination->initialize($config);

		$page = $this->uri->segment($uri_segment) ? $this->uri->segment($uri_segment) : 0;
		$data["recent_jobs"] = $this->jobs_model->get_jobs($per_page, $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links); //explode the links 1 2 3 4 into distinct items for styling.
		$data['total_records'] = $this->jobs_model->count_jobs();
		$data['total_jobs'] = $this->jobs_model->get_all_jobs();
		$this->load->view('jobs/jobs', $data);
		$this->web_footer();
	}


	public function job_single($id)
	{	
		$this->web_header('Apply');
		//check job exists
		$this->check_data_exists($id, 'id', 'jobs', 'home/job_single');
		$job_details = $this->jobs_model->get_job_details($id);
		$job = $this->jobs_model->get_all_jobs();
		$data['y'] = $job_details;
		$this->load->view('jobs/job_single', $data);
		$this->web_footer();
	}

	//Apply
	public function job_ajax() {
		//check blog exists
		$this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('number', 'Phone Number', 'trim|required');
		$this->form_validation->set_rules('c_address', 'Current Address', 'trim|required');
		$this->form_validation->set_rules('p_address', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('age', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('gender', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('country', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('state', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('religion', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('volunteer', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('job_title', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('marriage', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('qualification', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('experience', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('team', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('career', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('teach', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('learn', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('manage', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('people_skill', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('treat', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('handwriting', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('information', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('books', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('invest', 'Permanent Address', 'trim|required');
		$this->form_validation->set_rules('commitments', 'Comitment', 'trim|required');
		$this->form_validation->set_rules('edu_body', 'Edu', 'trim|required');
		$this->form_validation->set_rules('role_model', 'Role', 'trim|required');
		$this->form_validation->set_rules('years', 'Years', 'trim|required');
		$this->form_validation->set_rules('dream', 'Dream', 'trim|required');
		$this->form_validation->set_rules('core_value', 'Core value', 'trim|required');
		$this->form_validation->set_rules('skills', 'Skills', 'trim|required');
		$this->form_validation->set_rules('teaching', 'Teaching', 'trim|required');
		$this->form_validation->set_rules('preffered_age', 'Preffered', 'trim|required');
		$this->form_validation->set_rules('salary', 'Salary', 'trim|required');
		$this->form_validation->set_rules('socials', 'Socials', 'trim|required');

		if ($this->form_validation->run()) {
			$this->apply_model->insert_application_to_db();
			echo 1;
	    } else {	
			echo validation_errors();
		}
	}


	public function subscribe_newsletter_ajax() {
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[newsletter_subscribers.email]',
			array(
				'is_unique' => 'This email address is already subscribed to our newsletter'
			)
		);
		if ($this->form_validation->run()) {
			$this->newsletter_model->subscribe_newsletter();
			echo 1;
	    } else {	
			echo validation_errors();
		}
	}




}