<?php
class Registration_model extends CI_Model {
            function __construct(){
                    parent::__construct();
                    $this->load->database();
            }
            function registerUser($data){
                 return $this->db->insert('registration',$data);
            }
            function fetchState(){
                //$this->db->order_by("","ASC");
                $query = $this->db->get('state');
                //echo "<script type='text/javascript'>alert('Fetch State funuction executed');</script>";
                return $query->result(); 
        }
        function fetchDistrict($stateId){
                //$this->db->order_by("","ASC");
                $query = $this->db->get_where('district',array('stateId'=>$stateId));
                //echo "<script type='text/javascript'>alert('Fetch District function Called');</script>";
                $output= '<option value="">जिल्हा निवडा</option>';
                foreach ($query->result() as $row)
                {
                    $str=$row->District_English_Name.' / '.$row->District_Marathi_Name;
                    $output .= '<option value="'.$row->districtId.'">'.$str.'</option>';
                }
                return $output; 
        }
        function fetchCity($districtId){
                //$this->db->order_by("","ASC");
                $query = $this->db->get_where('tahsil',array('DistrictId'=>$districtId));
                //echo "<script type='text/javascript'>alert('Fetch City function Called');</script>";
                $output= '<option value="">जिल्हा निवडा</option>';
                foreach ($query->result() as $row)
                {
                    $str=$row->Tahsil_English_Name.' / '.$row->Tahsil_Marathi_Name;
                    $output .= '<option value="'.$row->TahsilId.'">'.$str.'</option>';
                }
                return $output; 
        }
     }
