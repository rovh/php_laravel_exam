<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

    public function login(Request $request)
    {

    $data = $request->validate([
        "email" => ["required", "email", "string"],
        "password" => ["required"],
    ]);


    if(auth("web")->attempt($data)) {
        return "Was logged";
    }else{
        return "Not found";
    }

    
    }


    public function register(Request $request)
    {

    $data = $request->validate([
        "name" => ["required", "string"],
        "email" => ["required", "email", "string", "unique:users,email"],
        "password" => ["required","confirmed"],
    ]);

    $user = User::create([
        "name" => $data["name"],
        "email" => $data["email"],
        "password" => bcrypt($data["password"])
    ]);

    if($user) {
        auth("web")->login($user);
    }

    return $user;
    
    }
}
