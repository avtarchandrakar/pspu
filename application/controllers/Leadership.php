<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leadership extends CI_Controller {

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
		$data['pagename'] = 'National Leadership';
		$this->load->view('lead_national',$data);
	}

	public function state()
	{  
		$data['pagename'] = 'State Leadership';
		$this->load->view('lead_state',$data);
	}

	public function district()
	{   
		$data['pagename'] = 'District Leadership';
		$this->load->view('lead_district',$data);
	} 
	
}

