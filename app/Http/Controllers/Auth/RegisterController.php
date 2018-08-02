<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\PanelSaveRequest;
use App\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function create()
    {
        return view("accesos.register");
    }

    public function save(PanelSaveRequest $request)
    {
        


    	$user = new User();
    	$user->nombre=$request->Nombre;
    	$user->apellidos=$request->Apellido;
    	$user->dni=$request->Dni;
    	$user->celular=$request->Celular;
    	$user->email=$request->Email;
    	$user->password=bcrypt($request->Contraseña);
    	$user->save();
    	return redirect('dashboard/usuarios')->with('message','save');
        
    }
}
