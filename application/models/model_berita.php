<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_berita extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('berita');
    }

    public function tampil_berita()
    {
        $tahun = date('Y');
        return $this->db->get_where('berita', array('tahun' => $tahun));
    }

    public function tambah_berita($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_berita($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}