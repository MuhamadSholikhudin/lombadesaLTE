<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_penjadwalan extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('jadwal_lomba');
        $this->db->join('hasil_ajuan', 'hasil_ajuan.no_hasilajuan = jadwal_lomba.no_hasilajuan');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_pendaftaran()
    {
        $tahun = date('Y');
        return $this->db->get_where('daftar', array('tahun' => $tahun));        
    }

    public function edit_jadwal($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function tambah_jadwal($datat, $table)
    {
        $this->db->insert($table, $datat);
    }
    public function hapuspenjadwal($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}
