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
        $nilai_maks = $this->input->post('nilai_maks');
        $kategori = $this->input->post('kategori');
        $tahun = date('Y');


        $data = array(
            'judul' => $judul,
            'nilai_maks' => $nilai_maks,
            'kategori' => $kategori,
            'tahun' => $tahun
        );

        $this->Model_kriteriapenilaian->tambah_kriteria_penilaian($data, 'kriteria_penilaian');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA PENDAFTARAN BERHASIL DI TAMBAHKAN', 'success')</script>");
        
        redirect('tenaga_ahli/kriteria_penilaian');
    }

    public function edit($id)
    {
        $where = array('id_kriteria' => $id);
        $data['kriteria'] = $this->Model_kriteriapenilaian->edit_kriteria_penilaian($where, 'kriteria_penilaian')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/editkriteria', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id = $this->input->post('id_kriteria');
        $judul = $this->input->post('judul');
        $nilai_maks = $this->input->post('nilai_maks');
        $kategori = $this->input->post('kategori');

        $data = [
            'judul' => $judul,
            'kategori' => $kategori,
            'nilai_maks' => $nilai_maks

        ];

        $where = [
            'id_kriteria' => $id
        ];

        $this->Model_kriteriapenilaian->update_data($where, $data, 'kriteria_penilaian');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI UBAH', 'success')</script>");
        
        redirect('tenaga_ahli/kriteria_penilaian');
    }

    // public function hapu($id)
    // {
    //     $where = ['id_kriteria' => $id];
    //     $this->Model_kriteriapenilaian->hapus_data($where, 'kriteria_penilaian');
    //     redirect('tenaga_ahli/kriteria_penilaian');
    // }


    public function hapus($id)
    {
        $cari = $this->db->query("SELECT id_kriteria FROM nilai WHERE id_kriteria = '$id' ");

        if ($cari->num_rows() > 0) {
            $this->session->set_flashdata("message", "<script>Swal.fire('GAGAL', 'DATA KRITERIA PENILAIAN GAGAL DIHAPUS KARENA MASIH DI PAKAI', 'error')</script>");
        } elseif ($cari->num_rows() < 1) {
            $where = ['id_kriteria' => $id];
            $this->Model_kriteriapenilaian->hapus_data($where, 'kriteria_penilaian');
            $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA KRITERIA PENILAIAN BERHASIL DI HAPUS', 'success')</script>");
        }
        redirect('tenaga_ahli/kriteria_penilaian/');
    }
}
