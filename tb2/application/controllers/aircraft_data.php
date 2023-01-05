<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aircraft_data extends CI_Controller
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

	public function dashboard()
	{
		$aircraft_data = $this->aircraft_data_model->listHangar();
		$getHangar1 = $this->aircraft_data_model->getHangar1();
		$getHangar3 = $this->aircraft_data_model->getHangar3();
		$getHangar4 = $this->aircraft_data_model->getHangar4();

		$output = array(
			//memanggil view
			'judul' => 'Aircraft Data',
			'theme_page' => 'dashboard',


			//data dikirim ke view
			'aircraft_data' => $aircraft_data,
			'getHangar1' => $getHangar1,
			'getHangar3' => $getHangar3,
			'getHangar4' => $getHangar4

		);




		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function read()
	{
		$aircraft_data = $this->aircraft_data_model->read();

		$output = array(
			//memanggil view
			'judul' => 'Aircraft Data',
			'theme_page' => 'aircraft/aircraft_data_read',


			//data karyawan dikirim ke view
			'aircraft_data' => $aircraft_data,

		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}


	private function callapi($method, $url, $data)
	{
		$curl = curl_init();
		switch ($method) {
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);
				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			default:
				if ($data)
					$url = sprintf("%s?%s", $url, http_build_query($data));
		}
		// OPTIONS:
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			"Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjk1MDZhNTFmMjMyZWVhZGM5NThlM2YwMDkyYjEyYWMyOGJhNjZkNzc3Yjc1YjAzOWIxYWIyNzg2NzVkN2UxNDI2OGQ3ODU0ZWExZjYxZjEiLCJpYXQiOjE1ODE0Njc3MjQsIm5iZiI6MTU4MTQ2NzcyNCwiZXhwIjoxNjEzMDkwMTI0LCJzdWIiOiIzNDUiLCJzY29wZXMiOltdfQ.DyRsf0E4sHPkrBeC0MQDEIwVGrCZODjVxTPT74W0bg-93ZeE9X2eCsLox7pLiJGWgwhH4xMkRT_QKNvKi5Bf7T_iq1sDaM9oy4588qb-GA9Y3QIRm9ZSGFKuwcyABhP2QdiFhhPHa1Z1R7EsIK5yxMlhcpzpzyTpEmISdTsUnKu2HIuhcGOkmvfFlN9n4gaHfMVhqVd9EvFMD6KpkKRrnfMx8M1QPa-lv0yZMcdaDa4181uynqIwtmV26zvp8iFUFLM1PdSeTbSisoi3p9BWRv0B3AfO1vi_Z1jK0ifiseB-BlEDjwiQ1p6zp-qoSp9kHqvqO3qXsM3QNKgwcpTAhRXWV0ZyfjAq7p_lVYDsfM8dUzeSb6sArowrYMgYpYeP5hzxFTpGKDL_w3huyiHj59_vGdGeCSZc6AJ_bQ9HZUGb8TvgB1jvaeREZSnCI_b9HYDKCm1JTAw57rx4fb9gcUIiBzkH8QFOjUNt_1hNnY2FDyCA1P0wBeNtsblDupPgQ0M49VQpvZXs5ZZ5hgc4fYevpUvUi_ITlVeVBzOqU61ebgN8z5cAv_s-FFREao6Kc6XlmAc4Pap834ixrBHj1zu0y3YZKA55_K6oZDANKJ7EKpuZ7ZkMDrmDtlWNszP6WdyeHYNHiGE_aMm_LY6MMKBF6ERKAgWi0lH_18mqKLs",
			'Content-Type: application/json',
		));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		// EXECUTE:
		$result = curl_exec($curl);
		if (!$result) {
			die("Connection Failure");
		}
		curl_close($curl);
		return $result;
	}
	public function submit()
	{
		//mengirim data ke view
		$output = array(
			//memanggil view
			'judul' => 'Aircraft Data',
			'theme_page' => 'aircraft/aircraft_data_get',
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert()
	{
		// menangkap revision_number dari form post
		$revision_number = $this->input->post('revision_number');
		$aircraft_type = $this->aircraft_type_model->read();
		$statuscode = $this->status_model->read();
		$get_data = $this->callapi('GET', 'https://xpream.gmf-aeroasia.co.id/api/public/api_ext/revision_header/' . $revision_number, false);
		$response = json_decode($get_data, true);

		//function read berfungsi mengambil 1 data dari table karyawan sesuai id yg dipilih
		//mengirim data ke view
		$output = array(
			'judul' => 'Aircraft Data',
			'theme_page' => 'aircraft/aircraft_data_insert',
			'revision_number' => $revision_number,
			//mengirim data relasi yang dipilih ke view
			'aircraft_type' => $aircraft_type,
			'status_code' => $statuscode,
			'response' => $response,
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}


	public function insert_submit()
	{
		//menangkap data input dari view
		$revision_number = $this->input->post('revision_number');
		$maintenance_type = $this->input->post('maintenance_type');
		$ac_reg = $this->input->post('ac_reg');
		$ac_type = $this->input->post('ac_type');
		$engine_type = $this->input->post('engine_type');
		$customer = $this->input->post('customer');
		$date_in = $this->input->post('date_in');
		$date_out = $this->input->post('date_out');
		$status = $this->input->post('status_code');
		$hangar_location = $this->input->post('hangar_location');
		$project_owner = $this->input->post('project_owner');
		$created_at = $this->input->post('created_at');
		$updated_at = $this->input->post('updated_at');


		//mengirim data ke model
		$input = array(
			//format : nama field/kolom table => data input dari view
			'revision_number' => $revision_number,
			'maintenance_type' => $maintenance_type,
			'ac_reg' => $ac_reg,
			'ac_type' => $ac_type,
			'engine_type' => $engine_type,
			'customer' => $customer,
			'date_in' => $date_in,
			'date_out' => $date_out,
			'status' => $status,
			'hangar_location' => $hangar_location,
			'project_owner' => $project_owner,
			'created_at' => $created_at,
			'updated_at' => $updated_at,
		);

		//memanggil function insert pada karyawan model
		//function insert berfungsi menyimpan/create data ke table karyawan di database
		$aircraft_data = $this->aircraft_data_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('aircraft_data');
	}

	public function update()
	{
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);
		$aircraft_type = $this->aircraft_type_model->read();
		$statuscode = $this->status_model->read();

		//function read berfungsi mengambil 1 data dari table karyawan sesuai id yg dipilih
		$aircraft_data_single = $this->aircraft_data_model->read_single($id);

		//mengirim data ke view
		$output = array(
			'judul' => 'Aircraft Data Update',
			'theme_page' => 'aircraft/aircraft_data_update',

			//mengirim data karyawan yang dipilih ke view
			'aircraft_data_single' => $aircraft_data_single,
			'aircraft_type' => $aircraft_type,
			'status_code' => $statuscode,
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}
	public function update_submit()
	{
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//menangkap data input dari view
		//$id = $this->input->post('id');
		//$revision_number = $this->input->post('revision_number');
		$maintenance_type = $this->input->post('maintenance_type');
		$ac_reg = $this->input->post('ac_reg');
		$ac_type = $this->input->post('ac_type');
		$engine_type = $this->input->post('engine_type');
		$customer = $this->input->post('customer');
		$date_in = $this->input->post('date_in');
		$date_out = $this->input->post('date_out');
		$status = $this->input->post('status');
		$project_owner = $this->input->post('project_owner');
		$hangar_location = $this->input->post('hangar_location');
		$updated_at = $this->input->post('updated_at');


		//mengirim data ke model
		$input = array(
			//format : nama field/kolom table => data input dari view
			//'id' => $id,
			//'revision_number' => $revision_number,
			'maintenance_type' => $maintenance_type,
			'ac_reg' => $ac_reg,
			'ac_type' => $ac_type,
			'engine_type' => $engine_type,
			'customer' => $customer,
			'date_in' => $date_in,
			'date_out' => $date_out,
			'status' => $status,
			'project_owner' => $project_owner,
			'hangar_location' => $hangar_location,
			'updated_at' => $updated_at,
		);


		//memanggil function insert pada karyawan model
		//function insert berfungsi menyimpan/create data ke table karyawan di database
		$aircraft_data = $this->aircraft_data_model->update($input, $id);

		//mengembalikan halaman ke function read
		redirect('aircraft_data');
	}
	public function delete()
	{
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//memanggil function delete pada karyawan model
		$aircraft_data = $this->aircraft_data_model->delete($id);


		//mengembalikan halaman ke function read
		redirect('aircraft_data');
	}
}
