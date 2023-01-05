<?php
defined('BASEPATH') or exit('No direct script access allowed');

class job_type_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table provinsi di database
    public function read()
    {

        //sql read
        $this->db->select('*');
        $this->db->from('job_type');
        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    //function read berfungsi mengambil/read data dari table provinsi di database
    public function read_single($id_job)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('job_type');

        //$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id_job', $id_job);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function insert berfungsi menyimpan/create data ke table provinsi di database
    public function insert($input)
    {
        //$input = data yang dikirim dari controller
        return $this->db->insert('job_type', $input);
    }

    //function update berfungsi merubah data ke table provinsi di database
    public function update($input, $id_job)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id_job', $id_job);

        //$input = data yang dikirim dari controller
        return $this->db->update('job_type', $input);
    }

    //function delete berfungsi menghapus data dari table provinsi di database
    public function delete($id_job)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
        $this->db->where('id_job', $id_job);
        return $this->db->delete('job_type');
    }
}
