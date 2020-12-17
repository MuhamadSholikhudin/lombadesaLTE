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
        $this->load->helper('tgl_indo');
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

        $this->Model_pengguna->tambah_pengguna($data, 'pengguna');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI TAMBAHKAN', 'success')</script>");
        
        redirect('tenaga_ahli/pengguna');
    }

    public function edit($id)
    {
        $where = array('id_pengguna' => $id);
        $data['pengguna'] = $this->Model_pengguna->edit_pengguna($where, 'pengguna')->result();
        $data['klasi'] = [1,2, 3, 4, 5];
        $data['klasitim']= ['P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7', 'P8','P9', 'P10'];
        $data['klasikeca'] = $this->db->query("SELECT COUNT(kode_wilayah) as total, kecamatan as kec FROM wilayah GROUP BY kecamatan")->result();

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
        $password = $this->input->post('password');
        $hakakses = $this->input->post('hakakses');
        $penempatan = $this->input->post('penempatan');

        $data = [
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'hakakses' => $hakakses,
            'penempatan' => $penempatan

        ];

        $where = [
            'id_pengguna' => $id
        ];

        $this->Model_pengguna->update_data($where, $data, 'pengguna');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI UBAH', 'success')</script>");
        
        redirect('tenaga_ahli/pengguna');
    }

    public function hapus($id)
    {
        $where = ['id_pengguna' => $id];
        $this->Model_pengguna->hapus_data($where, 'pengguna');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI HAPUS', 'success')</script>");
        
        redirect('tenaga_ahli/pengguna');
    }


    function get_subkategori()
    {
        $this->load->Model('Model_wilayah', 'dep_kategori', TRUE);
        // $hakakses = $this->input->post('hakakses');
        
        $keca = $this->dep_kategori->get_sub_kecamatan();
        // $data['keca'] = $this->db->query("SELECT COUNT(kode_wilayah), kecamatan FROM wilayah GROUP BY kecamatan")->result();

        // if($hakakses == 3){

        // $keca = $this->dep_kategori->get_sub_desa($id_kec);
        if (count($keca) > 0) {

            $des_select_box = '';
            $des_select_box .= '<option value="" >Pilih Kecamatan</option>';
            foreach ($keca as $kecamat) {
                $des_select_box .= '<option value="' . $kecamat->kecamatan . '" >' . $kecamat->kecamatan . '</option>';
            }
            echo json_encode($des_select_box);
        }
        // }

    }
}
