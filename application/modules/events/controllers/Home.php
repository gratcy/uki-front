<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Events_model');
	}

	public function index()
	{
		$data['data'] = $this -> Events_model -> __get_events($this -> config -> config['faculty']);
		$data['title'] = 'Semua Event UKI';
		$data['desc'] = 'Semua Event UKI';
		$data['ogImage'] = __get_image_url($data['data']['data'][0]['econtent']);
		$this->load->view('events', $data);
	}

	public function detail($id)
	{
		if (!$id) redirect(base_url());
		$data['data'] = $this -> Events_model -> __get_events_detail($this -> config -> config['faculty'], $id);
		$data['title'] = $data['data']['data'][0]['etitle'];
		$data['desc'] = __limit_word($data['data']['data'][0]['etitle'],10);
		$data['ogImage'] = __get_upload_file($data['data']['data'][0]['ecover'], 5);
		$this->load->view('event_detail', $data);
	}
}
