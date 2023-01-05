<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ppe_wo_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table provinsi di database
    public function read($doctype = '')
    {

        //sql read
        $this->db->select('ppe_wo.*');
        $this->db->select('status_code.status');
        $this->db->select('pic.pic_name AS pic');
        $this->db->select('doc_type.doc_name AS doc');
        $this->db->select('job_type.job_name AS job');
        $this->db->from('ppe_wo');
        $this->db->join('status_code', 'ppe_wo.status = status_code.status_code');
        $this->db->join('pic', 'ppe_wo.id_pic = pic.id_pic');
        $this->db->join('doc_type', 'ppe_wo.id_doc = doc_type.id_doc');
        $this->db->join('job_type', 'ppe_wo.job_type = job_type.id_job');

        if ($doctype != '') {
            $this->db->where('ppe_wo.id_doc', $doctype);
        }
        $this->db->order_by('ppe_wo.wo_number DESC');
        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    //function read berfungsi mengambil/read data dari table provinsi di database
    public function read_single($id)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('ppe_wo');

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
        return $this->db->insert('ppe_wo', $input);
    }

    //function update berfungsi merubah data ke table provinsi di database
    public function update($input, $id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('wo_number', $id);

        //$input = data yang dikirim dari controller
        return $this->db->update('ppe_wo', $input);
    }

    //function delete berfungsi menghapus data dari table provinsi di database
    public function delete($id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
        $this->db->where('wo_number', $id);
        return $this->db->delete('ppe_wo');
    }
}
