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

        $data['nilai'] = $this->db->query("SELECT  hasil_ajuan.desa, nilai.nilai,nilai.id_nilai, nilai.tahun,nilai.nama, kriteria_penilaian.judul FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/nilai', $data);
        $this->load->view('templates_admin/footer');
    }


    public function edit($id)
    {
        $where = array('id_pengguna' => $id);
        $data['pengguna'] = $this->model_pengguna->edit_pengguna($where, 'pengguna')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/editnilai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id = $this->input->post('id_pengguna');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $hakakses = $this->input->post('hakakses');
        $penempatan = $this->input->post('penempatan');

        $data = [
            'nama' => $nama,
            'username' => $username,
            'hakakses' => $hakakses,
            'penempatan' => $penempatan

        ];

        $where = [
            'id_pengguna' => $id
        ];

        $this->model_pengguna->update_data($where, $data, 'pengguna');
        redirect('tenaga_ahli/pengguna');
    }

    public function hapus($id)
    {
        $where = ['id_pengguna' => $id];
        $this->model_pengguna->hapus_data($where, 'pengguna');
        redirect('tenaga_ahli/pengguna');
    }
}
