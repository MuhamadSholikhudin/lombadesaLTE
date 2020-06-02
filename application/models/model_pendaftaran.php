<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pendaftaran extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('daftar');
    }

    public function tampil_pendaftaran()
    {
        $tahun = date('Y');
        return $this->db->get_where('daftar', array('tahun' => $tahun));        
    }

    public function tambah_daftar($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_daftar($where, $table)
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
