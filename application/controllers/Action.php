<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

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

	public function save()
	{   
		echo $this->Main_model->registration();
	}
	
	public function updateDetails()
	{   
		echo $this->Main_model->updateDetails();
	}
}

