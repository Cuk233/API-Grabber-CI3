<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aircraft_type extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('aircraft_type_model');
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->read();
    }
    public function read()
    {

        //memanggil function read pada karyawan model
        //function read berfungsi mengambil/read data dari table karyawan di database
        $aircraft_type = $this->aircraft_type_model->read();



        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Aircraft Type',
            'theme_page' => 'aircraft/aircraft_type_read',


            //data karyawan dikirim ke view
            'aircraft_type' => $aircraft_type

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }


    public function insert()
    {

        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Add Aircraft Type',
            'theme_page' => 'aircraft/aircraft_type_insert'
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $actype_code = $this->input->post('actype_code');
        $actype_name = $this->input->post('actype_name');
        $created_at = $this->input->post('created_at');



        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'actype_code' => $actype_code,
            'actype_name' => $actype_name,
            'created_at' => $created_at,
        );

        //memanggil function insert pada karyawan model
        //function insert berfungsi menyimpan/create data ke table karyawan di database
        $aircraft_type = $this->aircraft_type_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('aircraft_type/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table karyawan sesuai id yg dipilih
        $aircraft_type_single = $this->aircraft_type_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'judul' => 'Aircraft Type Update',
            'theme_page' => 'aircraft/aircraft_type_update',

            //mengirim data karyawan yang dipilih ke view
            'aircraft_type_single' => $aircraft_type_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        //$actype_code = $this->input->post('actype_code');
        $actype_name = $this->input->post('actype_name');
        $updated_at = $this->input->post('updated_at');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            //'actype_code' => $actype_code,
            'actype_name' => $actype_name,
            'updated_at' => $updated_at,
        );

        //memanggil function insert pada karyawan model
        //function insert berfungsi menyimpan/create data ke table karyawan di database
        $aircraft_type = $this->aircraft_type_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('aircraft_type');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //memanggil function delete pada karyawan model
        $aircraft_type = $this->aircraft_type_model->delete($id);

        //mengembalikan halaman ke function read
        redirect('aircraft_type');
    }
}
