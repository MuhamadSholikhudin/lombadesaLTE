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
        $data['juaraini'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, hasil_ajuan.desa, hasil_ajuan.kecamatan, SUM(nilai.jumlah) as total 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal
        WHERE hasil_ajuan.tahun = '$tahun'  ORDER BY total DESC LIMIT 3");

        $data['juarabaru'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, hasil_ajuan.desa, hasil_ajuan.kecamatan, SUM(nilai.jumlah) as total 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal
        WHERE hasil_ajuan.tahun = '$tahun'  ORDER BY total DESC LIMIT 3")->result();

        $data['juara'] = $this->db->query("SELECT * 
        FROM juara_lomba WHERE tahun = '$tahun' ORDER BY total_nilai DESC LIMIT 3");

        $data['juaralama'] = $this->db->query("SELECT * 
        FROM juara_lomba WHERE tahun != '$tahun' ORDER BY total_nilai DESC LIMIT 3")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/acc_juara', $data);
        $this->load->view('templates_admin/footer');
    }

    public function acc(){

        $desa1 = $this->input->post('desa1');
        $kecamatan1 = $this->input->post('kecamatan1');
        $juara1 = $this->input->post('juara1');
        $total_nilai1 = $this->input->post('total_nilai1');

        $desa2 = $this->input->post('desa2');
        $kecamatan2 = $this->input->post('kecamatan2');
        $juara2 = $this->input->post('juara');
        $total_nilai2 = $this->input->post('total_nilai2');

        $desa3 = $this->input->post('desa3');
        $kecamatan3 = $this->input->post('kecamatan3');
        $juara3 = $this->input->post('juara');
        $total_nilai3 = $this->input->post('total_nilai3');

        $tahun = date('Y');


        $data = array(
            array(
                'tahun'	=>  $tahun,
                'desa'	=>  $desa1 ,
                'kecamatan'=>  $kecamatan1,
                'total_nilai'=>  $total_nilai1,
                'juara'	=>  $juara1
            ),
            array(
                'tahun' =>  $tahun,
                'desa'	=>  $desa2 ,
                'kecamatan' =>  $kecamatan2,
                'total_nilai' =>  $total_nilai2,
                'juara'	=>  $juara2
            ),
            array(
                'tahun'	=>  $tahun,
                'desa'	=>  $desa3 ,
                'kecamatan'=>  $kecamatan3,
                'total_nilai'=>  $total_nilai3,
                'juara'	=>  $juara3
            )
        );

        $this->db->insert_batch('juara_lomba', $data); 
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
