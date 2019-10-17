<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    function __construct()
    {
    	parent::__construct();
    }

    public function get_all_dekorasi()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id',);

        $query = $this->db->get('dekorasi');
        return $query->result();
    }

    public function get_all_pakaian()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id',);

        $query = $this->db->get('pakaian');
        return $query->result();
    }

    public function get_all_undangan()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id',);

        $query = $this->db->get('undangan');
        return $query->result();
    }
    public function get_all_dokumentasi()
    {
        // Urutkan berdasar abjad
            $this->db->order_by('id',);

        $query = $this->db->get('dokumentasi');
        return $query->result();
    }

    public function get_all_souvenir()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id',);

        $query = $this->db->get('souvenir');
        return $query->result();
    }

    public function get_all_catering()
    {
        // Urutkan berdasar abjad
        //$this->db->order_by('id',);

        $query = $this->db->get('catering');
        return $query->result();
    }
}