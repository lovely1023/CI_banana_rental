<?php

class My_booking extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('Rent_m');        
        $this->load->model('Ad_m');        
        $this->load->model('User_m'); 
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
        if($this->session->userdata('language')=='en'){
			$this->lang->load("first","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("first","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("first","fr");
        }
        else{
			$this->lang->load("first","pt");
		}
    }
    
    public function index(){ 

        if($this->session->userdata('language')=='en'){
			$this->lang->load("mybooking","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("mybooking","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("mybooking","fr");
        }
        else{
			$this->lang->load("mybooking","pt");
        }
        if($this->session->userdata('language')=='en'){
			$this->lang->load("signin","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("signin","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("signin","fr");
        }
        else{
			$this->lang->load("signin","pt");
		}

        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $var['title']="My Booking | Bananacampers";
            $data['myBooking'] = $this->Rent_m->get_bookinglist();
            $val['user'] = $this->User_m->get_sign();

            $val['notes'] = $this->Rent_m->get_note();
            $val['num'] = $this->Rent_m->note_num();
            $this->Rent_m->read_renter();
            $this->load->view('components/header',$var);
            $this->load->view('userpage/components/header',$val);
            $this->load->view('components/footer');
            $this->load->view('userpage/mybooking',$data);
        }
        
    }

    public function mybooking_chat()
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("mybooking","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("mybooking","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("mybooking","fr");
        }
        else{
			$this->lang->load("mybooking","pt");
        }

        $data['bookid'] = $this->input->post('bookid');
        $data['receiver'] = $this->input->post('receiver');
        $data['sender'] = $this->session->userdata('email');
        // var_dump($data['receiver']);exit;
        $data['receiver_img'] = $this->User_m->get_user_pic($data['receiver']);
        $data['receiver_first'] = $this->User_m->get_user_first($data['receiver']);
        
        $data['sender_img'] = $this->User_m->get_user_pic($data['sender']);
        $data['msgs'] = $this->Rent_m->get_chat($data['bookid'],$data['sender'],$data['receiver']);
        return $this->load->view('userpage/chat',$data);
        
    }

    public function send_msg()
    {
		if($this->session->userdata('language')=='en'){
			$this->lang->load("mybooking","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("mybooking","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("mybooking","fr");
        }
        else{
			$this->lang->load("mybooking","pt");
		}
		
        $data['msg'] = $this->input->post('msg');
        $data['sender'] = $this->input->post('sender');
        $data['receiver'] = $this->input->post('receiver');
		$data['bookid'] = $this->input->post('bookid');

		$chat1 = $this->lang->line('chat1');
        $chat2 = $this->lang->line('chat2');
        $chat3 = $this->lang->line('chat3');
        $chat4 = $this->lang->line('chat4');
        $this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
        $this->email->to($data['receiver']);
        $this->email->subject($chat1);
        $this->email->message(
        '<table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
            <td align="center" bgcolor="#e9ecef">      
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                    <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">'.$chat1.'</h1>
                    </td>
                </tr>
                </table>     
            </td>
            </tr>   
            <tr>
        	<td align="center" bgcolor="#e9ecef">       
        		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        		<tr>
        			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
        			<p style="margin: 0;">'.$chat2.'</p>
        			</td>
        		</tr>
        		<tr>
        			<td align="left" bgcolor="#ffffff">
        			<table border="0" cellpadding="0" cellspacing="0" width="100%">
        				<tr>
        				<td align="center" bgcolor="#ffffff" style="padding: 12px;">
        					<table border="0" cellpadding="0" cellspacing="0">
        					<tr>
        						<td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
        						<a href="https://bananacampers.pt/index.php/Rent/booking_list" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">'.$chat3.'</a>
        						</td>
        					</tr>
        					</table>
        				</td>
        				</tr>
        			</table>
        			</td>
        		</tr> 
        		<tr>
        			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
        			<p style="margin: 0;">'.$chat4.'</p>
        			</td>
        		</tr>
        		</table>       
        	</td>
        	</tr>
        </table>');
		$this->email->send();
		
        $this->Rent_m->unread_owner($data['bookid']);
        $this->Rent_m->send_to_msg($data); 
    }

	
	public function get_owninfo()
	{
		if($this->session->userdata('language')=='en'){
			$this->lang->load("signin","en");
			$this->lang->load("mybooking","en");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("signin","fr");
			$this->lang->load("mybooking","fr");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("signin","sp");
			$this->lang->load("mybooking","sp");
		}
		else{
			$this->lang->load("signin","pt");
			$this->lang->load("mybooking","pt");
		}
		$owner = $this->input->get_post('owner_email');
		$data['client'] = $this->User_m->get_user_info($owner);
        return $this->load->view('schedule/client_info_table',$data);
	}

    public function leave_review()
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("mybooking","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("mybooking","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("mybooking","fr");
        }
        else{
			$this->lang->load("mybooking","pt");
        }
        $button = $this->lang->line('msgbtn');
        $data['comment'] = $this->input->get_post('comment');
        $data['rate'] = $this->input->get_post('rate');
        $data['ads_id'] = $this->input->get_post('ads_id');
        $bkid = $this->input->get_post('bkid');
        $owner_email = $this->input->post('owner');
        $data['renter_email'] = $this->session->userdata('email');
        if(isset($_FILES['img'])){
            $ph = $_FILES['img'];
            $o_name= $ph['name'];
            $x = explode('.', $o_name);
            $exten = end($x);       
            $data['img'] = time().'.'.$exten;
    
            @move_uploaded_file($_FILES['img']['tmp_name'], './uploads/review_img/'.$data['img']);
		} 
		
		$review1 = $this->lang->line('review1');
		$review2 = $this->lang->line('review2');
		$review3 = $this->lang->line('review3');
		$review4 = $this->lang->line('review4');
		$review5 = $this->lang->line('review5');
		 
        $this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
        $this->email->to($owner_email);    
        $this->email->subject($review1);
        $this->email->message(
        '<table border="0" cellpadding="0" cellspacing="0" width="100%">
        	<tr>
        	<td align="center" bgcolor="#e9ecef">      
        		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        		<tr>
        			<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
        			<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
        				'.$review1.'
        			</h1>
        			</td>
        		</tr>
        		</table>     
        	</td>
        	</tr>   
        	<tr>
        	<td align="center" bgcolor="#e9ecef">       
        		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        		<tr>
        			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
        			<p style="margin: 0;">'.$review2.'</p>
        			</td>
				</tr>
				<tr>
        			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
        			<p style="margin: 0;">'.$review3.'</p>
        			</td>
        		</tr>
        		<tr>
        			<td align="left" bgcolor="#ffffff">
        			<table border="0" cellpadding="0" cellspacing="0" width="100%">
        				<tr>
        				<td align="center" bgcolor="#ffffff" style="padding: 12px;">
        					<table border="0" cellpadding="0" cellspacing="0">
        					<tr>
        						<td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
        						<a href="http://bananacampers.pt/index.php/My_ads" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">'.$review4.'</a>
        						</td>
        					</tr>
        					</table>
        				</td>
        				</tr>
        			</table>
        			</td>
        		</tr> 
        		<tr>
        			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
        			<p style="margin: 0;">'.$review5.'</p>
        			</td>
        		</tr>
        		</table>       
        	</td>
        	</tr>
        </table>');
        $result = $this->email->send();      
        $this->Rent_m->leave_review($data,$bkid,$data['ads_id']);
    }


}
?>