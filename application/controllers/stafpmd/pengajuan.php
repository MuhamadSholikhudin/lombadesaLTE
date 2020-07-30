<?php

class Pengajuan extends CI_Controller{

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
     

    public function index()
    {

        // $data['pendaftaran'] = $this->db->get_where('daftar', ['id_pendf' => $id_pendf])->row();
        // $data['pengajuan'] = $this->db->where('hasil_ajuan', ['status_ajuan >' => 0])->result_array();
        $data['pengajuan'] = $this->db->query('SELECT * FROM (hasil_ajuan) WHERE status_ajuan > 0')->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/pengajuan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function dikembalikan($no_hasilajuan)
    {
        $data = [
            'status_ajuan' => 0
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $id = $no_hasilajuan;
        $this->model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        // $idpendf = $this->model_pengajuan->cariidp($id)->result_row();
        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);
            $this->session->set_flashdata("message", "<script>Swal.fire('KEMBALIKAN', 'Data Pengajuan Berhasil Dikembalikan', 'success')</script>");

        redirect('stafpmd/pengajuan/');
    }

    public function diterima($no_hasilajuan)
    {
        $data = [
            'status_ajuan' => 2
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $no_hasilajuan = $this->input->post('no_hasilajuan');
        // $kecamatan = $this->input->post('kecamatan');
        // $desa = $this->input->post('desa');
        // $tahun = $this->input->post('tahun');

        $datat = array(
            'no_hasilajuan' => $no_hasilajuan
        );

        $this->model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        $this->model_penjadwalan->tambah_jadwal($datat, 'jadwal_lomba');

        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Pengajuan Diterima', 'success')</script>");

        redirect('stafpmd/pengajuan/');
    }

    
    public function editajuanjadwal($no_hasilajuan)
    {
        $data = [
            'status_ajuan' => 1
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $this->model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        $this->model_penjadwalan->hapuspenjadwal($where, 'jadwal_lomba');

        // $idpendf = $this->model_pengajuan->cariidp($id)->result_row();
        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Pengajuan di batalkan ', 'success')</script>");

        redirect('stafpmd/pengajuan/');
    }

    
}