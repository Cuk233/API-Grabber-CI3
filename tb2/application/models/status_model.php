<?php
defined('BASEPATH') or exit('No direct script access allowed');

class status_model extends CI_Model
{


	//function read berfungsi mengambil/read data dari table user di database



	// $this->db->select('*');
	// $this->db->from('status_code');

	// $query = $this->db->get();
	// //$query->result_array = mengirim data ke controller dalam bentuk semua data
	// return $query->result_array();

	public function read()
	{

		//sql read
		$this->db->select('*');
		$this->db->from('status_code');
		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}




	//function read berfungsi mengambil/read data dari table user di database
	public function read_single($statuscode)
	{

		//sql read
		$this->db->select('*');
		$this->db->from('status_code');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('status_code', $statuscode);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
		return $query->row_array();
	}

	//function insert berfungsi menyimpan/create data ke table user di database
	public function insert($input)
	{
		//$input = data yang dikirim dari controller
		return $this->db->insert('status_code', $input);
	}

	//function update berfungsi merubah data ke table user di database
	public function update($input, $statuscode)
	{
		//$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('status_code', $statuscode);

		//$input = data yang dikirim dari controller
		return $this->db->update('status_code', $input);
	}

	//function delete berfungsi menghapus data dari table user di database
	public function delete($statuscode)
	{
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('status_code', $statuscode);
		return $this->db->delete('status_code');
	}
}
