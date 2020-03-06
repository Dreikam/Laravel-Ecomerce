<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Compra;
use App\Producto;

class usuarioController extends Controller
{
    public function check(Request $request)
    {
        $user = User::find($request->id)->get();
        return $user;
    }
    public function show()
    {
        $user = Auth::user();
        $desencriptado = Crypt::decryptString(Auth::user()->encriptado);
       return view('perfil', compact('desencriptado', 'user'));
    }

    public function comprar(Request $request){
        $usuario = User::find($request->usuarioid);
        $producto = Producto::find($request->productoid);

        $compra = new Compra();

        $compra['usuario_id'] = $usuario->id;
        $compra['producto_id'] = $producto->id;

        $compra->save();

        return view('index');
    }

    public function updateDatosUsuario(Request $request){
        $user = User::find($request->id);
        $userLog = Auth::user();

        if ($request->avatar == false) {
            if ($userLog->avatar == false) {
                $user->name = $request->name;
                $user->surname = $request->surname;
                $user->email = $request->email;
                $user->password = Hash::make($request['password']);
                $user->encriptado = Crypt::encryptString($request->password);
                $user->domicilio = $userLog->domicilio;
                $user->celular = $userLog->celular;
                $user->telefono = $userLog->telefono;
                $user->avatar = NULL;
            } else {
                $user->name = $request->name;
                $user->surname = $request->surname;
                $user->email = $request->email;
                $user->password = Hash::make($request['password']);
                $user->encriptado = Crypt::encryptString($request->password);
                $user->domicilio = $userLog->domicilio;
                $user->celular = $userLog->celular;
                $user->telefono = $userLog->telefono;
                $user->avatar = $userLog->avatar;
            }
        } else {
                $ruta = $request->file('avatar')->store('public');
                $avatar = basename($ruta);

                $user->name = $request->name;
                $user->surname = $request->surname;
                $user->email = $request->email;
                $user->password = Hash::make($request['password']);
                $user->encriptado = Crypt::encryptString($request->password);
                $user->domicilio = $userLog->domicilio;
                $user->celular = $userLog->celular;
                $user->telefono = $userLog->telefono;
                $user->avatar = $avatar;

        }



        // dd($user);
        $user->save();

        return redirect('/profile');
    }

    public function updateContactoUsuario(Request $request){
        $user = User::find($request->id);
        $userLog = Auth::user();
        $contrasenia = Crypt::decryptString(Auth::user()->encriptado);

        if ($userLog->avatar == false) {
            $user->name = $userLog->name;
            $user->surname = $userLog->surname;
            $user->email = $userLog->email;
            $user->password = Hash::make($userLog['password']);
            $user->encriptado = Crypt::encryptString($contrasenia);
            $user->domicilio = $request->domicilio;
            $user->celular = $request->celular;
            $user->telefono = $request->telefono;
            $user->avatar = NULL;
        } else {
            $user->name = $userLog->name;
            $user->surname = $userLog->surname;
            $user->email = $userLog->email;
            $user->password = Hash::make($userLog['password']);
            $user->encriptado = Crypt::encryptString($contrasenia);
            $user->domicilio = $request->domicilio;
            $user->celular = $request->celular;
            $user->telefono = $request->telefono;
            $user->avatar = $userLog->avatar;
        }

        //dd($user);
        $user->save();

        return redirect('/profile');
    }
}
