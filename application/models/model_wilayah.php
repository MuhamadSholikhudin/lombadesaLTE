<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_wilayah extends CI_Model
{
    public function tampil_wilayah()
    {
        return $this->db->get('wilayah');
    }

    public function tampil_pendaftaran()
    {
        $tahun = date('Y');
        return $this->db->get_where('wilayah', array('tahun' => $tahun));
    }

    public function tambah_wilayah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_wilayah($where, $table)
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

    function get_sub_kecamatan()
    {
        $query = $this->db->query("SELECT COUNT(kode_wilayah), kecamatan FROM wilayah GROUP BY kecamatan");
        return $query->result();
    }
}
