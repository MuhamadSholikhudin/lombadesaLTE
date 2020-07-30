<?php

class Penjadwalan extends CI_Controller{

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

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['penjadwalan'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal,hasil_ajuan.no_hasilajuan, hasil_ajuan.desa,hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahun'")->result();
        // $data['penjadwalan'] = $this->db->query($queryjadwal)->result();

        // $data['penjadwalan'] = $this->model_penjadwalan->tampil_data();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/penjadwalan', $data);
        $this->load->view('templates_admin/footer.php');
    }
    public function edit($id)
    {
        // $where = array('no_jadwal' => $id);
        $data['jadwal'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal, hasil_ajuan.desa,  hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE jadwal_lomba.no_jadwal = '$id'")->result();
        

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/isijadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id = $this->input->post('no_jadwal');
        $tgl_jadwal = $this->input->post('tgl_jadwal');

        $data = [
            'tgl_jadwal' => $tgl_jadwal,
        ];

        $where = [
            'no_jadwal' => $id
        ];

        $this->model_penjadwalan->update_data($where, $data, 'jadwal_lomba');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penjadwalan berhasil di Ubah', 'success')</script>");
        
        redirect('stafpmd/penjadwalan/');
    }

    public function ajukan($no_jadwal)
    {
        $data = [
            'status_jadwal' => 1
        ];
        $where = [
            'no_jadwal' => $no_jadwal
        ];

        $this->model_penjadwalan->update_data($where, $data, 'jadwal_lomba');

        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penjadwalan berhasil di Ajukan', 'success')</script>");

        redirect('stafpmd/penjadwalan/');
    }

    public function batalkan($no_jadwal)
    {
        $data = [
            'status_jadwal' => 0
        ];
        $where = [
            'no_jadwal' => $no_jadwal
        ];

        $this->model_penjadwalan->update_data($where, $data, 'jadwal_lomba');

        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penjadwalan dibatalkan pengajuannya', 'success')</script>");

        redirect('stafpmd/penjadwalan/');
    }

    public function kembalikan($no_hasilajuan)
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
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penjadwalan berhasil di Kembalikan', 'success')</script>");

        redirect('stafpmd/penjadwalan/');
    }

    
}