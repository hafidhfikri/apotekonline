<?php
class pesanObat extends CI_Controller{
	function __construct(){
        parent::__construct();
    }
	
	public function index($msg = NULL){
        $data['msg'] = $msg;
        $this->load->view('formPesanObat',$data);
    }
	
	public function process(){
		$this->load->model('PesananModel');
		
		$tambahPesanan = $this->input->post('tambahPesanan');
		$tambahObat = $this->input->post('tambahObat');
		
		$result = $this->PesananModel->setPesanan($tambahPesanan,$tambahObat);
	}
}
?>