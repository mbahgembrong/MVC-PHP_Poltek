<?php
class Kunti extends Controller
{
    public function dosen($umur=31)
    {
        $data['nama']='kunti';
        $data['pekerjaan']='dosen';
        $data['umur']=$umur;
        $this->view('tugas/kunti', $data);
    }
}
