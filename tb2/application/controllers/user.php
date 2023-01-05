<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //if (empty($this->session->userdata('id_number'))) {
        //redirect('user/login');
        //}
        date_default_timezone_set("Asia/Jakarta");
        //memanggil model
        $this->load->model('user_model');
        $this->load->model('pic_model');
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->login();
    }

    public function login()
    {

        //memanggil fungsi login submit	(agar di view tidak dilihat fungsi login submit)
        $this->login_submit();

        //mengirim data ke view
        $output = array(
            'judul' => 'Login'
        );

        //memanggil file view
        $this->load->view('login', $output);
    }
    private function login_submit()
    {

        //proses jika tombol login di submit
        if ($this->input->post('submit') == 'Login') {

            //aturan validasi input login
            $this->form_validation->set_rules('user_name', 'Username', 'required|callback_login_check');
            $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[4]');

            //jika validasi sukses 
            if ($this->form_validation->run() == TRUE) {

                //redirect ke user (bisa dirubah ke controller & fungsi manapun)
                redirect('aircraft_data/dashboard');
            }
        }
    }


    public function login_check()
    {
        //menangkap data input dari view
        $user_name = $this->input->post('user_name', TRUE);
        $password = $this->input->post('password', TRUE);

        //password encrypt
        $password_encrypt = md5($password);

        //check username & password sesuai dengan di database
        $data_user = $this->user_model->login_check($user_name, $password);

        //jika cocok : dikembalikan ke fungsi login_submit (validasi sukses)
        if (!empty($data_user)) {

            //buat session user 
            $this->session->set_userdata('id_number', $data_user['id_number']);
            $this->session->set_userdata('id_role', $data_user['id_role']);
            $this->session->set_userdata('user_name', $data_user['user_name']);

            return TRUE;

            //jika tidak cocok : dikembalikan ke fungsi login_submit (validasi gagal)
        } else {

            //membuat pesan error
            $this->form_validation->set_message('login_check', 'Login Error!');

            return FALSE;
        }
    }

    public function logout()
    {

        //hapus session user
        $this->session->sess_destroy();

        //mengembalikan halaman ke function read
        redirect('user/login');
    }

    public function reset_password()
    {

        //memanggil fungsi login submit	(agar di view tidak dilihat fungsi login submit)
        $this->login_submit();

        //mengirim data ke view
        $output = array(
            'theme_page' => 'reset_password',
            'judul' => 'Reset Password'
        );

        //memanggil file view
        $this->load->view('user/read', $output);
    }

    public function read()
    {
        //memanggil function read pada user model
        //function read berfungsi mengambil/read data dari table user di database
        $data_user = $this->user_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'judul' => 'Daftar user',
            'theme_page' => 'user/user_read',


            //data user dikirim ke view
            'data_user' => $data_user

        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }
    public function insert()
    {
        $pic = $this->pic_model->read();
        $user_role = $this->user_model->read_role();


        //mengirim data ke view
        $output = array(
            'judul' => 'Ubah user',
            'theme_page' => 'user/user_insert',

            //mengirim data user yang dipilih ke view
            'pic' => $pic,
            'user_role' => $user_role,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $id_number = $this->input->post('id_number');
        $user_name = $this->input->post('user_name');
        $job_title = $this->input->post('job_title');
        $id_pic = $this->input->post('id_pic');
        $id_role = $this->input->post('id_role');
        // $password_encrypt = md5($password);

        //mengirim data ke model
        $input = array(
            //format : user_name field/kolom table => data input dari view
            'id_number' => $id_number,
            'user_name' => $user_name,
            'job_title' => $job_title,
            'id_pic' => $id_pic,
            'id_role' => $id_role,
            //'password' => $password_encrypt,
        );

        //memanggil function insert pada user model
        //function insert berfungsi menyimpan/create data ke table user di database
        $data_user = $this->user_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('user/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table user sesuai id yg dipilih
        $data_user_single = $this->user_model->read_single($id);
        $pic = $this->pic_model->read();
        $user_role = $this->user_model->read_role();


        //mengirim data ke view
        $output = array(
            'judul' => 'Ubah user',
            'theme_page' => 'user/user_update',

            //mengirim data user yang dipilih ke view
            'data_user_single' => $data_user_single,
            'pic' => $pic,
            'user_role' => $user_role,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        $id_number = $this->input->post('id_number');
        $user_name = $this->input->post('user_name');
        $job_title = $this->input->post('job_title');
        $id_pic = $this->input->post('id_pic');
        $id_role = $this->input->post('id_role');

        //mengirim data ke model
        $input = array(
            //format : user_name field/kolom table => data input dari view
            'id_number' => $id_number,
            'user_name' => $user_name,
            'job_title' => $job_title,
            'id_pic' => $id_pic,
            'id_role' => $id_role,
        );

        //memanggil function insert pada user model
        //function insert berfungsi menyimpan/create data ke table user di database
        $data_user = $this->user_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('user/read');
    }

    public function reset()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table user sesuai id yg dipilih
        $data_user_single = $this->user_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'judul' => 'Reset Password',
            'theme_page' => 'user_update',

            //mengirim data user yang dipilih ke view
            'data_user_single' => $data_user_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function reset_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        $password = $this->input->post('password');
        //$password_encrypt = md5($password);
        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'password' => $password,
        );

        //memanggil function insert pada user model
        //function insert berfungsi menyimpan/create data ke table user di database
        $data_user = $this->user_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('user/read');
    }
    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //memanggil function delete pada user model
        $data_user = $this->user_model->delete($id);

        //mengembalikan halaman ke function read
        redirect('user/read');
    }
}
