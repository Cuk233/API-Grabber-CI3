<?php
defined('BASEPATH') or exit('No direct script access allowed');

class status extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
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
        $status = $this->status_model->read();



        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Daftar',
            'theme_page' => 'documents/status_read',


            //data dikirim ke view
            'status' => $status

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {

        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Tambah Tipe Pesawat',
            'theme_page' => 'documents/status_insert'
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $status_code = $this->input->post('status_code');
        $status = $this->input->post('status');
        $created_at = $this->input->post('created_at');



        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'status_code' => $status_code,
            'status' => $status,
            'created_at' => $created_at,

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $this->status_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('status/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $status_single = $this->status_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'judul' => 'Ubah',
            'theme_page' => 'documents/status_update',

            //mengirim data yang dipilih ke view
            'status_single' => $status_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id_status = $this->uri->segment(3);

        $status_code = $this->input->post('status_code');
        $status = $this->input->post('status');
        $updated_at = $this->input->post('updated_at');



        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'status_code' => $status_code,
            'status' => $status,
            'updated_at' => $updated_at,

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $this->status_model->update($input, $id_status);

        //mengembalikan halaman ke function read
        redirect('status/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id_status = $this->uri->segment(3);

        //memanggil function delete pada model
        $status = $this->status_model->delete($id_status);

        //mengembalikan halaman ke function read
        redirect('status/read');
    }
}
