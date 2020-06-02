<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengajuan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('daftar');
    }


    public function tambah_pengajuan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function tampil_pengajuan($kecamatan)
    {
        $tahun = date('Y');
        return $this->db->get_where('hasil_ajuan', ['kecamatan' => $kecamatan, 'tahun' => $tahun]);
    }

    public function idpengajuan($no_hasilajuan)
    {
        return $this->db->get_where('hasil_ajuan', ['no_hasilajuan' => $no_hasilajuan]);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapuspengajuan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cariidp($id){
        $sql = "SELECT no_daftar FROM hasil_ajuan WHERE no_hasilajuan ='. $id'";
        $query = $this->db->query($sql);
        return $query;

    }


    
}
