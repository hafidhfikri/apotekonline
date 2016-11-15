<?php
/**
 * Created by PhpStorm.
 * User: Hafidh Fikri Rasyid
 * Date: 11/3/2016
 * Time: 3:28 PM
 */

class ObatModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function addObat($data){
        $this->db->insert('member',$data);
    }

    public function editObat($data,$id){
        $this->db->where('id', $id);
        $this->db->update('obat', $data);
    }

    public function hapusObat($id){
        $this->db->where('idObat', $id);
        $this->db->delete('obat');
    }

    public function generateDataObat(){
        //ini buat apaan ?
    }

    public function getObat($id){
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->where('idObat', $id);

        $query = $this->db->get();

        return $query->result();
    }

    public function getListObat(){
        $this->db->select('*');
        $this->db->from('obat');

        $query = $this->db->get();

        return $query->result();
    }
}
?>