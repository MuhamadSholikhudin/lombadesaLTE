<?php

class Penilaian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') != 5) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('auth/login');
        }

        $namatim = $this->session->userdata('nama');
    }

    public function index()
    {

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['daftarjadwal'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal,hasil_ajuan.no_hasilajuan, hasil_ajuan.desa,hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahun'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tim_penilai/daftar_jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function coba($id)
    {
        // $where = array('no_jadwal' => $id);
        $data['nilai'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,  kriteria_penilaian.id_kriteria, kriteria_penilaian.judul, kriteria_penilaian.skor, nilai.nilai FROM jadwal_lomba JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria WHERE jadwal_lomba.no_jadwal = '$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tim_penilai/penilaian', $data);
        $this->load->view('templates_admin/footer');
    }


    public function form($id)
    {
        $namatim = $this->session->userdata('nama');

        $cari = $this->db->query("SELECT * FROM nilai WHERE nama = '$namatim'");

        $tahun = date('Y-m-d');
        $kri = $this->db->query("SELECT * FROM kriteria_penilaian WHERE tahun = '$tahun'")->result();

        
        if($cari->num_rows() < 1 ){
            foreach ($kri as $tag) {
                // $tag = trim($tag);
                $data = array(
                    'id_kriteria'  =>  $tag->id_kriteria,
                    'tahun'   =>  $tag->tahun,
                    'nama'   =>  $namatim,
                    'no_jadwal'      =>  $id
                );
                $this->db->insert('nilai', $data);
            }

            $data['nilai'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,  kriteria_penilaian.id_kriteria, kriteria_penilaian.judul, kriteria_penilaian.skor, nilai.nilai, nilai.jumlah, nilai.id_nilai FROM jadwal_lomba JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria WHERE jadwal_lomba.no_jadwal = '$id'")->result();

            $data['njadwal'] = $this->db->query("SELECT * FROM jadwal_lomba WHERE no_jadwal = '$id' ")->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('tim_penilai/penilaian', $data);
            $this->load->view('templates_admin/footer');
        
        }else{
            // $where = array('no_jadwal' => $id);
            $data['nilai'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,  kriteria_penilaian.id_kriteria, kriteria_penilaian.judul, kriteria_penilaian.skor, nilai.nilai, nilai.jumlah, nilai.id_nilai FROM jadwal_lomba JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria WHERE jadwal_lomba.no_jadwal = '$id'")->result();

            $data['njadwal'] = $this->db->query("SELECT * FROM jadwal_lomba WHERE no_jadwal = '$id' ")->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('tim_penilai/penilaian', $data);
            $this->load->view('templates_admin/footer');
        }


    }


    public function edit_aksi()
    {
        // $id_nilai = $this->input->post('id_nilai');
        // $skor = $this->input->post('skor');
        // $nilai = $this->input->post('nilai');
        // $jumlah = $id_nilai * $skor;

        //Update data attribut
        $id_nilai = $this->input->post('id_nilai');
        $id = $this->input->post('no_jadwal');
        $result = array();
        foreach ($id_nilai as $key => $val) {
            $result[] = array(
                "id_nilai" => $id_nilai[$key],
                "nilai" => $_POST['nilai'][$key],
                "jumlah"  => $_POST['skor'][$key] * $_POST['nilai'][$key]
            );
        }
        $this->db->update_batch('nilai', $result, 'id_nilai');

        redirect('tim_penilai/penilaian/form/'. $id);
        
    }

    public function hapus($id)
    {
        $where = ['id_kriteria' => $id];
        $this->model_kriteriapenilaian->hapus_data($where, 'kriteria_penilaian');
        redirect('tenaga_ahli/kriteria_penilaian');
    }
}
