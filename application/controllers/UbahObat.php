<?php
class UbahObat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index($msg = NULL)
    {
        $data['msg'] = $msg;
        $this->load->view('formUbahObat', $data);
    }

    public function process()
    {
        $this->load->model('ObatModel');

        $nama = $this->input->post('namaobat');
        $komposisi = $this->input->post('komposisi');
        $indikasi = $this->input->post('indikasi');
        $kemasan = $this->input->post('kemasan');
        $dosis = $this->input->post('dosis');
        $pemberianobat = $this->input->post('pemberianobat');
        $pabrik = $this->input->post('pabrik');
        $harganormal = $this->input->post('harganormal');
        $discount = $this->input->post('discount');
        $harga = $this->input->post('harga');
        $stock = $this->input->post('stock');

        $result = $this->ObatModel->setObat($nama, $komposisi, $indikasi, $kemasan, $dosis, $pemberianobat, $pabrik, $harganormal, $discount, $harga, $stock);

        if ($nama == '' || $komposisi == '' || $indikasi == '' || $kemasan == '' || $dosis == '' || $pemberianobat == '' || $pabrik == '' || $harganormal == '' || $stock == '') {
            $this->load->view('jangankosong');
        } else {
            if ($discount == '') {
                //discount diset 0%
                //harga diset sama kayak harganormal
                $this->load->view('ubahBerhasil');
                $this->load->view('halamanBeranda');
            } else {
                //discount diset sesuai inputan
                //harga diset (harganormal*(discount/100))
                $this->load->view('ubahBerhasil');
                $this->load->view('halamanBeranda');
            }
        }
    }
}
?>