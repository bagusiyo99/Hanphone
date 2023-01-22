<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class Home extends Controller
{
    function index (){
    $data = [
        // 'about' => About::get(),
                'about' => About::limit(1)->get(),


        'content'=> 'home/home/index'
    ];
    return view('home.layouts.wrapper',$data);
    }
}