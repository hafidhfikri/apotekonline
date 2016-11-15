<?php
/**
 * Created by PhpStorm.
 * User: Hafidh Fikri Rasyid
 * Date: 11/3/2016
 * Time: 3:31 PM
 */
class UserModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getAdmin($email,$password){

        $this->db->where('email', $email);
        $this->db->where('password', md5($password));

        // nama tabel admin
        $query = $this->db->get('admin');

        if($query->num_rows() == 1){
            $data = $this->generateAdmin($email,$password);

            $this->session->set_userdata($data);
            return true;
        }else{
            return false;
        }

        return false;

    }

    public function generateAdmin($email,$password){
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('admin');

        $row = $query->row();
        $data = array(
            //nama rownya ya :3
            'email' => $row->email,
            'nama' => $row->nama,
            'validated' => true
        );

        return $data;
    }

    public function getMember($email,$password){
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));

        // nama tabel member
        $query = $this->db->get('member');

        if($query->num_rows() == 1){
            $data = $this->generateMember($email,$password);

            $this->session->set_userdata($data);
            return true;
        }else{
            return false;
        }

        return false;
    }

    public function generateMember($email,$password){
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('member');

        $row = $query->row();
        $data = array(
            //nama rownya ya :3
            'email' => $row->email,
            'nama' => $row->nama,
            'validated' => true
        );

        return $data;
    }

    public function setMember($data){
        $this->db->insert('member',$data);
    }
}

?>