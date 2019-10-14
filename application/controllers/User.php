<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('user_id')){
			return redirect('homepage');
		}
		$this->load->helper('form');
		$this->load->view('user/login');
	}

	public function register(){
		$this->load->view('user/register');
	}
	public function signIn(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">','</div>');

		if($this->form_validation->run() ){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('User_model','user');
			$user_id = $this->user->authUser($username,$password);
			if($user_id){
				$log_id = $this->session->set_userdata('user_id',$user_id);
				$username = $this->session->set_userdata('username',$username);
				return redirect('homepage');
			} else {
				$this->session->set_flashdata('login_fail','Invalid username/password');
				return redirect('user');
			}
		} else {
			$this->load->view('user/login');
		}
	}

	public function signUp(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('lastname','Last Name','required');
		$this->form_validation->set_rules('username','Username','required|is_unique[customer.username]');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('phone','Phone Number','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('conf_password','conf_password','required');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">','</div>');

		if($this->form_validation->run() ){
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$password = $this->input->post('password');
			$conf_password = $this->input->post('conf_password');

			$this->load->model('User_model','user');
			if ($this->user->createUser($firstname,$lastname,$username,$email,$phone,$password,$conf_password)){
				$this->session->set_flashdata('response','Registration Successful! Please Log in again');
				return redirect('user');
			} else  {
				$this->session->set_flashdata('response','Registration Failed! Please try again');
				return redirect('register');
			}
		} else {
			$this->load->view('user/register');
		}
	}

	public function signOut(){
		$this->session->unset_userdata('user_id');
		redirect('user');
	}
}
