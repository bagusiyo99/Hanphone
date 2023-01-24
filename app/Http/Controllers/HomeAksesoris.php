<?php

namespace App\Http\Controllers;

use App\Models\Casing;
use App\Models\Charger;
use App\Models\Lainaksesoris;
use App\Models\Pb;
use App\Models\Usb;
use Illuminate\Http\Request;

class HomeAksesoris extends Controller

{
    // charger
    function index (){
    $data = [
        'charger' => Charger::get(),
        'content'=> 'home/charger/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detail ($id)
    {
    $data = [
        'charger' => Charger::find($id),
        'content'=> 'home/charger/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }

    // casing
        function casing (){
    $data = [
        'casing' => Casing::get(),
        'content'=> 'home/casing/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailcasing ($id)
    {
    $data = [
        'casing' => Casing::find($id),
        'content'=> 'home/casing/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }

    // pb
      function pb (){
    $data = [
        'pb' => Pb::get(),
        'content'=> 'home/pb/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailpb ($id)
    {
    $data = [
        'pb' => Pb::find($id),
        'content'=> 'home/pb/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }

    // usb
      function usb (){
    $data = [
        'usb' => Usb::get(),
        'content'=> 'home/usb/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detailusb ($id)
    {
    $data = [
        'usb' => Usb::find($id),
        'content'=> 'home/usb/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }

// lainaksesoris
      function lainaksesoris (){
    $data = [
        'lainaksesoris' => Lainaksesoris::get(),
        'content'=> 'home/lainaksesoris/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        public function detaillainaksesoris ($id)
    {
    $data = [
        'lainaksesoris' => Lainaksesoris::find($id),
        'content'=> 'home/lainaksesoris/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }


}
