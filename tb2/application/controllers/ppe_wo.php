<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ppe_wo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model('ppe_wo_model');
        $this->load->model('doctype_model');
        $this->load->model('job_type_model');
        $this->load->model('pic_model');
        $this->load->model('status_model');
        $this->load->model('aircraft_data_model');
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->read();
    }
    public function read()
    {

        //memanggil function read pada model
        //function read berfungsi mengambil/read data dari table di database
        $ppe_wo = $this->ppe_wo_model->read();



        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'PPE - Work Order',
            'theme_page' => 'work_order/ppe_wo_read',


            //data dikirim ke view
            'ppe_wo' => $ppe_wo,

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {
        $doctype = $this->doctype_model->read();
        $job_type = $this->job_type_model->read();
        $pic = $this->pic_model->read();
        $status = $this->status_model->read();
        $aircraft_data = $this->aircraft_data_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Add Work Order',
            'theme_page' => 'work_order/ppe_wo_insert',
            //mengirim data relasi yang dipilih ke view
            'doctype' => $doctype,
            'job_type' => $job_type,
            'pic' => $pic,
            'status' => $status,
            'aircraft_data' => $aircraft_data,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $wo_number = $this->input->post('wo_number');
        $date_in = $this->input->post('date_in');
        $date_out = $this->input->post('date_out');
        $status = $this->input->post('status');
        $revision_number = $this->input->post('revision_number');
        $created_at = $this->input->post('created_at');
        $remark = $this->input->post('remark');
        $description = $this->input->post('description');
        $quantity = $this->input->post('quantity');
        $sp_in = $this->input->post('sp_in');
        $sp_out = $this->input->post('sp_out');
        $component_location = $this->input->post('component_location');
        $component_removed_status = $this->input->post('component_removed_status');
        $doc_number = $this->input->post('doc_number');
        $id_doc = $this->input->post('id_doc');
        $id_ppe = $this->input->post('id_ppe');
        $remark = $this->input->post('remark');
        $job_type = $this->input->post('job_type');
        $id_pic = $this->input->post('id_pic');


        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'wo_number' => $wo_number,
            'description' => $description,
            'quantity' => $quantity,
            'date_in' => $date_in,
            'date_out' => $date_out,
            'sp_in' => $sp_in,
            'sp_out' => $sp_out,
            'status' => $status,
            'revision_number' => $revision_number,
            'component_location' => $component_location,
            'id_pic' => $id_pic,
            'component_removed_status' => $component_removed_status,
            'doc_number' => $doc_number,
            'id_doc' => $id_doc,
            'created_at' => date('Y-m-d H:i:s'),
            'id_ppe' => $id_ppe,
            'remark' => $remark,
            'job_type' => $job_type,

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $ppe_wo = $this->ppe_wo_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('ppe_wo/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);
        $ppe_wo_single = $this->ppe_wo_model->read_single($id);
        $doctype = $this->doctype_model->read();
        $job_type = $this->job_type_model->read();
        $pic = $this->pic_model->read();
        $status = $this->status_model->read();
        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih

        //mengirim data ke view
        $output = array(
            'judul' => 'Work Order Update',
            'theme_page' => 'work_order/ppe_wo_update',

            //mengirim data yang dipilih ke view
            'ppe_wo_single' => $ppe_wo_single,
            'doctype' => $doctype,
            'job_type' => $job_type,
            'pic' => $pic,
            'status' => $status,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $wo_number = $this->uri->segment(3);
        $date_in = $this->input->post('date_in');
        $date_out = $this->input->post('date_out');
        $status = $this->input->post('status');
        $revision_number = $this->input->post('revision_number');
        $remark = $this->input->post('remark');
        $description = $this->input->post('description');
        $quantity = $this->input->post('quantity');
        $sp_in = $this->input->post('sp_in');
        $sp_out = $this->input->post('sp_out');
        $component_location = $this->input->post('component_location');
        $component_removed_status = $this->input->post('component_removed_status');
        $doc_number = $this->input->post('doc_number');
        $id_doc = $this->input->post('id_doc');
        $id_ppe = $this->input->post('id_ppe');
        $remark = $this->input->post('remark');
        $job_type = $this->input->post('job_type');
        $id_pic = $this->input->post('id_pic');
        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'wo_number' => $wo_number,
            'description' => $description,
            'quantity' => $quantity,
            'date_in' => $date_in,
            'date_out' => $date_out,
            'sp_in' => $sp_in,
            'sp_out' => $sp_out,
            'status' => $status,
            'revision_number' => $revision_number,
            'component_location' => $component_location,
            'id_pic' => $id_pic,
            'component_removed_status' => $component_removed_status,
            'doc_number' => $doc_number,
            'id_doc' => $id_doc,
            'id_ppe' => $id_ppe,
            'remark' => $remark,
            'job_type' => $job_type,
            'updated_at' => date('Y-m-d H:i:s'),
        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $ppe_wo = $this->ppe_wo_model->update($input, $wo_number);

        //mengembalikan halaman ke function read
        redirect('ppe_wo/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //memanggil function delete pada model
        $ppe_wo = $this->ppe_wo_model->delete($id);

        //mengembalikan halaman ke function read
        redirect('ppe_wo/read');
    }
}
