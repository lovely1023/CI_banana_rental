<?php
/**
 * 
 */
class My_ads extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('Ad_m');
        $this->load->model('User_m');
        $this->load->model('Photo_m');
        $this->load->model('Berth_m');
        $this->load->model('Rent_m');
        $this->load->model('Checkbox_m');
        
       
        
    }
    
    public function index(){
        if($this->session->userdata('language')=='en'){
			$this->lang->load("myads","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("myads","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("myads","fr");
        }
        else{
			$this->lang->load("myads","pt");
        }

        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $var['title']=  $this->lang->line('ttl');
            $data['user'] = $this->User_m->get_sign();
            $data['notes'] = $this->Rent_m->get_note();
		    $data['num'] = $this->Rent_m->note_num();
            $this->load->view('components/header',$var);
            $this->load->view('userpage/components/header',$data);
            $this->load->view('components/footer_new');
            $this->load->view('userpage/myads');
        }
        
    }

    public function read_myads()
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("myads","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("myads","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("myads","fr");
        }
        else{
			$this->lang->load("myads","pt");
        }
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $data['ads'] = $this->Ad_m->all_ads();

            if($data['ads']){
                return $this->load->view('userpage/my_ads_component/myads_first_tb',$data);
            }else{
                echo "none";
            }
        }
        
    }
    
    public function selph_update()
    {
        $id = $this->input->get_post('id');
        $ph = $_FILES['up_ph'];
        $o_name= $ph['name'];
        $x = explode('.', $o_name);
        $exten = end($x);       
        $img_name = time().'.'.$exten;
        
        @move_uploaded_file($_FILES['up_ph']['tmp_name'], './uploads/ads_photos/'.$img_name);
        
        $this->Photo_m->up_photo($id,$img_name);
    }

    public function selph_del()
    {
        $id = $this->input->get_post('id');
        $this->Photo_m->del_photo($id);
    }


    public function show_myads_details($ads_id,$v_type)
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("myads","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("myads","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("myads","fr");
        }
        else{
			$this->lang->load("myads","pt");
        }

        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $var['title']="My ads | Bananacampers";
            $data['ads_id'] = $ads_id;
            $data['v_type'] = $v_type;

            $this->load->view('components/head_new',$var);
            // $this->load->view('userpage/components/header');
            $this->load->view('components/footer_new');
            $this->load->view('userpage/my_ads_component/myads_details',$data);
        }         
    }

    public function get_all_photo()
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("myads","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("myads","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("myads","fr");
        }
        else{
			$this->lang->load("myads","pt");
        }
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ads_id = $this->input->get_post('ads_id');
            $data['photos'] = $this->Photo_m->get_photo($ads_id);
            $this->load->view('userpage/my_ads_component/photos',$data);
        }
    }

    public function add_newphoto()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ph = $_FILES['new_photo'];
            $o_name= $ph['name'];
            $x = explode('.', $o_name);
            $exten = end($x);       
            $data['img_name'] = time().$i.'.'.$exten;
            
            @move_uploaded_file($_FILES['new_photo']['tmp_name'], './uploads/ads_photos/'.$data['img_name']);
            $data['ads_id']=$this->input->get_post('ads_id');
            $current_num = $this->Photo_m->get_photo_num($data['ads_id']);
            $data['photo_num'] = $current_num + 1;
            $this->Photo_m->create_photo($data);
        }
    }

    public function get_type()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $data['ads_id']=$this->input->get_post('ads_id');
            $data = $this->Ad_m->read($data['ads_id']);
            echo json_encode($data);
        }
    }

    public function read_check()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ads_id = $this->input->get_post('ads_id');
            $data = $this->Checkbox_m->get_all($ads_id);
            echo json_encode($data);
        }
    }

    public function get_berth()
    {
        if($this->session->userdata('language')=='en'){
			$this->lang->load("myads","en");
		}elseif ($this->session->userdata('language')=='sp') {
            $this->lang->load("myads","sp");
        }elseif ($this->session->userdata('language')=='fr') {
            $this->lang->load("myads","fr");
        }
        else{
			$this->lang->load("myads","pt");
        }
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ads_id = $this->input->get_post('ads_id');
            $data['berths'] = $this->Berth_m->get_all($ads_id);
            
            return $this->load->view('creating_ads/berth_tb',$data);
        }
        
    }

    public function create_berth()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $data['type_berth'] = $this->input->post('type_berth');
            $data['width_berth'] = $this->input->post('width_berth');
            $data['length_berth'] = $this->input->post('length_berth');
            $data['ads_id'] = $this->input->post('ads_id');
            
            $old_num = $this->Berth_m->get_old_id($data['ads_id']);

            $data['berth_num'] = $old_num + 1;
            
            $this->Berth_m->add_berth($data);
        }
    }

    public function update_type()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ads_id = $this->input->post('ads_id');
            $chassis_brand = $this->input->post('id_chassis_brand');
            $chassis_model = $this->input->post('id_chassis_model');
            $model_brand = $this->input->post('id_model_brand');
            $conversion_model = $this->input->post('id_conversion_model');
            $numbers_seats = $this->input->post('id_numbers_seats');
            $number_seatbelts = $this->input->post('id_number_seatbelts');
            $number_berth = $this->input->post('id_number_berth');
            
            $this->Ad_m->update_type($ads_id,$chassis_brand,$chassis_model,$model_brand,$conversion_model,$numbers_seats,$number_seatbelts,$number_berth);
        }
    }

    public function update_charact()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ads_id = $this->input->post('ads_id');
            $license_plate = $this->input->post('id_license_plate');
            $registered_country = $this->input->post('id_registered_country');
            $license_plate_year = $this->input->post('id_license_plate_year');
            $total_weight = $this->input->post('id_total_weight');
            $fuel = $this->input->post('id_fuel');
            $vehicle_length = $this->input->post('id_vehicle_length');
            $vehicle_consumption = $this->input->post('id_vehicle_consumption');
            $vehicle_width = $this->input->post('id_vehicle_width');
            $vehicle_height = $this->input->post('id_vehicle_height');
            $acquisition_value = $this->input->post('id_acquisition_value');
            $cell_phone = $this->input->post('id_cell_phone');
            
            $this->Ad_m->update_charact($ads_id,$license_plate,$registered_country,$license_plate_year,
            $total_weight,$fuel,$vehicle_length,$vehicle_consumption,$vehicle_width,
            $vehicle_height,$acquisition_value,$cell_phone);
        }
    }

    public function update_intro()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ads_id = $this->input->post('ads_id');
            $intro = $this->input->post('intro');
            $this->Ad_m->update_intro($ads_id,$intro);
        }
    }

    public function update_parking_address()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ads_id = $this->input->post('ads_id');
            $Street = $this->input->post('Street');
            $Number = $this->input->post('Number');
            $Flat_house = $this->input->post('Flat_house');
            $Zip_code = $this->input->post('Zip_code');
            $City = $this->input->post('City');
            $District = $this->input->post('District');
            $Country = $this->input->post('Country');
            $this->Ad_m->update_parking_address($ads_id,$Street,$Number,$Flat_house,$Zip_code,$City,$District,$Country);
        }
    }

    public function update_price()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ads_id = $this->input->post('ads_id');
            $price = $this->input->post('price');
            $deposit = $this->input->post('deposit');
            $this->Ad_m->update_price($ads_id,$price,$deposit); 
        }
    }


}
?>