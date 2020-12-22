<?php

class Pendaftaran extends CI_Controller{

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
    
    public function index(){

        $data['pendaftaran'] = $this->db->get('daftar')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/pendaftaran', $data);
        $this->load->view('templates_admin/footer.php');
    }

    public function tambah_aksi()
    {

        $judul = $this->input->post('judul');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $tahun = $this->input->post('tahun');
$tgl_buat = date('Y-m-d');


        // $gambar = $_FILES['gambar']['name'];
        // if ($gambar = '') {
        // } else {
            $config['upload_path'] = './uploads/files/';
            $config['allowed_types'] = 'pdf';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file_name')) {
                   $error = array('error' => $this->upload->display_errors());
            $this->load->view('index', $error);
            } else {
                $upload_data = $this->upload->data();


            $data = array(
                'judul' => $judul,
                'tgl_selesai' => $tgl_selesai,
                'tgl_buat' => $tgl_buat,
                'tahun' => $tahun,
                'surat_sosialisasi' => $upload_data['file_name']
            );

            $this->Model_pendaftaran->tambah_daftar($data, 'daftar');
            $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI TAMBAHKAN', 'success')</script>");

            redirect('tenaga_ahli/pendaftaran/');
            }
        // }

        
    }

    public function edit($id)
    {
        $where = array('no_daftar' => $id);
        $data['daftar'] = $this->Model_pendaftaran->edit_daftar($where, 'daftar')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('tenaga_ahli/editpendaftaran', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id = $this->input->post('no_daftar');
        $judul = $this->input->post('judul');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $tgl_buat = date('Y-m-d');
        // $surat_sosialisasi = $this->input->post('surat_sosialisasi');

        $ftg  = $this->db->query("SELECT surat_sosialisasi FROM daftar WHERE no_daftar = '$id' ");
        $fil = $ftg->row();
        $tg = $fil->surat_sosialisasi;
        $old_file = $tg;
        $upload_file = $_FILES['surat_sosialisasi']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf';
            $config['max_size']      = 0;
            $config['upload_path'] = './uploads/files/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('surat_sosialisasi')) {
                $old_file = $tg;
                if ($old_file != 'default.pdf') {
                    unlink(FCPATH . 'uploads/files/' . $old_file);
                }
                $new_surat_sosialisasi = $this->upload->data('file_name');
                $this->db->set('surat_sosialisasi', $new_surat_sosialisasi);
            } else {
                echo $this->upload->dispay_errors();
            }

        }
        $data = [
            'judul' => $judul,
            'tgl_selesai' => $tgl_selesai,
            'tgl_buat' => $tgl_buat
            // 'status_daftar' => $status_daftar,
        ];

        // $where = [
        //     'no_daftar' => $id
        // ];
        $this->db->set($data);
        $this->db->where('no_daftar', $id);
        $this->db->update('daftar');
        // $this->Model_pendaftaran->update_data($where, $data, 'daftar');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI UBAH', 'success')</script>");

        redirect('tenaga_ahli/pendaftaran/');
    }

    public function hapus($id)
    {
        $cari = $this->db->query("SELECT no_daftar FROM hasil_ajuan WHERE no_daftar = '$id' ");

        if($cari->num_rows() > 0){
            $this->session->set_flashdata("message", "<script>Swal.fire('GAGAL', 'Data yang Dihapus masih digunkan Oleh nilai sehingga tidak dapat di hapus', 'error')</script>");

        }elseif($cari->num_rows() < 1){
            $where = ['no_daftar' => $id];

            $ftg  = $this->db->query("SELECT surat_sosialisasi FROM daftar WHERE no_daftar = '$id' ");
            $fil = $ftg->row();
            
            $tg = $fil->surat_sosialisasi;

            $old_file = $tg;
            if ($old_file != 'default.pdf') {
                unlink(FCPATH . 'uploads/files/' . $old_file);
            }

            $this->Model_pendaftaran->hapus_data($where, 'daftar');
            $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI HAPUS', 'success')</script>");
        }

        redirect('tenaga_ahli/pendaftaran/');
    }
}