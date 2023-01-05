<?php
defined('BASEPATH') or exit('No direct script access allowed');

class role_role extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model('role_model');
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
        $role = $this->role_model->read_role();



        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Daftar',
            'theme_page' => 'user/role_read',


            //data dikirim ke view
            'role' => $role

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {

        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Tambah Role',
            'theme_page' => 'user/role_insert'
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $id_role = $this->input->post('id_role');
        $role = $this->input->post('role');
        $created_at = $this->input->post('created_at');



        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'id_role' => $id_role,
            'role' => $role,
            'created_at' => $created_at,

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $this->role_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('role/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $role_single = $this->role_model->read_single($id);
        //mengirim data ke view
        $output = array(
            'judul' => 'Ubah',
            'theme_page' => 'user/role_update',

            //mengirim data yang dipilih ke view
            'role_single' => $role_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id_role = $this->uri->segment(3);

        $id_role = $this->input->post('id_role');
        $role = $this->input->post('role');
        $updated_at = $this->input->post('updated_at');



        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'id_role' => $id_role,
            'role' => $role,
            'updated_at' => $updated_at,

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $this->role_model->update($input, $id_role);

        //mengembalikan halaman ke function read
        redirect('role/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id_role = $this->uri->segment(3);

        //memanggil function delete pada model
        $role = $this->role_model->delete($id_role);

        //mengembalikan halaman ke function read
        redirect('role/read');
    }
}
