<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Services\UserAuthService;

class LoginController extends Controller
{
    //
    public function login(UserLoginRequest $request)
    {
        $data = $request->validated();

        if(!$token = UserAuthService::attempt($data))
            return response()->json(['error' => 'incorrect phone/password']);

        return response()->json(['token' => $token]);
    }
}
