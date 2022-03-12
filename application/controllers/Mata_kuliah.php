<?php

class Mata_kuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mata_kuliah_model');
        $this->load->model('Dosen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['matkul'] = $this->Mata_kuliah_model->getAllMataKuliah();
        $data['dosen'] = $this->Dosen_model->getAllDosen();

        $this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required|numeric|trim');
        $this->form_validation->set_rules('kode_matakuliah', 'Kode Mata', 'required|trim|is_unique[mata_kuliah.kode_matakuliah]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('mata_kuliah/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mata_kuliah_model->tambahDataMataKuliah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mata_kuliah');
        }
    }

    public function hapus($id)
    {
        $this->Mata_kuliah_model->hapusDataMataKuliah($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mata_kuliah');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Mata Kuliah';
        $data['matkul'] = $this->Mata_kuliah_model->getMataKuliahById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mata_kuliah/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Mata Kuliah';
        $data['matkul'] = $this->Mata_kuliah_model->getMataKuliahById($id);
        $data['dosen'] = $this->Dosen_model->getAllDosen();

        $this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required|numeric|trim');
        $this->form_validation->set_rules('kode_matakuliah', 'Kode Mata', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mata_kuliah/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mata_kuliah_model->ubahDataMataKuliah();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mata_kuliah');
        }
    }

}
