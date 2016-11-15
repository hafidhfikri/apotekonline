<?php
/**
 * Created by PhpStorm.
 * User: Hafidh Fikri Rasyid
 * Date: 11/3/2016
 * Time: 3:31 PM
 */

class PemesananModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getPesanan($id){
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('idPesanan', $id);

        $query = $this->db->get();

        return $query->result();
    }

    public function editStatusPesanan($id,$status){

    }

    public function getAllPesanan(){
        $this->db->select('*');
        $this->db->from('pesanan');

        $query = $this->db->get();

        return $query->result();
    }

    public function getDetailPesanan($idPesanan){
        $this->db->select('*');
        $this->db->from('detail_pesanan');
        $this->db->where('idPesanan', $idPesanan);

        $query = $this->db->get();

        return $query->result();
    }

    public function setPesanan($data){
        $this->db->insert('pesanan',$data);
    }

    public function setDetailPesanan(){

    }

    public function editPesanan($data,$id){
        $this->db->where('id', $id);
        $this->db->update('pesanan', $data);
    }

    public function editDetailPesanan($data,$id){
        $this->db->where('id', $id);
        $this->db->update('detail_pesanan', $data);
    }
}

?>