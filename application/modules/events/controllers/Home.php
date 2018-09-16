<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Events_model');
	}

	public function index($id)
	{
		$data['data'] = $this -> Events_model -> __get_events_detail($this -> config -> config['faculty'], $id);
		$this->load->view('events', $data);
	}
}
