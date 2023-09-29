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


  }

 ?>