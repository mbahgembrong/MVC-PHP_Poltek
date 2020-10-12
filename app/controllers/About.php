<?php

class About extends Controller
{
    public function index($nama='Belum Diisi', $nim='Belum Diisi')
    {
        echo "Ada di class About method Index";
        echo "<br>";
        echo "Nama : $nama";
        echo "<br>";
        echo "NIM : $nim";
    }
    public function update()
    {
        echo "Ada di class About method Update";
    }
    public function pelanggan()
    {
        //  Mengambil data dari pelanggan model, dengan method getNamaToko()
        $data['nama'] = $this->model('pelangganModel')->getNamaToko();
        // Mengambil data dari pelanggan model, dengan method getPelanggan()
        $data['pelanggan']=$this->model('pelangganModel')->getPelanggan();
        //    var_dump($data['pelanggan']);
        //  Ditampilkan ke dalam view about /pelanggan
        // $this->view('about/pelanggan');
        $this->view('about/pelanggan', $data);
    }
    public function pelanggandb()
    {
        //  Mengambil data dari pelanggan model, dengan method getNamaToko()
        $data['nama'] = $this->model('pelangganModel')->getNamaToko();
        // Mengambil data dari pelanggan model, dengan method getPelanggan()
        $data['pelanggan']=$this->model('pelangganModel')->db_pelanggan();
        //  Ditampilkan ke dalam view about /pelanggan
        // $this->view('about/pelanggan');
        $this->view('about/pelanggan', $data);
    }
    public function page($nama='-', $profesi='-', $nim='-')
    {
        echo $this->model('pelangganModel')->getNamaToko();
    }
    public function pegawai()
    {
        //  Mengambil data dari pegawai model, dengan method getNamaToko()
        $data['nama'] = $this->model('pelangganModel')->getNamaToko();
        // Mengambil data dari pegawai model, dengan method getpegawai()
        $data['pegawai']=$this->model('pegawaiModel')->db_pegawai();
        //  Ditampilkan ke dalam view about /pegawai
        // $this->view('about/pegawai');
        $this->view('about/pegawai', $data);
    }
}
