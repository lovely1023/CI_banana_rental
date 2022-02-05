<?php

class Ad_m extends CI_Model{
    protected $table = 'ads_step';

    function __construct()
    {
        $this->load->database();
    }

    public function read_last_step($email)
    {
        $this->db->select('step');
        $this->db->where('email',$email);
        $this->db->order_by('created_at','DESC');
        $row = $this->db->limit(1)->get($this->table)->row_array();
        return $row['step'];
    }

    public function lasted_id()
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->order_by('created_at','DESC');
        $row = $this->db->limit(1)->get($this->table)->row_array();
        return $row['id'];
    }

    public function c_step1($data)
    {
        $this->db->insert($this->table,$data);
        $this->db->insert_id();
    }

    public function c_step2($ad_id,$license_p,$reg_country,$license_p_year,$total_weight,$fuel,$consumption,$length,$width,$height,$acquisition_v,$cell_phone)
    {
        $this->db->where('id',$ad_id);
        $this->db->update($this->table,array('license_p'=>$license_p,'reg_country'=>$reg_country,'license_p_year'=>$license_p_year,'total_weight'=>$total_weight,'fuel'=>$fuel,'consumption'=>$consumption,'length'=>$length,'width'=>$width,'height'=>$height,'acquisition_v'=>$acquisition_v,'cell_phone'=>$cell_phone,'step'=>2));
    }

    public function update_set_num($id,$step)
    {
        $this->db->where('id',$id);
        $this->db->update($this->table,array('step'=>$step));
    }

    public function create_intro($ads_id,$intro)
    {
        $this->db->where('id',$ads_id);
        $this->db->update($this->table,array('intro'=>$intro));
    }

    public function read_intro($id)
    {
        return $this->db->where('id',$id)->get($this->table)->row('intro');
        
    }

    public function update_park_info($id,$street,$Number,$Flat_house,$Zip_code,$City,$District,$Country)
    {
        $this->db->where('id',$id)->update($this->table,array('Street'=>$street,'Number'=>$Number,'Flat_house'=>$Flat_house,'Zip_code'=>$Zip_code,'City'=>$City,'District'=>$District,'Country'=>$Country,));
    }

    public function read($id)
    {
        return $this->db->where('id',$id)->get($this->table)->row();
        
    }

    public function step8_ads($id,$price,$deposit)
    {
        $this->db->where('id',$id)->update($this->table,array('price'=>$price,'deposit'=>$deposit));
    }

    public function all_ads()
    {
        $email=$this->session->userdata('email');

        $this->db->select('ads_step.*,rv_photo_tb.img_name');
        $this->db->where('email',$email);
        $this->db->where('step',9);
        $this->db->where('rv_photo_tb.photo_num',1);
        $this->db->join('rv_photo_tb','ads_step.id = rv_photo_tb.ads_id');
        // $this->db->join('rv_berth_tb','ads_step.id = rv_berth_tb.ads_id');
        // $this->db->join('vehicle_equipements','ads_step.id = vehicle_equipements.ads_id');
        $this->db->from($this->table);
        $myads = $this->db->get()->result();
        return $myads;
    }

    public function update_type($ads_id,$chassis_brand,$chassis_model,$model_brand,
        $conversion_model,$numbers_seats,$number_seatbelts,$number_berth)
    {
        $this->db->where('id',$ads_id);
        $this->db->update($this->table,array('chassis_brand'=>$chassis_brand,'chassis_model'=>$chassis_model,
        'model_brand'=>$model_brand,'conversion_model'=>$conversion_model,'seats'=>$numbers_seats,
        'seatbelts'=>$number_seatbelts,'berth'=>$number_berth));
    }

    public function update_charact($ads_id,$license_plate,$registered_country,$license_plate_year,
        $total_weight,$fuel,$vehicle_length,$vehicle_consumption,$vehicle_width,
        $vehicle_height,$acquisition_value,$cell_phone)
    {
        $this->db->where('id',$ads_id);
        $this->db->update($this->table,array('license_p'=>$license_plate,'reg_country'=>$registered_country,
            'license_p_year'=>$license_plate_year,'total_weight'=>$total_weight,'fuel'=>$fuel,
            'length'=>$vehicle_length,'consumption'=>$vehicle_consumption,'width'=>$vehicle_width,'height'=>$vehicle_height,
            'acquisition_v'=>$acquisition_value,'cell_phone'=>$cell_phone));
    }

    public function update_intro($ads_id,$intro)
    {
        $this->db->where('id',$ads_id);
        $this->db->update($this->table,array('intro'=>$intro));
    }

    public function update_parking_address($ads_id,$Street,$Number,$Flat_house,$Zip_code,$City,$District,$Country)
    {
        $this->db->where('id',$ads_id);
        $this->db->update($this->table,array('Street'=>$Street,'Number'=>$Number,'Flat_house'=>$Flat_house,'Zip_code'=>$Zip_code,
        'City'=>$City,'District'=>$District,'Country'=>$Country));
    }

    public function update_price($ads_id,$price,$deposit)
    {
        $this->db->where('id',$ads_id);
        $this->db->update($this->table,array('price'=>$price,'deposit'=>$deposit));
    }
    public function complete($ads_id,$tech,$lisc_plt,$assurance,$docname1,$docname2,$docname3)
    {
        $this->db->where('id',$ads_id);
        $this->db->update($this->table,
        array('tech_inspec'=>$tech,'lics_plate'=>$lisc_plt,'assurance'=>$assurance,'step'=>9,
                'tech_inspec_doc'=>$docname3,'lics_plate_doc'=>$docname2,'assurance_doc'=>$docname3));
    }
    
}
?>