<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['pagename'] = 'Home';
		$data['slider'] = $this->Main_model->get_sider();
		$data['popular'] = $this->Main_model->get_popular();
		$data['upcoming_event'] = $this->Main_model->get_upcoming_event();
		$data['testimorial'] = $this->Main_model->get_testinorial();
		$data['news'] = $this->Main_model->get_recentnews();
		$this->load->view('home',$data);
	}

	public function about()
	{
		$data['pagename'] = 'About Us';
		$this->load->view('about',$data);
	}

	public function history()
	{  
		$data['pagename'] = 'Our History';
		$this->load->view('about',$data);
	}


	public function differences()
	{  
		$data['pagename'] = 'Why We Are Diffrence';
		$this->load->view('differences',$data);
	}

	public function organization()
	{  
		$data['pagename'] = 'Organization';
		$this->load->view('organization',$data);
	}

	public function philosophy()
	{  
		$data['pagename'] = 'Our Philosophy';
		$this->load->view('philosophy',$data);
	}

	public function contact()
	{   
		$data['pagename'] = 'Contact Us';
		$this->load->view('contact',$data);
	} 
	public function membership()
	{   
		$data['pagename'] = 'Membership';
		$this->load->view('membership',$data);
	}
   

   	public function donation()
	{   
		$data['pagename'] = 'Donation';
		$this->load->view('donation_res',$data);
	}

	public function login()
	{   
		$data['pagename'] = 'Login';
		$this->load->view('login',$data);
	}

	public function register()
	{   
		$data['pagename'] = 'Registration';
		$this->load->view('registration',$data);
	}

	public function election()
	{   
		$data['pagename'] = 'Election';
		$this->load->view('election',$data);
	}

	public function otp_verify($id)
	{   
		$data['pagename'] = 'OTP Verify';
		$data['ins_id'] = $id;

		$this->load->view('otp_verify',$data);
	}

	public function contact_details($id)
	{   
		$data['states'] = $this->Main_model->get_states();
		$data['assembly'] = $this->Main_model->get_assembly();
		$data['pagename'] = 'Contact Details';
		$data['ins_id'] = $id;

		$this->load->view('contact_details',$data);
	}

	public function get_state_district()
	{   
		$result = $this->Main_model->get_state_district();
		$list='';
		if (!empty($result)) {
      	foreach ($result as $key => $object) {
	         $list=$list.'<option value="'.$object->city.'">'.$object->city.'</option>';
	      }
       }
       echo $list;
	}

	public function payment($id)
	{   
		$data['pagename'] = 'Payment';
		$data['ins_id'] = $id;
		// print_r($this->Main_model->get_details($id));die();
		$data['details'] = $this->Main_model->get_details($id);

		$this->load->view('payment',$data);
	}


	public function dashboard()
	{
		$data = $this->login_details();
		if ($data) {
			$data['pagename'] = 'Dashboard';
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/dashboard',$data);
			$this->load->view('dashboard/footer',$data);
		}else{
			redirect('Home/login');
		}
		
	}

	public function logout()
	{
		$data = $this->login_details();
		if ($data) {
			// return $this->session->sess_destroy();
			$this->session->unset_userdata('ses_id');
			$this->session->unset_userdata('is_user');
			redirect('Home/login');
		}else{
			redirect('Home/dashboard');
		}
		
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

    public function user_details(){
    	$user_id = $this->session->userdata('ses_id');
        $this->db->select('*');
        $this->db->where("id", $user_id);
        $sql = $this->db->get("tbl_registration");
        return $sql->result();
    }
	
}

