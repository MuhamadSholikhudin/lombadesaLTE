<?php

class Jadwal_lomba extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') != 4) {
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

        $data['pertahun'] =  $this->db->query("SELECT jadwal_lomba.no_jadwal, jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal,  hasil_ajuan.no_hasilajuan, hasil_ajuan.tahun 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan  WHERE jadwal_lomba.status_jadwal > 0 GROUP BY hasil_ajuan.tahun")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin_sekda/list_jadwal_lomba', $data);
        $this->load->view('templates_admin/footer');
    }


    public function index_pertahun($tahun)
    {

        // $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['penjadwalan'] = $this->db->query("SELECT jadwal_lomba.no_jadwal, jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal, hasil_ajuan.no_hasilajuan, wilayah.desa, hasil_ajuan.tahun, wilayah.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan 
        JOIN wilayah ON hasil_ajuan.kode_wilayah = wilayah.kode_wilayah                
        WHERE hasil_ajuan.tahun = '$tahun' AND jadwal_lomba.status_jadwal > 0")->result();
        // $data['penjadwalan'] = $this->db->query($queryjadwal)->result();

        // $data['penjadwalan'] = $this->Model_penjadwalan->tampil_data();
$data['tahunin'] = [$tahun];


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin_sekda/jadwal_lomba', $data);
        $this->load->view('templates_admin/footer');
    }

    public function jadwal_lomba()
    {

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['penjadwalan'] = $this->db->query("SELECT jadwal_lomba.no_jadwal, jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal,hasil_ajuan.no_hasilajuan, hasil_ajuan.desa,hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahun' AND jadwal_lomba.status_jadwal > 0")->result();
        // $data['penjadwalan'] = $this->db->query($queryjadwal)->result();

        // $data['penjadwalan'] = $this->Model_penjadwalan->tampil_data();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin_sekda/jadwal_lomba', $data);
        $this->load->view('templates_admin/footer');
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

    public function acc()
    {
        //LOGIKA PERTAMA BELUM REVISI
        // $data = [
        //     'status_jadwal' => 2
        // ];
        // $where = [
        //     'no_jadwal' => $no_jadwal
        // ];

        // $this->Model_penjadwalan->update_data($where, $data, 'jadwal_lomba');
        // $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Jadwal Lomba berhasil di Acc', 'success')</script>");
        // redirect('admin_sekda/Jadwal_lomba/');

        //LOGIKA KEDUA SETELAH REVISI
        $no_jadwal = $this->input->post('no_jadwal');
        $tahun = $this->input->post('tahun');
        $result = array();
        foreach ($no_jadwal as $key => $val) {
            $result[] = array(
                "no_jadwal" => $no_jadwal[$key],
                "status_jadwal" => 2
            );
        }
        $this->db->update_batch('jadwal_lomba', $result, 'no_jadwal');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Jadwal Lomba berhasil di Acc', 'success')</script>");
        redirect('admin_sekda/Jadwal_lomba/index_pertahun/'. $tahun);
    }

    public function batalkan()
    {
        //LOGIKA PERTAMA BELUM REVISI
        // $data = [
        //     'status_jadwal' => 1
        // ];
        // $where = [
        //     'no_jadwal' => $no_jadwal
        // ];
        // $this->Model_penjadwalan->update_data($where, $data, 'jadwal_lomba');
        // $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Jadwal Lomba berhasil di Batalkan', 'success')</script>");
        // redirect('admin_sekda/Jadwal_lomba/');


        //LOGIKA KEDUA SETELAH REVISI
        $no_jadwal = $this->input->post('no_jadwal');
        $result = array();
        foreach ($no_jadwal as $key => $val) {
            $result[] = array(
                "no_jadwal" => $no_jadwal[$key],
                "status_jadwal" => 0
            );
        }
        $this->db->update_batch('jadwal_lomba', $result, 'no_jadwal');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Jadwal Lomba berhasil di Acc', 'success')</script>");
        redirect('admin_sekda/Jadwal_lomba/');
    }

    public function kembalikan($no_jadwal)
    {
        $data = [
            'status_jadwal' => 0
        ];
        $where = [
            'no_jadwal' => $no_jadwal
        ];

        $this->Model_penjadwalan->update_data($where, $data, 'jadwal_lomba');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Jadwal Lomba berhasil di Kembalikan', 'success')</script>");

        redirect('admin_sekda/Jadwal_lomba/');
    }
}
