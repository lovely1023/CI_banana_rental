<?php
/**
 * 
 */
class Myaccount extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('User_m');
        $this->load->model('Rent_m');
    }
    
    public function index(){
        if($this->session->userdata('language')=='en'){
			$this->lang->load("myaccount","en");
			$this->lang->load("first","en");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("myaccount","fr");
			$this->lang->load("first","fr");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("myaccount","sp");
            $this->lang->load("first","sp");
        }else{
			$this->lang->load("myaccount","pt");
			$this->lang->load("first","pt");
        }
        
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $var['title']= $this->lang->line('title');
            $data['user'] = $this->User_m->get_sign();
            $data['notes'] = $this->Rent_m->get_note();
		    $data['num'] = $this->Rent_m->note_num();
            $this->load->view('components/header',$var); 
            $this->load->view('components/footer_new');
            $this->load->view('userpage/components/header',$data);
            $this->load->view('userpage/myaccount');
        }
        
    }

    public function get_profile()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $profile =  $this->User_m->get_profile();
            echo json_encode($profile);
        }
    }

    public function up_identity()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $first = $this->input->post('first');
            $last = $this->input->post('last');
            $phone_num = $this->input->post('phone_num');
            $birth = $this->input->post('birth');
            $Country = $this->input->post('Country');
            $City = $this->input->post('City');
            $Street = $this->input->post('Street');
            $House_number = $this->input->post('House_number');
            $Postal_Code = $this->input->post('Postal_Code');
            $this->User_m->update_identity($first,$last,$phone_num,
            $Country,$City,$Street,$House_number,$Postal_Code,$birth);
        }
    }

    function up_description(){
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $description = $this->input->post('description');
            $this->User_m->up_description($description);
        }
    }

    function up_picture(){
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ph = $_FILES['picture'];
            $o_name= $ph['name'];
            $x = explode('.', $o_name);
            $exten = end($x);       
            $upload_name = time().'.'.$exten;

            @move_uploaded_file($_FILES['picture']['tmp_name'], './uploads/user_pictures/'.$upload_name);
            $this->User_m->up_picture($upload_name);
        }
    }

    public function up_doc()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ph1 = $_FILES['drive_doc'];
            $ph2 = $_FILES['identity'];
            $o_name1= $ph1['name'];
            $o_name2= $ph2['name'];
            $x1 = explode('.', $o_name1);
            $x2 = explode('.', $o_name2);
            $exten1 = end($x1);       
            $exten2 = end($x2);       
            $upload_name1 = time().'1.'.$exten1;
            $upload_name2 = time().'2.'.$exten2;

            @move_uploaded_file($_FILES['drive_doc']['tmp_name'], './uploads/driving_license/'.$upload_name1);
            @move_uploaded_file($_FILES['identity']['tmp_name'], './uploads/identity_cards/'.$upload_name2);

            $this->User_m->up_doc($upload_name1,$upload_name2);
        }
    }

    public function up_doc1()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ph1 = $_FILES['drive_doc'];
            $o_name1= $ph1['name'];
            $x1 = explode('.', $o_name1);
            $exten1 = end($x1);       
            $upload_name1 = time().'1.'.$exten1;

            @move_uploaded_file($_FILES['drive_doc']['tmp_name'], './uploads/driving_license/'.$upload_name1);

            $this->User_m->up_doc1($upload_name1);
        }
    }

    public function up_doc2()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $ph2 = $_FILES['identity'];
            $o_name2= $ph2['name'];
            $x2 = explode('.', $o_name2);
            $exten2 = end($x2);       
            $upload_name2 = time().'2.'.$exten2;

            @move_uploaded_file($_FILES['identity']['tmp_name'], './uploads/identity_cards/'.$upload_name2);

            $this->User_m->up_doc2($upload_name2);
        }
    }

    public function change_pw()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $old = $this->input->post('old');
            $newpw = $this->input->post('newpw');
            $current_pw = $this->User_m->get_pw();
            if(md5($old)==$current_pw->password){
                $this->User_m->change_pw(md5($newpw));
                echo "ok";
            }else{
                echo "otherpw";
            }
        }
        
    }

    public function up_bank()
    {
        if(!$this->session->has_userdata('email')){
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }else{
            $iban = $this->input->post('iban');
            

            $this->User_m->update_bank($iban);
        }
    }

}
?>