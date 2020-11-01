<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function testing( Request $request ){
        return "Pruebas del UserController";
    }

    public function register(Request $request)
    {
        return 'accion de registro';
    }

    public function login(Request $request)
    {
        return 'accion de login';
    }
}
