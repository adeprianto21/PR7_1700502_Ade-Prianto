<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Kereta_model');
	}

	public function index()
	{
		$data['judul'] = "Lokomotif & Kursi";
		$data['left_join'] = $this->Kereta_model->left_join();

		$this->load->view('header', $data);
		$this->load->view('left_join', $data);
		$this->load->view('footer');
	}

	public function right()
	{
		$data['judul'] = "Gerbong & Kursi";
		$data['right_join'] = $this->Kereta_model->right_join();

		$this->load->view('header', $data);
		$this->load->view('right_join', $data);
		$this->load->view('footer');
	}

	public function inner()
	{
		$data['judul'] = "Lokomotif & Gerbong & Kursi";
		$data['inner_join'] = $this->Kereta_model->inner_join();

		$this->load->view('header', $data);
		$this->load->view('inner_join', $data);
		$this->load->view('footer');
	}
}
