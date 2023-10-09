<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
  class Main_model extends CI_model
  {
  	  
    public function get_sider()
    {
      $this->db->select('*');
      $this->db->order_by('m_slider_order','DESC');
      $this->db->where('m_slider_status',1);
       $res = $this->db->get('master_slider_tbl')->result();
      return $res;
    }


    public function get_popular()
    {
      $this->db->select('*');
      $this->db->where('category',6);
       $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

     public function get_upcoming_event()
    {
      $this->db->select('*');
      $this->db->where('category',7);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_testinorial()
    {
      $this->db->select('*');
      $this->db->where('category',8);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_recentnews()
    {
      $this->db->select('*');
      $this->db->where('category',1);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }


    public function get_national()
    {
      $this->db->select('*');
      $this->db->where('category',9);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_state()
    {
      $this->db->select('*');
      $this->db->where('category',12);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }


    public function get_district()
    {
      $this->db->select('*');
      $this->db->where('category',13);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

     public function get_blog()
    {
      $this->db->select('*');
      $this->db->where('category',3);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_press()
    {
      $this->db->select('*');
      $this->db->where('category',5);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

     public function get_news()
    {
      $this->db->select('*');
      $this->db->where('category',14);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_news_recent()
    {
      $this->db->select('*');
      $this->db->where('category',1);
      $this->db->order_by('id','DESC');
      $this->db->limit(3);
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

     public function get_event()
    {
      $this->db->select('*');
      $this->db->where('category',4);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

   public function get_event_recent()
    {
      $this->db->select('*');
      $this->db->where('category',7);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_obcmorcha()
    {
      $this->db->select('*');
      $this->db->where('category',10);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_stmorcha()
    {
      $this->db->select('*');
      $this->db->where('category',16);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_scmorcha()
    {
      $this->db->select('*');
      $this->db->where('category',15);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      return $res;
    }

    public function get_post_details($id)
    {
      $this->db->select('*');
      $this->db->where('id',$id);
      $this->db->order_by('id','DESC');
      $this->db->where('m_post_status',1);
      $this->db->join('master_category_tbl', 'master_category_tbl.m_category_id  = master_post_tbl.category','left');
      $res = $this->db->get('master_post_tbl')->result();
      // print_r($res);die();
      return $res;
    }

    public function registration(){
      $data = array();
      $rand = rand(100009,999999);
      $mobileno=$this->input->post('mobileno');
      $message=$rand.' is the One Time Password for Your Application request. OTP are SECRET. Do Not Disclose it. - PSPU';
      $s_data = array(
        "name" => $this->input->post('name'),
        "email" => $this->input->post('email'),
        "mobileno" => $this->input->post('mobileno'),
        "otp" => $rand,
        "added_on" => date('Y-m-d H:i'),
      );
      $set = $this->db->insert('tbl_registration',$s_data);
      $last_id = $this->db->insert_id();
      $this->send_whatsapp($mobileno,$message);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['last_id'] = $last_id;
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function updateDetails(){
      $data = array();
      $otp = $this->input->post('otp');
      $ins_id = $this->input->post('ins_id');

      $result = $this->db->select('otp')->where('id',$ins_id)->get('tbl_registration')->result();
      $apiins='';
      foreach ($result as $key => $object) {
          $reg_otp=$object->otp;
      }

      if($otp==$reg_otp && $ins_id>0){
        $s_data = array(
          "is_indian_citizen" => $this->input->post('is_indian_citizen'),
          "is_indian_residence" => $this->input->post('is_indian_residence'),
          "password" => md5($this->input->post('password')),
          "password_text" => $this->input->post('password'),
          "gender" => $this->input->post('gender'),
          "dob" => date('Y-m-d',strtotime($this->input->post('dob'))),
        );
        $this->db->where('id',$ins_id);
        $set = $this->db->update('tbl_registration',$s_data);
        if(!empty($set)){
          $data['status'] = 'success';
          $data['last_id'] = $ins_id;
          $data['message'] = 'OTP Verified Successfully!';
        }
        else{
          $data['status'] = 'fail';
          $data['message'] = 'Somthing went wrong!';
        }
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Given OTP is wrong!';
      }
      return json_encode($data);
    }

    public function send_whatsapp($mobileno,$message)
    {
        $apiins='';
        $apikey='';
        $site='';
        $result = $this->db->select('*')->get('tbl_api')->result();
        foreach ($result as $key => $object) {
            $apiins=$object->apiins;
            $apikey=$object->apikey;
            $site=$object->site;
        }

        $url = $site.'/api/send?number=91'.$mobileno.'&type=text&message='.urlencode($message).'&filename=cars-360-raipur&instance_id='.$apiins.'&access_token='.$apikey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
    }


    public function get_states()
    {
      $this->db->select('*');
      // $this->db->distinct();
      $this->db->order_by('state', 'asc');
      $this->db->group_by("state");
      $res = $this->db->get('contry_state_city')->result();
      return $res;
    }

    public function get_assembly()
    {
      $this->db->select('*');
      $this->db->order_by('name', 'asc');
      $res = $this->db->get('assembly')->result();
      return $res;
    }

    public function get_state_district()
    {
      $state = $this->input->post('state');
      $this->db->select('*');
      // $this->db->distinct();
      $this->db->where('state', $state );
      $this->db->order_by('city', 'asc');
      $res = $this->db->get('contry_state_city')->result();
      return $res;
    }



    public function updateContactDetails(){
      $data = array();
      $ins_id = $this->input->post('ins_id');
        $s_data = array(
          "home_address" => $this->input->post('home_address'),
          "state" => $this->input->post('state'),
          "district" => $this->input->post('district'),
          "ac" => $this->input->post('ac'),
          "pincode" => $this->input->post('pincode'),
          "contribution" => $this->input->post('contribution'),
          "payment_mode" => $this->input->post('payment_mode'),
        );
        $this->db->where('id',$ins_id);
        $set = $this->db->update('tbl_registration',$s_data);
        if(!empty($set)){
          $data['status'] = 'success';
          $data['last_id'] = $ins_id;
          $data['message'] = 'Saved Successfully Proceed for Payment!';
        }
        else{
          $data['status'] = 'fail';
          $data['message'] = 'Somthing went wrong!';
        }
      return json_encode($data);
    }


    public function get_details($id)
    {
      $this->db->select('*');
      $this->db->where('id',$id);
       $res = $this->db->get('tbl_registration')->result();
      return $res;
    }



    public function payment_process(){
      $data = array();
      $ins_id = $this->input->post('id');
      return $ins_id;
    }

    public function payment_process_response(){
      $data = array();
      $ins_id = $this->input->post('id');
      $payment_id = $this->input->post('payment_id');
      $s_data = array(
          "payment_id" => $this->input->post('payment_id'),
          "payment_status" => $this->input->post('payment_status'),
          "payment_datetime" => date('Y-m-d H:i:s'),
        );
        $this->db->where('id',$ins_id);
        $set = $this->db->update('tbl_registration',$s_data);

        

        if(!empty($set)){
          // session start
          if($set){
            $usrdata=array('is_user' => true, 'ses_id' => $ins_id );
            $this->session->set_userdata($usrdata);
          }else{ 
            $this->session->set_flashdata('status','<div class="alert alert-danger"> <strong><i class="fa fa-warning"></i> &nbsp; Some Problem Occurred !...</strong> Please Try Again. </div>');
          }
          //send whatsapp
          $result = $this->db->select('mobileno,payment_datetime')->where('id',$ins_id)->get('tbl_registration')->result();
          $mobileno='';
          foreach ($result as $key => $object) {
              $mobileno=$object->mobileno;
              $payment_datetime=date('Y-m-d h:i A',strtotime($object->payment_datetime));
          }
          $message='Thank You for Donation - Your Payment ID : '.$payment_id.' Dated On : '.$payment_datetime.' ';
          $this->send_whatsapp($mobileno,$message);
          // end send whatsapp
          $data['status'] = 'success';
          $data['last_id'] = $ins_id;
          $data['message'] = 'Payment Successfully!';
        }
        else{
          $data['status'] = 'fail';
          $data['message'] = 'Somthing went wrong!';
        }
      return json_encode($data);
    }

    public function sendtransaction(){
      $data = array();
      $ins_id = $this->input->post('mobileno');
      return $ins_id;
    }


    // login details
    protected function login_details(){ 
      $this->require_login();
      $data['user_details'] = $this->user_details();
      return $data;
    }

    protected function require_login(){
      $is_user_in = $this->session->userdata('is_user');
      if(isset($is_user_in) || $is_user_in == true){ return;
      } else { redirect('Home/dashboard'); }
    }

    public function user_details($user_id){
        $this->db->select('*');
        $this->db->where("id", $user_id);
        $sql = $this->db->get("tbl_registration");
        return $sql->result();
    }


    public function verify(){ 
      $data['pagename'] = "Login";
      if($_SERVER["REQUEST_METHOD"] == "POST"){

        $rules = array(
          array('field'=>'email',   'label'=>'Login Id',      'rules'=>'trim|required'), 
          array('field'=>'password', 'label'=>'Login Password','rules'=>'trim|required')
        ); $this->form_validation->set_rules($rules); //pass the rules array here

         //by default initial load condition
        if ($this->form_validation->run() == FALSE) { }else{

          if($data = $this->validate_user()){

            $s_data = array(
              "last_login" => date('Y-m-d H:i:s'),
            );
            $this->db->where('id',$data[0]->id);
            $set = $this->db->update('tbl_registration',$s_data);

            //send whatsapp
            $result = $this->db->select('mobileno,last_login')->where('id',$data[0]->id)->get('tbl_registration')->result();
            $mobileno='';
            foreach ($result as $key => $object) {
                $mobileno=$object->mobileno;
                $last_login=date('Y-m-d h:i A');
            }
            $message='Thank You for Login PSPU - Welcome... Login Dated On : '.$last_login.' ';
            $this->send_whatsapp($mobileno,$message);
            // end send whatsapp

            $usrdata=array('is_user' => true, 'ses_id' => $data[0]->id );
            $this->session->set_userdata($usrdata);
            /* $this->User_model->manage_daily_activiy(); */     redirect('Home/dashboard');
          }else{ 
            $this->session->set_flashdata('status','<div class="alert alert-danger"> <strong><i class="fa fa-warning"></i> &nbsp; Login failed !...</strong> Check Email and Password.. <br> Please Try Again. </div>');
          }

        }

      }

      redirect('Home/login');
    }

    public function validate_user(){
      $pass = md5($this->input->post('password'));
      $this->db->select('id');
      $this->db->where('email',$this->input->post('email'));
      $this->db->where('password',$pass);
      $sql=$this->db->get('tbl_registration');
      if($sql->num_rows() == 1){ return $sql->result(); }else{ return false; }

    }

  }


  

 ?>