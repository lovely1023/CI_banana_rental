<?php

class Create_ads extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('Ad_m');
        $this->load->model('photo_m');
        $this->load->model('Berth_m');
        $this->load->model('checkbox_m');
        $this->load->model('User_m');
        if($this->session->userdata('language')=='en'){
			$this->lang->load("createad","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("createad","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("createad","fr");
		}
		else{
			$this->lang->load("createad","pt");
        }
    }
    
    public function index(){
        
        $title = $this->lang->line('title');
        if($this->session->has_userdata('email')){
            $var['title']= $title;
            $this->load->view('components/head_new',$var);

            $step_num = $this->Ad_m->read_last_step($this->session->userdata('email'));
            if($step_num==1){
                $this->load->view('creating_ads/step2');
            }else if($step_num==2){
                $this->load->view('creating_ads/step3');
            }else if($step_num==3){
                $this->load->view('creating_ads/step4');
            }else if($step_num==4){
                $this->load->view('creating_ads/step5');
            }else if($step_num==5){
                $this->load->view('creating_ads/step6');
            }else if($step_num==6){
                $this->load->view('creating_ads/step7');
            }else if($step_num==7){
                $this->load->view('creating_ads/step8');
            }else if($step_num==8){
                $this->load->view('creating_ads/step9');
            }else{
                $this->load->view('creating_ads/step_start');
            }    

            $this->load->view('components/footer');
        }else{
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
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        }
        
    }

    public function check_permit()
    {
        $email = $this->session->userdata('email');
        return $this->User_m->check_permit($email);
    }

    public function step1()
    {
        if($this->session->has_userdata('email')){
            
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('creating_ads/step_start');
            $this->load->view('components/footer');
            
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }
    public function step2()
    {
        if($this->session->has_userdata('email')){
            
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step2');
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }
    public function step3()
    {
        
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";
            
            $this->load->view('components/header',$var);            
            $this->load->view('creating_ads/step3');
            $this->load->view('components/footer');
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }
    public function step4()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step4');
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }
    public function step5()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step5');
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }
    public function step6()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step6');
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }
    public function step7()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step7');
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }
    public function step8()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step8');
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }
    public function step9()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            
            $this->load->view('creating_ads/step9');
            $this->load->view('components/footer');
        }else{
            $var['title']="Sign in";
            // $this->load->view('components/header',$var);
            // $this->load->view('sign/sign_in');
            $this->load->view('sign/login', $var);
            $this->load->view('components/footer');
        } 
    }

    public function create_step1()
    {
        $data['vehicle_type'] = $this->input->post('vehicle_type');
        $data['chassis_brand'] = $this->input->post('chassis_brand');
        $data['chassis_model'] = $this->input->post('chassis_model');
        $data['conversion_model'] = $this->input->post('conversion_model');
        $data['seats'] = $this->input->post('seats');
        $data['seatbelts'] = $this->input->post('seatbelts');
        $data['berth'] = $this->input->post('berth');
        $data['step'] = 1;

        $data['email'] = $this->session->userdata('email');
        
        $this->Ad_m->c_step1($data);
        // echo $id;
    }

    public function update_step1()
    {
        $data['vehicle_type'] = $this->input->post('vehicle_type');
        $data['chassis_brand'] = $this->input->post('chassis_brand');
        $data['chassis_model'] = $this->input->post('chassis_model');
        $data['model_brand'] = $this->input->post('model_brand');
        $data['conversion_model'] = $this->input->post('conversion_model');
        $data['seats'] = $this->input->post('seats');
        $data['seatbelts'] = $this->input->post('seatbelts');
        $data['berth'] = $this->input->post('berth');
        $data['step'] = 1;

        $data['email'] = $this->session->userdata('email');
        
        $id = $this->Ad_m->c_step1($data);
        echo $id;
    }

    public function create_step2()
    {
        $license_p = $this->input->post('license_p');
        $reg_country = $this->input->post('reg_country');
        $license_p_year = $this->input->post('license_p_year');
        $total_weight = $this->input->post('total_weight');
        $fuel = $this->input->post('fuel');
        $consumption = $this->input->post('consumption');
        $length = $this->input->post('length');
        $width = $this->input->post('width');
        $height = $this->input->post('height');
        $acquisition_v = $this->input->post('acquisition_v');
        $cell_phone = $this->input->post('cell_phone');

        $ad_id = $this->Ad_m->lasted_id();
        $this->Ad_m->c_step2($ad_id,$license_p,$reg_country,$license_p_year,$total_weight,$fuel,$consumption,$length,$width,$height,$acquisition_v,$cell_phone);
    }

    public function create_step3()
    {
        $cnt = $this->input->get_post('cnt');
        $data['ads_id']=$this->Ad_m->lasted_id();

        for ($i=1; $i <= $cnt ; $i++) { 
            $ph = $_FILES['p_'.$i];
            $o_name= $ph['name'];
            $x = explode('.', $o_name);
            $exten = end($x);       
            $data['img_name'] = time().$i.'.'.$exten;
            $data['photo_num'] = $i;

            @move_uploaded_file($_FILES['p_'.$i]['tmp_name'], './uploads/ads_photos/'.$data['img_name']);
            $this->photo_m->create_photo($data);

        }
        
        $step = 3;
        $this->Ad_m->update_set_num($data['ads_id'],$step);

    }

    public function read_step4()
    {
        $ads_id = $this->Ad_m->lasted_id();
        $data['berths'] = $this->Berth_m->get_all($ads_id);
        if($data['berths']){
            return $this->load->view('creating_ads/berth_tb',$data);
        }else{
            return $data['berths'];
        }     
        
    }

    public function create_step4()
    {
        $data['type_berth'] = $this->input->post('type_berth');
        $data['width_berth'] = $this->input->post('width_berth');
        $data['length_berth'] = $this->input->post('length_berth');
        
        $ads_id = $this->Ad_m->lasted_id();
        $old_num = $this->Berth_m->get_old_id($ads_id);

        $data['berth_num'] = $old_num + 1;
        
        $data['ads_id'] = $ads_id;
        $this->Berth_m->add_berth($data);
    }

    public function del_berth()
    {
        $berth_id = $this->input->get_post('del_id');
        $this->Berth_m->del_berth($berth_id);
    }

    public function update_step()
    {
        $ads_id=$this->Ad_m->lasted_id();
        $step=$this->input->get_post('step');

        $this->Ad_m->update_set_num($ads_id,$step);
    }

    public function up_step5()
    {
        $col = $this->input->get_post('id');
        $state = $this->input->get_post('state');

        $ads_id=$this->Ad_m->lasted_id();
        var_dump($ads_id);
        $exist = $this->checkbox_m->read_ads($ads_id);
        if($exist==0){
            $this->checkbox_m->create_check($ads_id,$col,$state);
        }else{
            $this->checkbox_m->up_check($ads_id,$col,$state);
        }
       
    }

    public function up_check_ad()
    {
        $ads_id = $this->input->get_post('ads_id');
        $col = $this->input->get_post('id');
        $state = $this->input->get_post('state');

        $exist = $this->checkbox_m->read_ads($ads_id);
        if($exist==0){
            $this->checkbox_m->create_check($ads_id,$col,$state);
        }else{
            $this->checkbox_m->up_check($ads_id,$col,$state);
        }
       
    }

    public function add_dining_seats_step5()
    {
        $val = $this->input->get_post('value');
        $ads_id = $this->Ad_m->lasted_id();
        $this->checkbox_m->add_dining_seats_step5($ads_id,$val);
         
    }

    public function read_step5()
    {
        $ads_id = $this->Ad_m->lasted_id();
        $data = $this->checkbox_m->get_all($ads_id);
        echo json_encode($data);
    }

    public function create_intro()
    {
        $intro = $this->input->get_post('intro');
        
        $ads_id = $this->Ad_m->lasted_id();
        $this->Ad_m->create_intro($ads_id,$intro);
        $step = 6;
        $this->Ad_m->update_set_num($ads_id,$step);
    }
    
    function read_intro()
    {
        $ads_id = $this->Ad_m->lasted_id();
        echo $this->Ad_m->read_intro($ads_id);
    }

    public function create_step7()
    {
        $street = $this->input->post('Street');
        $Number = $this->input->post('Number');
        $Flat_house = $this->input->post('Flat_house');
        $Zip_code = $this->input->post('Zip_code');
        $City = $this->input->post('City');
        $District = $this->input->post('District');
        $Country = $this->input->post('Country');

        $ads_id = $this->Ad_m->lasted_id();
        $this->Ad_m->update_park_info($ads_id,$street,$Number,$Flat_house,$Zip_code,$City,$District,$Country);

        $step = 7;
        $this->Ad_m->update_set_num($ads_id,$step);
    }

    public function read()
    {
        $ads_id = $this->Ad_m->lasted_id();
        $data = $this->Ad_m->read($ads_id);
        echo json_encode($data);
    }

    public function create_step8()
    {
        $price = $this->input->post('price');
        $deposit = $this->input->post('deposit');
        
        $ads_id = $this->Ad_m->lasted_id();
        $this->Ad_m->step8_ads($ads_id,$price,$deposit);
        $step = 8;
        $this->Ad_m->update_set_num($ads_id,$step);
    }

    public function complete_ad()
    {
        $ph1 = $_FILES['doc1'];
        $ph2 = $_FILES['doc2'];
        $ph3 = $_FILES['doc3'];
        $o_name1= $ph1['name'];
        $o_name2= $ph2['name'];
        $o_name3= $ph3['name'];
        $x1 = explode('.', $o_name1);
        $x2 = explode('.', $o_name2);
        $x3 = explode('.', $o_name3);
        $exten1 = end($x1);       
        $exten2 = end($x2);       
        $exten3 = end($x3);       
        $tech = time().'1'.'.'.$exten1;
        $lisc_plt = time().'2'.'.'.$exten2;
        $assurance = time().'3'.'.'.$exten3;

        @move_uploaded_file($_FILES['doc1']['tmp_name'], './uploads/drive_document/'.$tech);
        @move_uploaded_file($_FILES['doc2']['tmp_name'], './uploads/drive_document/'.$lisc_plt);
        @move_uploaded_file($_FILES['doc3']['tmp_name'], './uploads/drive_document/'.$assurance);
        
        $docname1 = $this->input->post('docname1');
        $docname2 = $this->input->post('docname2');
        $docname3 = $this->input->post('docname3');
        $ads_id = $this->Ad_m->lasted_id();
        $this->Ad_m->complete($ads_id,$tech,$lisc_plt,$assurance,$docname1,$docname2,$docname3);
    }

}
?>