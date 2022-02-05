<?php

    class Payment_m extends CI_Model{

        protected $table = 'payment';
        
        function __construct(){
            $this->load->database();
        }

        public function deposit($bookid)
        {
            $this->db->where('id',$bookid);
            $data = $this->db->get('booking')->row();
            $renter = $data->renter_email;
            
            $this->db->where('email',$renter);
            $user = $this->db->get('user_tb')->row();

            $this->db->insert($this->table,
                array('email'=>$renter,
                'first'=>$user->first,'last'=>$user->last,
                'deposit_amount'=>$data->allday_pr+$data->service_pr,
                'own_pr'=>$data->allday_pr,
                'owner_email'=>$data->owner_email,
                'firstday'=>$data->startDate
            ));

            $this->db->where('email',$data->owner_email);
            $oldbalance = $this->db->get('user_tb')->row()->balance;

            $newbalance = $oldbalance+$data->allday_pr;

            $this->db->where('email',$data->owner_email);
            $this->db->update('user_tb',array('balance'=>$newbalance));

            $this->db->where('id',$bookid);
            $this->db->update('booking',array('status'=>4,'ck_own'=>0,'is_read_msg'=>0));
            return $data->owner_email;
        }
        
         public function get_info($bookid)
        {
            $this->db->where('id',$bookid);
            return $this->db->get('booking')->row();
        }
    
    }
?>