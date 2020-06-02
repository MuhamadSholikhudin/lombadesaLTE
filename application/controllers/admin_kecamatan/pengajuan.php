<?php

class Pengajuan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // $penempatan = $this->session->userdata('penempatan');
        if ($this->session->userdata('hakakses') != 3) {
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
        $data['user'] = $this->db->get_where('pengguna', ['penempatan' => $this->session->userdata('penempatan')])->row();

        $tahun = date("Y");
        $kecamatan = $this->session->userdata('penempatan');

        $data['pendaftaran'] = $this->model_pendaftaran->tampil_pendaftaran($tahun)->row();
        $data['pendaftarannum'] = $this->model_pendaftaran->tampil_pendaftaran($tahun)->num_rows();



        $data['pengajuan'] = $this->model_pengajuan->tampil_pengajuan($kecamatan)->row();
        $data['pengajuannum'] = $this->model_pengajuan->tampil_pengajuan( $kecamatan)->num_rows();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/pengajuan', $data);
        $this->load->view('templates_admin/footer');;
    }


    public function tambah(){

        // $data['user'] = $this->db->get_where('pengguna', ['penempatan' => $this->session->userdata('penempatan')])->row();
        $kecamatan = $this->session->userdata('penempatan');

        $data['pendaftaran'] = $this->model_pendaftaran->tampil_pendaftaran()->row();

        $data['wilayah'] = $this->model_wilayah->tampil_wilayah($kecamatan)->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/tambah_pengajuan', $data);
        $this->load->view('templates_admin/footer');;
    }


    public function tambah_aksi()
    {
        $this->form_validation->set_rules('desa', 'desa', 'required', ['required' => 'Desa wajib di Isi !']);

        $no_daftar = $this->input->post('no_daftar');
        $judul = $this->input->post('judul');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $tgl_ajuan = date("Y-m-d");
        $tahun = $this->input->post('tahun');


        $data = array (
                'no_daftar' => $no_daftar,
                'judul' => $judul,
                'kecamatan' => $kecamatan,
                'desa' => $desa,
                'tgl_ajuan' => $tgl_ajuan,
                'tahun' => $tahun
        );

        $this->model_pengajuan->tambah_pengajuan($data, 'hasil_ajuan');
        redirect('admin_kecamatan/pengajuan/');
    }

    public function batal($no_hasilajuan){

        $data = [
            'status_ajuan' => 0
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $this->model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        redirect('admin_kecamatan/pengajuan/index');
    }

    public function ajukan($no_hasilajuan)
    {

        $data = [
            'status_ajuan' => 1
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $this->model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        redirect('admin_kecamatan/pengajuan/index/');
    }

    public function editdesa($no_hasilajuan)
    {

        // $data['user'] = $this->db->get_where('pengguna', ['penempatan' => $this->session->userdata('penempatan')])->row();
        $kecamatan = $this->session->userdata('penempatan');

        $data['pendaftaran'] = $this->model_pendaftaran->tampil_pendaftaran()->row();
        $data['pengajuan'] = $this->model_pengajuan->idpengajuan($no_hasilajuan)->row();

        $data['wilayah'] = $this->model_wilayah->tampil_wilayah($kecamatan)->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/edit_pengajuan', $data);
        $this->load->view('templates_admin/footer');;
    }

    public function edit_aksi()
    {
$desa = $this->input->post('desa');
        $no_hasilajuan = $this->input->post('no_hasilajuan');
        $data = [
            'desa' => $desa
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $this->model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        redirect('admin_kecamatan/pengajuan/index');
    }

    public function hapus($no_hasilajuan)
    {
        $where = ['no_hasilajuan' => $no_hasilajuan];
        $this->model_pengajuan->hapuspengajuan($where, 'hasil_ajuan');
        redirect('admin_kecamatan/pengajuan/index');
    }

}