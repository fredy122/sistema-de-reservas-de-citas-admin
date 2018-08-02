<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Routing\Controller as BaseController;

class ListarController extends BaseController
{
	public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
    	$usuarios=User::paginate(10);
        return view("panel.ListarUsuario", compact('usuarios'));
    }


}
