<?php

namespace App\Http\Controllers;

use App\Models\Lainaksesoris;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminLainaksesoris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Lainaksesoris',
            'lainaksesoris' => Lainaksesoris::get(),
            'content' => 'admin/lainaksesoris/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'title' => 'Tambah Lainaksesoris',
            'content' => 'admin/lainaksesoris/add'
        ];
        
        return view ('admin.layouts.wrapper', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            'gambar' => 'required',
            'harga' => 'required ',

        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/lainaksesoris/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

                    Alert::success('sukses', 'data berhasil DITAMBAH');
                    Lainaksesoris::create ($data);
                    return redirect ('/admin/lainaksesoris');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =[
            'title' => 'Edit Lainaksesoris',
            'lainaksesoris' => Lainaksesoris::find ($id),
            'content' => 'admin/lainaksesoris/add'
        ];
        return view ('admin.layouts.wrapper', $data ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $lainaksesoris = Lainaksesoris::find($id);
         $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            'harga' => 'required ',


        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            if($lainaksesoris->gambar  != null){
                unlink($lainaksesoris->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/lainaksesoris/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $lainaksesoris ->gambar;
        }

                    Alert::success('sukses', 'data berhasil diupdate');
                    $lainaksesoris->update($data);
                    return redirect ('/admin/lainaksesoris');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lainaksesoris = Lainaksesoris::find ($id);

            if($lainaksesoris->gambar != null){
            unlink($lainaksesoris->gambar);
                }

        Alert::success('sukses', 'data berhasil dihapus');
        $lainaksesoris->delete();
        return redirect ('/admin/lainaksesoris');
        
    }
}
