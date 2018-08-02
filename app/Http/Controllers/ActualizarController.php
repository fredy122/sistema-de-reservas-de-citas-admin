<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Routing\Controller as BaseController;

class ActualizarController extends Controller
{
    public function edit($id)
    {
    	$user = User::find($id);
    }
}
