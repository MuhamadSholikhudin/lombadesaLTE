<?php

class Nilai extends CI_Controller
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

        $data['nilai'] = $this->db->query("SELECT  hasil_ajuan.desa, nilai.nilai1, nilai.nilai2, nilai.dadu1, nilai.dadu2, nilai.id_nilai, nilai.tahun,nilai.nama, kriteria_penilaian.judul FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/nilai', $data);
        $this->load->view('templates_admin/footer');
    }


    public function edit($id)
    {
        $data['nilai'] = $this->db->query("SELECT  hasil_ajuan.desa, nilai.nilai1, nilai.nilai2, nilai.dadu1, nilai.dadu2, nilai.id_nilai, nilai.tahun,nilai.nama, kriteria_penilaian.judul,kriteria_penilaian.nilai_maks FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria WHERE nilai.id_nilai = '$id' ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/editnilai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_nilai = $this->input->post('id_nilai');
        // $skor = $this->input->post('skor');
        $nilai = $this->input->post('nilai');
        $jumlah = $nilai;
        // $jumlah = $skor * $nilai;
 
        $data = [
            'nilai' => $nilai,
            'jumlah' => $jumlah
        ];

        $where = [
            'id_nilai' => $id_nilai
        ];

        $this->model_nilai->update_data($where, $data, 'nilai');
        redirect('tenaga_ahli/nilai/');
    }

    public function hapus($id)
    {
        $where = ['id_pengguna' => $id];
        $this->model_pengguna->hapus_data($where, 'pengguna');
        redirect('tenaga_ahli/pengguna');
    }
}
