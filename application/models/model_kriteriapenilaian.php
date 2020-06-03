<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kriteriapenilaian extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('kriteria_penilaian');
    }

    public function tampil_kriteria_penilaian()
    {
        $tahun = date('Y');
        return $this->db->get_where('kriteria_penilaian', array('tahun' => $tahun));
    }

    public function tambah_kriteria_penilaian($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_kriteria_penilaian($where, $table)
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
