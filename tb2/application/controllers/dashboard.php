<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//if (empty($this->session->userdata('nomor_pegawai'))) {
		//redirect('user/login');
		//}
		date_default_timezone_set("Asia/Jakarta");
		//memanggil model
		$this->load->model(array('aircraft_data_model', 'aircraft_type_model', 'status_model'));
	}

	public function index()
	{
		//mengarahkan ke function read
		$this->read();
	}

	public function read()
	{
		$aircraft_data = $this->aircraft_data_model->read();

		$output = array(
			//memanggil view
			'judul' => 'Dashboard',
			'theme_page' => 'dashboard',



		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

}
