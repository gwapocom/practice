<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    public function bil($name)
    {
        
        return view('bilat',["name"=>$name]);
    }
}
