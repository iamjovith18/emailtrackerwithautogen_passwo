<?php 

	class Admin_model extends CI_Model
	{
		public function __construct(){
			$this->load->database();
		}

		// Get all admin user
		public function get_all_admin(){
			$query =$this->db->get('admin');
			return $query->result();
		}

		// Get admin user by an ID
		public function get_admin_by_id($id = 0){
			if($id==0){
				$query = $this->db->get('admin');
				return $query->result_array();
			}

			$query = $this->db->get_where('admin',array('id'=>$id));
			return $query->row_array();
		}

		//Add new user admin with encrypted password
		public function create_user($enc_password){

			$data = array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'password' => $enc_password
			);

			return $this->db->insert('admin',$data);
		}

		// Delete Admin user
		public function delete_user($id){
			$this->db->where('id',$id);
			$this->db->delete('admin');
			return true;
		}

		// Update Admin User
		public function update_user($id){
			$id= $this->input->post('id');	
			$data = array(
				'name'=> $this->input->post('name'),
				'username'=> $this->input->post('username'),
				'password'=> md5($this->input->post('password') )
			);

			if($id == 0){
				return $this->db->insert('admin',$data);
			}
			else{

				$this->db->where('id',$id );
				return $this->db->update('admin',$data);		
			}
		}

		public function login($username,$password){
			//Validate
			$this->db->where('username',$username);
			$this->db->where('password',$password);

			$result = $this->db->get('admin');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			}
			else{
				return false;
			}
		}

		//check if username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('admin',array('username' => $username));
			if(empty($query->row_array() )){
				return true;
			}
			else{
				return false;
			}
		}

	}

?>