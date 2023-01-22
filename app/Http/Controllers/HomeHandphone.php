<?php

namespace App\Http\Controllers;

use App\Models\Asus;
use App\Models\Infinix;
use App\Models\Iphone;
use App\Models\Oppo;
use App\Models\Samsung;
use App\Models\Vivo;
use App\Models\Xiomi;
use Illuminate\Http\Request;

class HomeHandphone extends Controller

{
    // samsung
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

    // oppo
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

    // iphone
      function iphone (){
    $data = [
        'iphone' => Iphone::get(),
        'content'=> 'home/iphone/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailiphone ($id)
    {
    $data = [
        'iphone' => Iphone::find($id),
        'content'=> 'home/iphone/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }

    // asus
      function asus (){
    $data = [
        'asus' => Asus::get(),
        'content'=> 'home/asus/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailasus ($id)
    {
    $data = [
        'asus' => Asus::find($id),
        'content'=> 'home/asus/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }

// xiomi
      function xiomi (){
    $data = [
        'xiomi' => Xiomi::get(),
        'content'=> 'home/xiomi/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailxiomi ($id)
    {
    $data = [
        'xiomi' => Xiomi::find($id),
        'content'=> 'home/xiomi/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }


    // infinix
      function infinix (){
    $data = [
        'infinix' => Infinix::get(),
        'content'=> 'home/infinix/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailinfinix($id)
    {
    $data = [
        'infinix' => Infinix::find($id),
        'content'=> 'home/infinix/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }


    // vivo
          function vivo (){
    $data = [
        'vivo' => Vivo::get(),
        'content'=> 'home/vivo/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailvivo ($id)
    {
    $data = [
        'vivo' => Vivo::find($id),
        'content'=> 'home/vivo/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }

}
