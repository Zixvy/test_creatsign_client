<?php

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Kelas';
        $data['kelas'] = $this->Kelas_model->getAllKelas();

        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('kelas/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->tambahDataKelas();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kelas');
        }
    }

    public function hapus($id)
    {
        $this->Kelas_model->hapusDataKelas($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelas');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Kelas';
        $data['kelas'] = $this->Kelas_model->getKelasById($id);

        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('kelas/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->ubahDataKelas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelas');
        }
    }
}
