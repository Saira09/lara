<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model{
    protected $table = "tb_usuarios";
    protected $primarykey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'app',
        'apm',
        'fecha',
        'img',
        'mail',
        'pass',
        'activo'
    ];
}
