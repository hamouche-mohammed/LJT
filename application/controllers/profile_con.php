<?php

class profile_con extends CI_CONTROLLER{
	public function profile(){

       $this->load->view('profile');
	}

	public function profile_admin(){

       $this->load->view('profile_admin');
	}
}

