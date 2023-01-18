<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $datosuser = request()->except('_token');
        //  return response()->json($datoscliente)

        User::insert($datosuser);
        return response("El Usuario se ha creado correctamente");
    }
}
