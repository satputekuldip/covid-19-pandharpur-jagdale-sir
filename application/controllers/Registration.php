<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration extends CI_Controller 
{
    
    function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->database();
            $this->load->model('registration_model');
            $this->load->library('form_validation');
         }
	public function index()
	{   
                $this->load->library('session');
                $data['statelist'] = $this->registration_model->fetchState();
                $this->load->view('header');
		$this->load->view('registration',$data);                
                $this->load->view('footer');
	}
   function registerMember()
    {         
       //$this->load->library('session');    
        //$str = $this->session->userdata('user');
        //$pst=$str['policeStation'];
          //  if(!($this->session->userdata('user'))){
           //         $this->load->view('login_page');
            //       exit();
           // }
           // else{                    
              //  $loginId = $this->session->userdata('user'); 
              //  $ctrId = $loginId['ctrId'];
                $fullName 	= $this->security->xss_clean($this->input->post('fullName'));
                $gender		= $this->security->xss_clean($this->input->post('gender'));
                $age      	= $this->security->xss_clean($this->input->post('age'));
                $mobile 	= $this->security->xss_clean($this->input->post('mobile'));
                $district   	= $this->security->xss_clean($this->input->post('districtlist'));
                $city           = $this->security->xss_clean($this->input->post('city'));
                $address        = $this->security->xss_clean($this->input->post('address'));
                $permission     = $this->security->xss_clean($this->input->post('permission'));
                $state          = $this->security->xss_clean($this->input->post('statelist'));
                $medical_certi  = $this->security->xss_clean($this->input->post('medical_certificate'));
                $entrypoint   	= $this->security->xss_clean($this->input->post('entrypoint'));
                //$options = array("cost"=>4);
                //$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);			
                $insertData = array('fullName'=>$fullName,
                                    'gender'=>$gender,
                                    'age'=>$age,
                                    'mobile'=>$mobile,
                                    'state'=>$state,
                                    'district'=>$district,
                                    'city'=>$city,
                                    'address'=>$address,
                                    'permission'=>$permission,
                                    'medical_certificate'=>$medical_certi,
                                    'entrypoint'=>$entrypoint);			
                $que=$this->registration_model->registerUser($insertData);
                if($que>0){
                      echo "<script type='text/javascript'>alert('आपली नोंदणी यशस्वी पणे करण्यात आली आहे');</script>";
                      //$mobile="9545553888";
                      //$this->sendMobileSms($mobile,$pst);
                      $this->index();
                }
                else{
                    $this->session->set_flashdata('error', 'आपली नोंदणी केली जाऊ शकत नाही कृपया काही वेळानंतर पुन्हा प्रयत्न करा');
                     $this->index();
                }
        }
        
        function fetchDistrict()
        {
            $stateId = $this->security->xss_clean($this->input->post('stateId'));
            //echo "<script type='text/javascript'>alert('$stateId');</script>";
            echo  $this->registration_model->fetchDistrict($stateId); 
        } 
        function fetchCity()
        {
            $districtId = $this->security->xss_clean($this->input->post('districtId'));
            //echo "<script type='text/javascript'>alert('$districtId');</script>";
            echo  $this->registration_model->fetchCity($districtId); 
        } 
 }
