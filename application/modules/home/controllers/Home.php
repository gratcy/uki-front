<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Home_model');
	}

	public function index()
	{
		$data['slideshow'] = $this -> Home_model -> __get_slideshow($this -> config -> config['faculty']);
		$this->load->view('home', $data);
	}
}
