<?php

class Transaksi extends Controller
{
  public function __construct() {

  }
  public function index()
  {
    //  Mengambil data dari transaksi model, dengan method getNamaToko()
        $data['nama'] = $this->model('pelangganModel')->getNamaToko();
        // Mengambil data dari transaksi model, dengan method gettransaksi()
        $data['transaksi']=$this->model('transaksiModel')->db_transaksi();
        //  Ditampilkan ke dalam view about /transaksi
        // $this->view('about/transaksi');
        $this->view('transaksi/transaksi', $data);
  }
}

?>