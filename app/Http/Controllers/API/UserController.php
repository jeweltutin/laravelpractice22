<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function userLogin(Request $request)
    {
        //dd($request->all());

        $input = $request->all();
        $validation = Validator::make($input,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validation->fails()){
            return response()->json([
                'error' => $validation->errors()],422);
            }
    }
}
