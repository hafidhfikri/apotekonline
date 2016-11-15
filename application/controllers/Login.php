<?php
/**
 * Created by PhpStorm.
 * User: Hafidh Fikri Rasyid
 * Date: 11/3/2016
 * Time: 3:36 PM
 */
class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index($msg = NULL){
        $data['msg'] = $msg;
        $this->load->view('formLogin',$data);
    }

    public function process(){
        $this->load->model('UserModel');

        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $result = $this->UserModel->getAdmin($email,$pass);

        if($result){
            $this->load->view('gaknemu');
        }else{
            $data['msg'] = 1;
            $this->load->view('formLogin',$data);
        }

    }

}
?>