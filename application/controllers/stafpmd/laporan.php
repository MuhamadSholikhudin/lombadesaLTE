<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') != 2) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('auth/login');
        }
        $this->load->helper('tgl_indo');
    }

    public function pendaftar()
    {

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['pengajuan'] = $this->db->query("SELECT * FROM hasil_ajuan ORDER BY tgl_ajuan DESC")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/laporan_pendaftar', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetakpendaftar(){
        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['pengajuan'] = $this->db->query("SELECT * FROM hasil_ajuan ORDER BY tgl_ajuan DESC")->result();

        $this->load->view('stafpmd/cetak_pendaftar', $data);
       
    }

    public function juaralomba()
    {

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['juara'] = $this->db->query("SELECT * FROM juara_lomba ORDER BY tahun DESC")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/laporan_juara', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetakjuara()
    {
        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['juara'] = $this->db->query("SELECT * FROM juara_lomba ORDER BY tahun DESC")->result();

        $this->load->view('stafpmd/cetak_juara', $data);
    }



}
