<?php
class Users extends CI_Controller{
	
	public function register(){
		//Validation Rules
		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[60]');
		$this->form_validation->set_rules('password2','CPassword','trim|required|matches[password]');
		
		
		if ($this->form_validation->run() == FALSE){
		//Load View
		$data['main_content'] = 'register';
		$this->load->view('layouts/main', $data);
		
		
		}else{
			if ($this->User_model->register()){
				$this->session->set_flashdata('registered','You are now registered and can log in');
				redirect('products');

			}
			
		}
	}
	
	public function login(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[60]');
		
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		$user_id = $this->User_model->login($username,$password);
		
		//Validating a user
		if($user_id){
			//Create array of user data
			$data = array(
				'user_id' => $user_id,
				'username' => $usename,
				'logged_in' => $true
			);
			//Set session user data
			
			$this->session->set_userdata($data);
			
			//Set message
			
			$this->session->set_flashdata('pass_login','You are successfully logged in');
			redirect('products');
		}else{
			//Set Error
			$this->session->set_flashdata('fail_login','Login failed. Please provide accurate credentials');
			redirect('products');
		}
		
	}
	
	public function login($username,$password){
		$this->db->query("SELECT * FROM users
									WHERE username * :username
									AND password = :password
		");
		
		//Bind Values
		$this->db->bind(':username',$username);
		$this->db->bind(':password',$password);
		
		$row = $this->db->single();
		
		//Check Rows
		if($this->db->rowCount() > 0){
			$this->setUserData($row);
			return true;
		}else{
			return false;
		}
	}
	
	/*
	*Set User Data
	*/
	private function setUserData($row){
		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_id'] = $row ->id;
		$_SESSION['is_logged_in'] = $row ->username;
		$_SESSION['is_logged_in'] = $row ->name;
	}
}