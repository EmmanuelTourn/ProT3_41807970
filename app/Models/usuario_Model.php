<?php

namespace App\Models;

use CodeIgniter\Model;

class usuario_Model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'active', 'created_at', 'baja'];
    protected $returnType = 'array';
    protected $useAutoIncrement = true;
    protected $protectFields = true;



    public function validateUser($usuario, $pass)
    {
        $usuario = $this->where(['usuario' => $usuario, 'active' => 1])->first();
        if ($usuario && password_verify($pass, $usuario['pass'])) {
            return $usuario;
        }

        return null;
    }
}

