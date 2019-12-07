<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct()
    {
    	parent::__construct();
    }

    // Proses login user
    public function login($nama, $password){
        // Validasi
        $this->db->where('nama', $nama);
        $this->db->where('password', $password);

        $result = $this->db->get('admin');

        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

    public function getData($id){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id',$id);
        
        $query = $this->db->get();
        return $query->result();
       }
    function get_user_details($id)
    {   
        // $this->db->join('levels', 'levels.level_id = users.fk_level_id', 'left');
        $this->db->where('id', $id);

        $result = $this->db->get('admin');

        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
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