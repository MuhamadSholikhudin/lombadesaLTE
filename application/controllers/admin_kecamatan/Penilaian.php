<?php

class Penilaian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') != 3) {
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


    public function index_pertahun($tahun)
    {
        $data['pengajuan'] = $this->db->query("SELECT * FROM  hasil_ajuan WHERE tahun = '$tahun' ORDER BY desa ASC")->result();
        $data['penilai'] = $this->db->query("SELECT * FROM  pengguna WHERE hakakses = 5 ")->result();
        $data['nilai'] = $this->db->query("SELECT * FROM  nilai WHERE tahun = '$tahun' ORDER BY no_jadwal ASC")->result();
        $data['jadwal'] = $this->db->query("SELECT jadwal_lomba.no_jadwal, hasil_ajuan.no_hasilajuan, hasil_ajuan.desa FROM  jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE YEAR(jadwal_lomba.tgl_jadwal) = '$tahun' ORDER BY jadwal_lomba.no_jadwal ASC")->result();
        

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/penilaian', $data);
        $this->load->view('templates_admin/footer');
    }

 


    public function cetak($tahun)
    {
        $data['penjadwalan'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal,hasil_ajuan.no_hasilajuan, hasil_ajuan.desa,hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahun' AND jadwal_lomba.status_jadwal > 0")->result();
        // $data['penjadwalan'] = $this->db->query($queryjadwal)->result();

        // $data['penjadwalan'] = $this->Model_penjadwalan->tampil_data();
        $data['sekda'] = $this->db->query(" SELECT * FROM pengguna WHERE hakakses = 4")->row();
        $data['tahun'] = $tahun;


        $this->load->view('kecamatan/cetak_jadwal_lomba', $data);
    }
}
