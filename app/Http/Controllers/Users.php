<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
    {
        // echo $user;
        // echo " hello from charmaine pussy";
        return view('users');
    }
}
