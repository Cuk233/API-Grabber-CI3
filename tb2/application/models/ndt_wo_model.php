<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ndt_wo_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table provinsi di database
    public function read($wo_number = '')
    {
        //sql read
        $this->db->select('ndt_wo.*');
        $this->db->select('ppe_wo.wo_number');
        $this->db->select('status_code.status');
        $this->db->from('ndt_wo');
        $this->db->join('status_code', 'ndt_wo.status = status_code.status_code');
        $this->db->join('ppe_wo', 'ndt_wo.wo_number = ppe_wo.wo_number');

        if ($wo_number != '') {
            $this->db->where('ndt_wo.wo_number', $wo_number);
        }

        $this->db->order_by('ndt_wo.wo_number DESC');
        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    //function read berfungsi mengambil/read data dari table provinsi di database
    public function read_single($id)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('ndt_wo');

        //$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('wo_number', $id);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function insert berfungsi menyimpan/create data ke table provinsi di database
    public function insert($input)
    {
        //$input = data yang dikirim dari controller
        return $this->db->insert('ndt_wo', $input);
    }

    //function update berfungsi merubah data ke table provinsi di database
    public function update($input, $id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('wo_number', $id);

        //$input = data yang dikirim dari controller
        return $this->db->update('ndt_wo', $input);
    }

    //function delete berfungsi menghapus data dari table provinsi di database
    public function delete($id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
        $this->db->where('wo_number', $id);
        return $this->db->delete('ndt_wo');
    }
}
