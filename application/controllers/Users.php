<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	// Login controller
	public function login(){
		$data['title'] = "CEBU OVERSEA HARDWARE INC.";

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() === FALSE){
			
			$this->load->view('templates/header',$data);
			$this->load->view('users/login',$data);
			$this->load->view('templates/footer');
		}
		else{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password') );

			$user_id = $this->Admin_model->login($username,$password);

			if($user_id) {
				$user_data = array(
					'user_id' =>$user_id,
					'username' => $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('now_login','Welcome');
				redirect('users/dashboard');
			}
			else{

				$this->session->set_flashdata('login_failed','Invalid Username or Password!');
				redirect('users/login');
			}


		}


	}

			// User logout
	public function logout(){
			//Unser user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

			//set message
		$this->session->set_flashdata('user_logout', 'You are now Log out');
			redirect('users/login');
	}		

		//Check if Username exists
	public function check_username_exists($username){
		$this->form_validation->set_message('check_username_exists','That username is taken. Please choose a deffirent one');
		if($this->Admin_model->check_username_exists($username)){
			return true;
		}
		else{	
			return false;
		}
	}

	//add user admin controller
	public function register(){

		$data['title'] = "Add New Administrator";


		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('username', 'Username','required|callback_check_username_exists');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() === FALSE ){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('users/register',$data);
			$this->load->view('templates/footer');		
		}

		else{
			// encrypt password
			$enc_password = md5($this->input->post('password'));
			$this->Admin_model->create_user($enc_password);

			//set message
			$this->session->set_flashdata('user_registered','You are now registered and can log in');
	
			redirect('users/admin_users_view');
		}

	}

	//Delete user admin
	public function delete($id){

		if(!$this->session->userdata('logged_in')){
			redirect('users/login');
		}

		$this->Admin_model->delete_user($id);

		$this->session->set_flashdata('user_deleted','Succesfully deleted!');
		redirect('users/admin_users_view');
	}

	public function edit($id){

		if(!$this->session->userdata('logged_in')){
			redirect('users/login');
		}		

		$data['title'] = "Edit Admin";
		$data['admins'] = $this->Admin_model->get_admin_by_id($id);

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('users/edit');
			$this->load->view('templates/footer');
		}

		else{
			$this->Admin_model->update_user($id);
		}
	}

	public function update($id){

		if(!$this->session->userdata('logged_in')){
			redirect('users/login');
		}

		$this->Admin_model->update_user($id);

		$this->session->set_flashdata('user_updated','Succesfully updated!');
		redirect('users/admin_users_view');
	}



	// view all admin users controller
	public function admin_users_view(){


		if(!$this->session->userdata('logged_in')){
			redirect('users/login');
		}

		$data ['title'] = "Administrator Users";
		$data['admins'] = $this->Admin_model->get_all_admin();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar',$data);
		$this->load->view('users/admin_users_view',$data);
		$this->load->view('templates/footer');
	}

	// View Dashboard controller
	public function dashboard(){

		if(!$this->session->userdata('logged_in')){
			redirect('users/login');
		}

		$data['title'] = "Administration";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar',$data);
		$this->load->view('administration/dashboard',$data);
		$this->load->view('templates/footer',$data);
	}


}
