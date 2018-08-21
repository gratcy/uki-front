<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Pages_model');
	}

	public function index($id)
	{
		$data['data'] = $this -> Pages_model -> __get_pages_detail($this -> config -> config['faculty'], $id);
		$this->load->view('pages', $data);
	}
}
