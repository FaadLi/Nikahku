<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    function __construct()
    {
    	parent::__construct();
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