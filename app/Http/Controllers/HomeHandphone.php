<?php

namespace App\Http\Controllers;

use App\Models\Oppo;
use App\Models\Samsung;
use Illuminate\Http\Request;

class HomeHandphone extends Controller

{
    function index (){
    $data = [
        'samsung' => Samsung::get(),
        'content'=> 'home/samsung/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detail ($id)
    {
    $data = [
        'samsung' => Samsung::find($id),
        'content'=> 'home/samsung/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }

        function oppo (){
    $data = [
        'oppo' => Oppo::get(),
        'content'=> 'home/oppo/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailoppo ($id)
    {
    $data = [
        'oppo' => Oppo::find($id),
        'content'=> 'home/oppo/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }
}
