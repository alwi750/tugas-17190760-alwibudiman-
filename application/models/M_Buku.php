<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Buku extends CI_Model{

    //manajemen buku
    public function getBuku(){
        return $this->db->get('buku');
    }

    public function bukuWhere($where){
        return $this->db->get('buku', $where);
    }

    public function simpanBuku($data=null){
        $this->db->insert('buku',$data);
    }

    public function updateBuku($data=null, $where=null){
        $this->db->update('buku',$data,$where);
    }

    public function hapusBuku($where= null){
        $this->db->update('buku',$where);
    }

    public function total($field, $where){
        $this->db->select_sum($field);
        if(!empty($where) &&count($where) >0){
            $this->db->get()->row($field);
        }
    }

    //manajemen kategori
    public function getKategori(){
        return $this->db->get('buku');
    }

    public function kategoriWhere($where){
        return $this->db->get('kategori', $where);
    }

    public function simpanKategori($data=null){
        $this->db->insert('kategori',$data);
    }

    public function updateKategori($data=null, $where=null){
        $this->db->update('kategori',$data,$where);
    }

    //Join
    public function joinKategoriBuku($where){
        $this->db->select('buku.id_kategori,kategori.kategori');
        $this->db->from('buku');
        $this->db-join('kategori','kategori.id=buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
} 