<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'home');
	}

	public function index()
	{
		$this->load->view('template/header');

		$data['categories'] = $this->home->get_categories();

		$this->load->view('index', $data);

		$this->load->view('template/footer');
	}
}
