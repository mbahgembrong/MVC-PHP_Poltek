<?php
class transaksiModel
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
    public function db_transaksi()
    {
        $data="SELECT `pelanggan`.`nama` AS pelanggan,`pegawai`.`nama` AS sales,`barang`.`nama` AS barang FROM transaksi,pelanggan,barang,pegawai WHERE transaksi.`id_pelanggan`=pelanggan.`id_pelanggan`AND transaksi.`id_sales`=pegawai.`id_pegawai` AND transaksi.`kode_barang`=barang.`kode_barang`";
        $result=$this->connect->query($data);
        while ($i=mysqli_fetch_array($result)) {
            $datatransaksi[]=$i;
        }
        return $datatransaksi;
    }
}
