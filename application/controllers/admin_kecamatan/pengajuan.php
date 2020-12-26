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
        $this->load->helper('tgl_indo');
    }

    public function index()
    {

        $data['pertahun'] =  $this->db->query("SELECT * FROM daftar  GROUP BY tahun ")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/list_pengajuan', $data);
        $this->load->view('templates_admin/footer.php');
    }


    public function index_pertahun($tahun){
        $data['user'] = $this->db->get_where('pengguna', ['penempatan' => $this->session->userdata('penempatan')])->row();

        // $tahun = date("Y");
        $kecamatan = $this->session->userdata('penempatan');

        $data['pendaftaran'] = $this->Model_pendaftaran->tampil_pendaftaran($tahun)->row();
        $data['pendaftarannum'] = $this->Model_pendaftaran->tampil_pendaftaran($tahun)->num_rows();



        $data['pengajuan'] = $this->Model_pengajuan->tampil_pengajuan($kecamatan)->row();
        $data['pengajuannum'] = $this->Model_pengajuan->tampil_pengajuan( $kecamatan)->num_rows();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/pengajuan', $data);
        $this->load->view('templates_admin/footer');;
    }


    public function tambah(){

        // $data['user'] = $this->db->get_where('pengguna', ['penempatan' => $this->session->userdata('penempatan')])->row();
        $kecamatan = $this->session->userdata('penempatan');

        $data['pendaftaran'] = $this->Model_pendaftaran->tampil_pendaftaran()->row();

        // $data['wilayah'] = $this->Model_wilayah->tampil_wilayah($kecamatan)->result();
        $data['wilayah'] = $this->db->query(" SELECT * FROM wilayah WHERE kecamatan = '$kecamatan' ")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/tambah_pengajuan', $data);
        $this->load->view('templates_admin/footer');;
    }


    public function tambah_aksi()
    {
        $this->form_validation->set_rules('desa', 'desa', 'required', ['required' => 'Desa wajib di Isi !']);

        $no_daftar = $this->input->post('no_daftar');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $tgl_ajuan = date("Y-m-d");
        $tahun = $this->input->post('tahun');

        $config['upload_path'] = './uploads/files/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file_name')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('index', $error);
        } else {
            $upload_data = $this->upload->data();
        }


        $data = array (
                'no_daftar' => $no_daftar,
                'kecamatan' => $kecamatan,
                'desa' => $desa,
                'tgl_ajuan' => $tgl_ajuan,
                'tahun' => $tahun,
                'surat_balasan_desa' => $upload_data['file_name'],
                'status_ajuan' => 0,
                'catatan' => ' '
        );

        $this->Model_pengajuan->tambah_pengajuan($data, 'hasil_ajuan');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Peserta Lomba berhasil di tambahkan', 'success')</script>");
        redirect('admin_kecamatan/pengajuan/');
    }

    public function batal($no_hasilajuan){

        $data = [
            'status_ajuan' => 0
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Peserta Lomba berhasil di hapus', 'success')</script>");
        redirect('admin_kecamatan/pengajuan/index');
    }

    public function ajukan($no_hasilajuan)
    {

        $data = [
            'status_ajuan' => 2
        ];
        $where = [
            'no_hasilajuan' => $no_hasilajuan
        ];

        $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Peserta Lomba berhasil di Ajukan', 'success')</script>");
        redirect('admin_kecamatan/pengajuan/index/');
    }

    public function editdesa($no_hasilajuan)
    {

        // $data['user'] = $this->db->get_where('pengguna', ['penempatan' => $this->session->userdata('penempatan')])->row();
        $kecamatan = $this->session->userdata('penempatan');

        $data['pendaftaran'] = $this->Model_pendaftaran->tampil_pendaftaran()->row();
        $data['pengajuan'] = $this->Model_pengajuan->idpengajuan($no_hasilajuan)->row();


        $data['wilayah'] = $this->db->query(" SELECT * FROM wilayah WHERE kecamatan = '$kecamatan' ")->result();

        // $data['wilayah'] = $this->Model_wilayah->tampil_wilayah($kecamatan)->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/edit_pengajuan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $desa = $this->input->post('desa');
        $no_hasilajuan = $this->input->post('no_hasilajuan');
        $file_lama = $this->input->post('file_lama');

        // $data = [
        //     'desa' => $desa
        // ];
        // $where = [
        //     'no_hasilajuan' => $no_hasilajuan
        // ];

        // $ajuan_file = $this->db->query("SELECT surat_balasan_desa FROM hasil_ajuan WHERE no_hasilajuan = '$no_hasilajuan' ");
        // $pt = $ajuan_file->row();
        // $tg = $pt->surat_balasan_desa;

        
        // cek jika ada gambar yang akan diupload
        $upload_file = $_FILES['file_name']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf';
            $config['max_size']      = '0';
            // $config['max_width'] = '0';
            // $config['max_height'] = '0';
            $config['upload_path'] = './uploads/files/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_name')) {
                $old_file = $file_lama;
                if ($old_file != 'default.pdf') {
                    unlink(FCPATH . 'uploads/files/' . $old_file);
                }
                $new_file = $this->upload->data('file_name');
                $this->db->set('surat_balasan_desa', $new_file);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $data = array(
            'no_hasilajuan' => $no_hasilajuan,
            'desa' => $desa,
        );

        $this->db->set($data);
        $this->db->where('no_hasilajuan', $no_hasilajuan);
        $this->db->update('hasil_ajuan');


        // $this->Model_pengajuan->update_data($where, $data, 'hasil_ajuan');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Peserta Lomba berhasil di Ubah', 'success')</script>");
        redirect('admin_kecamatan/pengajuan/index');
    }

    public function hapus($no_hasilajuan)
    {
        $where = ['no_hasilajuan' => $no_hasilajuan];
        $this->Model_pengajuan->hapuspengajuan($where, 'hasil_ajuan');
        $this->session->set_flashdata("message", "<script>Swal.fire('Sukses', 'Data Peserta Lomba berhasil di hapus', 'success')</script>");
        
        redirect('admin_kecamatan/pengajuan/index');
    }

    public function lihat($no_hasilajuan){

        $tahun = date('Y');

        $data['pengajuan'] = $this->db->query(" SELECT * FROM hasil_ajuan WHERE no_hasilajuan = '$no_hasilajuan' ")->result();

        $data['jadwal'] = $this->db->query(" SELECT * FROM jadwal_lomba WHERE no_hasilajuan = '$no_hasilajuan' AND status_jadwal = 2")->result();

        $data['numjadwal'] = $this->db->query(" SELECT * FROM jadwal_lomba WHERE no_hasilajuan = '$no_hasilajuan' AND status_jadwal = 2")->num_rows();

        $data['urujuara'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, hasil_ajuan.desa, hasil_ajuan.kecamatan , SUM(nilai.nilai1 + nilai.nilai2) as total, SUM(nilai.dadu1 + nilai.dadu2) as total_dadu
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan 
        JOIN nilai ON jadwal_lomba.no_jadwal = nilai.no_jadwal
        WHERE hasil_ajuan.tahun = '$tahun'  GROUP BY hasil_ajuan.kecamatan ORDER BY total DESC, total_dadu DESC  ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kecamatan/lihat_jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

}