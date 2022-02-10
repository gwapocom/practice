<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    public function bil($name)
    {
        
        return view('bilat',["name"=>$name]);
    }

    function viewLoad()
    {
        $data=['anil','peter','Al','moralde',];
        return view('users',['users'=>$data]);
    }
}
