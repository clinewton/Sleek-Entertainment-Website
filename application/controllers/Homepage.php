<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index(){
		if($this->session->userdata('user_id')) {
			$this->load->view('user/homepage');
		} else {
			return redirect('user');
		}
	}
}
