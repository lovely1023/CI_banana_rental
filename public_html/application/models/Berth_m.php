<?php

    class Berth_m extends CI_Model{

        protected $table = 'rv_berth_tb';
        
        function __construct(){
            $this->load->database();
        }
    
        public function put_p($data)
        {
            $this->db->insert($this->table,$data);        
        }

        public function get_all($ads_id)
        {
            $this->db->where('ads_id',$ads_id);
            $data = $this->db->get($this->table)->result();
            return $data;        
        }
        
        public function check_ads($ads_id)
        {
            $this->db->where('ads_id',$ads_id);
            return $this->db->get($this->table)->num_rows();
        }

        public function get_old_id($ads_id)
        {
            $this->db->where('ads_id',$ads_id);
            $this->db->order_by('created_at','DESC');
            $row = $this->db->limit(1)->get($this->table)->row_array();
            return $row['berth_num'];
        }
        
        public function add_berth($data)
        {
            $this->db->insert($this->table,$data);
        }

        public function del_berth($id)
        {
            $this->db->where('id',$id);
            $this->db->delete($this->table);
        }

        public function all_berth()
        {
            $email=$this->session->userdata('email');
            return $this->db->where('email',$email)->get($this->table)->row();
        }
    
    }

?>