<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Promo;
use Illuminate\Http\Request;

class Home extends Controller
{
    function index (){
    $data = [
        // 'about' => About::get(),
        'about' => About::limit(1)->get(),
        'promo' => Promo::paginate(4),


        'content'=> 'home/home/index'
    ];
    return view('home.layouts.wrapper',$data);
    }
}