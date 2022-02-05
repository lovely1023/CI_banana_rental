<?php

class User_m extends CI_Model{
    protected $table = 'user_tb';

    function __construct()
    {
        $this->load->database();
    }

    public function get_sign()
    {
        if($this->session->has_userdata('email')){
            $email = $this->session->userdata('email');

            $this->db->select('user_tb.*,count(ads_step.id) ads_num');
            $this->db->where('user_tb.email',$email);
            $this->db->join('ads_step','user_tb.email = ads_step.email','left');
            $this->db->group_by('user_tb.id');
            return $this->db->get('user_tb')->row();  
        }else{
            return NULL;
        }
        
    }

    public function register($user)
    {
        $this->db->insert($this->table,$user);
    }

    public function read_check($email,$password)
	{
    	$this->db->where('email',$email);
		$data=$this->db->get($this->table);
		$user=$data->row();
		if ($user) {
			if ($user->password==$password) {
                if($user->permit==1){
                    return "already";
                }else{
                    return "exist";
                }
			}
			else{
				return "pwd_err";
			}
		}
		else{
			return "new_email";
		}	
    }
    
    public function check_user($email,$password)
	{
		$this->db->where('email',$email);
		$data=$this->db->get($this->table);
		$user=$data->row();
		if ($user) {
			if ($user->password==$password) {
                $this->session->set_userdata('email',$email);
                $this->session->set_userdata('first',$user->first);
				return "success";
			}
			else{
				return "pwd_err";
			}
		}
		else{
			return "email_err";
		}	
    }
    
    public function check_email($email){
        $this->db->where('email',$email);
        $data=$this->db->get($this->table)->row();
        if($data){
            return "yes";
        }else{
            return "no";
        }
    }

    public function check_pin($email,$code){
        $this->db->where('email',$email);
        $this->db->update($this->table,array('code'=>$code));
        
    }

    public function reset_password($password,$code){
        $this->db->where('code',$code);
        $user=$this->db->get($this->table)->row();
        if($user){
            $this->db->where('code',$code);
            $this->db->update($this->table,array('password'=>$password));
            return $user;
        }else{
            return "err";
        }
        
    }

    public function fileinfo_up($email,$driv_doc,$idt_doc,$driving,$identity)
    {
        $this->db->where('email',$email);
        $this->db->update($this->table,
        array('driv_doc'=>$driv_doc,'identity'=>$idt_doc,'driv_num'=>$driving,'ident_num'=>$identity));  
    }

    public function c_bank($iban)
    {
        $email = $this->session->userdata('email');

        $this->db->where('email',$email);
        $this->db->update($this->table,array('iban'=>$iban));
    }

    public function get_profile()
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        return $this->db->get($this->table)->row();
    }

    public function update_identity($first,$last,$phone_num,
    $Country,$City,$Street,$House_number,$Postal_Code,$birth)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('first'=>$first,'last'=>$last,'phone_num'=>$phone_num,
        'Country'=>$Country,'City'=>$City,'Street'=>$Street,
        'House_number'=>$House_number,'Postal_Code'=>$Postal_Code,'birth'=>$birth));
    }

    public function up_description($description)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('presentation'=>$description));
    }

    public function up_picture($upload_name)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('user_picture'=>$upload_name));
    }

    public function up_doc($driving,$identity)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('driv_doc'=>$driving,'identity'=>$identity));
    }
    public function up_doc1($driving)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('driv_doc'=>$driving));
    }
    public function up_doc2($identity)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('identity'=>$identity));
    }

    public function get_pw()
    {
        $email = $this->session->userdata('email');
        $this->db->select('password');
        $this->db->where('email',$email);
        return $this->db->get($this->table)->row();
    }

    public function change_pw($newpw)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('password'=>$newpw));
    }

    public function update_bank($iban)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('iban'=>$iban));
    }

    public function get_user_pic($email)
    {
        $this->db->where('email',$email);
        $data = $this->db->get($this->table)->row();
        return $data->user_picture;
    }

    public function get_user_first($email)
    {
        $this->db->where('email',$email);
        $data = $this->db->get($this->table)->row();
        return $data->first;
    }
    public function check_permit($email)
    {
        $this->db->where('email',$email);
        $user = $this->db->get('user_tb')->row();
        if($user->permit==1){
            echo 'yes';
        }else{
            echo 'no';
        }
    }

    function pay_balance($owner_email,$plus,$renter_email,$minus,$bookid){
        $this->db->where('email',$renter_email);
        $renter = $this->db->get($this->table)->row();
        
        $renter_new = $renter->balance - $minus;
        $this->db->where('email',$renter_email);
        $this->db->update($this->table,array('balance'=>$renter_new));

        $this->db->where('email',$owner_email);
        $owner = $this->db->get($this->table)->row();
        $owner_new = $owner->balance + $plus;

        $this->db->where('email',$owner_email);
        $this->db->update($this->table,array('balance'=>$owner_new));
        
        return $renter_new; 
        
    }

    public function check_balance($email,$price)
    {
        $this->db->where('email',$email);
        $user = $this->db->get('user_tb')->row();
        if($user->balance>$price){
            return true;
        }else{
            return false;
        }
    }

    public function deposit($email,$amount)
    {
        $this->db->where('email',$email);
        $user = $this->db->get($this->table)->row();
        $new =$user->balance + $amount;
        $this->db->where('email',$email)->update($this->table,array('balance'=>$new));
    }

    public function get_user_info($email)
    {
        $this->db->where('email',$email);
        return $this->db->get($this->table)->row();
    }


}
?>