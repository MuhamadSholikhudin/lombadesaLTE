<?php

class Acc_juara extends CI_Controller
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

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['juaraini'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, hasil_ajuan.desa, hasil_ajuan.kecamatan, SUM(nilai.nilai1 + nilai.nilai2 + nilai.dadu1 + nilai.dadu2) as total 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal
        WHERE hasil_ajuan.tahun = '$tahun'  GROUP BY hasil_ajuan.kecamatan");

$data['nilaisementara'] = $this->db->query("SELECT SUM(nilai1 + nilai2) as total , no_jadwal FROM nilai GROUP BY no_jadwal ORDER BY total DESC")->result(); 

// RANK () OVER ( ORDER BY SUM(nilai . nilai1 + nilai . nilai2) DESC ) price_rank

        $data['juarabaru'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, hasil_ajuan.desa, hasil_ajuan.kecamatan , SUM(nilai.nilai1 + nilai.nilai2) as total, SUM(nilai.dadu1 + nilai.dadu2) as total_dadu
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan 
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal
        WHERE hasil_ajuan.tahun = '$tahun'  GROUP BY hasil_ajuan.kecamatan ORDER BY total DESC, total_dadu DESC  LIMIT 6 ")->result();

        $data['tidakjuara'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, hasil_ajuan.desa, hasil_ajuan.kecamatan , SUM(nilai.nilai1 + nilai.nilai2) as total, SUM(nilai.dadu1 + nilai.dadu2) as total_dadu
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan 
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal
        WHERE hasil_ajuan.tahun = '$tahun'  GROUP BY hasil_ajuan.kecamatan ORDER BY total DESC, total_dadu DESC  LIMIT 9 OFFSET 6")->result();

        $data['numjuara'] = $this->db->query("SELECT * 
        FROM juara_lomba WHERE tahun = '$tahun' ");

        $data['juara'] = $this->db->query("SELECT * 
        FROM juara_lomba WHERE tahun = '$tahun' ")->result();

        $data['juaralama'] = $this->db->query("SELECT * 
        FROM juara_lomba WHERE tahun != '$tahun' ORDER BY total_nilai")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/acc_juara', $data);
        $this->load->view('templates_admin/footer');
    }

    public function acc(){
        //acc satu data
        // $desa = $this->input->post('desa');
        // $kecamatan = $this->input->post('kecamatan');
        // $juara = $this->input->post('juara');
        // $total_nilai = $this->input->post('total_nilai');
        // $total_dadu = $this->input->post('total_dadu');

        $tahun = date('Y');

        // $data = array(
        //         'tahun'	=>  $tahun,
        //         'desa'	=>  $desa,
        //         'kecamatan'=>  $kecamatan,
        //         'total_nilai'=>  $total_nilai,
        //         'total_dadu'=>  $total_dadu,
        //         'juara'	=>  $juara
        // );

        // $this->Model_juara->tambah_juara($data, 'juara_lomba');
        // $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA JUARA BERHASIL DI ACC', 'success')</script>");
        // redirect('tenaga_ahli/acc_juara/');

        $result = array();
        foreach ($_POST['desa'] as $key => $val) {
            $result[] = array(
                'tahun'    =>  $tahun,
                'desa'	=>  $_POST['desa'][$key],
                'kecamatan '=>  $_POST['kecamatan'][$key],
                'total_nilai'=>  $_POST['total_nilai'][$key],
                'total_dadu '=>  $_POST['total_dadu'][$key],
                'juara'	=>  $_POST['juara'][$key]
            );
        }
        $this->db->insert_batch('juara_lomba', $result);
$this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA JUARA BERHASIL DI ACC', 'success')</script>");
        redirect('tenaga_ahli/acc_juara/');

    }

    public function batalkan()
    {

        //## BAtalkan tidak Terpakai
        // $kecamatan = $this->input->post('kecamatan');
        // $desa = $this->input->post('desa');
        // $tahunini = date('Y');
        // $juara_ke = $this->input->post('juara_ke');
        // $total_nilai = $this->input->post('total_nilai');

        // $data = [
        //     'status_jadwal' => 2
        // ];
        // $tahun = [
        //     'tahun' => $tahunini
        // ];

        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);
        // $this->Model_penjadwalan->update_data($where, $data, 'jadwal_lomba');


        //##Batalkan cuma satu record
        //     $id_juara = $this->input->post('id_juara');

        //     $where = [
        //         'id_juara' => $id_juara
        //     ];
        //     $this->Model_juara->hapusjuara($where, 'juara_lomba');

        //     $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA JUARA BERHASIL DI BATALKAN', 'success')</script>");

        //     redirect('tenaga_ahli/acc_juara/');
        
        
        
        //##batalkan banyak record
        foreach ($_POST['id_juara'] as $id_juara) {
            $this->Model_juara->delete($id_juara);
        }
        redirect('tenaga_ahli/acc_juara/');


        }
}
