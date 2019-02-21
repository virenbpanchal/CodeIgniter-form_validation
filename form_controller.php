<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_controller extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
  	{
  		parent::__construct();
		
		// LOAD HELPERS
		$this->load->helper(array('form', 'url'));
		
		// LOAD LIBRARIES
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		// Set validation rules
		$this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('mobileno', 'Mobile No', 'required|numeric|min_length[10]');
		$this->form_validation->set_rules('emailid', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('degree[]', 'Degree', 'required');
		$this->form_validation->set_rules('hobby[]', 'Hobby', 'required');
		
		// Set error delimiters in DIV
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		// check for validation
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_view');
		}
		else
		{
			$this->load->view('form_success_view');
		}
	}
}
