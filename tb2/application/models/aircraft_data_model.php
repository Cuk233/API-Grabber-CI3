<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aircraft_data_model extends CI_Model
{


	//function read berfungsi mengambil/read data dari table user di database

	public function read($ac_type = '')
	{

		$this->db->select('aircraft_data.*');
		//Join aircraft Type
		$this->db->select('aircraft_type.actype_name AS name');
		$this->db->select('status_code.status');
		$this->db->from('aircraft_data');
		$this->db->join('aircraft_type', 'aircraft_data.ac_type = aircraft_type.actype_code');
		//Join Status_code
		$this->db->join('status_code', 'aircraft_data.status = status_code.status_code');

		//$this->db->from('aircraft_data');
		//filter data sesuai id yang dikirim dari controller
		if ($ac_type != '') {
			$this->db->where('aircraft_data.ac_type', $ac_type);
			//$this->db->where('aircraft_data.status', $status);

		}


		$this->db->order_by('aircraft_data.revision_number DESC');
		$query = $this->db->get();
		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}
	public function listHangar($ac_type = '')
	{

		$this->db->select('aircraft_data.*');
		//Join aircraft Type
		$this->db->select('aircraft_type.actype_name AS name');
		$this->db->select('status_code.status');
		$this->db->from('aircraft_data');
		$this->db->join('aircraft_type', 'aircraft_data.ac_type = aircraft_type.actype_code');
		//Join Status_code
		$this->db->join('status_code', 'aircraft_data.status = status_code.status_code');

		//$this->db->from('aircraft_data');
		//filter data sesuai id yang dikirim dari controller
		if ($ac_type != '') {
			$this->db->where('aircraft_data.ac_type', $ac_type);
			//$this->db->where('aircraft_data.status', $status);

		}


		$this->db->order_by('aircraft_data.hangar_location ASC');
		$query = $this->db->get();
		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table user di database
	public function read_single($revision_number)
	{

		//sql read
		$this->db->select('*');
		$this->db->from('aircraft_data');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('revision_number', $revision_number);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
		return $query->row_array();
	}

	//function insert berfungsi menyimpan/create data ke table user di database
	public function insert($input)
	{
		//$input = data yang dikirim dari controller
		return $this->db->insert('aircraft_data', $input);
	}

	//function update berfungsi merubah data ke table user di database
	public function update($input, $id)
	{
		//$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('revision_number', $id);

		//$input = data yang dikirim dari controller
		return $this->db->update('aircraft_data', $input);
	}

	//function delete berfungsi menghapus data dari table user di database
	public function delete($id)
	{
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('revision_number', $id);
		return $this->db->delete('aircraft_data');
	}

	public function getHangar1($ac_type = '')
	{

		$this->db->select('aircraft_data.*');
		$this->db->from('aircraft_data');
		$this->db->where('hangar_location like "%H-1%"');
		$this->db->order_by('aircraft_data.hangar_location ASC');

		$query = $this->db->get();
		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}
	public function getHangar3($ac_type = '')
	{

		$this->db->select('aircraft_data.*');
		$this->db->from('aircraft_data');
		$this->db->where('hangar_location like "%H-3%"');
		$this->db->order_by('aircraft_data.hangar_location ASC');

		$query = $this->db->get();
		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}
	public function getHangar4($ac_type = '')
	{

		$this->db->select('aircraft_data.*');
		$this->db->from('aircraft_data');
		$this->db->where('hangar_location like "%H-4%" and (status = "PRGS" or status = "OPEN")');
		$this->db->order_by('aircraft_data.hangar_location');

		$query = $this->db->get();
		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}
}
