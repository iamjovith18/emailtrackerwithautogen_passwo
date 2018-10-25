<?php 
	class Chbcdomain_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		// fetch all email
		public function get_chbcdomain_users(){
			$this->db->from('chbcdomain');
			$query=$this->db->get();
			return $query->result();
		}
		// check chbc domain user by id
		public function get_chbcdomain_by_id($id = 0){
			if($id==0){
				$query = $this->db->get('chbcdomain');
				return $query->result_array();
			}

			$query = $this->db->get_where('chbcdomain',array('id'=>$id));
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
		// delete chbcdomain user by ID
		public function delete_chbcdomain($id){
			$this->db->where('id',$id);
			$this->db->delete('chbcdomain');
			return true;
		}
		// update chbcdomain user by ID
		public function update_chbcdomain($id){
			$id= $this->input->post('id');	
			$data = array(
				'name'=> $this->input->post('name'),
				'username_domain'=> $this->input->post('user_domain'),
				'password_domain'=> $this->input->post('password_domain'),
				'department'=> $this->input->post('department'),
				'ip_address'=> $this->input->post('ip_address'),
				'local_admin_password'=> $this->input->post('local_password')
			);

			if($id == 0){
				return $this->db->insert('chbcdomain',$data);
			}
			else{
				
				$this->db->where('id',$id );
				return $this->db->update('chbcdomain',$data);		
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