<?php

class Pengguna extends CI_Controller
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

        $data['pengguna'] = $this->db->get('pengguna')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/pengguna', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $hakakses = $this->input->post('hakakses');
        $penempatan = $this->input->post('penempatan');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'hakakses' => $hakakses,
            'penempatan' => $penempatan
        );

        $this->model_pengguna->tambah_pengguna($data, 'pengguna');
        redirect('tenaga_ahli/pengguna');
    }

    public function edit($id)
    {
        $where = array('id_pengguna' => $id);
        $data['pengguna'] = $this->model_pengguna->edit_pengguna($where, 'pengguna')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/editpengguna', $data);
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


    function get_subkategori()
    {
        $this->load->model('M_kategori', 'dep_kategori', TRUE);
        $id_kec = $this->input->post('id_kec');
        $desas = $this->dep_kategori->get_sub_desa($id_kec);
        if (count($desas) > 0) {
            $des_select_box = '';
            $des_select_box .= '<option value="" >Pilih Desa</option>';
            foreach ($desas as $desa) {
                $des_select_box .= '<option value="' . $desa->id_des . '" >' . $desa->nama . '</option>';
            }
            echo json_encode($des_select_box);
        }
    }
}
