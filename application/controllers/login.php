<?php
class Login extends MY_Controller
{
	public function index()
	{
		if($this->session->userdata('user_id'))
			return redirect('user/dashboard');
		$this->load->view('public/loginform');
	}
	public function admin_login()
	{
			$this->load->view('public/loginform');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$this->load->model('user_model');
			$login_id=$this->user_model->login_valid($username,$password);
			if($login_id)
			{
			$this->load->library('session');
            $this->session->set_userdata('user_id',$login_id);
			return redirect('user/dashboard');
			}
			else{
				$this->session->set_flashdata('login_failed','Invalid username/password.');
				return redirect('login');
			}
			
	}
}