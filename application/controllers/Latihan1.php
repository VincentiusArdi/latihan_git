<?php

class Latihan1 extends CI_Controller
{

    public function index()
    {
        echo "Selamat Datang... Selamat belajar web programming";
    }

    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('Model_latihan1');

        // $hasil = $this->Model_latihan1->jumlah($nil1, $nil2);
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->Model_latihan1->jumlah($nil1, $nil2);

        // echo "Hasil Penjumlahan dari ".$nil1."+".$nil2." = ".$hasil;
        $this->load->view('View_latihan', $data);
    }
}