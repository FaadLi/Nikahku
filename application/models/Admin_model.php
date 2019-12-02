<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct()
    {
    	parent::__construct();
    }

    public function get_count_kategori($tabel){

        $tabel=$tabel;
        $query = $this->db->query("SELECT COUNT(*) as ok FROM $tabel"); 
        $row = $query->first_row();
        return $row;

    }
    
    public function get_member()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id',);

        $query = $this->db->get('member');
        return $query->result();
    }
    public function create_member($namaWo,$nama,$email,$password)
    {
        
        $data = array(
            'namaWo'    => $namaWo,
            'nama'      => $nama,
            'email'     => $email,
            'password'  => $password
        );
        // menambahkan data
        return $this->db->insert('member', $data);
    }
    public function delete_member($id)
    {
        // menghapus User
        $this->db->where('id', $id);
        $result = $this->db->delete('member');
        return $result;
    }


    public function get_kategori($tabel)
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id',);

        $tabel = $tabel;

        $query = $this->db->get($tabel);
        return $query->result();
    }


}