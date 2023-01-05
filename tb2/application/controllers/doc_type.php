<?php
defined('BASEPATH') or exit('No direct script access allowed');

class doc_type extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model('doctype_model');
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
        $doc_type = $this->doctype_model->read();



        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Document Type',
            'theme_page' => 'documents/document_type_read',


            //data dikirim ke view
            'doc_type' => $doc_type,

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {

        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Add Document Type',
            'theme_page' => 'documents/document_type_insert'
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $doc_name = $this->input->post('doc_name');
        $created_at = $this->input->post('created_at');



        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'doc_name' => $doc_name,
            'created_at' => date('Y-m-d H:i:s'),

        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $doc_type = $this->doctype_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('doc_type/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $doctype_single = $this->doctype_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'judul' => 'Document Type Update',
            'theme_page' => 'documents/document_type_update',

            //mengirim data yang dipilih ke view
            'doctype_single' => $doctype_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id_doc = $this->uri->segment(3);

        //menangkap data input dari view
        $doc_name = $this->input->post('doc_name');
        $updated_at = $this->input->post('updated_at');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'doc_name' => $doc_name,
            'updated_at' => date('Y-m-d H:i:s'),
        );

        //memanggil function insert pada model
        //function insert berfungsi menyimpan/create data ke table di database
        $doc_type = $this->doctype_model->update($input, $id_doc);

        //mengembalikan halaman ke function read
        redirect('doc_type/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //memanggil function delete pada model
        $doc_type = $this->doctype_model->delete($id);

        //mengembalikan halaman ke function read
        redirect('doc_type/read');
    }
}
