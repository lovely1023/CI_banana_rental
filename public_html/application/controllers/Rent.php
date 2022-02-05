<?php
/**
 * 
 */
class Rent extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('Rent_m');
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
			$this->lang->load("renting","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("renting","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("renting","fr");
		}
		else{
			$this->lang->load("renting","pt");
		}
        $var['title']="Rent | Bananacampers";
        $data['user'] = $this->User_m->get_sign();
        $this->load->view('components/header',$var);
        $data['notes'] = $this->Rent_m->get_note();
		$data['num'] = $this->Rent_m->note_num();
        $this->load->view('userpage/components/header',$data);
        $this->load->view('components/footer_new');
        $this->load->view('rent/renting_rv');
    }

    public function addSeasonRate(){
        
        $data = array(
        'ads_id'=>$this->input->post('ads_id'),
        'sson_title'=>$this->input->post('sson_title'),
        'sson_rate_perday'=>$this->input->post('sson_rate_perday')
            );
            $this->Rent_m->addSeasonRate($data);
            $attr=$this->Rent_m->getSeasonId();
            echo json_encode( $attr );
    }

    public function removeSeason(){
        $season_id = $this->input->post('season_id');
        $this->Rent_m->del_season($season_id);
        $attr = $this->Rent_m->removeSeason($season_id);
        return $attr;

    }
    

    public function addSeasonDate(){
        $data = array(
            'ads_id'=>$ads_id = $this->input->post('ads_id'),
            'season_id'=>$season_id = $this->input->post('season_id'),
            'start_date'=>$start_date = $this->input->post('start_date'),
            'end_date'=>$end_date = $this->input->post('end_date')
                );
                $sql = "SELECT * FROM tbl_season_calendar WHERE ads_id = '$ads_id'  
                AND ((start_date BETWEEN '$start_date' AND '$end_date')OR (end_date BETWEEN '$start_date' AND '$end_date'))";
            $result = $this->Rent_m->customQuery($sql);
            if($result){
                echo json_encode("exist");
            }else{
                $attr = $this->Rent_m->addSeasonDate($data);
                echo json_encode("success");
            }
    }

    public function get_all_vehicle()
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("renting","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("renting","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("renting","fr");
		}
		else{
			$this->lang->load("renting","pt");
		}
        $data = $this->Rent_m->get_all();
        return $this->load->view('rent/rv_list',$data); 

    }

    public function find_result()
    {
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');

        $park_location = $this->input->post('id_where');
        $min_pr = $this->input->post('min_pr');
        $max_pr = $this->input->post('max_pr');
        // var_dump($max_pr);exit;
        $seats = $this->input->post('seats');
        $berth = $this->input->post('berth');
        $power_steering = $this->input->post('power_steering');
        $cruise_control = $this->input->post('cruise_control');
        $wheel_drive = $this->input->post('wheel_drive');
        $gps = $this->input->post('gps');
        $rear_camera = $this->input->post('rear_camera');
        $parking_motion = $this->input->post('parking_motion');
        $cabin_heating = $this->input->post('cabin_heating');
        $ac = $this->input->post('ac');
        $central_lock = $this->input->post('central_lock');
        $baby_seat = $this->input->post('baby_seat');
        $baby_car_chair = $this->input->post('baby_car_chair');
        $winter_tires = $this->input->post('winter_tires');
        $snow_chains = $this->input->post('snow_chains');
        $wedge_levelers = $this->input->post('wedge_levelers');
        $safety_kit = $this->input->post('safety_kit');

        $Autoradio = $this->input->post('Autoradio');
        $CD_Player = $this->input->post('CD_Player');
        $MP3 = $this->input->post('MP3');
        $Audio_in = $this->input->post('Audio_in');
        $Bluetooth = $this->input->post('Bluetooth');
        $TV = $this->input->post('TV');
        $DVD_Player = $this->input->post('DVD_Player');
        $Satellite_dish = $this->input->post('Satellite_dish');
        $Sponge = $this->input->post('Sponge');
        $AC_life = $this->input->post('AC_life');
        $Bed_linen = $this->input->post('Bed_linen');
        $Swing_driver = $this->input->post('Swing_driver');
        $Swing_passenger = $this->input->post('Swing_passenger');

        $Sink = $this->input->post('Sink');
        $Stove = $this->input->post('Stove');
        $Oven = $this->input->post('Oven');
        $Fridge = $this->input->post('Fridge');
        $Freezer = $this->input->post('Freezer');
        $Extractor = $this->input->post('Extractor');
        $Pan_kit = $this->input->post('Pan_kit');
        $Dishes_kit = $this->input->post('Dishes_kit');
        $Coffee_machine = $this->input->post('Coffee_machine');
        $Inside_table = $this->input->post('Inside_table');

        $Inside_shower = $this->input->post('Inside_shower');
        $Outside_shower = $this->input->post('Outside_shower');
        $Integrated_bathroom = $this->input->post('Integrated_bathroom');
        $Portable_toilet = $this->input->post('Portable_toilet');
        $Sink_bath = $this->input->post('Sink_bath');

        $Bicycle_carrier = $this->input->post('Bicycle_carrier');
        $Side_awning = $this->input->post('Side_awning');
        $Outside_table = $this->input->post('Outside_table');
        $Barbecue = $this->input->post('Barbecue');
        $Towing_adaptor = $this->input->post('Towing_adaptor');
        $Outdoor_luggage_compartment = $this->input->post('Outdoor_luggage_compartment');
        $Outside_chairs = $this->input->post('Outside_chairs');

        $Solar_panels = $this->input->post('Solar_panels');
        $Outside_Eletric = $this->input->post('Outside_Eletric');
        $Auxiliary_battery = $this->input->post('Auxiliary_battery');
        $Eletric_generator = $this->input->post('Eletric_generator');

        $type1 = $this->input->post('id_types_1');
        $type2 = $this->input->post('id_types_2');
        $type3 = $this->input->post('id_types_3');
        $type4 = $this->input->post('id_types_4');
        $type5 = $this->input->post('id_types_5');
        $type6 = $this->input->post('id_types_6');
        $type7 = $this->input->post('id_types_7');

        $data = $this->Rent_m->find_result_m($park_location,$min_pr,$max_pr,$seats,$berth
        ,$power_steering,$cruise_control,$wheel_drive,$gps,$rear_camera,$parking_motion,$cabin_heating
        ,$ac,$central_lock,$baby_seat,$baby_car_chair,$winter_tires,$snow_chains,$wedge_levelers,$safety_kit
        ,$Autoradio,$CD_Player,$MP3,$Audio_in,$Bluetooth,$TV,$DVD_Player,$Satellite_dish,$Sponge
        ,$AC_life,$Bed_linen,$Swing_driver,$Swing_passenger,$Sink,$Stove,$Oven,$Fridge,$Freezer,$Extractor
        ,$Pan_kit,$Dishes_kit,$Coffee_machine,$Inside_table,$Inside_shower,$Outside_shower,$Integrated_bathroom,$Portable_toilet,$Sink_bath
        ,$Bicycle_carrier,$Side_awning,$Outside_table,$Barbecue,$Towing_adaptor,$Outdoor_luggage_compartment,$Outside_chairs
        ,$Solar_panels,$Outside_Eletric,$Auxiliary_battery,$Eletric_generator,$type1,$type2,$type3,$type4,$type5,$type6,$type7,$start_date,$end_date);

        // var_dump($min_pr);exit;
        return $this->load->view('rent/rv_list',$data);
    }

    public function select_rv($ads_id)
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("renting","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("renting","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("renting","fr");
		}
		else{
			$this->lang->load("renting","pt");
        }
        
        $var['title']= $this->lang->line('renttitle');
                
        $data = $this->Rent_m->get_detail($ads_id);
        $data['user'] = $this->User_m->get_sign();
        $data['notes'] = $this->Rent_m->get_note();
        $data['num'] = $this->Rent_m->note_num();
        $data['daterange'] = $this->Rent_m->date_range($ads_id);

        $this->load->view('components/header',$var);
        $this->load->view('userpage/components/header',$data);
        $this->load->view('components/footer_new');
        $this->load->view('rent/selected_rv',$data); 
    }

    public function check_schedule()
    {
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $ads_id = $this->input->post('ads_id');
        $default_perday = $this->input->post('perday');
        // echo $start;
        // echo $end;
        $sql = "SELECT * FROM booking WHERE ads_id = '$ads_id' AND status >= 4
        AND ((startDate BETWEEN '$start' AND '$end')OR (endDate BETWEEN '$start' AND '$end'))";
        $result = $this->Rent_m->customQuery($sql);

        $date_num = (strtotime($end) - strtotime($start))/86400;
        if($result){
            echo "no";
        }else{
            $sql_rate="SELECT tbl_season_calendar.ads_id,
            tbl_season_calendar.season_id,
            tbl_season_calendar.start_date,
            tbl_season_calendar.end_date, 
            tbl_rate.sson_rate_perday
            FROM tbl_season_calendar JOIN tbl_rate ON tbl_season_calendar.season_id = tbl_rate.id";
            $result_price = $this->Rent_m->ownquery($sql_rate);
            $season_cal_price = [];
            if(isset($result_price) && !empty($result_price)){
                foreach ($result_price as $row) {
                    $season_cal_price[] = array('sson_id' => $row['season_id'],
                    'ads_id' => $row['ads_id'],
                    'start_date' =>$row['start_date'],
                    'end_date' =>$row['end_date'],
                    'sson_rate_perday' =>$row['sson_rate_perday']
                    );
                }
            }
            
            $a_or_price = 0;
            $season_flag = false;
            for ($i_day=strtotime($start); $i_day < strtotime($end); $i_day+=86400) { //perday

                for ($j_season=0; $j_season < sizeof($season_cal_price); $j_season++) { //perseason
                    if (strtotime($season_cal_price[$j_season]['start_date']) <= $i_day && $i_day <= strtotime($season_cal_price[$j_season]['end_date'])) { //include one day
                        $season_flag = true;
                        $a_or_price += $season_cal_price[$j_season]['sson_rate_perday'];
                    }
                }

                if($season_flag){
                    $season_flag = false;
                    continue;
                } else 
                {
                    $a_or_price += $default_perday; //not include
                } 
            }
            // print_r($a_or_price);
            $date['date'] = $date_num;
            $date['all_price'] = $a_or_price;
            echo json_encode($date);
                

        }
    }

    public function check_user()
    {
        $email = $this->session->userdata('email');
        return $this->User_m->check_permit($email);
    }

    public function book_new()
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("renting","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("renting","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("renting","fr");
		}
		else{
			$this->lang->load("renting","pt");
		}
        $data['owner_email'] = $this->input->post('owner_email');
        $data['startDate'] = $this->input->post('startdate');
        $data['endDate'] = $this->input->post('enddate');
        $data['ads_id'] = $this->input->post('ads_id');
        $data['allday_pr'] = $this->input->post('allday');
        $data['service_pr'] = $this->input->post('service_fee');
        $data['deposit_pr'] = $this->input->post('deposit');
        $data['ck_clt'] = 1;
        $data['renter_email'] = $this->session->userdata('email');
        
        if($data['renter_email']){
            if($data['renter_email']==$data['owner_email']){
                echo "same_user";
            }else{
                $text1 = $this->lang->line('text1');
                $text2 = $this->lang->line('text2');
                $text3 = $this->lang->line('text3');
                $text4 = $this->lang->line('text4');
                $text5 = $this->lang->line('text5');

                $this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
                $this->email->to($data['owner_email']);    
                $this->email->subject($text1);
                $this->email->message(
                '<table border="0" cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                	<td align="center" bgcolor="#e9ecef">      
                		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                		<tr>
                			<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                			<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
                				'.$text2.'
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
                			<p style="margin: 0;">'.$text3.'</p>
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
                						<a href="http://bananacampers.pt/index.php/My_booking" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">'.$text4.'</a>
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
                			<p style="margin: 0;">'.$text5.'</p>
                			</td>
                		</tr>
                		</table>       
                	</td>
                	</tr>
                </table>');
                $result = $this->email->send();
                $this->Rent_m->booking_new($data);
            }            
        }else{
            echo "sign_in";
        }
    }

    public function schedule($ads_id)
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("schedule","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("schedule","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("schedule","fr");
		}
		else{
			$this->lang->load("schedule","pt");
        }

        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $bookingSchedule = $this->Rent_m->getall($ads_id);
            $tmpEventArr = [];
            if(isset($bookingSchedule) && !empty($bookingSchedule)){
                foreach ($bookingSchedule as $row) {
                    $tmpTitle = $row->renter_email.': '.$row->startDate.' ~ '.$row->endDate;
                    $title = ($row->reason) ? $row->reason : $tmpTitle ;
                    $background = ($row->reason) ?  'red': 'blue' ;
                    $date = date_create($row->endDate);
                    date_add($date,date_interval_create_from_date_string("1 days"));
                    $endDate = date_format($date,"Y-m-d");
                    $tmpEventArr[] = array('id' => $row->id,'title' => $title ,'start' =>$row->startDate,'end' =>$endDate,
                    'textColor' =>'white','backgroundColor' =>$background, 'borderColor' =>$background
                    );
                }
            }

            $s_bookingSchedule = $this->Rent_m->getallof_season($ads_id);           
            $s_tmpEventArr = [];
            if(isset($s_bookingSchedule) && !empty($s_bookingSchedule)){
                foreach ($s_bookingSchedule as $row) {
                    $s_tmpEventArr[] = array('id' => $row->id,
                    'ads_id' => $row->ads_id,
                    'start_date' =>$row->start_date,
                    'end_date' =>$row->end_date,
                    's_title' => $row->sson_title
                    );
                }
            }

            // var_dump($s_tmpEventArr[0]);

            $getSeasonRate = $this->Rent_m->getSeasonRate();
            $getSeason = $this->Rent_m->getSeason();
            $data['title'] = $this->lang->line('title');
            $data['tmpEventArr'] = $tmpEventArr;
            $data['ads_id'] = $ads_id;
            $data['season_rate'] = $getSeasonRate;
            $data['s_tmpEventArr'] = $s_tmpEventArr;
            $data['season_pro'] = $getSeason;
            $this->load->view('schedule/calendar', $data);      
        }
    }

    public function del_schedule()
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("schedule","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("schedule","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("schedule","fr");
		}
		else{
			$this->lang->load("schedule","pt");
		}
        $ads_id = $this->input->get_post('ads_id');
        $data['reason'] = $this->Rent_m->del_reason($ads_id);
        return $this->load->view('schedule/del_tb',$data);
    }
     
    public function del()
    {
        $id = $this->input->get_post('id');
        $this->Rent_m->del_daterange($id);
    }
    
    public function del1(){
        $id = $this->input->get_post('id');
        $this->Rent_m->del_season($id);
    }

    public function add_unavailableschedule()
    {
        $data['startDate'] = $start = $this->input->post('start_date');
        $data['endDate'] = $end = $this->input->post('end_date');
        $data['reason'] = $reason = $this->input->post('reason');
        $data['ads_id'] = $ads_id = $this->input->post('ads_id');
        $data['status'] = 6;

        $sql = "SELECT * FROM booking WHERE ads_id = '$ads_id'  
        AND ((startDate BETWEEN '$start' AND '$end')OR (endDate BETWEEN '$start' AND '$end'))";
        $result = $this->Rent_m->customQuery($sql);
        if($result){
            echo "exist";
        }else{
            $this->Rent_m->booking_new($data);
            echo "success";
        }
    }

    public function booking_list()
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
		
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $this->Rent_m->check_mybooks();
            $data['getBooking'] = $this->Rent_m->getall_list();

            $ttl['title'] = $this->lang->line('bookingsttl');
            $var['user'] = $this->User_m->get_sign();
            $var['notes'] = $this->Rent_m->get_note();
		    $var['num'] = $this->Rent_m->note_num();
            $this->load->view('components/header',$ttl);            
            $this->load->view('components/footer_new');
            $this->load->view('userpage/components/header',$var);
            $this->load->view('schedule/list',$data);
        }
    }

    public function get_cltinfo()
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
        $renter = $this->input->get_post('renter_email');
        $data['client'] = $this->User_m->get_user_info($renter);
        return $this->load->view('schedule/client_info_table',$data);
    }

    public function check_accept()
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
        
        

        $id = $this->input->post('id');        
        $renter_email = $this->input->post('renter');
        
        // $accept1 =$this->lang->line('accept1');
        // $accept2 =$this->lang->line('accept2');
        // $accept3 =$this->lang->line('accept3');
        // $accept4 =$this->lang->line('accept4');
        // $accept5 =$this->lang->line('accept5');

        // $this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
        // $this->email->to($renter_email);    
        // $this->email->subject($accept1);
        // $this->email->message(
        // '<table border="0" cellpadding="0" cellspacing="0" width="100%">
        // 	<tr>
        // 	<td align="center" bgcolor="#e9ecef">      
        // 		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        // 		<tr>
        // 			<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
        // 			<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
        // 				'.$accept2.'
        // 			</h1>
        // 			</td>
        // 		</tr>
        // 		</table>     
        // 	</td>
        // 	</tr>   
        // 	<tr>
        // 	<td align="center" bgcolor="#e9ecef">       
        // 		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        // 		<tr>
        // 			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
        // 			<p style="margin: 0;">'.$accept3.'</p>
        // 			</td>
        // 		</tr>
        // 		<tr>
        // 			<td align="left" bgcolor="#ffffff">
        // 			<table border="0" cellpadding="0" cellspacing="0" width="100%">
        // 				<tr>
        // 				<td align="center" bgcolor="#ffffff" style="padding: 12px;">
        // 					<table border="0" cellpadding="0" cellspacing="0">
        // 					<tr>
        // 						<td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
        // 						<a href="http://bananacampers.pt/index.php/My_booking" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">'.$accept4.'</a>
        // 						</td>
        // 					</tr>
        // 					</table>
        // 				</td>
        // 				</tr>
        // 			</table>
        // 			</td>
        // 		</tr> 
        // 		<tr>
        // 			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
        // 			<p style="margin: 0;">'.$accept5.'</p>
        // 			</td>
        // 		</tr>
        // 		</table>       
        // 	</td>
        // 	</tr>
        // </table>');
        // $result = $this->email->send();     
        $this->Rent_m->accept($id);        
    }

    public function check_reject()
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
        
        // $welcome = $this->lang->line('welbk');
        $id = $this->input->post('id');        
        // $renter_email = $this->input->post('renter');   
        // $this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
        // $this->email->to($renter_email);    
        // $this->email->subject($welcome);
        // $this->email->message(
        // '<table border="0" cellpadding="0" cellspacing="0" width="100%">
        // 	<tr>
        // 	<td align="center" bgcolor="#e9ecef">      
        // 		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        // 		<tr>
        // 			<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
        // 			<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
        // 				Welcome to rent from bananacampers
        // 			</h1>
        // 			</td>
        // 		</tr>
        // 		</table>     
        // 	</td>
        // 	</tr>   
        // 	<tr>
        // 	<td align="center" bgcolor="#e9ecef">       
        // 		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        // 		<tr>
        // 			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
        // 			<p style="margin: 0;">Sorry, your new reservation is rejected</p>
        // 			</td>
        // 		</tr>
        // 		<tr>
        // 			<td align="left" bgcolor="#ffffff">
        // 			<table border="0" cellpadding="0" cellspacing="0" width="100%">
        // 				<tr>
        // 				<td align="center" bgcolor="#ffffff" style="padding: 12px;">
        // 					<table border="0" cellpadding="0" cellspacing="0">
        // 					<tr>
        // 						<td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
        // 						<a href="http://bananacampers.pt/index.php/My_booking" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">View My reservation</a>
        // 						</td>
        // 					</tr>
        // 					</table>
        // 				</td>
        // 				</tr>
        // 			</table>
        // 			</td>
        // 		</tr> 
        // 		<tr>
        // 			<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
        // 			<p style="margin: 0;">bananacampers.pt</p>
        // 			</td>
        // 		</tr>
        // 		</table>       
        // 	</td>
        // 	</tr>
        // </table>');
        // $result = $this->email->send();
        $this->Rent_m->reject($id);
    }

    public function book_approve()
    {
        
        if($this->session->userdata('language')=='en'){
			$this->lang->load("schedule","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("schedule","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("schedule","fr");
		}
		else{
			$this->lang->load("schedule","pt");
        }

        $bookid = $this->input->get_post('bookid');
        $renter = $this->input->get_post('renter');
        $this->Rent_m->approve($bookid);
        
        $approve1 = $this->lang->line('approve1');
        $approve2 = $this->lang->line('approve2');
        $approve3 = $this->lang->line('approve3');
        $approve4 = $this->lang->line('approve4');
        $approve5 = $this->lang->line('approve5');
        $this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
        $this->email->to($renter);    
        $this->email->subject($approve1);
        $this->email->message(
        '<table border="0" cellpadding="0" cellspacing="0" width="100%">
        	<tr>
        	<td align="center" bgcolor="#e9ecef">      
        		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        		<tr>
        			<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
        			<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
        				'.$approve2.'
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
        			<p style="margin: 0;">'.$approve3.'</p>
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
        						<a href="http://bananacampers.pt/index.php/My_booking" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">'.$approve4.'</a>
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
        			<p style="margin: 0;">'.$approve5.'</p>
        			</td>
        		</tr>
        		</table>       
        	</td>
        	</tr>
        </table>');
        $result = $this->email->send();

    }

    public function myrenting_chat()
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
        $data['sender_img'] = $this->User_m->get_user_pic($data['sender']);
        $data['receiver_first'] = $this->User_m->get_user_first($data['receiver']);        
        $data['receiver_img'] = $this->User_m->get_user_pic($data['receiver']);

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
        						<a href="https://bananacampers.pt/index.php/My_booking" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">'.$chat3.'</a>
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

        $this->Rent_m->unread_renter($data['bookid']);
        $this->Rent_m->send_to_msg($data,$dat['bookid']); 
    }

    


}
?>