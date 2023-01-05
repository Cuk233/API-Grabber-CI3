<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table user di database
    public function read()
    {

		$this->db->select('*');
		$this->db->from('user');
        //$this->db->order_by('user.id_karyawan ASC, user.id ASC');

        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    public function read_single($id)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('user');

        //$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id_user', $id);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function read berfungsi mengambil/read data dari table user di database
    public function login_check($user_name, $password)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('user');

        //$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('user_name', $user_name);
        $this->db->where('password', $password);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function insert berfungsi menyimpan/create data ke table user di database
    public function insert($input)
    {
        //$input = data yang dikirim dari controller
        return $this->db->insert('user_name', $input);
    }

    //function update berfungsi merubah data ke table user di database
    public function update($input, $id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id_user', $id);

        //$input = data yang dikirim dari controller
        return $this->db->update('user', $input);
    }

    //function delete berfungsi menghapus data dari table user di database
    public function delete($id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
        $this->db->where('id_user', $id);
        return $this->db->delete('user');
    }
}
