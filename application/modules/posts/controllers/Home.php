<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Posts_model');
	}

	public function index($id)
	{
		if (!$id) redirect(base_url());
		$data['data'] = $this -> Posts_model -> __get_posts_detail($this -> config -> config['faculty'], $id);
		$data['title'] = $data['data']['data'][0]['ptitle'];
		$data['desc'] = $data['data']['data'][0]['ptitle'];
		$data['ogImage'] = __get_image_url($data['data']['data'][0]['pcontent']);
		$this->load->view('posts', $data);
	}

	public function posts($id=0)
	{
		if (!$id) redirect(base_url());
		$data['name'] = 'POSTS ALL';
		$data['data'] = $this -> Posts_model -> __get_posts_categories($this -> config -> config['faculty'], $id, $this -> config -> config['category']['announcement']);
		if ($id) $data['name'] = isset($data['data']['data'][0]['cname']) ? $data['data']['data'][0]['cname'] : 'POSTS ALL';
		$data['title'] = $data['data']['data'][0]['cname'];
		$data['desc'] = 'Berita Kategori '.$data['data']['data'][0]['cname'];
		$this->load->view('categories', $data);
	}
}
