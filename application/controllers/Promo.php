<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Categories_model');
		$this->load->model('Products_model');
		$this->load->model('Settings_model');
		$this->load->model('Promo_model');
	}

	public function index()
	{
		$data['title'] = 'Promo - ' . $this->Settings_model->general()["app_name"];
		$data['css'] = 'promo';
		$data['promo'] = $this->Promo_model->getPromo();
		$data['setting'] = $this->Settings_model->getSetting();
		$this->load->view('templates/header_nature', $data);
		$this->load->view('templates/navbar_nature');
		$this->load->view('page/promo', $data);
		$this->load->view('templates/footerv2');
	}
}
