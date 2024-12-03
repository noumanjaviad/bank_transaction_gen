<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSigninView() {
        return view('Admin.Auth.signin');
    }
    public function getSignupView() {
        return view('Admin.Auth.signup');
    }
}
