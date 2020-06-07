<?php

class Beranda extends CI_Controller{



    public function index(){

        $this->load->view('templates/header');
        $this->load->view('beranda/index');
        $this->load->view('templates/footer');
    }

    public function berita()
    {
        $this->load->view('templates/header');
        $this->load->view('beranda/berita');
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $this->load->view('templates/header');
        $this->load->view('beranda/profile');
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('beranda/contact');
        $this->load->view('templates/footer');
    }

    

}