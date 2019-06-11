<?php
class User extends MY_Controller
{
	public function index()
	{
	$this->load->model('user_model');
		$this->load->library('pagination');
		$config=[
		          'base_url'=>base_url('user/index'),
				  'per_page'=>3,
				  'total_rows'=>$this->user_model->count_all_users(),
				  'full_tag_open'=>'<ul class="pagination">',
				  'full_tag_close'=>'</ul>',
				  'attributes' =>['class' => 'page-link'],
                  'first_link' => false,
                  'last_link' => false,
				  'first_tag_open'=>'<li class="page-item">',
				  'first_tag_close'=>'</li>',
				  'last_tag_open'=>'<li class="page-item">',
				  'last_tag_close'=>'</li>',
				  'next_tag_open'=>'<li class="page-item">',
				  'next_tag_close'=>'</li>',
				  'prev_link' =>'&laquo',
				  'next_link' =>'&raquo',
				  'prev_tag_open'=>'<li class="page-item">',
				  'prev_tag_close'=>'</li>',
				  'num_tag_open'=>'<li class="page-item">',
				  'num_tag_close'=>'</li>',
				  'cur_tag_open'=>'<li class="page-item active"><a class="page-link">',
				  'cur_tag_close'=>'<span class="sr-only">(current)</span></a></li>',
				  ];
		$this->pagination->initialize($config);
		$users=$this->user_model->all_users_list($config['per_page'],$this->uri->segment(3));
		$this->load->helper('url');
	$this->load->view('public/home',['users'=>$users]);
	}
	public function registration(){
		   $this->load->view('public/registerform');
	}
	
		public function dashboard()
	{
		$this->load->model('user_model');
		$user=$this->user_model->find($_SESSION['user_id']);
		$this->load->view('public/dashboard',['user'=>$user]);
		
	}
	public function updation()
	{
		 $this->load->view('public/updateform');
	}
	public function deletion()
	{
		 $this->load->model('user_model');
		$this->user_model->del($_SESSION['user_id']);
		$this->session->unset_userdata('user_id');
		$this->load->library('pagination');
		$config=[
		          'base_url'=>base_url('user/deletion'),
				  'per_page'=>3,
				  'total_rows'=>$this->user_model->count_all_users(),
				  'full_tag_open'=>'<ul class="pagination">',
				  'full_tag_close'=>'</ul>',
				  'attributes' =>['class' => 'page-link'],
                  'first_link' => false,
                  'last_link' => false,
				  'first_tag_open'=>'<li class="page-item">',
				  'first_tag_close'=>'</li>',
				  'last_tag_open'=>'<li class="page-item">',
				  'last_tag_close'=>'</li>',
				  'next_tag_open'=>'<li class="page-item">',
				  'next_tag_close'=>'</li>',
				  'prev_link' =>'&laquo',
				  'next_link' =>'&raquo',
				  'prev_tag_open'=>'<li class="page-item">',
				  'prev_tag_close'=>'</li>',
				  'num_tag_open'=>'<li class="page-item">',
				  'num_tag_close'=>'</li>',
				  'cur_tag_open'=>'<li class="page-item active"><a class="page-link">',
				  'cur_tag_close'=>'<span class="sr-only">(current)</span></a></li>',
				  ];
		$this->pagination->initialize($config);
		$users=$this->user_model->all_users_list($config['per_page'],$this->uri->segment(3));
		$this->load->helper('url');
	$this->load->view('public/home',['users'=>$users]);
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('user');
	}
}