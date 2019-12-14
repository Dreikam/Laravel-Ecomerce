<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function check(Request $request)
    {
        $user = User::find($request->id)->get();
        return $user;
    }
    public function show()
    {
       return view('perfil');
    }
}
