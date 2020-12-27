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
        $this->load->helper('tgl_indo');
    }
    
    public function index(){

        $data['pertahun'] =  $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal,  hasil_ajuan.no_hasilajuan, hasil_ajuan.desa, hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan GROUP BY hasil_ajuan.tahun ")->result();
        

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/list_penjadwalan', $data);
        $this->load->view('templates_admin/footer.php');
    }

    public function index_pertahun($tahun)
    {

        // $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['penjadwalan'] = $this->db->query("SELECT jadwal_lomba.no_jadwal, jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal, hasil_ajuan.no_hasilajuan, hasil_ajuan.desa,hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahun'")->result();
        // $data['penjadwalan'] = $this->db->query($queryjadwal)->result();

        $data['sekda'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 4")->row();
        $data['jadini'] = $this->db->query("SELECT jadwal_lomba.status_jadwal as status_jadwal FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahun' AND jadwal_lomba.status_jadwal >= 1 LIMIT 1")->row();
$data['tahunin'] = [$tahun];

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
        $tahun = $this->input->post('tahun');

        $data = [
            'tgl_jadwal' => $tgl_jadwal,
        ];

        $where = [
            'no_jadwal' => $id
        ];

        $this->Model_penjadwalan->update_data($where, $data, 'jadwal_lomba');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penjadwalan berhasil di Ubah', 'success')</script>");
        
        redirect('stafpmd/penjadwalan/index_pertahun/'. $tahun);
    }

    public function ajukan()
    {
        //LOGIKA PERTAMA
        // $data = [
        //     'status_jadwal' => 1
        // ];
        // $where = [
        //     'no_jadwal' => $no_jadwal
        // ];
        // $this->Model_penjadwalan->update_data($where, $data, 'jadwal_lomba');

        $no_jadwal = $this->input->post('no_jadwal');
        $tahun = $this->input->post('tahun');
        $result = array();
        foreach ($no_jadwal as $key => $val) {
            $result[] = array(
                "no_jadwal" => $no_jadwal[$key],
                "status_jadwal" => 1
            );
        }
        $this->db->update_batch('jadwal_lomba', $result, 'no_jadwal');


        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penjadwalan berhasil di Ajukan', 'success')</script>");
        redirect('stafpmd/penjadwalan/index_pertahun/'. $tahun);
    }

    public function batalkan($no_jadwal)
    {
        $data = [
            'status_jadwal' => 0
        ];
        $where = [
            'no_jadwal' => $no_jadwal
        ];

        $this->Model_penjadwalan->update_data($where, $data, 'jadwal_lomba');

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

        $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        $this->Model_penjadwalan->hapuspenjadwal($where, 'jadwal_lomba');

        // $idpendf = $this->Model_pengajuan->cariidp($id)->result_row();
        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penjadwalan berhasil di Kembalikan', 'success')</script>");

        redirect('stafpmd/penjadwalan/');
    }

    
}