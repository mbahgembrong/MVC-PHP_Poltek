<?php
class pelangganModel
{
    private $namaToko="Sinar";
    private $pelanggan=[
    [
      'nama' => 'Abdul Ghofar',
      'alamat' => 'Jl. Lingkar Maskumambang Kediri','telepon'=>'0853472829'
    ],
    [
      'nama' => 'Sinta Nurohmah',
      'alamat' => 'Jl. Ngronggo Kediri',
      'telepon'=>'0853472829'
    ],
    [
      'nama' => 'Diandra Sari',
      'alamat' => 'Jl. Veteran Kediri',
      'telepon'=>'0853472829'
    ]
  ];
    // method ambil nama toko
    public function getNamaToko()
    {
        return $this->namaToko;
    }
    // method ambil nama pelanggan
    public function getPelanggan()
    {
        return $this->pelanggan;
    }

    // Database
    // properti database
    private $host='localhost';
    private $username='root';
    private $pass='';
    private $db='weblanjut_05/10/2020';
    private $connect;

    public function __construct()
    {
        $this->connect=new mysqli($this->host, $this->username, $this->pass, $this->db);
        if (!$this->connect) {
            echo "Connection failed:".mysqli_connect_error();
        }
    }

    // method untuk query db
    public function db_pelanggan()
    {
       
        $data="SELECT * FROM pelanggan";
        $result=$this->connect->query($data);
        while ($i=mysqli_fetch_array($result)) {
            $datapelanggan[]=$i;
        }
        return $datapelanggan;
    }
}
