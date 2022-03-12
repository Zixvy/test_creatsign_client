<?php

use GuzzleHttp\Client;

class Kelas_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci_test_createsign/api/',
            'auth' => ['admin', '1234'],
        ]);
    }

    public function getAllKelas()
    {

        $response = $this->_client->request('GET', 'kelas', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'];
    }

    public function getKelasById($id)
    {

        $response = $this->_client->request('GET', 'kelas', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'][0];
    }

    public function tambahDataKelas()
    {
        $data = [
            "nama_kelas" => $this->security->xss_clean($this->input->post('nama_kelas', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('POST', 'kelas', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);
    }

    public function hapusDataKelas($id)
    {
        $response = $this->_client->request('DELETE', 'kelas', [
            'form_params' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data;
    }

    public function ubahDataKelas()
    {
        $data = [
            "nama_kelas" => $this->security->xss_clean($this->input->post('nama_kelas', true)),
            "id" => $this->security->xss_clean($this->input->post('id', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('PUT', 'kelas', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        return $data = json_decode($result, true);
    }
}
