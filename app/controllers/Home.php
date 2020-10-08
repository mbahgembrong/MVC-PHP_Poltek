<?php

class Home extends Controller
{
    public function index()
    {
        // echo 'Ada di class Home dengan method Index';
        $this->view('home/index');
    }
}
