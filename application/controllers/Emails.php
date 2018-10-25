<?php 
	class Emails extends CI_Controller{
		public function index(){
		
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = "Email Users";

			$data['emails'] = $this->Email_model->get_emails();

			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('emails/view',$data);
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
			
			$data ['title'] ="Create Email";
			
			$this->form_validation->set_rules('name', 'Name','required');
			$this->form_validation->set_rules('email', 'Email','required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password','required');
			$this->form_validation->set_rules('designation', 'Designation','required');
			$this->form_validation->set_rules('location', 'Location','required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header',$data);
				$this->load->view('templates/navbar',$data);
				$this->load->view('emails/create',$data);
				$this->load->view('templates/footer',$data);
			}
			else{
				$this->Email_model->add_email();
				$this->session->set_flashdata('email_created','Your email account has been created');	
				redirect('emails/index');
			}
		}

		public function delete($id){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}			
			$this->Email_model->delete_email($id);
			$this->session->set_flashdata('email_deleted','Your email account has been deleted');	
			redirect('emails');
		}

		public function edit($id){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = "Edit Email";
			$data['emails'] = $this->Email_model->get_email_by_id($id);
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email Address', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('designation', 'Designation', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');

			if($this->form_validation->run()===FALSE){
				
				$this->load->view('templates/header',$data);
				$this->load->view('templates/navbar',$data);
				$this->load->view('emails/edit',$data);
				$this->load->view('templates/footer',$data);
			}
			else{
				$this->Email_model->update_email($id);		
			}	
		
		}


		public function update($id){
			
			if(!$this->session->userdata('logged_in')){
			redirect('users/login');
			}

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->Email_model->update_email($id);
			$this->session->set_flashdata('email_updated','Your email account has been updated');	
			redirect('emails');
		}		

	}
			
?>