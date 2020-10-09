<?php

class App
{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];



    public function __construct()
    {
        // echo 'Masuk Class App dengan method  Constructor';
        // memanggil mehod parse untuk membaca url
        $url=$this->parseURL();
        // var_dump($url);
        if ($url==null) {
            $url[0]='';
        }


        // Controller
        // memberikan kondisi,apakah di dalam folder controler terdapat file/class yang berindeks array [0]
        if (file_exists('../app/controllers/'.$url[0].'.php')) {
            $this->controller=$url[0];
            unset($url[0]);
        }

        // memberikam kondisi apakah didalam controller memiliki class yang berindeks [0]
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller= new $this->controller;


        // method
        if (isset($url[1])) {
            // memberikan kondisi, apakah didalam class array[0] terdapat method yang berindeks array[1]
            if (method_exists($this->controller, $url[1])) {
                $this->method=$url[1];
                unset($url[1]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params=array_values($url);
            // var_dump($url);
        }

        // jalankan controller dan method , serta kirimkan param jika ada
        call_user_func_array([$this->controller,$this->method], $this->params);
    }
    public function parseURL()
    {
        if (isset($_GET["url"])) {
            $url=rtrim($_GET["url"], '/');
            $url=filter_var($url, FILTER_SANITIZE_URL);
            $url=explode('/', $url);
            return $url;
        }
    }
}
