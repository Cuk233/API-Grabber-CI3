<?php
defined('BASEPATH') or exit('No direct script access allowed');

class job_type extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model('job_type_model');
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
        $job_type = $this->job_type_model->read();



        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Job Type',
            'theme_page' => 'documents/job_type_read',


            //data dikirim ke view
            'job_type' => $job_type,

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }
   
    public function insert()
    {
   
        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Add Job Type',
            'theme_page' => 'documents/job_type_insert'
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $job_name = $this->input->post('job_name');
        $created_at = $this->input->post('created_at');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'job_name' => $job_name,
            'created_at' => date('Y-m-d H:i:s'),

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $job = $this->job_type_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('job_type/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $job_type_single = $this->job_type_model->read_single($id);

        //mengirim data ke view
        $output = array(    
            'judul' => 'Job Type Update',
            'theme_page' => 'documents/job_type_update',

            //mengirim data yang dipilih ke view
            'job_type_single' => $job_type_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id_job = $this->uri->segment(3);

        //menangkap data input dari view
        $job_name = $this->input->post('job_name');
        $updated_at = $this->input->post('updated_at');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'job_name' => $job_name,
            'updated_at' => date('Y-m-d H:i:s'),
        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $job = $this->job_type_model->update($input, $id_job);

        //mengembalikan halaman ke function read
        redirect('job_type/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id_job = $this->uri->segment(3);

        //memanggil function delete pada model
        $job = $this->job_type_model->delete($id_job);

        //mengembalikan halaman ke function read
        redirect('job_type/read');
    }
}
