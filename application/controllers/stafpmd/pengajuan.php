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
        $this->load->helper('tgl_indo');
    }
     

    public function index()
    {

        // $data['pendaftaran'] = $this->db->get_where('daftar', ['id_pendf' => $id_pendf])->row();
        // $data['pengajuan'] = $this->db->where('hasil_ajuan', ['status_ajuan >' => 0])->result_array();
        $data['pengajuan'] = $this->db->query('SELECT * FROM hasil_ajuan WHERE status_ajuan > 1')->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/pengajuan', $data);
        $this->load->view('templates_admin/footer');
    }


    public function lihat_pengajuan($no_hasilajuan)
    {

        // $data['user'] = $this->db->get_where('pengguna', ['penempatan' => $this->session->userdata('penempatan')])->row();
        // $kecamatan = $this->session->userdata('penempatan');

        $data['pendaftaran'] = $this->Model_pendaftaran->tampil_pendaftaran()->row();
        $data['pengajuan'] = $this->Model_pengajuan->idpengajuan($no_hasilajuan)->row();
        // $kecamatan =  $data['pengajuan']['kecamatan'];
    $lipeng = $this->db->query("SELECT * FROM hasil_ajuan WHERE no_hasilajuan = '$no_hasilajuan' ");
    $pengli = $lipeng->row();
    $kecamatan = $pengli->kecamatan;
    $data['pengguna'] = $this->db->query("SELECT * FROM pengguna WHERE penempatan = '$kecamatan' ")->result();
        // $data['wilayah'] = $this->db->query(" SELECT * FROM wilayah WHERE kecamatan = '$kecamatan' ")->result();

        // $data['wilayah'] = $this->Model_wilayah->tampil_wilayah($kecamatan)->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/lihat_pengajuan', $data);
        $this->load->view('templates_admin/footer');
    }

public function cekpengajuan(){


        $no_hasilajuan = $this->input->post('no_hasilajuan');
        $cekpengajuan = $this->input->post('cekpengajuan');
        $cekp = implode("", $cekpengajuan);

        if($cekp == '12'){

            $data = [
                'status_ajuan' => 3
            ];
            $where = [
                'no_hasilajuan' => $no_hasilajuan
            ];

            $datat = array(
                'no_hasilajuan' => $no_hasilajuan,
                'tgl_jadwal' =>  '0000-00-00',
                'status_jadwal' => 0
            );

            $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
            $this->Model_penjadwalan->tambah_jadwal($datat, 'jadwal_lomba');

            $this->session->set_flashdata("message", "<script>Swal.fire('Berhasil', 'Data Pengajuan di terima', 'success')</script>");
            redirect('stafpmd/pengajuan/');
        }elseif($cekp == '1'){
            $data = [
                'catatan' => 'Surat pengajuan dari kecamatan sudah bernar akan tetapi surat balasan dari desa belum benar',
                'status_ajuan' => 1
            ];
            $where = [
                'no_hasilajuan' => $no_hasilajuan
            ];
            $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
            $this->session->set_flashdata("message", "<script>Swal.fire('Dikembalikan', 'Data Pengajuan di dikembalikan karena berkas surat balasan dari desa kurang benar', 'info')</script>");
            redirect('stafpmd/pengajuan/');
        }elseif ($cekp == '2') {
            $data = [
                'catatan' => 'Surat balasan dari desa sudah bernar akan tetapi surat pengajuan dari kecamatan belum benar',
                'status_ajuan' => 1
            ];
            $where = [
                'no_hasilajuan' => $no_hasilajuan
            ];
            $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');

            $this->session->set_flashdata("message", "<script>Swal.fire('Dikembalikan', 'Data Pengajuan di dikembalikan karena berkas surat pengajuan dari kecamatan kurang benar', 'success')</script>");
            redirect('stafpmd/pengajuan/');
        } elseif ($cekp == '') {
            $data = [
                'catatan' => 'Surat pengajuan dari kecamatan dan surat balasan dari desa belum benar',
                'status_ajuan' => 1
            ];
            $where = [
                'no_hasilajuan' => $no_hasilajuan
            ];
            $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');

            $this->session->set_flashdata("message", "<script>Swal.fire('Dikembalikan', 'Data Pengajuan di dikembalikan karena berkas surat pengajuan dan surat balasan dari desa tidak ada yang benar', 'success')</script>");
            redirect('stafpmd/pengajuan/');
        }
}

    public function dikembalikan($no_hasilajuan)
    {
        $data = [
            'status_ajuan' => 1
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $id = $no_hasilajuan;
        $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        // $idpendf = $this->Model_pengajuan->cariidp($id)->result_row();
        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);
            $this->session->set_flashdata("message", "<script>Swal.fire('KEMBALIKAN', 'Data Pengajuan Berhasil Dikembalikan', 'success')</script>");

        redirect('stafpmd/pengajuan/');
    }

    public function diterima($no_hasilajuan)
    {
        $data = [
            'status_ajuan' => 3
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $no_hasilajuan = $this->input->post('no_hasilajuan');
        // $kecamatan = $this->input->post('kecamatan');
        // $desa = $this->input->post('desa');
        // $tahun = $this->input->post('tahun');

        $datat = array(
            'no_hasilajuan' => $no_hasilajuan,
            'tgl_jadwal' =>  '0000-00-00',
            'status_jadwal' => 0
        );

        $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        $this->Model_penjadwalan->tambah_jadwal($datat, 'jadwal_lomba');

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

        $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        $this->Model_penjadwalan->hapuspenjadwal($where, 'jadwal_lomba');

        // $idpendf = $this->Model_pengajuan->cariidp($id)->result_row();
        // $id_pendf = $this->db->query('SELECT id_pendf FROM hasil_ajuan WHERE no_hasilajuan ='. $no_hasilajuan);
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Pengajuan di batalkan ', 'success')</script>");

        redirect('stafpmd/pengajuan/');
    }

    
}