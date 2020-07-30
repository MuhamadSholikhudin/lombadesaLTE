<?php

class Pendaftaran extends CI_Controller{

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
    
    public function index(){

        $data['pendaftaran'] = $this->db->get('daftar')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/pendaftaran', $data);
        $this->load->view('templates_admin/footer.php');
    }

    public function tambah_aksi()
    {

        $judul = $this->input->post('judul');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $tahun = $this->input->post('tahun');


        $data = array(
            'judul' => $judul,
            'tgl_selesai' => $tgl_selesai,
            'tahun' => $tahun
        );

        $this->model_pendaftaran->tambah_daftar($data, 'daftar');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA PENDAFTARAN BERHASIL DI TAMBAHKAN', 'success')</script>");

        redirect('tenaga_ahli/pendaftaran/');
    }

    public function edit($id)
    {
        $where = array('no_daftar' => $id);
        $data['daftar'] = $this->model_pendaftaran->edit_daftar($where, 'daftar')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/editpendaftaran', $data);
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
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA PENDAFTARAN BERHASIL DI UBAH', 'success')</script>");

        redirect('tenaga_ahli/pendaftaran/');
    }

    public function hapus($id)
    {
        $cari = $this->db->query("SELECT no_daftar FROM hasil_ajuan WHERE no_daftar = '$id' ");

        if($cari->num_rows() > 0){
            $this->session->set_flashdata("message", "<script>Swal.fire('GAGAL', 'Data yang Dihapus masih digunkan Oleh nilai sehingga tidak dapat di hapus', 'error')</script>");

        }elseif($cari->num_rows() < 1){
            $where = ['no_daftar' => $id];
            $this->model_pendaftaran->hapus_data($where, 'daftar');
            $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI HAPUS', 'success')</script>");
        }

        redirect('tenaga_ahli/pendaftaran/');
    }
}