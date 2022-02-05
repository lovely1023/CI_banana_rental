<?php
/**
 * 
 */
class Admin_C extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
	}

	public function index()
	{
		if ($this->session->has_userdata('admin_email')) {
			$data = $this->Admin_m->get_info();
			$admin['email'] = $data->admin_email;
			$admin['first'] = $data->admin_first;
			$admin['last'] = $data->admin_last;
			$admin['img'] = $data->admin_img;
			$this->load->view('admin_dash',$admin);	
		}
		else{
			$this->load->view('login_v');
		}			
	}
	
	public function signin()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		return $this->Admin_m->signin($email,$password);
	}
	public function admin_first()
	{
		if($this->session->has_userdata('admin_email')){
			$var['title'] = "Admin Dashboard";
			$data = $this->Admin_m->get_info();
			$admin['email'] = $data->admin_email;
			$admin['first'] = $data->admin_first;
			$admin['last'] = $data->admin_last;
			$admin['img'] = $data->admin_img;
			$this->load->view('components/header',$var);
			$this->load->view('components/body_sidebar',$admin);
			$this->load->view('admin_dash');
			$this->load->view('components/footer');
		}else{
			redirect('../admin');
		}
	}
	public function log_out()
	{
		$this->session->sess_destroy();
		redirect('../admin');
	}
	public function admin_info()
	{
		$data = $this->Admin_m->get_info();
		$admin['email'] = $data->admin_email;
		$admin['first'] = $data->admin_first;
		$admin['last'] = $data->admin_last;
		$admin['img'] = $data->admin_img;
		// var_dump($data->admin_email);exit;
		$this->load->view('admin_info',$admin);
	}
	public function u_info()
	{
		$first = $this->input->post('first');
		$last = $this->input->post('last');
		$email = $this->input->post('email');
		$this->Admin_m->u_info($first,$last,$email);
	}
	public function u_img()
	{
		$pic = $_FILES['image'];
		$old_name= $pic['name'];
		$x = explode('.', $old_name);
		$exten = end($x);       
		$img = time().'.'.$exten;
		@move_uploaded_file($_FILES['image']['tmp_name'], './assets/img/'.$img);
		$this->Admin_m->u_img($img);
	}
	public function u_pw()
	{
		$old = md5($this->input->post('old'));
		$new = md5($this->input->post('new'));
		return $this->Admin_m->u_pw($old,$new);
	}
	
	public function users()
	{
		if($this->session->has_userdata('admin_email')){
			$var['title'] = "User Management";
			$data = $this->Admin_m->get_info();
			$admin['email'] = $data->admin_email;
			$admin['first'] = $data->admin_first;
			$admin['last'] = $data->admin_last;
			$admin['img'] = $data->admin_img;
			$this->load->view('components/header',$var);
			$this->load->view('components/body_sidebar',$admin);
			$this->load->view('users');
			$this->load->view('components/footer');
		}else{
			redirect('../admin');
		}
	}
	
	public function user_manage()
	{
		if($this->session->has_userdata('admin_email')){
			$data['users'] = $this->Admin_m->get_user();
			$this->load->view('user_manage',$data);
		}else{
			redirect('../admin');
		}
	}
	public function user_detail()
	{
		$id = $this->input->get_post('id');
		$data['details'] = $this->Admin_m->get_user($id);
		$this->load->view('user_dt',$data);
	}
	public function ch_permit()
	{
		$uid = $this->input->get_post('uid');
		$this->Admin_m->ch_permit($uid);
	} 

	public function ads()
	{
		if($this->session->has_userdata('admin_email')){
			$var['title'] = "Ads Management";
			$data = $this->Admin_m->get_info();
			$admin['email'] = $data->admin_email;
			$admin['first'] = $data->admin_first;
			$admin['last'] = $data->admin_last;
			$admin['img'] = $data->admin_img;
			$this->load->view('components/header',$var);
			$this->load->view('components/body_sidebar',$admin);
			$this->load->view('ads');
			$this->load->view('components/footer');
		}else{
			redirect('../admin');
		}
	}
	public function get_ads_details()
	{
		$ads_id = $this->input->get_post('ads_id');
		$data['ads'] = $this->Admin_m->get_ads_details($ads_id);
		// var_dump($data['ads']);
		return $this->load->view('ads_details_md',$data);

	}

	public function ads_manage()
	{
		$data['ads'] = $this->Admin_m->get_ads(); 
		$this->load->view('ads_manage',$data);
	}
	public function get_ads_photos()
	{
		$ads_id = $this->input->get_post('ads_id');
		$data['photos'] = $this->Admin_m->get_photos($ads_id);
		return $this->load->view('modal_photodiv',$data);
	}
	public function ads_permit()
	{
		$ads_id = $this->input->get_post('ads_id');
		$this->Admin_m->ads_permit($ads_id);
	}

	public function booking()
	{
		if($this->session->has_userdata('admin_email')){
			$var['title'] = "Booking Management";
			$data = $this->Admin_m->get_info();
			$admin['email'] = $data->admin_email;
			$admin['first'] = $data->admin_first;
			$admin['last'] = $data->admin_last;
			$admin['img'] = $data->admin_img;
			$this->load->view('components/header',$var);
			$this->load->view('components/body_sidebar',$admin);
			$this->load->view('booking');
			$this->load->view('components/footer');
		}else{
			redirect('../admin');
		}
	}

	public function booking_manage()
	{
		$data['booking'] = $this->Admin_m->get_booking();
		$this->load->view('booking_manage',$data);
	}

	public function withdrawal() 
	{
		if($this->session->has_userdata('admin_email')){
			$var['title'] = "Payment Management";
			$data = $this->Admin_m->get_info();
			$admin['email'] = $data->admin_email;
			$admin['first'] = $data->admin_first;
			$admin['last'] = $data->admin_last;
			$admin['img'] = $data->admin_img;
			$this->load->view('components/header',$var);
			$this->load->view('components/body_sidebar',$admin);
			$this->load->view('withdrawal');
			$this->load->view('components/footer');
		}else{
			redirect('../admin');
		}
	}

	public function withdrawal_manage()
	{
		$data['with'] = $this->Admin_m->get_withdrawal();
		$this->load->view('withdrawal_manage',$data);
	}
	
	public function funding()
	{
		$id = $this->input->post('id');
		$owner_email = $this->input->post('owner_email');
		$own_pr = $this->input->post('own_pr');
		$this->Admin_m->funding($id,$owner_email,$own_pr);
	}

	public function searchpay()
	{
		$key = $this->input->get_post('key');
		$data['with'] = $this->Admin_m->pay_search_key($key);
		$this->load->view('payment_search_tb',$data);
	}

	public function searchuser()
	{
		$key = $this->input->get_post('key');
		$data['users'] = $this->Admin_m->user_search_key($key);
		$this->load->view('user_search_tb',$data);
	}

	public function searchads()
	{
		$key = $this->input->get_post('key');
		$data['ads'] = $this->Admin_m->ads_search_key($key);
		$this->load->view('ads_search_tb',$data);
	}

	public function searchbooking()
	{
		$key = $this->input->get_post('key');
		$data['booking'] = $this->Admin_m->book_search_key($key);
		$this->load->view('book_search_tb',$data);
	}

}