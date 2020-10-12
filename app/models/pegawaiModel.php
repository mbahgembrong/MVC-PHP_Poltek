<?php
class pegawaiModel
{
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
    public function db_pegawai()
    {
        $data="SELECT * FROM pegawai";
        $result=$this->connect->query($data);
        while ($i=mysqli_fetch_array($result)) {
            $datapegawai[]=$i;
        }
        return $datapegawai;
    }
}


?>