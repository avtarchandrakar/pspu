<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

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
		$data['pagename'] = 'Blog';
		$this->load->view('blog',$data);
	}

	public function blog_details()
	{   
		$data['pagename'] = 'Blog Detail';
		$this->load->view('blog_details',$data);
	}
   
   public function news()
	{   
		$data['pagename'] = 'News';
		$this->load->view('news',$data);
	}

	public function press()
	{   
		$data['pagename'] = 'Press';
		$this->load->view('press',$data);
	}

	public function news_details()
	{
		$data['pagename'] = 'News Details';
		$this->load->view('news_details',$data);
	}


	public function event()
	{   
		$data['pagename'] = 'Event';
		$this->load->view('event',$data);
	}

	public function event_details()
	{   
		$data['pagename'] = 'Event Details';
		$this->load->view('event_details',$data);
	}



}

