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
        // Catch user data from POST method

        $body = $request->only([
            'name',
            'surname',
            'description',
            'email',
            'password',
        ]);

        // return "${body}";

        // Validate data
        // Valedate if user exists
        // crypt password
        // Create user

        $data = [
            'status' =>'error',
            'code'=>404,
            'message'=>'El usuario no se ha creado',
            'data'=>$body
        ];


        return response()->json($data,$data['code']);
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
