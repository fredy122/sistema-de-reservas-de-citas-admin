<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Routing\Controller as BaseController;

class UsuarioController extends BaseController
{
    public function index()
    {
        return view("panel.PerfilUsuario");
    }
}