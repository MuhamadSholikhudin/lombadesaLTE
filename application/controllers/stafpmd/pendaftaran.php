<?php

class Pendaftaran extends CI_Controller{

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
    }
    
    public function index(){

        $data['pendaftaran'] = $this->db->get('daftar')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/pendaftaran', $data);
        $this->load->view('templates_admin/footer.php');
    }

    public function tambah_aksi()
    {

        $judul = $this->input->post('judul');
        $status_daftar = $this->input->post('status_daftar');
        $tahun = $this->input->post('tahun');


        $data = array(
            'judul' => $judul,
            'status_daftar' => $status_daftar,
            'tahun' => $tahun
        );

        $this->model_pendaftaran->tambah_daftar($data, 'daftar');
        redirect('stafpmd/pendaftaran/');
    }

    public function edit($id)
    {
        $where = array('no_daftar' => $id);
        $data['daftar'] = $this->model_pendaftaran->edit_daftar($where, 'daftar')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/editpendaftaran', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id = $this->input->post('no_daftar');
        $judul = $this->input->post('judul');
        $tgl_selesai = $this->input->post('tgl_selesai');
        // $status_daftar = $this->input->post('status_daftar');

        $data = [
            'judul' => $judul,
            'tgl_selesai' => $tgl_selesai,
            // 'status_daftar' => $status_daftar,
        ];

        $where = [
            'no_daftar' => $id
        ];

        $this->model_pendaftaran->update_data($where, $data, 'daftar');
        redirect('stafpmd/pendaftaran/');
    }

    public function hapus($id)
    {
        $where = ['no_daftar' => $id];
        $this->model_barang->hapus_data($where, 'daftar');
        redirect('stafpmd/pendaftaran/');
    }
}