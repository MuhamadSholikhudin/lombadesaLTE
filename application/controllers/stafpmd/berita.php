<?php

class Berita extends CI_Controller{

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

        $data['beritaan'] = $this->db->get('berita')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/berita', $data);
        $this->load->view('templates_admin/footer.php');
    }

    public function tambah()
    {

        // $data['beritaan'] = $this->db->get('berita')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/tambahberita');
        $this->load->view('templates_admin/footer.php');
    }

    public function tambah_aksi()
    {

        $judul = $this->input->post('judul');
        $paragraf1 = $this->input->post('paragraf1');
        $paragraf2 = $this->input->post('paragraf2');
        $tgl_buat = date('Y-m-d');

        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Di Upload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'judul' => $judul,
            'paragraf1' => $paragraf1,
            'paragraf2' => $paragraf2,
            'tgl_buat' => $tgl_buat,
            'gambar' => $gambar
        );

        $this->model_berita->tambah_berita($data, 'berita');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA PENDAFTARAN BERHASIL DI TAMBAHKAN', 'success')</script>");
        redirect('stafpmd/berita');
    }

    public function edit($id)
    {
        $where = array('id_berita' => $id);
        $data['berita'] = $this->model_berita->edit_berita($where, 'berita')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/editberita', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {

        $where = $this->input->post('id_berita');
        $judul = $this->input->post('judul');
        $paragraf1 = $this->input->post('paragraf1');
        $paragraf2 = $this->input->post('paragraf2');
        // $gambarlama = $this->input->post('gambarlama');
        $tgl_buat = date('Y-m-d');

        $data['berita'] = $this->model_berita->edit_berita($where, 'berita')->result();

        // cek jika ada gambar yang akan diupload
        $upload_gambar = $_FILES['gambar']['name'];

        if ($upload_gambar) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048';
            $config['upload_path'] = './uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_gambar = $data['berita']['gambar'];
                if ($old_gambar != 'default.jpg') {
                    unlink(FCPATH . 'uploads/' . $old_gambar);
                }
                $new_gambar = $this->upload->data('file_name');
                $this->db->set('gambar', $new_gambar);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $data = array(
            'judul' => $judul,
            'paragraf1' => $paragraf1,
            'paragraf2' => $paragraf2,
            'tgl_buat' => $tgl_buat
        );

        $this->db->set($data);
        $this->db->where('id_berita', $where);
        $this->db->update('berita');

        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA PENDAFTARAN BERHASIL DI UBAH', 'success')</script>");
        redirect('stafpmd/berita');
    
    }

    public function hapus($id)
    {
        $where = ['id_berita' => $id];
        $this->model_berita->hapus_data($where, 'berita');
        $this->session->set_flashdata("message", "<script>Swal.fire('SUKSES)', 'DATA PENDAFTARAN BERHASIL DI HAPUS', 'success')</script>");
        redirect('stafpmd/berita/');
    }
}