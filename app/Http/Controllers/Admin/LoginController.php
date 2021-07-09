<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    //
    public function login(AdminLoginRequest $request)
    {
        $data = $request->validated();

        if(!$token = Auth('api_admin')->attempt($data))
            return response()->json(['wrong email/password']);

        return response()->json(['token' => $token]);
    }

}
