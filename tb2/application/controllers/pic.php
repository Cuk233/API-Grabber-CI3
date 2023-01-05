<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pic extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model('pic_model');
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
        $pic = $this->pic_model->read();



        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Person In Charge',
            'theme_page' => 'documents/pic_read',


            //data dikirim ke view
            'pic' => $pic

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {

        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Add PIC',
            'theme_page' => 'documents/pic_insert'
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $pic_name = $this->input->post('pic_name');
        $created_at = $this->input->post('created_at');



        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'pic_name' => $pic_name,
            'created_at' => $created_at,

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $pic = $this->pic_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('pic/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $pic_single = $this->pic_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'judul' => 'PIC Update',
            'theme_page' => 'documents/pic_update',

            //mengirim data yang dipilih ke view
            'pic_single' => $pic_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id_pic = $this->uri->segment(3);

        //menangkap data input dari view
        $pic_name = $this->input->post('pic_name');
        $updated_at = $this->input->post('updated_at');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'pic_name' => $pic_name,
            'updated_at' => date('Y-m-d H:i:s'),
        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $pic = $this->pic_model->update($input, $id_pic);

        //mengembalikan halaman ke function read
        redirect('pic/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id_pic = $this->uri->segment(3);

        //memanggil function delete pada model
        $pic = $this->pic_model->delete($id_pic);

        //mengembalikan halaman ke function read
        redirect('pic/read');
    }
}
