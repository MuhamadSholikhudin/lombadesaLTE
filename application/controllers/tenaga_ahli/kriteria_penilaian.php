<?php

class Kriteria_penilaian extends CI_Controller
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

        $data['kriteria'] = $this->db->get('kriteria_penilaian')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/kriteria_penilaian', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        $judul = $this->input->post('judul');
        $skor = $this->input->post('skor');
        $kategori = $this->input->post('kategori');
        $tahun = date('Y');


        $data = array(
            'judul' => $judul,
            'skor' => $skor,
            'kategori' => $kategori,
            'tahun' => $tahun
        );

        $this->model_kriteriapenilaian->tambah_kriteria_penilaian($data, 'kriteria_penilaian');
        redirect('tenaga_ahli/kriteria_penilaian');
    }

    public function edit($id)
    {
        $where = array('id_kriteria' => $id);
        $data['kriteria'] = $this->model_kriteriapenilaian->edit_kriteria_penilaian($where, 'kriteria_penilaian')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/editkriteria', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id = $this->input->post('id_kriteria');
        $judul = $this->input->post('judul');
        $skor = $this->input->post('skor');
        $kategori = $this->input->post('kategori');



        $data = [
            'judul' => $judul,
            'kategori' => $kategori,
            'skor' => $skor

        ];

        $where = [
            'id_kriteria' => $id
        ];

        $this->model_kriteriapenilaian->update_data($where, $data, 'kriteria_penilaian');
        redirect('tenaga_ahli/kriteria_penilaian');
    }

    public function hapus($id)
    {
        $where = ['id_kriteria' => $id];
        $this->model_kriteriapenilaian->hapus_data($where, 'kriteria_penilaian');
        redirect('tenaga_ahli/kriteria_penilaian');
    }
}
