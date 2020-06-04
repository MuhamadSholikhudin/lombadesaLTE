<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_nilai extends CI_Model
{

    public function save_batch($kri)
    {
        return $this->db->insert_batch('nilai', $kri);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
