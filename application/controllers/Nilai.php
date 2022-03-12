<?php

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model');
        $this->load->model('Dosen_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Kelas_model');
        $this->load->model('Mata_kuliah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Nilai Mahasiswa';
        $data['nilai'] = $this->Nilai_model->getAllNilai();
        $data['dosen'] = $this->Dosen_model->getAllDosen();
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        $data['matkul'] = $this->Mata_kuliah_model->getAllMataKuliah();

        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|numeric|trim');
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required|trim');
        $this->form_validation->set_rules('nilai', 'Nilai', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('nilai/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nilai_model->tambahDataNilai();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('nilai');
        }
    }

    public function hapus($id)
    {
        $this->Nilai_model->hapusDataNilai($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('nilai');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Nilai Mahasiswa';
        $data['nilai'] = $this->Nilai_model->getNilaiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('nilai/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Nilai Mahasiswa';
        $data['nilai'] = $this->Nilai_model->getNilaiById($id);
        $data['dosen'] = $this->Dosen_model->getAllDosen();
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        $data['matkul'] = $this->Mata_kuliah_model->getAllMataKuliah();

        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|numeric|trim');
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required|trim');
        $this->form_validation->set_rules('nilai', 'Nilai', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('nilai/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nilai_model->ubahDataNilai();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('nilai');
        }
    }

}
