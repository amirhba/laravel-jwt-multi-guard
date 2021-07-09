<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserAuthService
{
    public static function attempt($data)
    {
        // simulating of laravel auth:attempt but with diffrent credentials (mobile instead of email)
        if(!$user = User::where('mobile',$data['mobile'])->first())
            return false;

        if(!password_verify($data['password'],$user->password))
            return false;

        return auth('api')->login($user);
    }
}


?>
