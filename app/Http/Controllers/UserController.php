<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

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

    public function testORM(Request $request)
    {
        $post = Post::all();
        var_dump($post);
        die();
        // return 'accion de login';
    }


}
