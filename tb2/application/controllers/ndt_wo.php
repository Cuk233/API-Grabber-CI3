<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ndt_wo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model('ndt_wo_model');
        $this->load->model('ppe_wo_model');
        $this->load->model('status_model');
        date_default_timezone_set("Asia/Jakarta");
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
        $ndt_wo = $this->ndt_wo_model->read();



        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'NDT - Work Order',
            'theme_page' => 'work_order/ndt_wo_read',


            //data dikirim ke view
            'ndt_wo' => $ndt_wo,

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {
        $ppe_wo = $this->ppe_wo_model->read();
        $status = $this->status_model->read();
        //mengirim data ke view
        $output = array(
            //memanggil view
            'ppe_wo' => $ppe_wo,
            'status' => $status,

            'judul' => 'Add Work Order',
            'theme_page' => 'work_order/ndt_wo_insert',
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
        $remark = $this->input->post('remark');



        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'wo_number' => $wo_number,
            'status' => $status,
            'revision_number' => $revision_number,
            'remark' => $remark,
            'date_in' => $date_in,
            'date_out' => $date_out,
            'created_at' => date('Y-m-d H:i:s'),
            'remark' => $remark,

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $ndt_wo = $this->ndt_wo_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('ndt_wo/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);
        $ppe_wo = $this->ppe_wo_model->read();
        $status = $this->status_model->read();

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $ndt_wo_single = $this->ndt_wo_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'judul' => 'Work Order Update',
            'theme_page' => 'work_order/ndt_wo_update',

            //mengirim data yang dipilih ke view
            'ndt_wo_single' => $ndt_wo_single,
            'ppe_wo' => $ppe_wo,
            'status' => $status,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        $date_in = $this->input->post('date_in');
        $date_out = $this->input->post('date_out');
        $status = $this->input->post('status');
        $revision_number = $this->input->post('revision_number');
        $remark = $this->input->post('remark');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            //'wo_number' => $id,
            'status' => $status,
            'revision_number' => $revision_number,
            'date_in' => $date_in,
            'date_out' => $date_out,
            'remark' => $remark,
            'updated_at' => date('Y-m-d H:i:s'),
        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $ndt_wo = $this->ndt_wo_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('ndt_wo/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //memanggil function delete pada model
        $ndt_wo = $this->ndt_wo_model->delete($id);

        //mengembalikan halaman ke function read
        redirect('ndt_wo/read');
    }
}
