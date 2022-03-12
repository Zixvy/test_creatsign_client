<?php

use GuzzleHttp\Client;

class Nilai_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci_test_createsign/api/',
            'auth' => ['admin', '1234'],
        ]);
    }

    public function getAllNilai()
    {

        $response = $this->_client->request('GET', 'nilai', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'];
    }

    public function getNilaiById($id)
    {

        $response = $this->_client->request('GET', 'nilai', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'][0];
    }

    public function tambahDataNilai()
    {
        $data = [
            "nama_mahasiswa" => $this->security->xss_clean($this->input->post('nama_mahasiswa', true)),
            "nama_dosen" => $this->security->xss_clean($this->input->post('nama_dosen', true)),
            "kelas" => $this->security->xss_clean($this->input->post('kelas', true)),
            "nama_matakuliah" => $this->security->xss_clean($this->input->post('nama_matakuliah', true)),
            "nilai" => $this->security->xss_clean($this->input->post('nilai', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('POST', 'nilai', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);
    }

    public function hapusDataNilai($id)
    {
        $response = $this->_client->request('DELETE', 'nilai', [
            'form_params' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data;
    }

    public function ubahDataNilai()
    {
        $data = [
            "nama_mahasiswa" => $this->security->xss_clean($this->input->post('nama_mahasiswa', true)),
            "nama_dosen" => $this->security->xss_clean($this->input->post('nama_dosen', true)),
            "kelas" => $this->security->xss_clean($this->input->post('kelas', true)),
            "nama_matakuliah" => $this->security->xss_clean($this->input->post('nama_matakuliah', true)),
            "nilai" => $this->security->xss_clean($this->input->post('nilai', true)),
            "id" => $this->security->xss_clean($this->input->post('id', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('PUT', 'nilai', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        return $data = json_decode($result, true);
    }
}
