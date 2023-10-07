<?php 
 
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
      $s_data = array(
        "name" => $this->input->post('name'),
        "email" => $this->input->post('email'),
        "mobileno" => $this->input->post('mobileno'),
        "otp" => $rand,
        "added_on" => date('Y-m-d H:i'),
      );
      $set = $this->db->insert('tbl_registration',$s_data);
      $last_id = $this->db->insert_id();
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
      $reg_otp=$result['otp'];

      if($otp==$reg_otp && $ins_id>0){
        $s_data = array(
          "is_indian_citizen" => $this->input->post('is_indian_citizen'),
          "is_indian_residence" => $this->input->post('is_indian_residence'),
          "gender" => $this->input->post('gender'),
          "dob" => date('Y-m-d',strtotime($this->input->post('dob'))),
        );
        $this->db->where('id',$ins_id);
        $set = $this->db->update('tbl_registration',$s_data);
        if(!empty($set)){
          $data['status'] = 'success';
          $data['last_id'] = $ins_id;
          $data['message'] = 'Inserted Successfully!';
        }
        else{
          $data['status'] = 'fail';
          $data['reg_otp'] = $reg_otp;
          $data['message'] = 'Somthing went wrong!';
        }
      }
      else{
          $data['reg_otp'] = $reg_otp;
        $data['status'] = 'fail';
        $data['message'] = 'Given OTP is wrong!';
      }
      return json_encode($data);
    }

  }

 ?>