<?php
defined('BASEPATH') or exit('Direct access to script not allowed');


class Form_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
	

	public function admission_form() { 
		$surname = ucfirst($this->input->post('surname', TRUE));
		$first_name = ucfirst($this->input->post('first_name', TRUE)); 
		$other_name = ucfirst($this->input->post('other_name', TRUE));
		$dob = $this->input->post('dob', TRUE); 
		$pob = ucfirst($this->input->post('pob', TRUE));
		$age = $this->input->post('age', TRUE);  
		$gender = ucfirst($this->input->post('gender', TRUE)); 
		$country = ucfirst($this->input->post('country', TRUE)); 
		$class = ucfirst($this->input->post('class', TRUE)); 
		$state = ucfirst($this->input->post('state', TRUE)); 
		$parents_name = ucfirst($this->input->post('parents_name', TRUE)); 
		$phone_number = $this->input->post('phone_number', TRUE); 
		$other_number = $this->input->post('other_number', TRUE); 
		$address = ucfirst($this->input->post('address', TRUE)); 
		$email = ucfirst($this->input->post('email', TRUE)); 
		$c_name = ucfirst($this->input->post('c_name', TRUE)); 
		$c_number = $this->input->post('c_number', TRUE); 
		$aut_name = ucfirst($this->input->post('aut_name', TRUE)); 
		$aut_number = $this->input->post('aut_number', TRUE); 
		$aut_address = ucfirst($this->input->post('aut_address', TRUE)); 
		$aut_name2 = ucfirst($this->input->post('aut_name2', TRUE)); 
		$aut_number2 = $this->input->post('aut_number2', TRUE); 
		$aut_address2 = ucfirst($this->input->post('aut_address2', TRUE)); 
		$health = ucfirst($this->input->post('health', TRUE)); 
		
 
        $data = array (
			'surname' => $surname,
			'first_name' => $first_name,
			'other_name' => $other_name,
			'dob' => $dob,
			'pob' => $pob,
			'age' => $age,
			'gender' => $gender,
			'country' => $country,
			'class' => $class,
			'state' => $state,
			'parents_name' => $parents_name,
			'phone_number' => $phone_number,
			'other_number' => $other_number,
			'address' => $address,
			'email' => $email,
			'c_name' => $c_name,
			'c_number' => $c_number,
			'aut_name' => $aut_name,
			'aut_number' => $aut_number,
			'aut_address' => $aut_address,
			'aut_name2' => $aut_name2,
			'aut_number2' => $aut_number2,
			'aut_address2' => $aut_address2,
			'health' => $health,
			
		);
		$this->db->insert('admission', $data);

		//email admins
		//notify parents
		try {
			require_once 'application/third_party/exercise/index.php';	
		    //$mailer->SMTPDebug = 2;
		    $mailer->isSMTP();

		    if ($developmentMode) {
		        $mailer->SMTPOptions = [
		            'ssl'=> [
		                'verify_peer' => false,
		                'verify_peer_name' => false,
		                'allow_self_signed' => true
		            ]
		        ];
		    }


		    $mailer->Host = 'smtp.hostinger.com';
		    $mailer->SMTPAuth = true;
		    $mailer->Username = 'info@cryptomatrades.com';
		    $mailer->Password = '1[!43xVQz';
		    $mailer->SMTPSecure = 'tls';
		    $mailer->Port = 587;

		    $mailer->setFrom('info@cryptomatrades.com', 'Blooms \'n Daisies');
		    $mailer->addAddress('evelynekarika@gmail.com', 'Mrs. Ekarika');

		    $mailer->isHTML(true);
		    $mailer->Subject = 'Admission Form Submitted';
		    $mailer->Body = 'Hello Admin, <br>
					'. $first_name .' has submitted an admission form
					<br>
					Login your admin account to view details of the form ';

		    $mailer->send();
		    $mailer->ClearAllRecipients();

		} catch (Exception $e) {
		    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
		}
	}

	public function edit_form($id) { 
		$surname = ucfirst($this->input->post('surname', TRUE));
		$first_name = ucfirst($this->input->post('first_name', TRUE)); 
		$other_name = ucfirst($this->input->post('other_name', TRUE));
		$dob = $this->input->post('dob', TRUE); 
		$pob = ucfirst($this->input->post('pob', TRUE));
		$age = $this->input->post('age', TRUE);  
		$gender = ucfirst($this->input->post('gender', TRUE)); 
		$country = ucfirst($this->input->post('country', TRUE)); 
		$class = ucfirst($this->input->post('class', TRUE)); 
		$state = ucfirst($this->input->post('state', TRUE)); 
		$parents_name = ucfirst($this->input->post('parents_name', TRUE)); 
		$phone_number = $this->input->post('phone_number', TRUE); 
		$other_number = $this->input->post('other_number', TRUE); 
		$address = ucfirst($this->input->post('address', TRUE)); 
		$email = ucfirst($this->input->post('email', TRUE)); 
		$c_name = ucfirst($this->input->post('c_name', TRUE)); 
		$c_number = $this->input->post('c_number', TRUE); 
		$aut_name = ucfirst($this->input->post('aut_name', TRUE)); 
		$aut_number = $this->input->post('aut_number', TRUE); 
		$aut_address = ucfirst($this->input->post('aut_address', TRUE)); 
		$aut_name2 = ucfirst($this->input->post('aut_name2', TRUE)); 
		$aut_number2 = $this->input->post('aut_number2', TRUE); 
		$aut_address2 = ucfirst($this->input->post('aut_address2', TRUE)); 
		$health = ucfirst($this->input->post('health', TRUE)); 
		
 
        $data = array (
			'surname' => $surname,
			'first_name' => $first_name,
			'other_name' => $other_name,
			'dob' => $dob,
			'pob' => $pob,
			'age' => $age,
			'gender' => $gender,
			'country' => $country,
			'class' => $class,
			'state' => $state,
			'parents_name' => $parents_name,
			'phone_number' => $phone_number,
			'other_number' => $other_number,
			'address' => $address,
			'email' => $email,
			'c_name' => $c_name,
			'c_number' => $c_number,
			'aut_name' => $aut_name,
			'aut_number' => $aut_number,
			'aut_address' => $aut_address,
			'aut_name2' => $aut_name2,
			'aut_number2' => $aut_number2,
			'aut_address2' => $aut_address2,
			'health' => $health,
			
		);
		$this->db->where('id', $id);
		$this->db->update('admission', $data);

		//email admins
		//$this->notify_admins($name, $email, $subject, $message);
	}


    public function get_form($limit, $offset) {		
		$this->db->limit($limit, $offset); //limit to be used as per_page, offset to be used as pagination segment
		$this->db->order_by("date_added", "DESC"); //order by date_unix ASC so that the dates appear chronologically
		$query = $this->db->get_where('admission');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function get_form_by_id($id) { //get staff info by id
		return $this->db->get_where('admission', array('id' => $id))->row();
	}

  	public function get_form_details() { 
		$this->db->order_by("date_added", "DESC"); //order by date_unix ASC so that the dates appear chronologically
		return $this->db->get_where('admission')->result();
	}


	public function count_form() { //get all staff
		return $this->db->get_where('admission')->num_rows();
	}	
	
	
	public function delete_form($id) {
		return $this->db->delete('admission', array('id' => $id));
    }


	private function notify_admins($name, $email, $subject, $message) {
		$school_name = school_name;
		$level = 1;
		$admins = $this->common_model->get_admins();
		$message = 	"Hi admin, <br />
					You have a new contact message from {$school_name}. <br />
					<b>Contact Details:</b><br /> 
					Name: {$name} <br />
					Email: {$email} <br /><br /> 
					{$message}";
		email_multiple($admins, $subject, $message); //email admins 
	}



	




	
}