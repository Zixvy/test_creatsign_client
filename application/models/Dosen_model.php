<?php

use GuzzleHttp\Client;

class Dosen_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci_test_createsign/api/',
            'auth' => ['admin', '1234'],
        ]);
    }

    public function getAllDosen()
    {

        $response = $this->_client->request('GET', 'Dosen', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'];
    }

    public function getDosenById($id)
    {

        $response = $this->_client->request('GET', 'dosen', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'][0];
    }

    public function tambahDataDosen()
    {
        $data = [
            "nama_dosen" => $this->security->xss_clean($this->input->post('nama_dosen', true)),
            "nip" => $this->security->xss_clean($this->input->post('nip', true)),
            "alamat" => $this->security->xss_clean($this->input->post('alamat', true)),
            "no_telp" => $this->security->xss_clean($this->input->post('no_telp', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('POST', 'dosen', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);
    }

    public function hapusDataDosen($id)
    {
        $response = $this->_client->request('DELETE', 'dosen', [
            'form_params' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data;
    }

    public function ubahDataDosen()
    {
        $data = [
            "nama_dosen" => $this->security->xss_clean($this->input->post('nama_dosen', true)),
            "nip" => $this->security->xss_clean($this->input->post('nip', true)),
            "alamat" => $this->security->xss_clean($this->input->post('alamat', true)),
            "no_telp" => $this->security->xss_clean($this->input->post('no_telp', true)),
            "id" => $this->security->xss_clean($this->input->post('id', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('PUT', 'dosen', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        return $data = json_decode($result, true);
    }
}
