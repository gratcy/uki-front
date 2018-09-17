<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Posts_model');
	}

	public function index($id)
	{
		$data['data'] = $this -> Posts_model -> __get_posts_detail($this -> config -> config['faculty'], $id);
		$this->load->view('posts', $data);
	}

	public function posts($id=0)
	{
		$data['name'] = 'POSTS ALL';
		$data['data'] = $this -> Posts_model -> __get_posts_categories($this -> config -> config['faculty'], $id, $this -> config -> config['category']['announcement']);
		if ($id) $data['name'] = isset($data['data'][0] -> cname) ? $data['data'][0] -> cname : 'POSTS ALL';
		$this->load->view('categories', $data);
	}
}
