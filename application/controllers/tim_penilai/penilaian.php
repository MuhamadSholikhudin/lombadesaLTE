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
        $penempatan = $this->session->userdata('penempatan');
        $this->load->helper('tgl_indo');
    }

    public function index()
    {
        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['daftarjadwal'] = $this->db->query("SELECT jadwal_lomba.no_jadwal, jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal, hasil_ajuan.no_hasilajuan, wilayah.desa, hasil_ajuan.tahun, wilayah.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan 
        JOIN wilayah ON hasil_ajuan.kode_wilayah = wilayah.kode_wilayah                        
        WHERE hasil_ajuan.tahun = '$tahun' ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tim_penilai/daftar_jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function coba($id)
    {
        // $where = array('no_jadwal' => $id);
        $data['nilai'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,  kriteria_penilaian.id_kriteria, kriteria_penilaian.judul, kriteria_penilaian.nilai_maks, nilai.nilai FROM jadwal_lomba JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria WHERE jadwal_lomba.no_jadwal = '$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tim_penilai/penilaian', $data);
        $this->load->view('templates_admin/footer');
    }


    public function form($id)
    {

    //  $data['halamanini'] = $this->db->query("SELECT jadwal_lomba.tgl_jadwal FROM jadwal_lomba WHERE no_jadwal = $id ")->result();

    //  if($halamanini == date('Y-m-d')){
            // } else {
    //     redirect('tim_penilai/penilaian/');
    // }
    
        $namatim = $this->session->userdata('nama');
        $penempatan = $this->session->userdata('penempatan');
        $id_pengguna = $this->session->userdata('id_pengguna');

        $cari = $this->db->query("SELECT * FROM nilai WHERE nama = '$namatim' AND no_jadwal = '$id' ");

        $tahun = date('Y-m-d');
        $kri = $this->db->query("SELECT * FROM kriteria_penilaian WHERE tahun = '$tahun' AND kategori='$penempatan' ")->result();
        
        if($cari->num_rows() < 1 ){
            foreach ($kri as $tag) {
                // $tag = trim($tag);
                $data = array(
                    'id_kriteria'  =>  $tag->id_kriteria,
                    'tahun'   =>  $tag->tahun,
                    'nama'   =>  $namatim,
                    'id_pengguna' => $id_pengguna,
                    'nilai1' => 1,
                    'nilai2' => 1,
                    'dadu1' => 1,
                    'dadu2' => 1,
                    'no_jadwal'      =>  $id
                );
                $this->db->insert('nilai', $data);
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penilaian Lomba berhasil di muat', 'success')</script>");
            }

            $data['namadesa'] = $this->db->query("SELECT wilayah.desa as desa FROM jadwal_lomba 
             JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan             
        JOIN wilayah ON hasil_ajuan.kode_wilayah = wilayah.kode_wilayah                
            WHERE jadwal_lomba.no_jadwal = '$id' ")->result();


            $data['nilai'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,  kriteria_penilaian.id_kriteria, kriteria_penilaian.judul, kriteria_penilaian.nilai_maks, nilai.nilai1, nilai.nilai2, nilai.dadu1, nilai.dadu2, nilai.id_nilai FROM jadwal_lomba JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria WHERE jadwal_lomba.no_jadwal = '$id' AND kriteria_penilaian.kategori = '$penempatan' ")->result();

            $data['njadwal'] = $this->db->query("SELECT * FROM jadwal_lomba WHERE no_jadwal = '$id' ")->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('tim_penilai/penilaian', $data);
            $this->load->view('templates_admin/footer');
        
        }else{
            // $where = array('no_jadwal' => $id);
            $data['namadesa'] = $this->db->query("SELECT wilayah.desa FROM jadwal_lomba 
            JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan 
        JOIN wilayah ON hasil_ajuan.kode_wilayah = wilayah.kode_wilayah                            
            WHERE jadwal_lomba.no_jadwal = '$id' ")->result();
 
            $data['nilai'] = $this->db->query("SELECT jadwal_lomba.no_jadwal, kriteria_penilaian.id_kriteria, kriteria_penilaian.judul, kriteria_penilaian.nilai_maks, nilai.nilai1, nilai.nilai2, nilai.dadu1, nilai.dadu2, nilai.id_nilai FROM jadwal_lomba JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal JOIN kriteria_penilaian ON kriteria_penilaian.id_kriteria = nilai.id_kriteria WHERE jadwal_lomba.no_jadwal = '$id' AND kriteria_penilaian.kategori = '$penempatan' ")->result();

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
                "nilai1" => $_POST['nilai1'][$key],
                "nilai2" => $_POST['nilai2'][$key],
                "dadu1" => $_POST['dadu1'][$key],
                "dadu2" => $_POST['dadu2'][$key]
                // "jumlah"  =>$_POST['nilai'][$key]
                // "jumlah"  => $_POST['skor'][$key] * $_POST['nilai'][$key]
            );
        }
        $this->db->update_batch('nilai', $result, 'id_nilai');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Penilaian Lomba berhasil di Simpan', 'success')</script>");
        
        redirect('tim_penilai/penilaian/form/'. $id);
    }

    public function hapus($id)
    {
        $where = ['id_kriteria' => $id];
        $this->Model_kriteriapenilaian->hapus_data($where, 'kriteria_penilaian');
        redirect('tenaga_ahli/kriteria_penilaian');
    }
}
