<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        ]); //return an array


        // Validating data
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users|max:50',
            'surname' => 'required',
            'description' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) { 
            return response()->json($validator->errors(),400);
        }
        return response()->json($body);

        // $validateData = $request->validate([
        //     'name'=>['required']
        // ]);

        
        // if($validateData){
        //     return response()->json($validateData);
        // }
        // else{

        // }
        

        // $json = json_decode($body);

        // var_dump($json);
        // die();
        // return "${body}";

        // Validate data

        // Valedate if user exists
        // crypt password
        // Create user

        // $data = [
        //     'status' =>'error',
        //     'code'=>404,
        //     'message'=>'El usuario no se ha creado',
        //     'data'=>$body
        // ];


        // return response()->json($data,$data['code']);
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
