<?php
class Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index($msg = NULL)
    {
        $data['msg'] = $msg;
        $this->load->view('formRegistrasi', $data);
    }

    public function process()
    {
        $this->load->model('UserModel');

        $nama = $this->input->post('nama');
        $tlp = $this->input->post('tlp');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $alamat = $this->input->post('alamat');
        $cekpass = $this->input->post('cekpass');

        $data = array(
            'Nama' => $nama,
            'Email' => $email,
            'Password' => $pass,
            'AlamatRumah' => $alamat,
            'NoTelp' => $tlp
        );

        if ($nama == '' || $tlp == '' || $email == '' || $pass == '' || $cekpass == '') {
            $this->load->view('jangankosong');
        } else {
            if ($pass != $cekpass) {
                $this->load->view('tidaksama');
            } else {
                $this->UserModel->setmember($data);
                $this->load->view('regisBerhasil');
                $this->load->view('formLogin');
            }
        }
    }
}
?>