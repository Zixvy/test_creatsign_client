<?php

use GuzzleHttp\Client;

class Mata_kuliah_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci_test_createsign/api/',
            'auth' => ['admin', '1234'],
        ]);
    }

    public function getAllMataKuliah()
    {

        $response = $this->_client->request('GET', 'mata_kuliah', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'];
    }

    public function getMataKuliahById($id)
    {

        $response = $this->_client->request('GET', 'mata_kuliah', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'][0];
    }

    public function tambahDataMataKuliah()
    {
        $data = [
            "nama_matakuliah" => $this->security->xss_clean($this->input->post('nama_matakuliah', true)),
            "id_dosen" => $this->security->xss_clean($this->input->post('id_dosen', true)),
            "kode_matakuliah" => $this->security->xss_clean($this->input->post('kode_matakuliah', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('POST', 'mata_kuliah', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);
    }

    public function hapusDataMataKuliah($id)
    {
        $response = $this->_client->request('DELETE', 'mata_kuliah', [
            'form_params' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data;
    }

    public function ubahDataMataKuliah()
    {
        $data = [
            "nama_matakuliah" => $this->security->xss_clean($this->input->post('nama_matakuliah', true)),
            "id_dosen" => $this->security->xss_clean($this->input->post('id_dosen', true)),
            "kode_matakuliah" => $this->security->xss_clean($this->input->post('kode_matakuliah', true)),
            "id" => $this->security->xss_clean($this->input->post('id', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('PUT', 'mata_kuliah', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        return $data = json_decode($result, true);
    }
}
