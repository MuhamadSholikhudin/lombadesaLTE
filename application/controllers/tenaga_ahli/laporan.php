<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') != 1) {
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
        $this->load->view('tenaga_ahli/laporan_pendaftar', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetakpendaftar(){
        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['pengajuan'] = $this->db->query("SELECT * FROM hasil_ajuan ORDER BY tgl_ajuan DESC")->result();
        $data['tenagaahli'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 1")->result();

        $this->load->view('tenaga_ahli/cetak_pendaftar', $data);
       
    }

    public function juaralomba()
    {

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['juara'] = $this->db->query("SELECT * FROM juara_lomba ORDER BY tahun DESC")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/laporan_juara', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetakjuara()
    {
        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['juara'] = $this->db->query("SELECT * FROM juara_lomba ORDER BY tahun DESC")->result();
        $data['tenagaahli'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 1")->result();
        
        $this->load->view('tenaga_ahli/cetak_juara', $data);
    }


    public function nilai($tahun){

        $data['pengajuan'] = $this->db->query("SELECT * FROM  hasil_ajuan WHERE tahun = '$tahun' ORDER BY desa ASC")->result();
        $data['penilai'] = $this->db->query("SELECT * FROM  pengguna WHERE hakakses = 5 ")->result();
        $data['nilai'] = $this->db->query("SELECT * FROM  nilai WHERE tahun = '$tahun' ORDER BY no_jadwal ASC")->result();
        $data['jadwal'] = $this->db->query("SELECT jadwal_lomba.no_jadwal, hasil_ajuan.no_hasilajuan, hasil_ajuan.desa FROM  jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE YEAR(jadwal_lomba.tgl_jadwal) = '$tahun' ORDER BY jadwal_lomba.no_jadwal ASC")->result();
        

$this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/laporan_nilai', $data);
        $this->load->view('templates_admin/footer');
    }


}
