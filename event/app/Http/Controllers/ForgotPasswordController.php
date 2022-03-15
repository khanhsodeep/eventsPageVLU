<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function forgot(){
        $credentials =   request()->validate(['email' => 'required email']);
        Password::sendResetLink($credentials);
        return $this->responWithMessage("Link đặt lại mật khẩu đã được gửi tới email của bạn!");

    }
}
