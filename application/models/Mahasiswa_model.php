<?php

use GuzzleHttp\Client;

class Mahasiswa_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci_test_createsign/api/',
            'auth' => ['admin', '1234'],
        ]);
    }

    public function getAllMahasiswa()
    {

        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'];
    }

    public function getMahasiswaById($id)
    {

        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data['data'][0];
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->security->xss_clean($this->input->post('nama', true)),
            "nim" => $this->security->xss_clean($this->input->post('nim', true)),
            "alamat" => $this->security->xss_clean($this->input->post('alamat', true)),
            "no_telp" => $this->security->xss_clean($this->input->post('no_telp', true)),
            "id_kelas" => $this->security->xss_clean($this->input->post('id_kelas', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('POST', 'mahasiswa', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);
    }

    public function hapusDataMahasiswa($id)
    {
        $response = $this->_client->request('DELETE', 'mahasiswa', [
            'form_params' => [
                'X-API-KEY' => 'mahasiswa_restapi_key',
                'id' => $id,
            ],
        ]);

        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);

        return $data;
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->security->xss_clean($this->input->post('nama', true)),
            "nim" => $this->security->xss_clean($this->input->post('nim', true)),
            "alamat" => $this->security->xss_clean($this->input->post('alamat', true)),
            "no_telp" => $this->security->xss_clean($this->input->post('no_telp', true)),
            "id_kelas" => $this->security->xss_clean($this->input->post('id_kelas', true)),
            "id" => $this->security->xss_clean($this->input->post('id', true)),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        $response = $this->_client->request('PUT', 'mahasiswa', [
            'form_params' => $data,
        ]);

        $result = $response->getBody()->getContents();
        return $data = json_decode($result, true);
    }

    public function cariDataMahasiswa()
    {
        $data = [
            "keyword" => $this->input->post('keyword', true),
            "X-API-KEY" => 'mahasiswa_restapi_key',
        ];

        try {
            $status_code = [
                'OK' => 200,
            ];
            $response = $this->_client->request('GET', 'mahasiswa/search_mahasiswa', [
                'query' => $data,
            ]);

            $result = $response->getBody()->getContents();
            $data = json_decode($result, true);

            return $data['data'];

        } catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $result = json_decode($responseBodyAsString, true);
            var_dump($result['message']);

            return $result;
        }
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
}
