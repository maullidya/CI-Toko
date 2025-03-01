<?php

class model_kategori extends CI_Model{
    public function data_elektronik(){
       return $this->db->get_where("barang", array('Kategori'=>'elektronik'));
    }
    public function data_pakaian_pria(){
       return $this->db->get_where("barang", array('Kategori'=>'pakaian pria'));
    }
    public function data_pakaian_wanita(){
        return $this->db->get_where("barang", array('Kategori'=>'pakaian wanita'));
     }
     public function data_pakaian_anak(){
        return $this->db->get_where("barang", array('Kategori'=>'pakaian anak'));
     }
     public function data_peralatan_olahraga(){
        return $this->db->get_where("barang", array('Kategori'=>'peralatan olahraga'));
     }
}