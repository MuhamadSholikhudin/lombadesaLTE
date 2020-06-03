<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_juara extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('juara_lomba');
    }

    public function tambah_juara($data, $table)
    {
        $this->db->insert($table, $data);
    }
    
}
