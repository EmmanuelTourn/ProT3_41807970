<?php

namespace App\Controllers;

use App\Models\usuario_Model;
use CodeIgniter\Controllers;

class usuario_controller extends BaseController
{

    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {

        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/Registro');
        echo view('front/footer_view');
    }

    public function formValidation()
    {

        $input = $this->validate(
            [
                'nombre' => 'required|min_length[3]',
                'apellido' => 'required|min_length[3]|max_length[25]',
                'usuario' => 'required|min_length[3]',
                'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
                'pass' => 'required|min_length[3]|max_length[10]',
            ],

        );

        $formModel = new usuario_Model();

        if (!$input) {
            $dato['titulo'] = 'Registro';
            echo view('front/head_view', $dato);
            echo view('front/navbar_view');
            echo view('front/Registro');
            echo view('front/footer_view');
        } else {


            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                'active' => 1
            ]);

            session()->setFlashdata('success', 'Usuario registrado con exito');
            return $this->response->redirect('registro');
        }
    }
}
