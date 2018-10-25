<?php 
	class Chbcdomains extends CI_Controller{
		public function index(){
		
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = "CHBCDOMAIN USERS";

			$data['chbcdomains'] = $this->Chbcdomain_model->get_chbcdomain_users();

			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('chbcdomain/index',$data);
			$this->load->view('templates/footer',$data);
		}

		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists','That email is already exists');
			if($this->Email_model->check_email_exists($email)){
				return true;
			}
			else{
				return false;
			}
		}

		public function create(){
			
			if(!$this->session->userdata('logged_in')){
			redirect('users/login');
			}
			
			$data ['title'] ="Create CHCBDOMAIN User";
			
			$this->form_validation->set_rules('name', 'Name','required');
			$this->form_validation->set_rules('username_domain', 'Username Domain','required|callback_check_username_domain_exists');
			$this->form_validation->set_rules('password_domain', 'Password Domain','required');
			$this->form_validation->set_rules('department', 'Department','required');
			$this->form_validation->set_rules('ip_address', 'IP Address','required');
			$this->form_validation->set_rules('local_password', 'Local Password','required');
	
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header',$data);
				$this->load->view('templates/navbar',$data);
				$this->load->view('chbcdomain/create',$data);
				$this->load->view('templates/footer',$data);
			}
			else{
				$this->Chbcdomain_model->add_user_domain();
				$this->session->set_flashdata('user_created','The User has already created');	
				redirect('chbcdomains');
			}
		}

		public function delete($id){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}			
			$this->Chbcdomain_model->delete_chbcdomain($id);
			$this->session->set_flashdata('chbcdomain_user_deleted','The user has been deleted');	
			redirect('/chbcdomains');
		}

		public function edit($id){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = "UPDATE";
			$data['chbcdomain'] = $this->Chbcdomain_model->get_chbcdomain_by_id($id);
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email Address', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('designation', 'Designation', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');

			if($this->form_validation->run()===FALSE){
				
				$this->load->view('templates/header',$data);
				$this->load->view('templates/navbar',$data);
				$this->load->view('chbcdomain/edit',$data);
				$this->load->view('templates/footer',$data);
			}
			else{
				$this->Chbcdomain_model->update_chbcdomain($id);		
			}	
		
		}


		public function update($id){
			
			if(!$this->session->userdata('logged_in')){
			redirect('users/login');
			}

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->Chbcdomain_model->update_chbcdomain($id);
			$this->session->set_flashdata('chbcdomain_user_updated','The user has been updated');	
			redirect('/chbcdomains');
		}		

	}
			
?>