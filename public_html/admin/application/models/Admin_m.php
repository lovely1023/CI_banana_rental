<?php

class Admin_m extends CI_Model
{
	protected $table='admin_tb';

	function __construct()
	{
		$this->load->database();

		$this->load->library('email');		
		$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'hosting47.serverhs.org';
        $config['smtp_port']    = '587';
        $config['smtp_user']    = 'suporte@bananacampers.pt';
        $config['smtp_pass']    = 'S&t7PN0KrPF&';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; 
        $config['validation'] = TRUE;       
        
        $this->email->initialize($config);
	}

	public function signin($email,$password)
	{
		$this->db->where('admin_email',$email);
		$data = $this->db->get($this->table);
		$admin = $data->row();
		if($data->num_rows()>0){
			if($admin->admin_password == $password){
				$this->session->set_userdata('admin_email',$email);
				echo "success";
			}else{
				echo "wrong_password";
			}
		}else{
			echo "no_admin";
		}
	}

	public function get_info()
	{
		return $this->db->get($this->table)->row();
	}

	public function u_info($first,$last,$email)
	{
		$this->db->update($this->table,array('admin_first'=>$first,'admin_last'=>$last,'admin_email'=>$email));
	}

	public function u_img($img)
	{
		$this->db->update($this->table,array('admin_img'=>$img));
	}
	public function u_pw($old,$new)
	{
		$admin = $this->db->get($this->table)->row();
		$current_password = $admin->admin_password;
		if($current_password==$old){
			$this->db->update($this->table,array('admin_password'=>$new));
			echo "ok";
		}else{
			echo "old_wrong";
		}
	} 
	public function get_user($id=NULL)
	{
		if($id){
			$this->db->where('id',$id);
			return $this->db->get('user_tb')->row();
		}else
		{
			$this->db->order_by('permit','asc');
			$this->db->order_by('created_at','desc');
			return $this->db->get('user_tb')->result();
		}
		
	}
	public function ch_permit($uid)
	{
		$this->db->where('id',$uid);
		$user = $this->db->get('user_tb')->row();
		$current = $user->permit;
		if($current==0){$permit=1;}else{$permit=0;}
		$this->db->where('id',$uid)->update('user_tb',array('permit'=>$permit));
	}
	public function get_ads_details($id)
	{
		$this->db->select('ads_step.*,user_tb.first,user_tb.last,vehicle_equipements.*');
		$this->db->where('ads_step.id',$id);
		$this->db->join('user_tb','ads_step.email=user_tb.email','left');
		$this->db->join('vehicle_equipements','ads_step.id=vehicle_equipements.ads_id','left');
		return $this->db->get('ads_step')->row();
	}

	public function get_ads()
	{
		$this->db->order_by('status','asc');
		$this->db->where('step',9);
		return $this->db->get('ads_step')->result();
	}

	public function get_photos($ads_id)
	{
		$this->db->where('ads_id',$ads_id);
		$this->db->order_by('photo_num');
		return $this->db->get('rv_photo_tb')->result();
	}
	public function ads_permit($ads_id)
	{
		$this->db->where('id',$ads_id);
		$ads = $this->db->get('ads_step')->row();
		$current = $ads->status;
		if($current==0){$permit=1;}else{$permit=0;}
		$this->db->where('id',$ads_id)->update('ads_step',array('status'=>$permit));
	}
	public function get_booking()
	{
		$this->db->where('reason','');
		return $this->db->get('booking')->result();
	}

	public function get_withdrawal()
	{
		$this->db->select('payment.*,user_tb.iban,user_tb.driv_num');
		$this->db->order_by('created_at','desc');
		$this->db->join('user_tb','payment.owner_email=user_tb.email','left');
		return $this->db->get('payment')->result();
	}

	

	public function funding($id,$email,$amt)
	{
		$this->db->where('id',$id)->update('payment',array('status'=>1));
		$balance = $this->db->where('email',$email)->get('user_tb')->row()->balance;
		$new = $balance-$amt;
		$this->db->where('email',$email)->update('user_tb',array('balance'=>$new));
	}

	public function pay_search_key($key)
	{
		$this->db->select('payment.*,user_tb.iban,user_tb.driv_num');
		$this->db->order_by('created_at','desc');
		$this->db->join('user_tb','payment.owner_email=user_tb.email','left');
		$this->db->like('payment.first',$key);
		$this->db->or_like('payment.last',$key);
		$this->db->or_like('payment.email',$key);
		$this->db->or_like('payment.owner_email',$key);
		$this->db->or_like('user_tb.iban',$key);
		$this->db->or_like('user_tb.driv_num',$key);
		return $this->db->get('payment')->result();
	}

	public function ads_search_key($key)
	{
		$this->db->order_by('created_at','desc');
		$this->db->like('lics_plate_doc',$key);
		$this->db->or_like('chassis_brand',$key);
		$this->db->or_like('chassis_model',$key);
		$this->db->or_like('cell_phone',$key);
		$this->db->or_like('Country',$key);
		$this->db->or_like('City',$key);
		$this->db->or_like('assurance_doc',$key);
		$this->db->or_like('tech_inspec_doc',$key);
		return $this->db->get('ads_step')->result();
	}

	public function user_search_key($key)
	{
		
		$this->db->order_by('created_at','desc');
		
		$this->db->like('first',$key);
		$this->db->or_like('last',$key);
		$this->db->or_like('email',$key);
		$this->db->or_like('phone_num',$key);
		$this->db->or_like('City',$key);
		return $this->db->get('user_tb')->result();
	}

	public function book_search_key($key)
	{
		
		$this->db->order_by('created_at','desc');
		$this->db->where('reason','');
		$this->db->like('owner_email',$key);
		$this->db->or_like('renter_email',$key);
		$this->db->or_like('startDate',$key);
		$this->db->or_like('endDate',$key);
		return $this->db->get('booking')->result();
	}

	

}