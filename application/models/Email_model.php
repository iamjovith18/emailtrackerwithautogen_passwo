<?php 
	class Email_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		// fetch all email
		public function get_emails(){
			$this->db->from('email');
			$query=$this->db->get();
			return $query->result();
		}
		// check email by id
		public function get_email_by_id($id = 0){
			if($id==0){
				$query = $this->db->get('email');
				return $query->result_array();
			}

			$query = $this->db->get_where('email',array('id'=>$id));
			return $query->row_array();
		}
		//add email
		public function add_email(){
			$data = array(
					'name'=> $this->input->post('name'),
					'emailAddress'=> $this->input->post('email'),
					'password'=> $this->input->post('password'),
					'designation'=> $this->input->post('designation'),
					'location'=> $this->input->post('location')
			);

			return $this->db->insert('email',$data);				
		}
		// delete email
		public function delete_email($id){
			$this->db->where('id',$id);
			$this->db->delete('email');
			return true;
		}
		// update email
		public function update_email($id){
			$id= $this->input->post('id');	
			$data = array(
				'name'=> $this->input->post('name'),
				'emailAddress'=> $this->input->post('email'),
				'password'=> $this->input->post('password'),
				'designation'=> $this->input->post('designation'),
				'location'=> $this->input->post('location')
			);

			if($id == 0){
				return $this->db->insert('email',$data);
			}
			else{
				
				$this->db->where('id',$id );
				return $this->db->update('email',$data);		
			}
		}

		//check email if exists
		public function check_email_exists($email){
			$query = $this->db->get_where('email',array('emailAddress'=> $email));
			if(empty($query->row() )){
				return true;
			}
			else{
				return false;
			}
		}

	}
?>