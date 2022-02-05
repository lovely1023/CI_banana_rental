<?php

    class Checkbox_m extends CI_Model{

        protected $table = 'vehicle_equipements';
        
        function __construct(){
            $this->load->database();
        }

        public function read_ads($ads_id)
        {
            $this->db->where('ads_id',$ads_id);
            $val = $this->db->get($this->table)->num_rows();
            return $val ;
        }
    
        public function up_check($ads_id,$col,$state)
        {
           $this->db->where('ads_id',$ads_id);
           $this->db->update($this->table,array($col=>$state));
        }

        public function create_check($ads_id,$col,$state)
        {
            $this->db->insert($this->table,array('ads_id'=>$ads_id,$col=>$state));
        }

        public function add_dining_seats_step5($ads_id,$val)
        {
            $this->db->where('ads_id',$ads_id);
            $this->db->update($this->table,array('dining_seats'=>$val));
        }
        public function get_all($ads_id)
        {
            $this->db->where('ads_id',$ads_id);
            return $this->db->get($this->table)->row();
        }

        public function all_berth()
        {
            $email=$this->session->userdata('email');
            return $this->db->where('email',$email)->get($this->table)->row();
        }
    
    
    }

?>