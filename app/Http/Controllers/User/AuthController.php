<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use JWTAuth;
use Validator;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthController extends Controller
{
    //
    protected $user;
    public function __construct(){
        $this->user = new User;
    }

    public function register(){

    }
}
