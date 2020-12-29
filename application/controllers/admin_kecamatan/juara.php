<?php

class Juara extends CI_Controller
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
        $data['juara'] = $this->db->query("SELECT * FROM juara_lomba 
        JOIN wilayah ON juara_lomba.kode_wilayah = wilayah.kode_wilayah                        
        WHERE juara_lomba.tahun = '$tahun' ORDER BY juara_lomba.juara ASC ")->result();
        // $data['penjadwalan'] = $this->db->query($queryjadwal)->result();

        // $data['penjadwalan'] = $this->Model_penjadwalan->tampil_data();
        $data['sekda'] = $this->db->query(" SELECT * FROM pengguna WHERE hakakses = 1")->row();
        $data['tahun'] = $tahun;

       
        $this->load->view('kecamatan/cetak_juara', $data);
        
    }

    public function cetak($tahun)
    {
        $data['penjadwalan'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal,hasil_ajuan.no_hasilajuan, wilayah.desa,hasil_ajuan.tahun, wilayah.kecamatan 
        FROM hasil_ajuan JOIN jadwal_lomba ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan 
        JOIN wilayah ON hasil_ajuan.kode_wilayah = wilayah.kode_wilayah                        
        WHERE hasil_ajuan.tahun = '$tahun' AND jadwal_lomba.status_jadwal > 0")->result();
        // $data['penjadwalan'] = $this->db->query($queryjadwal)->result();

        // $data['penjadwalan'] = $this->Model_penjadwalan->tampil_data();
        $data['sekda'] = $this->db->query(" SELECT * FROM pengguna WHERE hakakses = 4")->row();
        $data['tahun'] = $tahun;

       
        $this->load->view('kecamatan/cetak_jadwal_lomba', $data);
      
    }
}
