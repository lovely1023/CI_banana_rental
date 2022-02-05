<?php

class Rent_m extends CI_Model{

    protected $table = "ads_step";
    function __construct()
    {
        $this->load->database();
    }

    function ownquery($sql){
		$data = $this->db->query($sql);
        
        return $data->result_array();
    }

    public function addSeasonRate($data){
        return $this->db->insert('tbl_rate',$data);
    }
    public function getSeasonRate(){
        $this->db->select("*");
        // $this->db->where('id', $user_id);
        $result = $this->db->get('tbl_rate');
        return $result->result_array ();
        // $this->db->select('*') from('tbl_rate');
    }

    public function removeSeason($season_id){
        return $this->db->query("delete  from tbl_rate where id='".$season_id."'");
    }

    public function getSeasonId(){
        $lastSeasonId = $this->db->query("SELECT id FROM tbl_rate ORDER BY id DESC LIMIT 1");
        return $lastSeasonId->result_array ();
    }

    public function addSeasonDate($data){
        $this->db->insert('tbl_season_calendar',$data);
        $this->db->get('tbl_season_calendar');
    }
    public function getallof_season($ads_id){
		

        // $this->db->select("*");
        // $this->db->from('tbl_season_calendar');
		// $this->db->where('ads_id',$ads_id);
        // $this->db->join('tbl_rate', 'tbl_rate.id = tbl_season_calendar.season_id');
        $data = $this->db->query("SELECT * FROM tbl_season_calendar JOIN tbl_rate ON tbl_season_calendar.season_id = tbl_rate.id
        ");
		
		if($data->num_rows() > 0){ 
			return $data->result();
		}else{ 
			return false;
		}
    }

    public function get_all()
    {
        $this->db->select(array('a.*,count(b.id) ph_num'));
        $this->db->from('ads_step a');
        $this->db->join('rv_photo_tb b', 'a.id=b.ads_id', 'left');
        $this->db->where('status',1);
        $this->db->order_by('a.review','desc');
        $this->db->group_by('a.id');
        $data['ads'] = $this->db->get()->result(); 
        
        $data['photos'] = $this->db->get('rv_photo_tb')->result();
        
        return $data;
    }

    public function del_reason($ads_id)
    {
       $this->db->where('ads_id',$ads_id);
       $this->db->where('reason!=','');
       return $this->db->get('booking')->result(); 
    }

    public function del_daterange($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('booking');
    }

    public function del_season($id){
        return $this->db->query("delete  from tbl_season_calendar where id='".$id."'");
    }
    public function getSeason(){
        $getSeasonAll = $this->db->query("SELECT tbl_season_calendar.id,tbl_rate.ads_id,tbl_season_calendar.season_id, start_date,end_date,sson_title,sson_rate_perday 
        FROM tbl_season_calendar INNER JOIN tbl_rate ON tbl_rate.id = tbl_season_calendar.season_id");
        return $getSeasonAll->result();
    }

    public function get_all_first()
    {
        $this->db->select(array('a.*,count(b.id) ph_num'));
        $this->db->from('ads_step a');
        $this->db->join('rv_photo_tb b', 'a.id=b.ads_id', 'left');
        $this->db->where('status',1);
        $this->db->order_by('a.review','desc');
        $this->db->group_by('a.id');
//        $this->db->limit(3);
        $this->db->limit(8);
        $data['ads'] = $this->db->get()->result();
        
        $data['photos'] = $this->db->get('rv_photo_tb')->result();
        
        return $data;
    }

    public function get_note()
    {
        $email = $this->session->userdata('email');
        $this->db->select('booking.*,user_tb.first,user_tb.user_picture,user_tb.email');
        $this->db->join('user_tb','user_tb.email=booking.renter_email or user_tb.email=booking.owner_email');
        $this->db->where('owner_email',$email)->where('ck_own',0);
        $this->db->or_where('renter_email',$email)->where('ck_clt',0);
        return $this->db->get('booking')->result();       
         
    }

    public function note_num()
    {
        $email = $this->session->userdata('email');
        $this->db->where('owner_email',$email)->where('ck_own',0);
        $this->db->or_where('renter_email',$email)->where('ck_clt',0);
        return $this->db->get('booking')->num_rows();
    }

    public function date_range($ads_id)
    {
        $this->db->select('startDate,endDate');
        $this->db->where('ads_id',$ads_id);
        $this->db->where('status >',3);
        return $this->db->get('booking')->result();
    }

    public function find_result_m(
        $park_location,$min_pr,$max_pr,$seats,$berth
        ,$power_steering,$cruise_control,$wheel_drive,$gps,$rear_camera,$parking_motion,$cabin_heating
        ,$ac,$central_lock,$baby_seat,$baby_car_chair,$winter_tires,$snow_chains,$wedge_levelers,$safety_kit
        ,$Autoradio,$CD_Player,$MP3,$Audio_in,$Bluetooth,$TV,$DVD_Player,$Satellite_dish,$Sponge
        ,$AC_life,$Bed_linen,$Swing_driver,$Swing_passenger,$Sink,$Stove,$Oven,$Fridge,$Freezer,$Extractor
        ,$Pan_kit,$Dishes_kit,$Coffee_machine,$Inside_table,$Inside_shower,$Outside_shower,$Integrated_bathroom,$Portable_toilet,$Sink_bath
        ,$Bicycle_carrier,$Side_awning,$Outside_table,$Barbecue,$Towing_adaptor,$Outdoor_luggage_compartment,$Outside_chairs
        ,$Solar_panels,$Outside_Eletric,$Auxiliary_battery,$Eletric_generator,$type1,$type2,$type3,$type4,$type5,$type6,$type7,$start_date,$end_date)
    {
        $this->db->select(array('a.*', 'count(b.id) ph_num'));
        $this->db->from('ads_step a');
        $this->db->join('rv_photo_tb b', 'a.id=b.ads_id', 'left');
        $this->db->join('vehicle_equipements c', 'a.id=c.ads_id', 'left');
        $this->db->join('booking d', 'a.id=d.ads_id', 'left');
        $this->db->where('a.status',1);
        $this->db->where('price >=',$min_pr);
        $this->db->where('price <=',$max_pr);
        if($park_location){
            $this->db->group_start();
            $this->db->like('Country',$park_location);
            $this->db->or_like('city',$park_location);
            $this->db->or_like('street',$park_location);
            $this->db->or_like('district',$park_location);
            $this->db->group_end();
        }        
        $this->db->where('seats >=',$seats);
        $this->db->where('berth >=',$berth);
        if($power_steering){ $this->db->where('c.power_steering',$power_steering);}
            if($cruise_control){ $this->db->where('c.cruise_control',$cruise_control);}
            if($wheel_drive){ $this->db->where('c.wheel_drive',$wheel_drive);}
            if($gps){ $this->db->where('c.gps',$gps);}
            if($rear_camera){ $this->db->where('c.rear_camera',$rear_camera);}
            if($parking_motion){ $this->db->where('c.parking_motion',$parking_motion);}
            if($cabin_heating){ $this->db->where('c.cabin_heating',$cabin_heating);}
            if($ac){ $this->db->where('c.ac',$ac);}
            if($central_lock){ $this->db->where('c.central_lock',$central_lock);}
            if($baby_seat){ $this->db->where('c.baby_seat',$baby_seat);}
            if($baby_car_chair){ $this->db->where('c.baby_car_chair',$baby_car_chair);}
            if($winter_tires){ $this->db->where('c.winter_tires',$winter_tires);}
            if($snow_chains){ $this->db->where('c.snow_chains',$snow_chains);}
            if($wedge_levelers){ $this->db->where('c.wedge_levelers',$wedge_levelers);}
            if($safety_kit){ $this->db->where('c.safety_kit',$safety_kit);}

            if($Autoradio){ $this->db->where('c.Autoradio',$Autoradio);}
            if($CD_Player){ $this->db->where('c.CD_Player',$CD_Player);}
            if($MP3){ $this->db->where('c.MP3',$MP3);}
            if($Audio_in){ $this->db->where('c.Audio-in',$Audio_in);}
            if($Bluetooth){ $this->db->where('c.Bluetooth',$Bluetooth);}
            if($TV){ $this->db->where('c.TV',$TV);}
            if($DVD_Player){ $this->db->where('c.DVD_Player',$DVD_Player);}
            if($Satellite_dish){ $this->db->where('c.Satellite_dish',$Satellite_dish);}
            if($Sponge){ $this->db->where('c.Sponge',$Sponge);}
            if($AC_life){ $this->db->where('c.AC_life',$AC_life);}
            if($Bed_linen){ $this->db->where('c.Bed_linen',$Bed_linen);}
            if($Swing_driver){ $this->db->where('c.Swing_driver',$Swing_driver);}
            if($Swing_passenger){ $this->db->where('c.Swing_passenger',$Swing_passenger);}

            if($Sink){ $this->db->where('c.Sink',$Sink);}
            if($Stove){ $this->db->where('c.Stove',$Stove);}
            if($Oven){ $this->db->where('c.Oven',$Oven);}
            if($Fridge){ $this->db->where('c.Fridge',$Fridge);}
            if($Freezer){ $this->db->where('c.Freezer',$Freezer);}
            if($Extractor){ $this->db->where('c.Extractor',$Extractor);}
            if($Pan_kit){ $this->db->where('c.Pan-kit',$Pan_kit);}
            if($Dishes_kit){ $this->db->where('c.Dishes-kit',$Dishes_kit);}
            if($Coffee_machine){ $this->db->where('c.Coffee_machine',$Coffee_machine);}
            if($Inside_table){ $this->db->where('c.Inside_table',$Inside_table);}

            if($Inside_shower){ $this->db->where('c.Inside_shower',$Inside_shower);}
            if($Outside_shower){ $this->db->where('c.Outside_shower',$Outside_shower);}
            if($Integrated_bathroom){ $this->db->where('c.Integrated_bathroom',$Integrated_bathroom);}
            if($Portable_toilet){ $this->db->where('c.Portable_toilet',$Portable_toilet);}
            if($Sink_bath){ $this->db->where('c.Sink_bath',$Sink_bath);}

            if($Bicycle_carrier){ $this->db->where('c.Bicycle_carrier',$Bicycle_carrier);}
            if($Side_awning){ $this->db->where('c.Side_awning',$Side_awning);}
            if($Outside_table){ $this->db->where('c.Outside_table',$Outside_table);}
            if($Barbecue){ $this->db->where('c.Barbecue',$Barbecue);}
            if($Towing_adaptor){ $this->db->where('c.Towing_adaptor',$Towing_adaptor);}
            if($Outdoor_luggage_compartment){ $this->db->where('c.Outdoor_luggage_compartment',$Outdoor_luggage_compartment);}
            if($Outside_chairs){ $this->db->where('c.Outside_chairs',$Outside_chairs);}

            if($Solar_panels){ $this->db->where('c.Solar_panels',$Solar_panels);}
            if($Outside_Eletric){ $this->db->where('c.Outside_Eletric',$Outside_Eletric);}
            if($Auxiliary_battery){ $this->db->where('c.Auxiliary_battery',$Auxiliary_battery);}
            if($Eletric_generator){ $this->db->where('c.Eletric_generator',$Eletric_generator);}

            if($type1){ $this->db->where('a.vehicle_type',$type1);}
            if($type2){ $this->db->where('a.vehicle_type',$type2);}
            if($type3){ $this->db->where('a.vehicle_type',$type3);}
            if($type4){ $this->db->where('a.vehicle_type',$type4);}
            if($type5){ $this->db->where('a.vehicle_type',$type5);}
            if($type6){ $this->db->where('a.vehicle_type',$type6);}
        if($type7){ $this->db->where('a.vehicle_type',$type7);}

        if($start_date){ 
            $this->db->where_not_in("d.startDate BETWEEN $start_date AND $end_date"); 
            // $this->db->or_where_not_in("d.endDate BETWEEN '$start_date' AND '$end_date'"); 
        }
        $this->db->group_by('a.id');
        $data['ads'] = $this->db->get()->result();

        $data['photos'] = $this->db->get('rv_photo_tb')->result();
        
        $data['num'] = 4;
        return $data;
    }

    public function get_detail($ads_id)
    {
        $this->db->where('id',$ads_id);
        $data['ads'] = $this->db->get('ads_step')->row();

        $this->db->where('ads_id',$ads_id);
        $data['photos'] = $this->db->get('rv_photo_tb')->result();

        $this->db->where('ads_id',$ads_id);
        $data['ph_num'] = $this->db->get('rv_photo_tb')->num_rows();

        $data['ads_id'] = $ads_id;

        $this->db->where('email',$data['ads']->email);
        $data['user_info'] = $this->db->get('user_tb')->row();

        $this->db->select('review.*,user_tb.first,user_tb.user_picture');
        $this->db->where('ads_id',$ads_id);
        $this->db->join('user_tb','user_tb.email=review.renter_email');
        $data['review'] = $this->db->get('review')->result();

        $this->db->where('ads_id',$ads_id);
        $data['review_num'] = $this->db->get('review')->num_rows();

        $this->db->where('ads_id',$ads_id);
        $data['beds'] = $this->db->get('rv_berth_tb')->result();

        $this->db->where('ads_id',$ads_id);
        $data['eqps'] = $this->db->get('vehicle_equipements')->row();
        

        return $data;
    }

    function customquery($sql){
		$data = $this->db->query($sql);
		
		if($data->num_rows() > 0){
			return $data->result();
		}
		return false;
    }
    
    public function booking_new($data)
    {
        $this->db->insert('booking',$data);
    }

    public function getall($ads_id){
		
		$this->db->where('ads_id',$ads_id);
		$this->db->where('status>=',4);
		$data = $this->db->get('booking');
		
		if($data->num_rows() > 0){ 
			return $data->result(); 
		}else{ 
			return false;
		}
    }

    public function check_mybooks()
    {
        $email = $this->session->userdata('email');
        $this->db->where('owner_email',$email);
        $this->db->update('booking',array('ck_own'=>1));
    }
    
    public function getall_list(){

        $email = $this->session->userdata('email');
        
        $this->db->select('booking.*,ads_step.chassis_brand,ads_step.chassis_model');
        $this->db->where('owner_email',$email);
        $this->db->where('reason','');
        $this->db->join('ads_step','booking.ads_id = ads_step.id');
        $this->db->order_by('created_at','DESC');
		$data = $this->db->get('booking');
		
		if($data->num_rows() > 0){ 
			return $data->result(); 
		}else{ 
			return false;
		}
    }
    
    public function accept($id){
        $this->db->where('id',$id);
        $this->db->update('booking',array('status'=>1,'ck_clt'=>0,'is_read_msg'=>0));
    }

    public function approve($id)
    {
        $this->db->where('id',$id);
        $this->db->update('booking',array('status'=>3,'ck_clt'=>0,'is_read_msg'=>0));
    }

    public function paystatus($id)
    {
        $this->db->where('id',$id);
        $this->db->update('booking',array('status'=>4,'ck_own'=>0,'is_read_msg'=>0));
    }

    public function reject($id){
        $this->db->where('id',$id);
        $this->db->update('booking',array('status'=>2,'ck_clt'=>0,'is_read_msg'=>0));
    }

    public function get_bookinglist()
    {
        $email = $this->session->userdata('email');

        $this->db->select('booking.*,ads_step.vehicle_type,ads_step.chassis_brand,ads_step.chassis_model,rv_photo_tb.img_name');
        $this->db->where('renter_email',$email);
        $this->db->where('ads_step.status',1);
        $this->db->where('rv_photo_tb.photo_num',1);
        $this->db->join('ads_step','booking.ads_id = ads_step.id');
        $this->db->join('rv_photo_tb','booking.ads_id = rv_photo_tb.ads_id');
        $this->db->from('booking');
        $data = $this->db->get();
        if($data->num_rows() > 0){ 
			return $data->result(); 
		}else{ 
			return false;
		}
    }

    public function get_chat($bookid,$sender,$receiver)
    {
        $this->db->where('bookid',$bookid);
        $this->db->group_start();
        $this->db->where(array('sender'=>$sender,'receiver'=>$receiver));
        $this->db->or_where(array('sender'=>$receiver,'receiver'=>$sender));
        $this->db->group_end();
        $this->db->order_by('created_at');
        return $this->db->get('chat')->result();
    }

    public function send_to_msg($data)
    {
        $this->db->insert('chat',$data);
    }

    public function unread_renter($bookid)
    {
        $this->db->where('id',$bookid);
        $this->db->update('booking',array('ck_clt'=>0,'is_read_msg'=>1));
    }
    public function read_renter()
    {
        $email = $this->session->userdata('email');
        $this->db->where('renter_email',$email);
        $this->db->update('booking',array('ck_clt'=>1));
        $this->db->where('renter_email',$email);
        $this->db->where('status',1);
        $this->db->where('is_read_msg',0);
        $this->db->update('booking',array('is_read_msg'=>1));
    }
    public function unread_owner($bookid)
    {
        $this->db->where('id',$bookid);
        $this->db->update('booking',array('ck_own'=>0,'is_read_msg'=>1));
    }

    public function leave_review($data,$bookid,$ads_id)
    {
        $this->db->insert('review',$data);
        $this->db->where('id',$bookid);
        $this->db->update('booking',array('status'=>6,'ck_own'=>0,'is_read_msg'=>0));

        $this->db->where('id',$ads_id);
        $ads = $this->db->get('ads_step')->row();
        $old = $ads->review;
        $new = $old + 1;
        $this->db->where('id',$ads_id);
        $this->db->update('ads_step',array('review'=>$new));
    }

    public function get_recent()
    {
        $this->db->select('a.*,b.user_picture,b.first');
        $this->db->from('review a');
        $this->db->join('user_tb b','a.renter_email=b.email');
        $this->db->limit(5);
        $this->db->order_by('created_at','desc');
        return $this->db->get()->result();
    }

    public function send_mail_bookingend()
	{
        if($this->session->userdata('language')=='en'){
			$this->lang->load("first","en");
		}else{
			$this->lang->load("first","pt");
		}
		$this->db->where('status',4);
		$books = $this->db->get('booking')->result();
		$today=date("Y-m-d");
		foreach($books as $row){
			if($today > $row->endDate){
				
				$id = $row->id;
				$this->db->where('id',$id);
				$this->db->update('booking',array('status'=>5,'ck_own'=>1,'ck_clt'=>0,'is_read_msg'=>0));

				$renter_email=$row->renter_email;
				$owner_email=$row->owner_email;
                $review1 = $this->lang->line('review1');
                $review2 = $this->lang->line('review2');
                $review3 = $this->lang->line('review3');
                $review4 = $this->lang->line('review4');
                $review5 = $this->lang->line('review5');
				$this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
				$this->email->to($renter_email);    
				$this->email->subject($review1);
				$this->email->message(
				'<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
					<td align="center" bgcolor="#e9ecef">      
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
							<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">'.$review2.'</h1>
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
										<a href="http://bananacampers.pt/index.php/My_booking" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">'.$review4.'</a>
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
				
			}
		}
	}


}
?>