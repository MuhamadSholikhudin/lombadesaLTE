<?php

class wilayah extends CI_Controller{

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

        $data['wilayahan'] = $this->db->get('wilayah')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/wilayah', $data);
        $this->load->view('templates_admin/footer.php');
    }

    public function tambah_aksi()
    {

        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');


        $data = array(
            'kecamatan' => $kecamatan,
            'desa' => $desa,
        );

        $this->model_wilayah->tambah_wilayah($data, 'wilayah');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Wilayah berhasil di tambahkan', 'success')</script>");
        redirect('stafpmd/wilayah/');
    }

    public function edit($id)
    {
        $where = array('kode_wilayah' => $id);
        $data['wilayah'] = $this->model_wilayah->edit_wilayah($where, 'wilayah')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/editwilayah', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id = $this->input->post('kode_wilayah');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');

        $data = [
            'kecamatan' => $kecamatan,
            'desa' => $desa,
        ];

        $where = [
            'kode_wilayah' => $id
        ];

        $this->model_wilayah->update_data($where, $data, 'wilayah');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Wilayah berhasil di Ubah', 'success')</script>");
        redirect('stafpmd/wilayah/');
    }

    public function hapus($id)
    {
        $where = ['kode_wilayah' => $id];
        $this->model_wilayah->hapus_data($where, 'wilayah');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Wilayah berhasil di Hapus', 'success')</script>");
        redirect('stafpmd/wilayah/');
    }
}