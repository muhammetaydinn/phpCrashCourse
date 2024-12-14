<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet($name='Stranger',$name2='another man')
    {
        // return 'ntmy '.$name.' and '.$name2;
        return view('greeting',[
            'name' => $name,
            'name2' => $name2
        ]);
    }
}
