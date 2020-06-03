<?php

class Acc_juara extends CI_Controller
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
    }

    public function index()
    {

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['juara'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, hasil_ajuan.desa, hasil_ajuan.kecamatan, SUM(nilai.jumlah) as total 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal
        WHERE hasil_ajuan.tahun = '$tahun' ORDER BY total DESC")->result();

        $data['juarakemarin'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, hasil_ajuan.desa, hasil_ajuan.kecamatan, SUM(nilai.jumlah) as total 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal
        WHERE hasil_ajuan.tahun = '$tahun' ORDER BY total DESC")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/acc_juara', $data);
        $this->load->view('templates_admin/footer');
    }

    public function acc(){

        $no_jadwal = $this->input->post('no_jadwal');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $tahun = date('Y');
        $juara_ke = $this->input->post('juara_ke');
        $total_nilai = $this->input->post('total_nilai');

        $data = [
            'status_jadwal' => 3
        ];
        $where = [
            'no_jadwal' => $no_jadwal
        ];
      

        $datat = array(
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'tahun' => $tahun,
            'juara' => $juara_ke,
            'total_nilai' => $total_nilai,
        );

        $this->model_penjadwalan->update_data($where, $data, 'jadwal_lomba');
        $this->model_juara->tambah_juara($datat, 'juara_lomba');

        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);

        redirect('tenaga_ahli/acc_juara/');
    }

    public function batalkan()
    {

        $no_jadwal = $this->input->post('no_jadwal');
        // $kecamatan = $this->input->post('kecamatan');
        // $desa = $this->input->post('desa');
        $tahunini = date('Y');
        // $juara_ke = $this->input->post('juara_ke');
        // $total_nilai = $this->input->post('total_nilai');

        $data = [
            'status_jadwal' => 2
        ];

        $where = [
            'no_jadwal' => $no_jadwal
        ];

        $tahun = [
            'tahun' => $tahunini
        ];

        $this->model_penjadwalan->update_data($where, $data, 'jadwal_lomba');
        $this->model_juara->hapusjuara($tahun, 'juara_lomba');

        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);

        redirect('tenaga_ahli/acc_juara/');
    }

}
