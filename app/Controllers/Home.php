<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'pagina principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function productos()
    {
        $data['titulo'] = 'Productos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/productos');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function Registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/Registro');
        echo view('front/footer_view');
    }
    public function login()
    {
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
    }
    public function terminosdeuso()
    {
        $data['titulo'] = 'Terminos de uso';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/terminosdeuso');
        echo view('front/footer_view');
    }
}
