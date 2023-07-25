<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function index()
    {
        return view ('halaman_auth/login');
    }
    function login(Request $Request){
        //
    }
    function create(){
        //
    }
    function register(Request $Request){
        //
    }
}
